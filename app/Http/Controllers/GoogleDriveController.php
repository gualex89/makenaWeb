<?php

namespace App\Http\Controllers;

use Google_Client;
use Google_Service_Drive;
use Google_Service_Drive_DriveFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GoogleDriveController extends Controller
{
    private function getClient()
    {
        $client = new Google_Client();
        $client->setClientId(env('GOOGLE_CLIENT_ID'));
        $client->setClientSecret(env('GOOGLE_CLIENT_SECRET'));
        $client->setRedirectUri(env('GOOGLE_REDIRECT_URI'));
        $client->addScope('https://www.googleapis.com/auth/drive.file');
        $client->setAccessType('offline');

        $tokenPath = storage_path('app/google/token.json');

        if (File::exists($tokenPath)) {
            $accessToken = json_decode(File::get($tokenPath), true);
            $client->setAccessToken($accessToken);

            // Si expiró, refrescarlo automáticamente
            if ($client->isAccessTokenExpired()) {
                if ($client->getRefreshToken()) {
                    $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
                    File::put($tokenPath, json_encode($client->getAccessToken(), JSON_PRETTY_PRINT));
                }
            }
        }

        return $client;
    }

    public function uploadToDrive(Request $request)
{
    if (!$request->hasFile('file')) {
        return response()->json(['success' => false, 'message' => 'No se envió ningún archivo']);
    }

    $file = $request->file('file');

    // === 1️⃣ SUBIR A GOOGLE DRIVE ===
    $client = $this->getClient();
    $service = new \Google_Service_Drive($client);

    $folderId = '1rbKobcJioEuzW-uVooKTL7q2vClviiUK';

    $fileMetadata = new \Google_Service_Drive_DriveFile([
        'name' => $file->getClientOriginalName(),
        'parents' => [$folderId]
    ]);

    $content = file_get_contents($file->getRealPath());

    $uploadedFile = $service->files->create($fileMetadata, [
        'data' => $content,
        'mimeType' => $file->getMimeType(),
        'uploadType' => 'multipart',
        'fields' => 'id, name'
    ]);

    // Hacerlo público
    $permission = new \Google_Service_Drive_Permission([
        'type' => 'anyone',
        'role' => 'reader',
    ]);
    $service->permissions->create($uploadedFile->id, $permission);

    $driveUrl = "https://drive.google.com/uc?export=download&id={$uploadedFile->id}";

    // === 2️⃣ CREAR MINIATURA LOCAL ===
    $thumbName = 'thumb_' . time() . '.jpg';
    $thumbPath = storage_path('app/public/thumbnails/' . $thumbName);

    // Nos aseguramos que exista la carpeta
    if (!file_exists(storage_path('app/public/thumbnails'))) {
        mkdir(storage_path('app/public/thumbnails'), 0775, true);
    }

    // Redimensionar la imagen
    $image = \Image::make($file->getRealPath());
    $image->resize(400, null, function ($constraint) {
        $constraint->aspectRatio();
        $constraint->upsize();
    });
    $image->save($thumbPath, 80); // calidad 80%

    $localUrl = asset('storage/thumbnails/' . $thumbName);

    // === 3️⃣ RESPUESTA JSON ===
    return response()->json([
        'success' => true,
        'file' => [
            'id' => $uploadedFile->id,
            'name' => $uploadedFile->name,
            'url_drive' => $driveUrl,
            'thumbnail' => $localUrl
        ]
    ]);
}

}
