<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    function create()
    {
        return view('register.create');
    }
    function store()
    {
        $attributes = request()->validate([
            'username' => 'required|max:255|min:3|unique:users,username',
            'email' => 'required|email|max:255|min:3|unique:users,email',
            'password' => 'required|max:255|min:3',
        ]);
        User::create($attributes);

        auth()->attempt(request(['email', 'password']));

        return redirect('/')->with('success', 'Your account has been created.');
    }
}
