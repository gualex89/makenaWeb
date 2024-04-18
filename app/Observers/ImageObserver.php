<?php

namespace App\Observers;

// app/Observers/ImageObserver.php

namespace App\Observers;

use App\Models\Catalogue;

class ImageObserver
{
    public function created(Catalogue $image)
    {
        // Personaliza la lógica aquí para generar un nombre específico basado en el ID
        
        $image->file_name = $image->filter. "-" . $image->id;
        $image->save();
    }
}
