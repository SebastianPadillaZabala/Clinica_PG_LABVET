<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;
    protected $table = 'mascotas';
    protected $fillable = [
        'name', 'edad', 'raza', 'especie', 'color', 'sexo', 'id_paciente'
    ];
    protected $primaryKey = 'id_masc';
}
