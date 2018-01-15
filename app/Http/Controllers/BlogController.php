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

class BlogController extends Controller
{
    private $PostType;

    /**
     * @var Categories to display in the sidebar.
     */
    private $Categories;

    private $NewPosts;


    public function __construct() {
        $this->PostType = PostType::where('slug', 'blog')->first();
        $this->NewPosts = $this->PostType->posts()->orderBy('created_at', 'desc')->take(3)->get();
        $this->Categories = Category::inRandomOrder()->take(10)->get();
    }

    public function show($id) {
        $post = Post::where('slug', $id)->first();

        return view('blog.single', ['post' => $post, 'categories' => $this->Categories, 'new_posts' => $this->NewPosts]);
    }

    public function showAll() {
        $posts = $this->PostType->posts()->orderBy('created_at', 'desc')->paginate(10);

        return view('blog', ['posts' => $posts, 'categories' => $this->Categories, 'new_posts' => $this->NewPosts]);
    }

    public function showCategory($id) {
        $posts = Category::where('slug', $id)->first()->posts()->where('post_type', $this->PostType->id)->paginate(10);

        return view('blog', ['posts' => $posts, 'categories' => $this->Categories, 'new_posts' => $this->NewPosts]);
    }
}