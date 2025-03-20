<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Models\Order;
use App\Http\Controllers\EnviosController;
use App\Models\Token;

class EnvioService
{
  
    public function crearEnvio($apiExternalReference) // es el mismo id_Orden
    {
        $orden = Order::find($apiExternalReference); //cambiar por el $id_orden
        /* dd($orden->id_order); */
        $token = $this->obtenerToken();
        


        // URL del endpoint
        $url = 'https://api.correoargentino.com.ar/micorreo/v1/shipping/import';

        // Datos de la solicitud

        if ($orden->service_type_code == "standard_delivery") {
            
            $data = [
                "customerId" => "0001067208",
                "extOrderId" => $orden->id_order,
                "orderNumber" => $orden->id_order,
                "sender" => [
                    "name" => 'Makena Fundas',
                    "phone" => null,
                    "cellPhone" => '1151490655',
                    "email" => 'makenafundas@gmail.com',
                    "originAddress" => [
                        "streetName" => 'Manuel Castro',
                        "streetNumber" => '5563',
                        "floor" => null,
                        "apartment" => null,
                        "city" => 'Lanus',
                        "provinceCode" => 'B',
                        "postalCode" => '1824'
                    ]
                ],
                "recipient" => [
                    "name" => $orden->nombre . ' ' . $orden->apellido,
                    "phone" => "",
                    "cellPhone" => $orden->telefono,
                    "email" => $orden->email,
                ],
                "shipping" => [
                    "deliveryType" => "D",
                    "agency" => null,
                    "address" => [
                        "streetName" => $orden->calle,
                        "streetNumber" => $orden->altura,
                        "floor" => $orden->observacion_entrega,
                        "apartment" => "",
                        "city" => $orden->provincia,
                        "provinceCode" => $orden->provinceCode,
                        "postalCode" => $orden->codigo_postal
                    ],
                    "weight" => 150,
                    "declaredValue" => 13500.00,
                    "height" => 5,  
                    "length" => 20,
                    "width" => 10
                ]
            ];
        } else if ($orden->service_type_code == "pickup_point")
        {
            $data = [
                "customerId" => "0001067208",
                "extOrderId" => $orden->id_order,
                "orderNumber" => $orden->id_order,
                "sender" => [
                    "name" => 'Makena Fundas',
                    "phone" => null,
                    "cellPhone" => '1151490655',
                    "email" => 'makenafundas@gmail.com',
                    "originAddress" => [
                        "streetName" => 'Manuel Castro',
                        "streetNumber" => '5563',
                        "floor" => null,
                        "apartment" => null,
                        "city" => 'Lanus',
                        "provinceCode" => 'B',
                        "postalCode" => '1824'
                    ]
                ],
                "recipient" => [
                    "name" => $orden->nombre . ' ' . $orden->apellido,
                    "phone" => "",
                    "cellPhone" => $orden->telefono,
                    "email" => $orden->email,
                ],
                "shipping" => [
                    "deliveryType" => "S",
                    "agency" => $orden->point_id,
                    "address" => [
                        "streetName" => '',
                        "streetNumber" => '',
                        "floor" => '',
                        "apartment" => "",
                        "city" => $orden->provincia,
                        "provinceCode" => $orden->provinceCode,
                        "postalCode" => $orden->codigo_postal
                    ],
                    "weight" => 150,
                    "declaredValue" => 13500.00,
                    "height" => 5,  
                    "length" => 20,
                    "width" => 10
                ]
            ];
        }

        // Realizar la petición con el token en la cabecera
        $response = Http::withToken($token)
            ->withHeaders([
                'Content-Type' => 'application/json',
                
            ])
            ->post($url, $data);

        // Manejar la respuesta
        if ($response->successful()) {
            return response()->json([
                'message' => 'Envio creado correctamente',
                'data' => $response->json()
            ]);
        }

        return response()->json([
            'message' => 'Error al obtener tarifas',
            'error' => $response->body()
        ], $response->status());
    }
    public function obtenerToken()
    {
        $tokenFromBD = Token::where('id', 1)->first();
        if ($tokenFromBD && $tokenFromBD->expire > now()) {
            return $tokenFromBD->token;
        } else {
            // Configurar credenciales
            $username = 'Makena';
            $password = 'Paleta12+';

            // Hacer la solicitud a la API
            $response = Http::withBasicAuth($username, $password)
                            ->post('https://api.correoargentino.com.ar/micorreo/v1/token');


            // Manejar la respuesta
            if ($response->successful()) {
                // Actualizar el token en la base de datos en el id 1
                Token::where('id', 1)->update([
                    'token' => $response['token'],
                    'expire' => $response['expire']
                ]);
                
                return $response['token'];
            }

            return response()->json([
                'message' => 'Error al obtener el token',
                'error' => $response->body()
            ], $response->status());
        }

    }
}
