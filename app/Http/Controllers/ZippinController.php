<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Order;

class ZippinController extends Controller
{
    public function testZippinRequest($codigoPostal)
    {
        $url = "https://api.zippin.com.ar/v2/shipments/quote";
        $apiToken = "23587f92-3f54-44cf-a1d8-aea20b104914";
        $apiSecret = "a9512c75-d41e-4c3e-92ed-067ff0269bb2";

        $headers = [
            'Accept' => 'application/json',
            'Authorization' => 'Basic ' . base64_encode($apiToken . ':' . $apiSecret),
            'Content-Type' => 'application/json',
        ];

       

        $payload = [
            "account_id" => "11950",
            "origin_id" => "344929",
            "declared_value" => 9000,
            "items" => [
                [
                    "sku" => "103964928",
                    "weight" => 99,
                    "height" => 10,
                    "width" => 5,
                    "length" => 10,
                    "description" => "Fundas de celulares",
                    "classification_id" => 1
                ],
            ],
            "destination" => [
                "city" => "cualquiera",
                "state" => "cualquiera",
                "zipcode" => $codigoPostal,
            ]
        ];


        $client = new Client();

        try {
            $response = $client->post($url, [
                'headers' => $headers,
                'json' => $payload,
            ]);

            $data = json_decode($response->getBody(), true);
            // Procesar la respuesta exitosa
            return response()->json($data);
        } catch (\Exception $e) {
            // Manejar el error
            return response()->json([
                'error' => [
                    'code' => $e->getCode(),
                    'message' => $e->getMessage(),
                ]
            ], 500); // Código de estado 500 para errores internos del servidor
        }
    }
    public function crearEnvio($preferenceId){

        
        $order = Order::where('preference_id', $preferenceId)->first();
        
        $tipoEntrega = $order->tipo_entrega;
        if ($tipoEntrega == "envio") {


            $city = $order->localidad;
            $state = $order->provincia;
            $zipcode = $order->codigo_postal;
            $name = $order->nombre . ' ' . $order->apellido;
            $street = $order->calle;
            $street_number = $order->altura;
            $document = $order->documento;
            $email = $order->email;
            $phone = $order->telefono;
            $external_id = $order->id_order;
            $logistic_type = $order->logistic_type;
            $service_type = $order->service_type_code;
            $carrier_id = $order->carrier_id;
            $point_id = $order->point_id;
            


            $url = "https://api.zippin.com.ar/v2/shipments";
            $apiToken = "23587f92-3f54-44cf-a1d8-aea20b104914";
            $apiSecret = "a9512c75-d41e-4c3e-92ed-067ff0269bb2";


            $headers = [
                'Accept' => 'application/json',
                'Authorization' => 'Basic ' . base64_encode($apiToken . ':' . $apiSecret),
                'Content-Type' => 'application/json',
            ];

            if ($service_type == "pickup_point") {
                $payload = [
                    "account_id" => "11950",
                    "origin_id" => "344929",
                    "declared_value" => 9000,
                    "logistic_type" => $logistic_type,
                    "carrier_id" => $carrier_id,
                    "service_type" => $service_type,
                    "external_id" => $external_id,
                    "destination" => [
                        "name" => $name,
                        "document" => $document,
                        "email" => $email,
                        "phone" => $phone,
                        "zipcode" => $zipcode,
                        "point_id" => "$point_id"
                    ],
                    "items" => [
                        [
                            "weight" => 150,
                            "height" => 5,
                            "width" => 10,
                            "length" => 20,
                            "description" => "Fundas de celulares",
                            "classification_id" => 1
                        ],
                    ],
                ];
            }else {
                $payload = [
                    "account_id" => "11950",
                    "origin_id" => "344929",
                    "declared_value" => 9000,
                    "logistic_type" => $logistic_type,
                    "carrier_id" => $carrier_id,
                    "service_type" => $service_type,
                    "external_id" => $external_id,
                    "destination" => [
                        "name" => $name,
                        "street" => $street,
                        "street_number" => $street_number,
                        "document" => $document,
                        "email" => $email,
                        "phone" => $phone,
                        "state" => $state,
                        "city" => $city,
                        "zipcode" => $zipcode,
                        
                    ],
                    "items" => [
                        [
                            "weight" => 150,
                            "height" => 5,
                            "width" => 10,
                            "length" => 20,
                            "description" => "Fundas de celulares",
                            "classification_id" => 1
                        ],
                    ],
                ];
            }
            
            $client = new Client();

            try {
                $response = $client->post($url, [
                    'headers' => $headers,
                    'json' => $payload,
                ]);

                $data = json_decode($response->getBody(), true);
                // Procesar la respuesta exitosa
                return response()->json($data);
            } catch (\Exception $e) {
                // Manejar el error
                return response()->json([
                    'error' => [
                        'code' => $e->getCode(),
                        'message' => $e->getMessage(),
                    ]
                ], 500); // Código de estado 500 para errores internos del servidor
            }
        }

        

    }
}
