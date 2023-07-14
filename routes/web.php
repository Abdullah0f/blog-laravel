<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
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
Route::post("/posts/{post:slug}/comments", [CommentController::class, "store"]);

Route::get("/register", [RegisterController::class, "create"])->middleware('guest');
Route::post("/register", [RegisterController::class, "store"])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::get("/login", [SessionsController::class, "create"])->middleware('guest');
Route::post("/login", [SessionsController::class, "store"])->middleware('guest');


Route::get("/admin/posts/create", [PostController::class, "create"])->middleware('admin');
Route::post("/admin/posts", [PostController::class, "store"])->middleware('admin');
