<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PostType;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    protected function unauthenticated($request, AuthenticationException $exception) {
        return redirect('login');
    }

    public function allBlogs() {
        $post_type = PostType::where('slug', 'blog')->first();
        $posts = $post_type->posts()->paginate(10);

        return view('admin.posts.list', ['posts' => $posts, 'post_type' => 'blog']);
    }

    public function allProjects() {
        $post_type = PostType::where('slug', 'project')->first();
        $posts = $post_type->posts()->paginate(10);

        return view('admin.posts.list', ['posts' => $posts, 'post_type' => 'project']);
    }
}
