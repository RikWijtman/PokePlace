<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PublishController extends Controller
{
    public function publish($pokemon)
    {
        $update = Pokemon::find($pokemon);

        $update->published = 1;

        $update->save();

        $pokemons = Pokemon::all()->where('owner', auth()->user()->username);
        return view('profile', ['pokemons' => $pokemons]);
    }

        public function unpublish($pokemon)
        {
            $update = Pokemon::find($pokemon);

            $update->published = 0;

            $update->save();

            $pokemons = Pokemon::all()->where('owner', auth()->user()->username);
            return view('profile', ['pokemons' => $pokemons]);
        }
}
