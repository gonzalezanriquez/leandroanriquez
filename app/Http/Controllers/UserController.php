<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Estudiante;
use App\Models\Docente; // Asegúrate de importar el modelo Docente
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

            if ($request->input('roles') === 'docente') {
                Docente::create([
                    'user_id' => $user->id,
                    'apellido' => $request->input('lastname'),
                    'nombre' => $request->input('name'),
                    'genero' => $request->input('genero'),
                    'fecha_nacimiento' => $request->input('fecha_nacimiento'),
                    'antiguedad' => $request->input('antiguedad'),
                    'nacionalidad' => $request->input('nacionalidad'),
                    'domicilio' => $request->input('domicilio'),
                    'depto_torre_piso' => $request->input('depto_torre_piso'),
                    'localidad' => $request->input('localidad'),
                    'codigo_postal' => $request->input('codigo_postal'),
                    'dni' => $request->input('dni'),
                    'cuil' => $request->input('cuil'),
                    'telefono' => $request->input('telefono'),
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
            'genero' => 'nullable|string',
            'fecha_nacimiento' => 'nullable|date',
            'antiguedad' => 'nullable|integer',
            'nacionalidad' => 'nullable|string',
            'domicilio' => 'nullable|string',
            'depto_torre_piso' => 'nullable|string',
            'localidad' => 'nullable|string',
            'codigo_postal' => 'nullable|string',
            'dni' => 'nullable|string',
            'cuil' => 'nullable|string',
            'telefono' => 'nullable|string',
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
            } else {
                $estudiante->update([
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

            return redirect()->route('users.index')->with('success', 'Usuario actualizado y movido a la tabla estudiantes exitosamente');
        }

        if ($roles === 'docente') {
            $docente = Docente::where('user_id', $user->id)->first();

            if (!$docente) {
                Docente::create([
                    'user_id' => $user->id,
                    'apellido' => $request->input('lastname'),
                    'nombre' => $request->input('name'),
                    'genero' => $request->input('genero'),
                    'fecha_nacimiento' => $request->input('fecha_nacimiento'),
                    'antiguedad' => $request->input('antiguedad'),
                    'nacionalidad' => $request->input('nacionalidad'),
                    'domicilio' => $request->input('domicilio'),
                    'depto_torre_piso' => $request->input('depto_torre_piso'),
                    'localidad' => $request->input('localidad'),
                    'codigo_postal' => $request->input('codigo_postal'),
                    'dni' => $request->input('dni'),
                    'cuil' => $request->input('cuil'),
                    'telefono' => $request->input('telefono'),
                ]);
            } else {
                $docente->update([
                    'apellido' => $request->input('lastname'),
                    'nombre' => $request->input('name'),
                    'genero' => $request->input('genero'),
                    'fecha_nacimiento' => $request->input('fecha_nacimiento'),
                    'antiguedad' => $request->input('antiguedad'),
                    'nacionalidad' => $request->input('nacionalidad'),
                    'domicilio' => $request->input('domicilio'),
                    'depto_torre_piso' => $request->input('depto_torre_piso'),
                    'localidad' => $request->input('localidad'),
                    'codigo_postal' => $request->input('codigo_postal'),
                    'dni' => $request->input('dni'),
                    'cuil' => $request->input('cuil'),
                    'telefono' => $request->input('telefono'),
                ]);
            }

            return redirect()->route('users.index')->with('success', 'Usuario actualizado y movido a la tabla docentes exitosamente');
        }

        if ($estudiante = Estudiante::where('user_id', $user->id)->first()) {
            $estudiante->delete();
        }

        if ($docente = Docente::where('user_id', $user->id)->first()) {
            $docente->delete();
        }

        return redirect()->route('users.index')->with('success', 'Usuario actualizado exitosamente');
    }

    public function destroy(User $user)
    {
        if ($estudiante = Estudiante::where('user_id', $user->id)->first()) {
            $estudiante->delete();
        }

        if ($docente = Docente::where('user_id', $user->id)->first()) {
            $docente->delete();
        }

        $user->delete();
        return redirect()->route('users.index')->with('success', 'Usuario eliminado exitosamente.');
    }
}
