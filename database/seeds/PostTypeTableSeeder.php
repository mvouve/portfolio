<?php

use Illuminate\Database\Seeder;
use App\PostType;

class PostTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blog = new PostType();
        $blog->name = 'Blog';
        $blog->slug = 'blog';
        $blog->save();

        $project = new PostType();
        $project->name = 'Project';
        $project->slug = 'project';
        $project->save();
    }
}
