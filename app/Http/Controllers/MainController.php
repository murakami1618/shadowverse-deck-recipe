<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Deck;
use App\Models\Card;
use App\Models\Deck_card;
use App\Models\Extra_deck;

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
        $card_lists = Deck_card::where('deck_id', '=', $request->deckid)->get();
            foreach($card_lists as $card_list)
            {
                $card_id = $card_list->card_id;
                $cards = Card::where('id', '=', $card_id)->get();
                foreach($cards as $card)
                {

                }
                array_push($hairetu_card,$card);
            }
        return view('deck',compact('hairetu_card'));
    }
//リファクタリング(元CardSerach コントローラーの処理)
    public function card_search(Request $request)
    {
        $deck_id=$request->deckid;
        $deck_class=$request->deckclass;
        $hairetu_card = array();
        $ex_cards = array();
        $card_lists = Deck_card::where('deck_id', '=', $request->deckid)->get();
            foreach($card_lists as $card_list)
            {
                $card_id = $card_list->card_id;
                $cards = Card::where('id', '=', $card_id)->get();
                foreach($cards as $card)
                {

                }
                if($card->card_type == "フォロワー" || $card->card_type == "アミュレット" || $card->card_type == "スペル"){
                    array_push($hairetu_card,$card);
                }
            }

            $card_lists = Extra_deck::where('deck_id', '=', $request->deckid)->get();
            foreach($card_lists as $card_list)
            {
                $card_id = $card_list->card_id;
                $cards = Card::where('id', '=', $card_id)->get();
                foreach($cards as $card)
                {

                }
                    array_push($ex_cards,$card);
            }


        $class_cards = Card::where([['card_name','like',"%$request->search_card%"],['card_class','=',$request->deckclass]])->orderByRaw('cast(cost as signed) asc')->paginate(20);
        $neutral_cards = Card::where([['card_name','like',"%$request->search_card%"],['card_class','=','ニュートラル']])->orderByRaw('cast(cost as signed) asc')->paginate(20);
        return view('card_search', compact('class_cards','neutral_cards','hairetu_card','ex_cards','deck_id','deck_class'));
    }

    public function search_post()
    {
        $cards = Card::first();
        return view('deck');
    }

    public function post(Request $request)
    {
        if($request->cardtype === "フォロワー・エボルヴ")
        {
            $card_counts = Extra_deck::where([['deck_id', '=', $request->deckid],['card_id', '=', $request->cardid]])->count();
            $cards_counts = Extra_deck::where('deck_id', '=', $request->deckid)->count();

            if($cards_counts <= 9 && $card_counts <= 2){
                $Extra_deck = new Extra_deck();
                $Extra_deck->deck_id = $request->deckid;
                $Extra_deck->card_id = $request->cardid;
                $Extra_deck->save();
                return redirect(route('card/search', [
                    $request,
                ]));
            }elseif($card_counts >= 2){
                echo "同じカードは3枚以下にしてください";
            }elseif($cards_counts >= 9){
                echo "カードを10枚以下にしてください";
            }
        }

        $card_counts = Deck_card::where([['deck_id', '=', $request->deckid],['card_id', '=', $request->cardid]])->count();
        $cards_counts = Deck_card::where('deck_id', '=', $request->deckid)->count();
        if($cards_counts <= 49 && $card_counts <= 2)
        {
            $deck_card = new Deck_card();
            $deck_card->deck_id = $request->deckid;
            $deck_card->card_id = $request->cardid;
            $deck_card->save();
            
            return redirect(route('card/search', [
                $request,
            ]));
        }elseif($card_counts >= 2){
            echo "同じカードは3枚以下にしてください";
        }elseif($cards_counts >= 49){
            echo "カードを50枚以下にしてください";
        }
    }

    public function card_delete(Request $request)
    {
        if($request->cardtype =="フォロワー・エボルヴ"){
            $delete_cards = Extra_deck::where([['card_id', '=', $request->cardid],['deck_id', '=', $request->deckid]])->get();
            foreach($delete_cards as $delete_card)
            {
            }
            Extra_deck::destroy($delete_card->id);
            return redirect(route('card/search', [
                $request,
            ]));
        }

        $delete_cards = Deck_card::where([['card_id', '=', $request->cardid],['deck_id', '=', $request->deckid]])->get();
        foreach($delete_cards as $delete_card)
        {
        }
        Deck_card::destroy($delete_card->id);
    
        return redirect(route('card/search', [
            $request,
        ]));
    }

    public function deck_create(Request $request)
    {
        $deck_create = new Deck;
        switch ($request->deckclass) {
            case "エルフ":
                $leader_card = "https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD01/SD01-LD01.png";
                break;
            case "ロイヤル":
                $leader_card = "https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD02/SD02-LD01.png";
                break;
            case "ウィッチ":
                $leader_card = "https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_ld05.png";
                break;
            case "ドラゴン":
            $leader_card = "https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_ld07.png";
                break;
            case "ナイトメア":
            $leader_card = "https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_ld09.png";
                break;
            case "ビショップ":
            $leader_card = "https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD06/SD06-LD01.png";
                break;
        }
       
        $deck_create->leader_card = $leader_card;
        $deck_create->deck_name = $request->deckname;
        $deck_create->deck_class = $request->deckclass;
        $deck_create->make_user_id = $request->user_id;
        $deck_create->save();
        
        return redirect(route('card/search', [
            $request,
        ]));
    }
}
