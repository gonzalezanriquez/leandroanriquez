<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciclolectivo extends Model
{
    use HasFactory;

    // Tabla asociada
    protected $table = 'ciclolectivos';

    // Campos que se pueden asignar de forma masiva
    protected $fillable = ['anio'];

    // Relaciones
    public function estudiantes()
    {
        return $this->hasMany(Estudiante::class);
    }
}
