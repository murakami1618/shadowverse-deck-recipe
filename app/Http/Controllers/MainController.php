<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Deck;

class MainController extends Controller
{
    public function get_decks()
    {
        $decks = Deck::where('make_user_id', '=', Auth::user()->id)->get();
        return view('deck_list', compact('decks'));
    }
}