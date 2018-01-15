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

class ProjectController extends Controller
{
    public function show($id) {
        $post = Post::where('slug', $id)->first();

        return view('portfolio.single', ['post' => $post]);
    }

    public function showAll() {
        $posts = Post::where('post_type', 2)->paginate(30);
        $categories = Category::take(10)->get();

        return view('portfolio', ['posts' => $posts, 'categories' => $categories]);
    }
}