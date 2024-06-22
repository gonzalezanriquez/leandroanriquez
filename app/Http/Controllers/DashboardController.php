<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;


class DashboardController extends Controller
{
   

    public function index()
    {
        
        Carbon::setLocale('es');

        $dateTime = Carbon::now('America/Argentina/Buenos_Aires');
        $dateTime->diffForHumans(); //esto se mostrará en español


        $nombreDia = $dateTime->formatLocalized('%A'); // Nombre del día
        $nombreMes = $dateTime->formatLocalized('%B'); // Nombre del mes

        $user = auth()->user();

        $cantidadUsuarios = User::count(); // Contar el número total de usuarios

        return view('dashboard', compact('user', 'dateTime', 'nombreDia', 'nombreMes', 'cantidadUsuarios'));
    
    
    }
}
