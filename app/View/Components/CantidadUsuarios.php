<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\User;

class CantidadUsuarios extends Component
{
    public $cantidadUsuarios;
    public $cantidadEstudiantes;
    public $cantidadDocentes;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->cantidadUsuarios = User::count();
        $this->cantidadEstudiantes = User::role('estudiante')->count();
        $this->cantidadDocentes = User::role('docente')->count();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.cantidad-usuarios');
    }
}
