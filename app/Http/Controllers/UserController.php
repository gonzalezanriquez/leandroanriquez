<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Familiar;
use Spatie\Permission\Models\Role;
use App\Models\Curso;
use App\Models\Ciclolectivo;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(5);
        $totalUsers = User::count();
        return view('users.index', compact('users', 'totalUsers'));
    }

    public function create()
    {
        $roles = Role::all();
        $cursos = Curso::all();
        $ciclolectivos = Ciclolectivo::all();
        $familiares = User::all();
        return view('users.create', compact(['roles', 'cursos', 'ciclolectivos', 'familiares']));
    }
    
    public function store(Request $request)
{
    // Valida los datos del formulario
    $request->validate([
        'nombre' => 'required|string|max:255',
        'apellido' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8|confirmed',
        'role' => 'required|string|exists:roles,name', // Valida que 'role' sea un nombre de rol válido
        'curso_id' => 'nullable|exists:cursos,id',
        'ciclolectivo_id' => 'nullable|exists:ciclolectivos,id',
        'familiar_id' => 'nullable|exists:users,id',
    ]);

    // Crea el usuario
    $user = User::create([
        'nombre' => $request->nombre,
        'apellido' => $request->apellido,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'curso_id' => $request->curso_id,
        'ciclolectivo_id' => $request->ciclolectivo_id,
        'familiar_id' => $request->familiar_id,
    ]);

    // Encuentra el rol por su nombre
    $role = Role::where('name', $request->role)->first();

    if ($role) {
        // Asigna el rol al usuario
        $user->assignRole($role);
    }

    return redirect()->route('users.index')->with('success', 'Usuario creado exitosamente.');
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
        $cursos = Curso::all();
        $ciclosLectivos = CicloLectivo::all();
        $familiars = Familiar::all();
        return view('users.edit', compact('user', 'roles', 'cursos', 'ciclosLectivos', 'familiars'));
    }
    public function update(Request $request, User $user)
    {

        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8', 
            'roles' => 'required|string|exists:roles,name',
        ]);
    

        $user->nombre = $validatedData['nombre'];
        $user->apellido = $validatedData['apellido'];
        $user->email = $validatedData['email'];
    

        if (!empty($validatedData['password'])) {
            $user->password = bcrypt($validatedData['password']);
        }
    
        $user->syncRoles($validatedData['roles']);
        
        $user->save();
    
        return redirect()->route('users.index')->with('success', 'Usuario actualizado con éxito.');
    }
    
    

    

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Usuario eliminado exitosamente.');
    }
}
