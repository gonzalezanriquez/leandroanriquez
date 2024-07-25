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
        $userRoles = $user->roles->pluck('id');
        $userRol = $user->roles->first()->name;

        // Filtrar noticias según los roles del usuario
        $noticias = Noticia::whereHas('roles', function ($query) use ($userRoles) {
            $query->whereIn('roles.id', $userRoles);
        })->get();

        return view('noticias.index', compact('noticias', 'userRol'));
    }

    public function noticias()
    {
        $user = auth()->user();
        $userRoles = $user->roles->pluck('id');
        $userRol = $user->roles->first()->name;

        // Filtrar noticias según los roles del usuario
        $noticias = Noticia::whereHas('roles', function ($query) use ($userRoles) {
            $query->whereIn('roles.id', $userRoles);
        })->get();

        return view('noticias.noticias', compact('noticias', 'userRol'));
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
            'content' => 'required|string',
            'roles' => 'nullable|array',
            'roles.*' => 'exists:roles,id',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);

        $noticia = Noticia::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $request->hasFile('image') ? $request->file('image')->store('images', 'public') : null,
        ]);

        $roles = $request->roles ?? [];
        if (!in_array(1, $roles)) {
            $roles[] = 1; 
        }
        $noticia->roles()->sync($roles);

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
            'content' => 'required|string',
            'roles' => 'required|array',
            'roles.*' => 'exists:roles,id',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);
    
        $noticia->update([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $request->hasFile('image') ? $request->file('image')->store('images', 'public') : $noticia->image,
        ]);
    
        $noticia->roles()->sync($request->roles);
    
        return redirect()->route('noticias.index')->with('success', 'Noticia actualizada exitosamente.');
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
