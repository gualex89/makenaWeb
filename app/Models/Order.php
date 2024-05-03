<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    protected $primaryKey = 'id_order';

    protected $fillable = [
        'preference_id',
        'status',
    ];
}
