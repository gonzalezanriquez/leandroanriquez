<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;
    protected $fillable = [
        'apellido',
        'nombre',
        'genero',
        'fecha_nacimiento',
        'antiguedad',
        'nacionalidad',
        'domicilio',
        'depto_torre_piso',
        'localidad',
        'codigo_postal',
        'dni',
        'cuil',
        'telefono'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
