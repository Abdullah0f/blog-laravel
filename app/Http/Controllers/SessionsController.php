<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

use function Symfony\Component\String\b;

class SessionsController extends Controller
{
    //
    function create()
    {
        return view('sessions.create');
    }
    function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (auth()->attempt($attributes)) {
            session()->regenerate();
            return redirect('/')->with('success', 'Welcome Back!');
        }
        return back()->withErrors(['email' => 'Your provided credentials could not be verified.']);
    }
    function destroy()
    {
        auth()->logout();
        session()->flush("success", "Goodbye!");
        return redirect('/');
    }
}
