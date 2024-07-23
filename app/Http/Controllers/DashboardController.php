<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Estudiante;
use App\Models\Docente;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        // Verifica si el usuario tiene un rol definido
        if ($user && !$user->hasRole('admin') && !$user->hasRole('docente') && !$user->hasRole('estudiante')) {
            return view('espera'); // Redirige a la vista 'espera.blade.php'
        }

        $cantidadUsuarios = User::count(); 
        $cantidadEstudiantes = Estudiante::count(); 
        $cantidadDocentes = Docente::count(); 

        return view('dashboard', compact('user', 'cantidadUsuarios', 'cantidadEstudiantes', 'cantidadDocentes'));
    }
}
