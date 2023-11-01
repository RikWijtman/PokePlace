<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use App\Models\user;
use Illuminate\Http\Request;

class creationController extends Controller
{
    public function create() {
        return view('create');
    }

    public function store() {
        $attributes = request()->validate([
            'name'=> 'required|min:2|max:255',
            'type1'=> 'required|min:2|max:255',
            'type2'=> '',
            'img'=> '',
            'rgn'=> '',
            'des'=> ''
        ]);

        $attributes['owner'] = auth()->user()->username;
        $attributes['published'] = true;

        $poke = Pokemon::create($attributes);


        $update = User::find(auth()->user()->id);

        $update->valid = 1;

        $update->save();

        return redirect('/');
    }
}
