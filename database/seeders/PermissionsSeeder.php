<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$estudiante = Role::create(['name' => 'Estudiante']);
    	$integrador = Role::create(['name' => 'Integrador']);
    	$profesor 	= Role::create(['name' => 'Profesor']);

        Permission::create(['name' => 'Dashboard Estudiante']);
        Permission::create(['name' => 'Dashboard Integrador']);
        Permission::create(['name' => 'Dashboard Profesor']);

        $estudiante->givePermissionTo('Dashboard Estudiante');
        $integrador->givePermissionTo('Dashboard Integrador');
        $profesor->givePermissionTo('Dashboard Profesor');

        // hardcoded, ya después hago el crud de roles 

        $user_estudiante = User::find(1); // Mariana Antonio Sol
        $user_estudiante->assignRole('Estudiante');

        $user_integrador = User::find(2); // Mario Daniel Sandoval
        $user_integrador->assignRole('Integrador');

        $user_profesor	 = User::find(3); // José Sánchez Morales
        $user_profesor->assignRole('Profesor');

        $user_profesor   = User::find(4); // Agregando a Joaquín y yo como profesores para pruebas
        $user_profesor->assignRole('Profesor');

        $user_profesor   = User::find(5); // Agregando a Joaquín y yo como profesores para pruebas
        $user_profesor->assignRole('Profesor');                    
        
    }
}
