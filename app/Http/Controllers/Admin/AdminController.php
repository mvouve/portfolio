<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Post;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PostType;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    protected function unauthenticated($request, AuthenticationException $exception) {
        return redirect('login');
    }

    public function all($post_type = 'blog') {
        $post_type = PostType::where('slug', $post_type)->first();
        $posts = $post_type->posts()->paginate(10);

        return view('admin.posts.list', ['posts' => $posts, 'menu_active' => 'list-' . $post_type]);
    }

    public function add($post_type) {
        $categories = Category::all();

        return view('admin.posts.new', ['post_type' => $post_type, 'menu_active' => 'new-' . $post_type, 'categories' => $categories]);
    }

    public function edit($id) {
        $post = Post::find($id);
        $categories = $this->getCategories($post);
        $post_type = $post->postType->slug;

        return view('admin.posts.new', ['post' => $post, 'categories' => $categories, 'post_type' => $post_type, 'menu_active' => 'new-' . $post_type]);
    }

    private function getCategories($post) {
        $categories = Category::orderBy('name', 'asc')->get();
        $post_categories = $post->categories()->orderBy('name', 'asc')->get();
        $post_category_idx = 0;
        for($i = 0; $i < sizeof($categories); ++$i) {
            if($post_categories[$post_category_idx]->id == $categories[$i]->id) {
                $categories[$i]->checked = true;
                $post_category_idx++;
                if($post_categories->count() <= $post_category_idx) {
                    break;
                }
            } else {
                $categories[$i]->checked = false;
            }
        }

        return $categories;
    }
}
