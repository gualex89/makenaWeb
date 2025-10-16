<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google_Client;
use Illuminate\Support\Facades\File;

class GoogleAuthController extends Controller
{
    private function getClient()
    {
        $client = new Google_Client();
        $client->setClientId(env('GOOGLE_CLIENT_ID'));
        $client->setClientSecret(env('GOOGLE_CLIENT_SECRET'));
        $client->setRedirectUri(env('GOOGLE_REDIRECT_URI'));
        $client->addScope('https://www.googleapis.com/auth/drive.file');
        $client->setAccessType('offline');
        $client->setPrompt('consent');
        return $client;
    }

    public function redirectToGoogle()
    {
        $client = $this->getClient();
        return redirect()->away($client->createAuthUrl());
    }

    public function handleGoogleCallback(Request $request)
    {
        $client = $this->getClient();

        if ($request->has('code')) {
            $token = $client->fetchAccessTokenWithAuthCode($request->input('code'));

            if (!isset($token['error'])) {
                // Guardar el token en un archivo
                File::put(storage_path('app/google/token.json'), json_encode($token, JSON_PRETTY_PRINT));
                return response()->json(['success' => true, 'message' => 'Token guardado correctamente ✅']);
            } else {
                return response()->json(['success' => false, 'error' => $token]);
            }
        }

        return response()->json(['success' => false, 'error' => 'No se recibió ningún código']);
    }
}
