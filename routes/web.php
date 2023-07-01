<?php

use App\Models\Post;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// if / then redirect to /posts
Route::get("/", function () {
    return redirect("/posts");
});
Route::get('/posts', function () {
    return view('posts', ['posts' =>  Post::all()]);
});
Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['post' => $post]);
});
