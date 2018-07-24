<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Post;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PostType;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class AdminController extends Controller
{
    /**
     * AdminController constructor
     *
     * Includes Authentication Middleware
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Handles unauthenticated Requests.
     *
     * @param $request Request An incoming request.
     * @param AuthenticationException $exception The problem with the request
     *
     * @return Redirect Where to send the request (login)
     */
    protected function unauthenticated($request, AuthenticationException $exception) {
        return redirect('login');
    }

    /**
     * @param string $post_type The slug from the post_type table.
     *
     * @return View An Admin list view.
     */
    public function all($post_type = 'blog') {
        $post_type = PostType::where('slug', $post_type)->first();
        $posts = $post_type->posts()->paginate(10);

        return view('admin.posts.list', ['posts' => $posts, 'menu_active' => 'list-' . $post_type]);
    }

    /**
     * Create a new post
     *
     * @param $post_type
     * @return View
     */
    public function add($post_type) {
        $categories = Category::all();

        return view('admin.posts.new', ['post_type' => $post_type, 'menu_active' => 'new-' . $post_type, 'categories' => $categories]);
    }

    public function edit($id) {
        $post = Post::find($id);
        $categories = $this->getCategories($post);
        $post_type = $post->postType->slug;
        $images = Storage::disk(ImageController::IMAGE_DRIVE)->allFiles(ImageController::IMAGE_DIR);

        return view('admin.posts.new', [
            'post'          => $post,
            'categories'    => $categories,
            'post_type'     => $post_type,
            'menu_active'   => 'new-' . $post_type,
            'images'        => $images,
        ]);
    }

    /**
     * @param $id integer
     * @return Redirect to Edit.
     */
    public function save($id = null) {
        $post = [
            'title' => $_POST['title'],
            'body'  => $_POST['body'],
            'slug'  => str_replace([' ', '_'], '-', strtolower($_POST['title'])),
        ];
        if ($id != null) {
            $post['id'] = $id;
        }

        Post::updateOrCreate($post);

        return redirect('admin/edit/' . $id);
    }

    /**
     * Gets all the categories associated with a post.
     *
     * @param $post post to pull the categories from
     * @return Category[]
     */
    private function getCategories($post) {
        $categories = Category::orderBy('name', 'asc')->get();
        $post_categories = $post->categories()->orderBy('name', 'asc')->get();
        $post_category_idx = 0;
        for($i = 0; $i < sizeof($categories); ++$i) {
            if($post_categories->count() <= $post_category_idx) {
                break;
            }
            if($post_categories[$post_category_idx]->id == $categories[$i]->id) {
                $categories[$i]->checked = true;
                $post_category_idx++;
            } else {
                $categories[$i]->checked = false;
            }
        }

        return $categories;
    }
}
