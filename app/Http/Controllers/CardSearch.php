<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;

class CardSearch extends Controller
{
    public function card_search(Request $request)
    {
        $cards = Card::where('card_name','like',"%$request->search_card%")->orderByRaw('cast(cost as signed) asc')->paginate(12);
        return view('card_search', compact('cards'));
    }
    public function search_post()
    {
        $cards = Card::first();
        return view('search');
    }
}
