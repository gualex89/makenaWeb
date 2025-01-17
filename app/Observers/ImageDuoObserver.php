<?php

namespace App\Observers;

use App\Models\Duo;

class ImageDuoObserver
{
    public function created(Duo $image)
    {
        $image->file_name = $image->filter . "-" . $image->id;
        $image->save();
    }
}