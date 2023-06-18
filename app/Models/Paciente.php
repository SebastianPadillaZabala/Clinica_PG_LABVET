<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    protected $table = 'pacientes';
    protected $fillable = [
        'namePac', 'ci', 'fecha_nac', 'celular', 'direccion'
    ];
    protected $primaryKey = 'id_pac';
}
