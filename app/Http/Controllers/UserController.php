<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }
    
    public function search(Request $request)
    {
        $searchTerm = $request->input('buscar');
        $users = User::where('name', 'LIKE', '%' . $searchTerm . '%')->get();
        return view('components.search-result', ['users' => $users]);
    }

    public function create()
    {
        $roles = Role::all(); // Obtener todos los roles para asignarlos al usuario
        return view('users.create', compact('roles')); // Crear una vista para el formulario de creación
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:8|confirmed',
            'roles' => 'required|string',
        ]);
    
        try {
            $user = User::create([
                'name' => $request->input('name'),
                'lastname' => $request->input('lastname'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
            ]);
    
            $user->assignRole($request->input('roles'));
    
            return redirect()->route('users.index')->with('success', 'Usuario creado exitosamente');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'No se pudo crear el usuario');
        }
    }
    
    
    

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all(); // Obtener todos los roles
        return view('users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id)
{
    // Validación base
    $request->validate([
        'name' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'roles' => 'required|string', // Validar que roles sea una cadena
    ]);

    // Validación condicional para la contraseña solo si se proporciona
    if ($request->filled('password')) {
        $request->validate([
            'password' => 'nullable|string|min:8',
        ]);
    }

    $user = User::findOrFail($id);

    // Actualizar información básica
    $user->update([
        'name' => $request->input('name'),
        'lastname' => $request->input('lastname'),
    ]);

    // Actualizar roles
    if ($request->filled('roles')) {
        $user->syncRoles($request->input('roles')); // Actualizar roles del usuario si se proporcionan
    }

    // Actualizar contraseña solo si se proporciona una nueva
    if ($request->filled('password')) {
        $user->update([
            'password' => bcrypt($request->input('password')),
        ]);
    }

    return redirect()->route('users.index')->with('success', 'Usuario actualizado exitosamente');
}

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Usuario eliminado exitosamente.');
    }
}
