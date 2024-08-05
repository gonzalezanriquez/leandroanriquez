<?php

namespace App\Http\Controllers;

use App\Models\Ciclolectivo;
use Illuminate\Http\Request;

class CicloLectivoController extends Controller
{
    public function index()
    {
        $ciclolectivos = Ciclolectivo::all();
        return view('ciclolectivos.index', compact('ciclolectivos'));
    }

    public function create()
    {
        return view('ciclolectivos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'anio' => 'required|integer|unique:ciclolectivos,anio',
        ]);

        CicloLectivo::create($request->all());

        return redirect()->route('ciclolectivos.index')->with('success', 'Ciclo Lectivo creado exitosamente.');
    }

    public function show(CicloLectivo $ciclolectivo)
    {
        return view('ciclolectivos.show', compact('ciclolectivo'));
    }

    public function edit(CicloLectivo $ciclolectivo)
    {
        return view('ciclolectivos.edit', compact('ciclolectivo'));
    }

    public function update(Request $request, CicloLectivo $ciclolectivo)
    {
        $request->validate([
            'anio' => 'required|integer|unique:ciclolectivos,anio,' . $ciclolectivo->id,
        ]);

        $ciclolectivo->update($request->all());

        return redirect()->route('ciclolectivos.index')->with('success', 'Ciclo Lectivo actualizado exitosamente.');
    }

    public function destroy(CicloLectivo $ciclolectivo)
    {
        $ciclolectivo->delete();
        return redirect()->route('ciclolectivos.index')->with('success', 'Ciclo Lectivo eliminado exitosamente.');
    }
}
