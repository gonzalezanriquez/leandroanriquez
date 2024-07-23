<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Estudiante;
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
        $roles = Role::all();
        return view('users.create', compact('roles')); 
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:8',
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
            if ($request->input('roles') === 'estudiante') {
                Estudiante::create([
                    'user_id' => $user->id,
                    'name' => $user->name,
                    'genero' => $request->input('genero'),
                    'fecha_nacimiento' => $request->input('fecha_nacimiento'),
                    'lugar_nacimiento' => $request->input('lugar_nacimiento'),
                    'nacionalidad' => $request->input('nacionalidad'),
                    'domicilio' => $request->input('domicilio'),
                    'depto_torre_piso' => $request->input('depto_torre_piso'),
                    'localidad' => $request->input('localidad'),
                    'codigo_postal' => $request->input('codigo_postal'),
                    'dni' => $request->input('dni'),
                    'cuil' => $request->input('cuil'),
                ]);
            }
    

            
    
            return response()->json(['success' => 'Usuario creado exitosamente']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'No se pudo crear el usuario'], 500);
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
        $roles = Role::all(); 
        return view('users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'roles' => 'required|string',
    ]);

    if ($request->filled('password')) {
        $request->validate([
            'password' => 'nullable|string|min:8',
        ]);
    }

    $user = User::findOrFail($id);

    $user->update([
        'name' => $request->input('name'),
        'lastname' => $request->input('lastname'),
    ]);

    if ($request->filled('roles')) {
        $user->syncRoles($request->input('roles'));

        if ($request->input('roles') === 'estudiante') {
            Estudiante::create([
                'user_id' => $user->id,
                'name' => $user->name, // Ensure 'name' is passed
                'genero' => $request->input('genero'),
                'fecha_nacimiento' => $request->input('fecha_nacimiento'),
                'lugar_nacimiento' => $request->input('lugar_nacimiento'),
                'nacionalidad' => $request->input('nacionalidad'),
                'domicilio' => $request->input('domicilio'),
                'depto_torre_piso' => $request->input('depto_torre_piso'),
                'localidad' => $request->input('localidad'),
                'codigo_postal' => $request->input('codigo_postal'),
                'dni' => $request->input('dni'),
                'cuil' => $request->input('cuil'),
            ]);

            return redirect()->route('users.index')->with('success', 'Usuario actualizado y movido a la tabla estudiantes exitosamente');
        }
    }

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
