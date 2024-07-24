<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EstudianteMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Asume que el rol de estudiante está guardado en el modelo User o en una relación
        if (Auth::check() && Auth::user()->role === 'estudiante') {
            return $next($request);
        }

        // Redirige o muestra un mensaje de error si el usuario no es estudiante
        return redirect('/')->with('error', 'No tienes permiso para acceder a esta página.');
    }
}
