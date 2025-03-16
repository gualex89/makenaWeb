<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\PostalCode;
use Illuminate\Support\Facades\Http;
use App\Models\Token;
use App\Services\EnvioService;

class EnviosController extends Controller
{
    public $objPostalCode;
    protected $envioService;
    protected $obtenerToken;
    
    
    
    public function __construct(EnvioService $envioService, EnvioService $obtenerToken) {
        $this->objPostalCode = new PostalCode();
        $this->envioService = $envioService;
        $this->obtenerToken = $obtenerToken;
    }
    public function consultaEnvio($codigoPostal)
    {
        $this->envioService->crearEnvio(327);//eliminar es solo para pruebas
        
        $tarifasMotoMakena = $this->objPostalCode->getEnviosByCP($codigoPostal);
        $token = $this->envioService->obtenerToken();
        
        $provinceCode = $this->objPostalCode->getProvinceCode($codigoPostal);
        
        $resultados = [];
        foreach ($provinceCode as $provincia) {
            $provinciaCodigo = $provincia->provinceCode;
            $agencias = $this->obtenerAgenciasFiltradas($token, $codigoPostal, $provinciaCodigo);
            if ($agencias->isNotEmpty()) {
                $resultados[] = $agencias;
            }
        }
        
        $tarifasCA = $this->obtenerTarifas($token, $codigoPostal);
        $tarifasCAArray = $tarifasCA->original;
        $tarifas = collect($tarifasCAArray['data']['rates'])
        ->where('productType', 'CP');
        
        $destination = [
            "id" => $tarifasMotoMakena[0]->id,
            "city" => $tarifasMotoMakena[0]->localidad ?? "Desconocido",
            "state" => $tarifasMotoMakena[0]->provincia ?? "Desconocido",
            "country" => "Argentina",
            "zipcode" => $codigoPostal,
            "geolocation" => ["lat" => null, "lng" => null]
        ];
        
        $all_results = [];
        
        /* dd($tarifasMotoMakena); */
        if ($tarifasMotoMakena->isNotEmpty() && $tarifasMotoMakena[0]->cordonId != 4) {
            /* dd('entro'); */
            $all_results[] = [
                "selectable" => true,
                "logistic_type" => "self_service",
                "carrier" => [
                    "id" => 7,
                    "name" => "Motomensajería Makena",
                    "rating" => 1,
                    "logo" => null
                ],
                "service_type" => [
                    "id" => 1,
                    "code" => "standard_delivery",
                    "name" => "Entrega a domicilio",
                    "is_urgent" => 0
                ],
                "amounts" => [
                    "price_shipment" => $tarifasMotoMakena[0]->precio,
                    "price" => $tarifasMotoMakena[0]->precio,
                    "price_incl_tax" => $tarifasMotoMakena[0]->precio,
                    "seller_price" => $tarifasMotoMakena[0]->precio,
                    "seller_price_incl_tax" => $tarifasMotoMakena[0]->precio 
                    ]
                ];
            }
            
        foreach ($tarifas as $tarifa) {
            $pickupPoints = [];
            
            if ($tarifa['deliveredType'] == 'S' && !empty($resultados)) {
                foreach ($resultados as $agencias) {
                    foreach ($agencias as $agencia) {
                        
                        $pickupPoints[] = [
                            "point_id" => $agencia['code'],
                            "description" => $agencia['name'],
                            "open_hours" => null,
                            "phone" => null,
                            "location" => [
                                "street" => $agencia['location']['address']['streetName'],
                                "street_number" => $agencia['location']['address']['streetNumber'],
                                "street_extras" =>  null,
                                "city" => $agencia['location']['address']['city'],
                                "state" => $agencia['location']['address']['province'],
                                "zipcode" => $codigoPostal,
                                "geolocation" => [
                                    "lat" => $agencia['location']['latitude'] ?? null,
                                    "lng" => $agencia['location']['longitude'] ?? null,
                                    "distance" => null
                                    ]
                                    ]
                                ];
                                /* dd($pickupPoints); */
                            }
                }
            }
            
            $all_results[] = [
                "selectable" => true,
                "logistic_type" => "carrier_dropoff",
                "carrier" => [
                    "id" => 233,
                    "name" => "Correo Argentino",
                    "rating" => 1,
                    "logo" => "https://zippincore.s3.amazonaws.com/carriers/correo-argentino/a7owGcEu8d6iMRfzb74qhk66dZZM7kCJkK4dG04C.png"
                ],
                "service_type" => [
                    "id" => ($tarifa['deliveredType'] == 'S') ? 9 : 1,
                    "code" => ($tarifa['deliveredType'] == 'S') ? "pickup_point" : "standard_delivery",
                    "name" => ($tarifa['deliveredType'] == 'S') ? "Retiro en Sucursal" : "Entrega a domicilio",
                    "is_urgent" => 0
                ],
                "amounts" => [
                    "price_shipment" => $tarifa['price'],
                    "price" => $tarifa['price'],
                    "price_incl_tax" => $tarifa['price'] ,
                    "seller_price" => $tarifa['price'],
                    "seller_price_incl_tax" => $tarifa['price'] 
                ],
                "pickup_points" => $pickupPoints
            ];
        }

        return response()->json([
            "sorted_by" => "price",
            "destination" => $destination,
            "all_results" => $all_results
        ]);
    }




    

    

    public function obtenerTarifas($token, $codigoPostal)
    {
        
        

        // URL del endpoint
        $url = 'https://api.correoargentino.com.ar/micorreo/v1/rates';

        // Datos de la solicitud
        $data = [
            "customerId" => "0001067208",
            "postalCodeOrigin" => "1824",
            "postalCodeDestination" => $codigoPostal,
            "dimensions" => [
                "weight" => 150,
                "height" => 5,
                "width" => 10,
                "length" => 20
            ]
        ];

        // Realizar la petición con el token en la cabecera
        $response = Http::withToken($token)
            ->withHeaders([
                'Content-Type' => 'application/json',
                
            ])
            ->post($url, $data);

        // Manejar la respuesta
        if ($response->successful()) {
            return response()->json([
                'message' => 'Tarifas obtenidas correctamente',
                'data' => $response->json()
            ]);
        }

        return response()->json([
            'message' => 'Error al obtener tarifas',
            'error' => $response->body()
        ], $response->status());
    }
    function obtenerAgenciasFiltradas($token, $postalCode, $provinceCode) {

        
        $url = "https://api.correoargentino.com.ar/micorreo/v1/agencies";
       
    
        $response = Http::withToken($token)->get($url, [
            'customerId' => '0001067208',
            'provinceCode' => $provinceCode
        ]);
    
        if ($response->failed()) {
            return ['error' => true, 'status' => $response->status(), 'message' => $response->body()];
        }
    
        $agencias = collect($response->json());
    
        $codigoConcatenado = $provinceCode . $postalCode;
        // Filtrar agencias cuyo postalCode comienza con "B1704"
        $filtradas = $agencias->filter(function ($agencia) use ($codigoConcatenado) {
            return isset($agencia['location']['address']['postalCode']) && 
                   str_starts_with($agencia['location']['address']['postalCode'], $codigoConcatenado);
        });
    
        return $filtradas->values(); // Reindexar los resultados
    }
    

}