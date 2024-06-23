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

        Docente::create($request->all());

        return redirect()->route('docentes.index')->with('success', 'Docente creado con éxito.');
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
