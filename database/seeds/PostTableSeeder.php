<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Category;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Post::class, 50)->create();

        // attach random categories to new posts
        Post::all()->each(function($p) {
            $categories = Category::inRandomOrder()->take(rand(0, 2))->get();
            $p->categories()->attach($categories);
        });
    }
}
