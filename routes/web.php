<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;

use App\Http\Controllers\BlogController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about-me', function () {
    return view('about_me');
})->name('about_me');

Route::get('/contact-me', function () {
    return view('contact_me');
})->name('contact_me');


Route::get('post/create', function() {
    DB::table('post')-> insert([
        'title' => 'The Book Thief',
        'body' => 'The Book Thief is a story about a girl growing up in Germany during World War II. She steals books, learns to read, and finds comfort in words.'
        ]);
});

/* Route::get('post', function(){
    $post = Post::find(2);
    return $post;
}); */

Route::get('post', [BlogController::class, 'index']);

Route::get('blog/create', function() {
    return view('blog.create');
});

Route::post('blog/create', [BlogController::class, 'store']) -> name('add-blog');

Route::get('post/{id}', [BlogController::class, 'get_post']);