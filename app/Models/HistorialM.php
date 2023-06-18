<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialM extends Model
{
    use HasFactory;
    protected $table = 'analisis_mascotas';
    protected $fillable = [
        'name', 'url', 'fecha', 'id_mascota'
    ];
    protected $primaryKey = 'id_amascota';
}
