<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docente;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docentes = Docente::all();
        return view('docente.index', compact('docentes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'genero' => 'nullable|string|max:10',
            'fecha_nacimiento' => 'nullable|date',
            'antiguedad' => 'nullable|integer',
            'nacionalidad' => 'nullable|string|max:50',
            'domicilio' => 'nullable|string|max:255',
            'depto_torre_piso' => 'nullable|string|max:50',
            'localidad' => 'nullable|string|max:100',
            'codigo_postal' => 'nullable|string|max:10',
            'dni' => 'nullable|string|max:20',
            'cuil' => 'nullable|string|max:20',
            'telefono' => 'nullable|string|max:20',
            'mail' => 'nullable|email', // Nuevo campo
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'roles' => 'required|string',
        ]);
    
        // Crear usuario
        $user = User::create([
            'name' => $request->input('name'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
    
        // Asignar rol al usuario
        $user->assignRole($request->input('roles'));
    
        // Crear docente
        Docente::create([
            'user_id' => $user->id,
            'apellido' => $request->input('lastname'),
            'nombre' => $request->input('name'),
            'genero' => $request->input('genero'),
            'fecha_nacimiento' => $request->input('fecha_nacimiento'),
            'antiguedad' => $request->input('antiguedad'),
            'nacionalidad' => $request->input('nacionalidad'),
            'domicilio' => $request->input('domicilio'),
            'depto_torre_piso' => $request->input('depto_torre_piso'),
            'localidad' => $request->input('localidad'),
            'codigo_postal' => $request->input('codigo_postal'),
            'dni' => $request->input('dni'),
            'cuil' => $request->input('cuil'),
            'telefono' => $request->input('telefono'),
            'mail' => $request->input('mail'), // Nuevo campo
        ]);
    
        return redirect()->route('docentes.index')->with('success', 'Docente creado exitosamente.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $docente = Docente::findOrFail($id);
        return view('docente.show', compact('docente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docente = Docente::findOrFail($id);
        return view('docente.edit', compact('docente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'apellido' => 'required|string|max:255',
            'nombre' => 'required|string|max:255',
            'genero' => 'required|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'antiguedad' => 'required|integer',
            'nacionalidad' => 'required|string|max:255',
            'domicilio' => 'required|string|max:255',
            'depto_torre_piso' => 'nullable|string|max:255',
            'localidad' => 'required|string|max:255',
            'codigo_postal' => 'required|string|max:10',
            'dni' => 'required|string|max:20',
            'cuil' => 'required|string|max:20',
            'telefono' => 'required|string|max:20',
        ]);

        $docente = Docente::findOrFail($id);
        $docente->update($request->all());

        return redirect()->route('docentes.index')->with('success', 'Docente actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $docente = Docente::findOrFail($id);
        $docente->delete();

        return redirect()->route('docentes.index')->with('success', 'Docente eliminado con éxito.');
    }
}
