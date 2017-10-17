<?php

use App\Permission;
use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Role();
        $admin->name         = 'admin';
        $admin->display_name = 'Administrador';
        $admin->description  = 'Administrador del sistema';
        $admin->save();

        $permisos = Permission::all();

        foreach ($permisos as $key => $permiso) {
            $admin->attachPermission($permiso);
        }
    }
}
