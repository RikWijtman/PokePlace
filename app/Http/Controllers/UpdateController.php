<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;
use function Psy\debug;

class UpdateController extends Controller
{
    public function create($id) {
        $pokemon = Pokemon::where('id', $id)->first();
        return view('update',['pokemon'=>$pokemon]);
    }

    public function update($id) {
        $attributes = request()->validate([
            'name'=> 'required|min:2|max:255',
            'type1'=> 'required|min:2|max:255',
            'type2'=> '',
            'img'=> '',
            'rgn'=> '',
            'des'=> ''
        ]);

        $update = Pokemon::find($id);

        $update->name = $attributes['name'];
        $update->type1 = $attributes['type1'];
        $update->type2 = $attributes['type2'];
        $update->rgn = $attributes['rgn'];
        $update->des = $attributes['des'];
        $update->img = $attributes['img'];

        $update->save();

        $pokemons = Pokemon::all();
        return view('pokemon.index',['pokemons'=>$pokemons]);
    }
}
