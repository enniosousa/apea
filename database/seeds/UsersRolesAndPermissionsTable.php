<?php

use Illuminate\Database\Seeder;

class UsersRolesAndPermissionsTable extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $roles = [
            ['name' => 'admin', 'display_name' => 'Administrador', 'description' => 'Administrador da aplicação'],
            ['name' => 'aluno', 'display_name' => 'Aluno', 'description' => 'Alunos que compram ingressos'],
        ];
        foreach ($roles as $role) {
            $rol = \App\Role::create($role);
        }
        $adminRole = \App\Role::where('name', 'admin')->first();

        $adminData = [
            'name' => 'Ennio José Freitas Sousa',
            'email' => 'ennio@enniosousa.com.br',
            'password' => bcrypt('05908755583'),
            'fat_register' => null,
        ];
        $admin = \App\User::create($adminData);
        $admin->roles()->sync($adminRole);
        
        $vasconcellosData = [
            'name' => 'Vasconcellos',
            'email' => 'jvasconcellosjr@uol.com.br',
            'password' => bcrypt('jvasconcellosjr'),
            'fat_register' => null,
        ];
        $vasconcellos = \App\User::create($vasconcellosData);
        $vasconcellos->roles()->sync($adminRole);
    }

}
