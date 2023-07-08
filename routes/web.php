<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
Route::get('/posts', [PostController::class, "index"])->name('home');

Route::get('/posts/{post:slug}', [PostController::class, "show"]);
