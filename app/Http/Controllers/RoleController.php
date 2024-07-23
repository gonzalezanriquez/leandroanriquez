<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RoleController extends Controller
{
    public function index()
    {
        $datas = Role::all();
        return view('roles.index', compact('datas'));
    }

    public function create()
    {
        return view('roles.create');
    }

    public function store(Request $request)
{
    $messages = [
        'name.required' => 'El campo nombre del rol es obligatorio.',
        'name.string' => 'El nombre del rol debe ser un texto',
        'name.max' => 'El nombre del rol no debe exceder de 15 caracteres.',
        'name.unique' => 'Este nombre de rol ya está en uso.',
    ];

    $request->validate([
        'name' => 'required|string|max:15|unique:roles,name',
    ], $messages);

    Role::create([
        'name' => $request->name,
    ]);

    return redirect()->route('roles.index')->with('success', '¡Rol creado exitosamente!');
}

    public function show($id)
    {
        $role = Role::findOrFail($id);
        return view('roles.show', compact('role'));
    }

    public function edit($id)
    {
        $role = Role::findOrFail($id);
        return view('roles.edit', compact('role'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255|unique:roles,name,' . $id,
        ]);

        $role = Role::findOrFail($id);
        $role->name = $request->name;
        $role->save();

        return redirect()->route('roles.index')->with('success', 'Role updated successfully');
    }

    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();

        return redirect()->route('roles.index')->with('success', 'Role deleted successfully');
    }

    public function assignRoleToUser($userId)
    {
        $user = User::find($userId);
        $user->assignRole('admin');

        return "Role assigned to user!";
    }

    public function checkUserRole($userId)
    {
        $user = User::find($userId);

        if ($user->hasRole('admin')) {
            return "User is an admin!";
        }

        return "User is not an admin.";
    }
}
