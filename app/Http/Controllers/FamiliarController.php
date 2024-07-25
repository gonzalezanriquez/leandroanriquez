<?php
namespace App\Http\Controllers;

use App\Models\Familiar;
use Illuminate\Http\Request;

class FamiliarController extends Controller
{
    public function index()
    {
        $familiars = Familiar::all();
        return view('familiars.index', compact('familiars'));
    }

    public function create()
    {
        return view('familiars.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'nullable|string|max:255',
            'apellido' => 'nullable|string|max:255',
            'tipo_familiar' => 'nullable|string|max:255',
            'telefono' => 'nullable|string|max:255',
            'mail' => 'nullable|string|max:255',
            'direccion' => 'nullable|string|max:255',
        ]);

        Familiar::create($request->all());

        return redirect()->route('familiars.index')->with('success', 'Familiar creado exitosamente.');
    }

    public function show(Familiar $familiar)
    {
        return view('familiars.show', compact('familiar'));
    }

    public function edit(Familiar $familiar)
    {
        return view('familiars.edit', compact('familiar'));
    }

    public function update(Request $request, Familiar $familiar)
    {
        $request->validate([
            'nombre' => 'nullable|string|max:255',
            'apellido' => 'nullable|string|max:255',
            'tipo_familiar' => 'nullable|string|max:255',
            'telefono' => 'nullable|string|max:255',
            'mail' => 'nullable|string|max:255',
            'direccion' => 'nullable|string|max:255',
        ]);

        $familiar->update($request->all());

        return redirect()->route('familiars.index')->with('success', 'Familiar actualizado exitosamente.');
    }

    public function destroy(Familiar $familiar)
    {
        $familiar->delete();

        return redirect()->route('familiars.index')->with('success', 'Familiar eliminado exitosamente.');
    }
}
