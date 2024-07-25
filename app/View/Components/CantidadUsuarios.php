<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\User;
use App\Models\Estudiante;
use App\Models\Docente;
class CantidadUsuarios extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */


     public $cantidadUsuarios;
     public $cantidadEstudiantes;
     public $cantidadDocentes;
     public $cantidadMaterias;

     public function __construct($cantidadUsuarios)
     {
        $this->cantidadUsuarios = User::count();
        $this->cantidadEstudiantes = User::role('estudiante')->count();
        $this->cantidadDocentes = User::role('docente')->count();
        // $this->cantidadDocentes = Docente::count();

     }
 
     public function render()
     {
         return view('components.cantidad-usuarios');
     }

}
