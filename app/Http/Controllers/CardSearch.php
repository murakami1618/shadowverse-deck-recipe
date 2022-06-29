<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;

class CardSearch extends Controller
{
    public function card_search(Request $request)
    {
        $cards = Card::where([['card_name','like',"%$request->search_card%"],['card_class','=','ドラゴン']])->orderByRaw('cast(cost as signed) asc')->paginate(20);
        $neutral_cards = Card::where([['card_name','like',"%$request->search_card%"],['card_class','=','ニュートラル']])->orderByRaw('cast(cost as signed) asc')->paginate(20);
        return view('card_search', compact('cards','neutral_cards'));
    }
    public function search_post()
    {
        $cards = Card::first();
        return view('search');
    }
    
    public function post(Request $request)
    {
        dd($request->card);
    }　
}
