<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserApiController extends Controller
{
    /**
     * Get the user data by ID.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        //$user = User::find($id);
        $users = User::select('nombre', 'apellido', 'rol')->get();
      
        if ($user) {
            return response()->json($user);
        } else {
            return response()->json(['error' => 'Usuario no encontrado'], 404);
        }
    }
}
