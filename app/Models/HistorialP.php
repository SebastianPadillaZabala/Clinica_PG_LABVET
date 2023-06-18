<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialP extends Model
{
    use HasFactory;
    protected $table = 'analisis_personas';
    protected $fillable = [
        'name', 'url', 'fecha', 'id_paciente'
    ];
    protected $primaryKey = 'id_apersona';
}
