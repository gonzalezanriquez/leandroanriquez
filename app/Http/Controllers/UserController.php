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
        'email' => 'nullable|email|max:255|unique:users,email,' . $id,
        'password' => 'nullable|string|min:8',
        'avatar' => 'nullable|url', 
        'google_id' => 'nullable|string',
    ]);

    $user = User::findOrFail($id);

    $user->update([
        'name' => $request->input('name'),
        'lastname' => $request->input('lastname'),
        'email' => $request->input('email') ?: $user->email, 
        'google_id' => $request->input('google_id') ?: $user->google_id, 
    ]);

    if ($request->filled('password')) {
        $user->update([
            'password' => bcrypt($request->input('password')),
        ]);
    }

    if ($request->filled('avatar')) {
        $user->update([
            'avatar' => $request->input('avatar'),
        ]);
    }

    $roles = $request->input('roles');
    $user->syncRoles($roles);

    if ($roles === 'estudiante') {
        $estudiante = Estudiante::where('user_id', $user->id)->first();

        if (!$estudiante) {
            Estudiante::create([
                'user_id' => $user->id,
                'nombres' => $user->name,
                'apellidos' => $user->lastname,
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
        } else {
            $estudiante->update([
                'nombres' => $user->name,
                'apellidos' => $user->lastname,
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

    return redirect()->route('users.index')->with('success', 'Usuario actualizado exitosamente');
}


        if ($estudiante = Estudiante::where('user_id', $user->id)->first()) {
            $estudiante->delete();
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
        if ($estudiante = Estudiante::where('user_id', $user->id)->first()) {
            $estudiante->delete();
        }

        $user->delete();
        return redirect()->route('users.index')->with('success', 'Usuario eliminado exitosamente.');
    }
}
