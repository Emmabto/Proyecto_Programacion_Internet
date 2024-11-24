<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    use HasFactory;
    protected $fillable = ['mascota_id', 'nombre_original', 'ruta'];

    public function mascota()
    {
        return $this->belongsTo(Mascota::class);
    }
}
