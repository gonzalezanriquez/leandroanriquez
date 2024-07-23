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
        $adminRole = Role::firstOrCreate(['name' => 'admin']);

        $user = User::where('email', 'admin@gmail.com')->first();
        
        if ($user) {
            $user->assignRole($adminRole);
        } else {
            // Crear un nuevo usuario y asignarle el rol de administrador
            $user = User::create([
                'name' => 'Leandro',
                'lastname' => 'Gonzalez',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('7589Lean'), // Cambia esto por una contraseña segura
            ]);

            $user->assignRole($adminRole);
        }
    }
}
