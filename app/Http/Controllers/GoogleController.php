<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\Models\User;
use Auth;
use Exception;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $findUser = User::where('google_id', $user->id)->first();

            if ($findUser) {
      
                Auth::login($findUser);
                return redirect('/dashboard');
            } else {
            
                $newUser = User::create([
                    'nombre' => $user->name,
                    'apellido' => '',
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'avatar' => $user->avatar,
                    'password' => bcrypt('my-google') 
                ]);

                Auth::login($newUser);

                return redirect('/dashboard');
            }
        } catch (Exception $e) {
            return redirect('auth/google')->withErrors(['msg' => 'Error al iniciar sesión con Google.']);
        }
    }
}
