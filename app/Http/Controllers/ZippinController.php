<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

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

        $numeroPostal= "1702";

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
}
