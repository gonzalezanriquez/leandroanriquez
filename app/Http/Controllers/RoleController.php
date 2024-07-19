<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RoleController extends Controller
{
    public function createRole()
    {
        // $role = Role::create(['name' => 'admin']);
        // $permission = Permission::create(['name' => 'editar']);
        // $role->givePermissionTo($permission);

        return "Role and permission created!";
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
            return "User is a admin!";
        }

        return "User is not a writer.";
    }
}
