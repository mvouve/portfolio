<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    protected function unauthenticated($request, AuthenticationException $exception) {
        return redirect('login');
    }

    public function index() {
        $posts = Post::all();

        return view('admin.posts.list', ['posts' => $posts]);
    }
}
