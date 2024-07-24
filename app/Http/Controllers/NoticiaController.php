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
        $noticias = Noticia::whereHas('roles', function ($query) use ($userRoles) {
            $query->whereIn('role_id', $userRoles);
        })->get();

        return view('noticias.index', compact('noticias', 'userRol'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('noticias.create', compact('roles'));
    }

    public function store(Request $request)
{
    // Validate the request
    $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'roles' => 'nullable|array',
        'roles.*' => 'exists:roles,id',
        'image' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
    ]);

    // Create the Noticia instance with a default role
    $defaultRoleId = 1; // Replace with the ID of your default role

    $noticia = Noticia::create([
        'title' => $request->title,
        'content' => $request->content,
        'image' => $request->hasFile('image') ? $request->file('image')->store('images', 'public') : null,
    ]);

    // Attach the default role
    $noticia->roles()->attach($defaultRoleId);

    // Attach additional roles if provided
    if ($request->has('roles')) {
        $additionalRoles = array_filter($request->roles, function($roleId) use ($defaultRoleId) {
            return $roleId != $defaultRoleId;
        });
        $noticia->roles()->attach($additionalRoles);
    }

    return redirect()->route('noticias.index');
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
        'content' => 'required|string',
        'roles' => 'required|array',
        'roles.*' => 'exists:roles,id',
        'image' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048', // Validar el archivo de imagen
    ]);

    $noticia->update([
        'title' => $request->title,
        'content' => $request->content,
        'image' => $request->hasFile('image') ? $request->file('image')->store('images', 'public') : $noticia->image,
    ]);

    $noticia->roles()->sync($request->roles);

    return redirect()->route('noticias.index');
}


    public function show(Noticia $noticia)
    {
        $user = auth()->user();
        $roles = $user->roles->pluck('id');

        if (!$noticia->roles->pluck('id')->intersect($roles)->count()) {
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
