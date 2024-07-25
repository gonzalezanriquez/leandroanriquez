<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\User;
use App\Models\Ciclolectivo;
use App\Models\Curso;

class EstudianteController extends Controller
{
    public function index()
    {
        $datas = Estudiante::all();
        return view('estudiantes.index', compact('datas'));
    }

    public function create()
    {
        $ciclolectivos = Ciclolectivo::all();
        $cursos = Curso::all(); // Cargar los cursos también
        return view('estudiantes.create', compact('ciclolectivos', 'cursos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'roles' => 'required|string',
            'avatar' => 'nullable|url',
        ]);

        // Crear usuario
        $user = User::create([
            'name' => $request->input('name'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'avatar' => $request->input('avatar'),
        ]);

        // Asignar rol al usuario
        $user->assignRole($request->input('roles'));

        // Crear estudiante
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

        return redirect()->route('estudiantes.index')
            ->with('success', 'Estudiante creado exitosamente.');
    }

    public function show($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        return view('estudiantes.show', compact('estudiante'));
    }

    public function edit($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $ciclolectivos = Ciclolectivo::all();
        $cursos = Curso::all();

        return view('estudiantes.edit', compact('estudiante', 'ciclolectivos', 'cursos'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'roles' => 'required|string',
            'email' => 'nullable|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed',
            'avatar' => 'nullable|url',
            'genero' => 'nullable|string|max:10',
            'fecha_nacimiento' => 'nullable|date',
            'lugar_nacimiento' => 'nullable|string|max:100',
            'nacionalidad' => 'nullable|string|max:50',
            'domicilio' => 'nullable|string|max:255',
            'depto_torre_piso' => 'nullable|string|max:50',
            'localidad' => 'nullable|string|max:100',
            'codigo_postal' => 'nullable|string|max:10',
            'dni' => 'nullable|string|max:20',
            'cuil' => 'nullable|string|max:20',
        ]);

        $user = User::findOrFail($id);

        $user->update([
            'name' => $request->input('name'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email') ?: $user->email,
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
        }

        return redirect()->route('estudiantes.index')->with('success', 'Estudiante actualizado con éxito.');
    }

    public function destroy($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $user = $estudiante->user;

        // Primero eliminar el estudiante
        $estudiante->delete();

        // Luego eliminar el usuario asociado
        $user->delete();

        return redirect()->route('estudiantes.index')->with('success', 'Estudiante eliminado con éxito.');
    }
}
