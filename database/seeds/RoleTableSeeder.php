<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = new Role();
        $role_user->name = 'User';
        $role_user->description = 'basic user registered with the site';
        $role_user->save();

        $role_admin = new Role();
        $role_admin->name = 'Admin';
        $role_admin->description = 'Administrator user';
        $role_admin->save();
    }
}