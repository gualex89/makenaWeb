<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PostalCode extends Model
{
    use HasFactory;

    protected $table = 'postal_codes'; // Nombre de la tabla

    protected $fillable = [
        'cp', 
        'provincia', 
        'localidad'
    ];

    public function getEnviosByCP($codigoPostal) {
        
        return DB::table('postal_codes')
        ->select('postal_codes.provincia', 'postal_codes.localidad', 'cordon.precio', 'postal_codes.id')
        ->join('cordon','postal_codes.cordon_id','=','cordon.id')
        ->where('cp','=',$codigoPostal)
        ->get();
    }

    public function getProvinceCode($codigoPostal) {
        return DB::table('postal_codes')
        ->select('provinceCode')
        ->where('cp', '=', $codigoPostal)
        ->distinct()
        ->get();
    }


    
}
