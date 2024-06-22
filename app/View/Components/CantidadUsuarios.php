<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CantidadUsuarios extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */


     public $cantidadUsuarios;

     public function __construct($cantidadUsuarios)
     {
         $this->cantidadUsuarios = $cantidadUsuarios;
     }
 
     public function render()
     {
         return view('components.cantidad-usuarios');
     }

}
