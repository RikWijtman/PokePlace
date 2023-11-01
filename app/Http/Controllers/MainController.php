<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {

        $pageTitle = 'test';

        return 'Test';
    }

    public function create()
    {
        $pokemons = Pokemon::all()->where('owner', auth()->user()->username);
        return view('profile',['pokemons'=>$pokemons]);
    }
}
