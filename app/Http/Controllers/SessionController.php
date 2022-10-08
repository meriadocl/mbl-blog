<?php

namespace App\Http\Controllers;

class SessionController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        // TODO
        $attributes = request()->validate([
            'email' => ['required', 'email', 'exists:users,email'],
            'password' => ['required']
        ]);

        if (!auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Your email could not be verified.'
            ]);
        }
        session()->regenerate();
        return redirect('/')->with('success', 'Welcome back!');
    }
    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', 'Goodbye!');
    }
}
