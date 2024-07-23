<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    // Tabla asociada
    protected $table = 'estudiantes';

    protected $fillable = [
        'ciclolectivo_id',
        'user_id',
        'curso_id',
        'apellidos',
        'nombres',
        'genero',
        'dni',
        'cuil',
        'fecha_nacimiento',
        'lugar_nacimiento',
        'nacionalidad',
        'domicilio',
        'piso_torre_depto',
        'localidad',
        'provincia',
        'codigo_postal',
        'telefono',
        'nombre_establecimiento_anterior',
        'nivel_anterior',
    ];

    // Relaciones
    public function ciclolectivo()
    {
        return $this->belongsTo(Ciclolectivo::class);
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
