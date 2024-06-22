<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Estudiante extends Model
{
    use HasFactory;
    protected $fillable = [
        'apellido',
        'nombre',
        'genero',
        'fecha_nacimiento',
        'lugar_nacimiento',
        'nacionalidad',
        'domicilio',
        'depto_torre_piso',
        'localidad',
        'codigo_postal',
        'dni',
        'cuil',
    ];
    }
