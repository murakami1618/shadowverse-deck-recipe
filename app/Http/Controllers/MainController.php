<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Deck;
use App\Models\Card;
use App\Models\Deck_card;

class MainController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function get_decks()
    {
        $decks = Deck::where('make_user_id', '=', Auth::user()->id)->get();
        return view('deck_list', compact('decks'));
    }

    public function get_cards(Request $request)
    {
        $hairetu_card = array();
        $card_lists = Deck_card::where('deck_id', '=', $request->deck_id)->get();
            foreach($card_lists as $card_list)
            {
                $card_id = $card_list->card_id;
                $cards = Card::where('id', '=', $card_id)->get();
                foreach($cards as $card)
                {

                }
                array_push($hairetu_card,$card);
            }
        return view('test',compact('hairetu_card'));
    }

}