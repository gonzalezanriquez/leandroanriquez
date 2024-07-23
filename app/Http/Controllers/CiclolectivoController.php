<?php

namespace App\Http\Controllers;

use App\Models\Ciclolectivo;
use Illuminate\Http\Request;

class CiclolectivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Obtén todos los ciclolectivos y pásalos a la vista
        $ciclolectivos = Ciclolectivo::all();
        return view('ciclolectivos.index', compact('ciclolectivos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Muestra el formulario para crear un nuevo ciclolectivo
        return view('ciclolectivos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Valida la solicitud
        $request->validate([
            'anio' => 'required|integer',
        ]);

        // Crea un nuevo ciclolectivo
        Ciclolectivo::create($request->all());

        // Redirige al índice con un mensaje de éxito
        return redirect()->route('ciclolectivo.index')->with('success', 'Ciclolectivo creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ciclolectivo  $ciclolectivo
     * @return \Illuminate\Http\Response
     */
    public function show(Ciclolectivo $ciclolectivo)
    {
        // Muestra los detalles de un ciclolectivo específico
        return view('ciclolectivos.show', compact('ciclolectivo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ciclolectivo  $ciclolectivo
     * @return \Illuminate\Http\Response
     */
    public function edit(Ciclolectivo $ciclolectivo)
    {
        // Muestra el formulario para editar un ciclolectivo específico
        return view('ciclolectivos.edit', compact('ciclolectivo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ciclolectivo  $ciclolectivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ciclolectivo $ciclolectivo)
    {
        // Valida la solicitud
        $request->validate([
            'anio' => 'required|integer',
        ]);

        // Actualiza el ciclolectivo
        $ciclolectivo->update($request->all());

        // Redirige al índice con un mensaje de éxito
        return redirect()->route('ciclolectivo.index')->with('success', 'Ciclolectivo actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ciclolectivo  $ciclolectivo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ciclolectivo $ciclolectivo)
    {
        // Elimina el ciclolectivo
        $ciclolectivo->delete();

        // Redirige al índice con un mensaje de éxito
        return redirect()->route('ciclolectivo.index')->with('success', 'Ciclolectivo eliminado correctamente.');
    }
}
