<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class CatalogueRemera extends Model
{
    protected $fillable = [
        'file_name',
        'filter',
        'diseno',
        'slug',
        'price_id',
    ];
}
