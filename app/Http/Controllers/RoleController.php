<?php

namespace App\Http\Controllers;

// app/Http/Controllers/RoleController.php

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;


class RoleController extends Controller
{
   
    public function index()
    {
        $user = User::all(); // Fetch all users
        $roles = Role::all();
        $permissions = Permission::all();
        return view('roles_permissions.index', compact('user', 'roles', 'permissions'));
    }

    public function create()
    {
        return view('roles_permissions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles',
        ]);

        Role::create(['name' => $request->input('name')]);

        return redirect()->route('roles_permissions.index')->with('success', 'Role created successfully.');
    }

    public function assignRolePermission()
{
    // Assuming you want to fetch a specific user by their ID, adjust this accordingly
    $users = User::all(); // Fetch all users
    $roles = Role::all();
    $permissions = Permission::all();
    return view('roles_permissions.assign', compact('users', 'roles', 'permissions'));
}


    public function updateRolePermission(Request $request, User $user)
    {
        $user->syncRoles($request->input('roles'));
        $user->syncPermissions($request->input('permissions'));

        return redirect()->route('roles_permissions.index')->with('success', 'Roles and Permissions updated successfully.');
    }
}
    

