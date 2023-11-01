<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


use App\Models\Pokemon;
use App\Models\User;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index() {
        $pokemons = Pokemon::all();
        return view('pokemon.index',['pokemons'=>$pokemons]);
    }

    public function destroy(Pokemon $pokemon) {
        $pokemon->delete();
        return redirect('/pokemon');
    }

    public function search() {
        $attributes = request()->validate([
            'search'=> '',
            'option'=> ''
        ]);

        $pokemons = Pokemon::all()->where($attributes['option'], $attributes['search']);
        return view('pokemon.index',['pokemons'=>$pokemons]);

    }
}

