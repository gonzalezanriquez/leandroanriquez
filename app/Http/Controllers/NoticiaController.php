<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class NoticiaController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $userRoles = auth()->user()->roles->pluck('id');
        $userRol = $user->roles->first()->name;
        $noticias = Noticia::whereIn('role_id', $userRoles)->get();
    
        return view('noticias.index', compact('noticias','userRol'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('noticias.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'role_id' => 'required|exists:roles,id',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/noticias'), $fileName);
            $data['image'] = 'images/noticias/' . $fileName;
        }

        Noticia::create($data);

        return redirect()->route('noticias.index')->with('success', 'Noticia creada exitosamente.');
    }

    public function edit(Noticia $noticia)
    {
        $roles = Role::all();
        return view('noticias.edit', compact('noticia', 'roles'));
    }

    public function update(Request $request, Noticia $noticia)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'role_id' => 'required|exists:roles,id',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/noticias'), $fileName);
            $data['image'] = 'images/noticias/' . $fileName;
        }

        $noticia->update($data);

        return redirect()->route('noticias.index')->with('success', 'Noticia actualizada exitosamente.');
    }


    public function show(Noticia $noticia)
{
    $user = auth()->user();
    $roles = $user->roles->pluck('id');

    // Verificar si el usuario tiene acceso a la noticia
    if (!$noticia->role_id || !$roles->contains($noticia->role_id)) {
        abort(403, 'Unauthorized access');
    }

    return view('noticias.show', compact('noticia'));
}


    public function destroy(Noticia $noticia)
    {
        $noticia->delete();
        return redirect()->route('noticias.index')->with('success', 'Noticia eliminada exitosamente.');
    }
}
