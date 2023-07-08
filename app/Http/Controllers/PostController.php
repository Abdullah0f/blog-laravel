<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    function index()
    {
        return view('posts', [
            'posts' =>  Post::latest()->filter(request(["search"]))->get(),
            'categories' => Category::all(),
        ]);
    }
    function show(Post $post)
    {
        return view('post', ['post' => $post]);
    }
}
