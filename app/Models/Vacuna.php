<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacuna extends Model
{
    use HasFactory;
    protected $fillable = ['vacunas'];
    public $timestamps = false;
    public function mascotas()
    {
        return $this->belongsToMany(Mascota::class);
    }
}
