<?php
/**
 * Created by PhpStorm.
 * User: mvouve
 * Date: 12/27/2017
 * Time: 2:36 PM
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Post;
use App\Category;
use App\PostType;

class ProjectController extends Controller
{
    public function show($id) {
        $post = Post::where('slug', $id)->first();

        return view('portfolio.single', ['post' => $post]);
    }

    public function showAll() {
        $post_type = PostType::where('slug', 'project')->first();
        $posts = $post_type->posts()->whereNotNull('published_at')->orderBy('created_at', 'desc')->take(3)->get();
        $categories = Category::take(10)->get();

        return view('portfolio', ['posts' => $posts, 'categories' => $categories]);
    }
}