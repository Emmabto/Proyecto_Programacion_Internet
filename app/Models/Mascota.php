<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'nombre', 'tipo', 'sexo', 'edad', 'padecimientos'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function vacunas()
    {
        return $this->belongsToMany(Vacuna::class, 'vacuna_mascota', 'mascota_id', 'vacuna_id');
    }
}
