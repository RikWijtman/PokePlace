<?php

namespace App\Http\Controllers;


use Nette\Schema\ValidationException;

class sessionController extends Controller
{
    public function create() {
        return view('login');
    }

    public function store() {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt($attributes)) {
            return redirect('/')->with('succes','Welcome Back!');
        }

        return back()
            ->withInput()
            ->withErrors(['email' => 'Your provided credentials could not be verified']);

        //throw ValidationException::withMessages([
        //    'email' => 'Your provided credentials could not be verified'
        //]);
    }

    public function destroy() {
        auth()->logout();
        return redirect('/')->with('succes', 'Goodbye!');
    }
}
