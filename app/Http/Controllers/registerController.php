<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class registerController extends Controller
{
    public function create() {
        return view('register');
    }

    public function store() {
        $attributes = request()->validate([
            'name'=> 'required|max:255',
            'username'=> 'required|max:255|min:3|unique:users,username',
            'email'=> 'required|email|max:255|unique:users,email',
            'password'=> 'required|max:255|min:6'
        ]);

        $attributes['adminkey'] = '0';
        $attributes['valid'] = '0';

        $user = User::create($attributes);

        auth()->login($user);

        session()->flash('succes', 'Your account has been created.');

        return redirect('/');
    }
}
