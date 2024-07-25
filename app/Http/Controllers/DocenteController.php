<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;


class DocenteController extends Controller
{
    public function index()
    {
        $roleName = 'docente';
    
        $role = Role::where('name', $roleName)->first();
    
        if ($role) {
            $roleId = $role->id;
    
            $docentes = User::whereHas('roles', function($query) use ($roleId) {
                $query->where('id', $roleId);
            })->get();
    
            return view('docente.index', compact('docentes'));
        } else {
            return view('docente.index', ['docentes' => collect()]);
        }
    }
}
