<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostalCode;
use Illuminate\Support\Facades\Http;

class EnviosController extends Controller
{
    public $envioByCP;

    public function __construct() {
        $this->envioByCP = new PostalCode();
       
    }
    public function consultaEnvio($codigoPostal)

{
    // Obtener tarifas de Moto Makena
    $tarifasMotoMakena = $this->envioByCP->getEnviosByCP($codigoPostal);
    
    
    // Obtener token para la API de Correo Argentino
    $token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJNYWtlbmEiLCJhdWQiOiJDb3JyZW8gQXJnZW50aW5vIiwibWVtYmVyIG9mIjoiQXBpTWlDb3JyZW9Qcm9kIiwiaXNzIjoiQ09SQVNBIiwiZXhwIjoxNzQxODIyOTE1LCJpYXQiOjE3NDE4MTM5MTUsImp0aSI6IjAwMSJ9.1Fd0HCsWMYzFFYFwM1CkL395jVAbqYb1WIoQPQDw7r4';
    
    // Obetener agencias de Correo Argentino



    $agencias = $this->obtenerAgenciasFiltradas($token);
    
    // Obtener tarifas de Correo Argentino
    $tarifasCA = $this->obtenerTarifas($token, $codigoPostal);
    $tarifasCAArray = $tarifasCA->original; // 🔥 SOLUCIÓN APLICADA

    
    
    // Extraer solo las tarifas de tipo "EP" (Expreso)
    $tarifas = collect($tarifasCAArray['data']['rates'])
    ->where('productType', 'EP');
    
    /* dd($tarifasMotoMakena[0]->localidad); */
    // Datos base de destino
    $destination = [
        "id" => rand(1000, 9999),
        "city" => $tarifasMotoMakena[0]->localidad ?? "Desconocido",
        "state" => $tarifasMotoMakena[0]->provincia ?? "Desconocido",
        "country" => "Argentina",
        "zipcode" => $codigoPostal,
        "geolocation" => [
            "lat" => null,
            "lng" => null
        ]
    ];
    /* dd($destination); */

    // Construcción de opciones de envío
    $all_results = [];

    // Opción de Mensajería Propia (si aplica)
    if (!empty($tarifasMotoMakena)) {
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
                "price_incl_tax" => $tarifasMotoMakena[0]->precio * 1.21,
                "seller_price" => $tarifasMotoMakena[0]->precio,
                "seller_price_incl_tax" => $tarifasMotoMakena[0]->precio * 1.21
            ]
        ];
    }

    // Opciones de Correo Argentino (Domicilio y Sucursal)
    foreach ($tarifas as $tarifa) {
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
                "price_incl_tax" => $tarifa['price'] * 1.21,
                "seller_price" => $tarifa['price'],
                "seller_price_incl_tax" => $tarifa['price'] * 1.21
            ]
        ];
    }

    return response()->json([
        "sorted_by" => "price",
        "destination" => $destination,
        "all_results" => $all_results
    ]);
}




    public function obtenerToken()
    {
        // Configurar credenciales
        $username = 'Makena';
        $password = 'Paleta12+';

        // Hacer la solicitud a la API
        $response = Http::withBasicAuth($username, $password)
                        ->post('https://api.correoargentino.com.ar/micorreo/v1/token');

        // Manejar la respuesta
        if ($response->successful()) {
            return $response['token'];
        }

        return response()->json([
            'message' => 'Error al obtener el token',
            'error' => $response->body()
        ], $response->status());
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
                "weight" => 2500,
                "height" => 10,
                "width" => 20,
                "length" => 30
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
    function obtenerAgenciasFiltradas($token) {
        $url = "https://api.correoargentino.com.ar/micorreo/v1/agencies";
       
    
        $response = Http::withToken($token)->get($url, [
            'customerId' => '0001067208',
            'provinceCode' => 'B'
        ]);
    
        if ($response->failed()) {
            return ['error' => true, 'status' => $response->status(), 'message' => $response->body()];
        }
    
        $agencias = collect($response->json());
    
        // Filtrar agencias cuyo postalCode comienza con "B1704"
        $filtradas = $agencias->filter(function ($agencia) {
            return isset($agencia['location']['address']['postalCode']) && 
                   str_starts_with($agencia['location']['address']['postalCode'], 'B1704');
        });
    
        return $filtradas->values(); // Reindexar los resultados
    }

}