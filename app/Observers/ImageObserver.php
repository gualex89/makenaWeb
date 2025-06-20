<?php

namespace App\Observers;

use App\Models\Catalogue;

class ImageObserver
{
    public function created(Catalogue $image)
    {
        // Crear nombre de archivo
        $image->file_name = $image->filter . "-" . $image->id;

        // Crear slug en formato cfunda-de-{diseno}-{id}, reemplazando espacios por guiones y en minúscula
        $slug = 'funda-' . $image->diseno . '-' . $image->id;
        $image->slug = strtolower(str_replace(' ', '-', $slug));

        // Guardar sin disparar de nuevo el observer
        $image->saveQuietly();
    }
}