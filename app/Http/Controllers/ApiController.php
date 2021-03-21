<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class ApiController extends Controller
{
    // This method return that all post rows

    public function index(Request $request) {
        $posts = Post::all();

        return response($posts, 200);
    }

    // Return post with post_id

    public function get_post(Request $request) {
        $post = Post::find($request->post_id);

        if ($post == null) {
            return response(['message' => 'No posts'], 404);
        }

        return response($post, 200);
    }
}
