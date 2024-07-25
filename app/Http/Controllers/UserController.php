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
                    'user_id' => $request->input('user_id'),
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

            if ($roles === 'docente') {
                Docente::create([
                    'user_id' => $request->input('user_id'),
                    'apellido' => $request->input('lastname'),
                    'nombre' => $request->input('name'),
                    'mail' => $request->input('email'),
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
        $user = User::findOrFail($id);
        
        $user->name = $request->input('name');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
    
        if ($request->filled('password')) {
            $user->password = bcrypt($request->input('password'));
        }
        
        $user->save();
        
        $roles = $request->input('roles');
        $user->syncRoles($roles);
        
        if ($roles === 'docente') {
            $docente = Docente::where('user_id', $user->id)->first();
    
            if (!$docente) {
                Docente::create([
                    'user_id' => $request->input('user_id'),
                     'apellido' => $request->input('lastname'),
                    'nombre' => $request->input('name'),
                    'mail' => $request->input('email'),
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
                    'user_id' => $request->input('user_id'),
                    'apellido' => $request->input('lastname'),
                    'nombre' => $request->input('name'),
                    'mail' => $request->input('email'),
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
