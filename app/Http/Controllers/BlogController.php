<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;

class BlogController extends Controller
{
    public function index() {
        $blogs = Post::all();

        return view('blog.index')->with(['blogs' => $blogs]);
    }

    public function store (Request $request) {
        //dd($request);
        Post::create([
            'id' => $request -> id,
            'title' => $request -> title,
            'body' => $request -> body
        ]);

        return back();
    }
}
