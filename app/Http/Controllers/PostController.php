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
        return view('posts.index', [
            'posts' =>  Post::latest()->filter(request(["search", "category", "author"]))->get(),
        ]);
    }
    function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }
}
