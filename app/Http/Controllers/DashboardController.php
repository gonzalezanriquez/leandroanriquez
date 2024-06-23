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

        $cantidadUsuarios = User::count(); 
        $cantidadEstudiantes = Estudiante::count(); 
        $cantidadDocentes = Docente::count(); 

        return view('dashboard', compact('user', 'cantidadUsuarios','cantidadEstudiantes','cantidadDocentes'));
    
    
    }
}
