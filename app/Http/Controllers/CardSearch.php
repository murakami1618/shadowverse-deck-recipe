<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;

class CardSearch extends Controller
{
    public function card_search()
    {
        $cards = Card::first();
        return view('card_search', compact('cards'));
    }
}
