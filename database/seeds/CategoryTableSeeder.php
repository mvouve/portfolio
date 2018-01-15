<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $php = new Category();
        $php->name = 'PHP';
        $php->slug = 'php';
        $php->save();

        $cplusplus = new Category();
        $cplusplus->name = 'C++';
        $cplusplus->slug = 'cplusplus';
        $cplusplus->save();

        $golang = new Category();
        $golang->name = 'Go';
        $golang->slug = 'golang';
        $golang->save();

    }
}
