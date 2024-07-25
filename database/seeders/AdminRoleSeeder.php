<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class AdminRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crear el rol de administrador si no existe
        $adminRole = Role::where('name', 'admin')->first();

        // Buscar un usuario con el correo 'admin@gmail.com'
        $user = User::where('email', 'admin@gmail.com')->first();

        if ($user) {
            // Si el usuario existe, asignarle el rol de administrador
            $user->assignRole($adminRole);
        } else {
            // Crear un nuevo usuario y asignarle el rol de administrador
            $user = User::create([
                'nombre' => 'Leandro',
                'apellido' => 'Gonzalez',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('7589Lean'), // Cambia esto por una contraseña segura
                'rol_id' => $adminRole->id, // Asigna el ID del rol al campo rol_id
            ]);

            // Asignar el rol al usuario
            $user->assignRole($adminRole);
        }
    }
}
