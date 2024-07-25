<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'password',
        'google_id',
        'remember_token',
        'avatar',
        'rol_id',
        'curso_id',
        'ciclo_lectivo_id',
        'familiar_id',
    ];

    public function familiar()
    {
        return $this->belongsTo(Familiar::class);
    }
}
