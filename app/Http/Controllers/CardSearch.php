<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;
use App\Models\Deck_card;

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
        $deckid=2;

        $deck_card = new Deck_card();
        $deck_card->deck_id = $deckid;
        $deck_card->card_id = $request->cardid;
        $deck_card->save();


        // $deck_cards=Deck_card::get();
        // $make_dec_card = array();
        // foreach($deck_cards as $card){
        //     $cards_info=Card::where('id','=',$card->card_id)->orderByRaw('cast(cost as signed) asc')->paginate(20);
        //     foreach($cards_info as $card_info){
        //         //echo $card_info->card_name;
        //     array_push($make_dec_card,$card_info);
        //     }
        // }

    return redirect('/');  
    }
}

