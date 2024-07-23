<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'lastname',
        'password',
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

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
