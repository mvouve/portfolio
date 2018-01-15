<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();

        $mvouve = new User();
        $mvouve->name = 'mvouve';
        $mvouve->email = 'mvouve@gmail.com';
        $mvouve->display_name = 'Marc Vouve';
        $mvouve->password = bcrypt('secret'); // change this when setup complete!
        $mvouve->save();
        $mvouve->roles()->attach($role_admin);
    }
}
