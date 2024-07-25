<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;

class EstudianteController extends Controller
{

    public function index()
{
    $roleName = 'estudiante';

    $role = Role::where('name', $roleName)->first();

    if ($role) {
        $roleId = $role->id;

        $students = User::whereHas('roles', function($query) use ($roleId) {
            $query->where('id', $roleId);
        })->get();

        return view('estudiantes.index', compact('students'));
    } else {
        return view('estudiantes.index', ['students' => collect()]);
    }
}
    
}
