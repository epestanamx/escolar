<?php

use App\User;
use App\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Administrador';
        $user->email = 'admin@admin.com';
        $user->password = Hash::make('admin');
        $user->save();

        $admin = Role::where('name', '=', 'admin')->first();

        $user->attachRole($admin);
    }
}
