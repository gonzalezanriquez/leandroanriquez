<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\User;
use App\Models\Ciclolectivo;

class EstudianteController extends Controller
{
    public function index()
    {
        $datas = Estudiante::all();
        return view('estudiantes.index', compact('datas'));
    }

    public function create()
    {

        $ciclolectivos= Ciclolectivo::all();
        return view('estudiantes.create', compact('ciclolectivos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|unique:estudiantes,email',
        ]);

        Estudiante::create($request->all());

        return redirect()->route('estudiantes.index')
            ->with('success', 'Estudiante creado exitosamente.');
    }

    public function show($id)
    {
        $datas = Estudiante::findOrFail($id);
        return view('estudiantes.show', compact('datas'));
    }

    public function edit($id)
    {
        $datas = Estudiante::findOrFail($id);
        return view('estudiantes.edit', compact('datas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|unique:estudiantes,email,' . $id,
        ]);

        $estudiante = Estudiante::findOrFail($id);
        $estudiante->update($request->all());

        return redirect()->route('estudiantes.index')
            ->with('success', 'Estudiante actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->delete();

        return redirect()->route('estudiantes.index')
            ->with('success', 'Estudiante eliminado exitosamente.');
    }


    // public function assignRole(Request $request, User $user)
    // {
    //     $role = $request->input('role');
        
    //     // Asignar el rol al usuario
    //     $user->assignRole($role);

    //     // Verificar si el rol es 'estudiante'
    //     if ($role === 'estudiante') {
    //         // Validar los datos adicionales necesarios para crear un estudiante
    //         $request->validate([
    //             'genero' => 'required|string|max:255',
    //             'fecha_nacimiento' => 'required|date',
    //             'lugar_nacimiento' => 'required|string|max:255',
    //             'nacionalidad' => 'required|string|max:255',
    //             'domicilio' => 'required|string|max:255',
    //             'localidad' => 'required|string|max:255',
    //             'dni' => 'required|string|max:255',
    //         ]);

    //         // Crear el registro en la tabla `estudiantes`
    //         Estudiante::create([
    //             'user_id' => $user->id->nullable()->change(),
    //             'genero' => $request->input('genero'),
    //             'fecha_nacimiento' => $request->input('fecha_nacimiento'),
    //             'lugar_nacimiento' => $request->input('lugar_nacimiento'),
    //             'nacionalidad' => $request->input('nacionalidad'),
    //             'domicilio' => $request->input('domicilio'),
    //             'localidad' => $request->input('localidad'),
    //             'dni' => $request->input('dni'),
    //             'depto_torre_piso' => $request->input('depto_torre_piso'), // Puede ser nulo
    //             'codigo_postal' => $request->input('codigo_postal'), // Puede ser nulo
    //             'cuil' => $request->input('cuil'), // Puede ser nulo
    //         ]);
    //     }

    //     return redirect()->back()->with('success', 'Rol asignado y estudiante creado con éxito');
    // }

}
