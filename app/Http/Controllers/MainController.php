<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Deck;
use App\Models\Card;
use App\Models\Deck_card;
use App\Models\Extra_deck;
use App\Models\Token;

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
                $cards = Card::where('id', '=', $card_id)->orderByRaw('cost','asc')->get();
                foreach($cards as $card)
                {
                }
                array_push($hairetu_card,$card);
            }
        // return view('deck',compact('hairetu_card'));
    }
    
//リファクタリング(元CardSerach コントローラーの処理)
    public function card_search(Request $request)
    {
        $error="";
        $deck_id=$request->deckid;
        $deck_class=$request->deckclass;
        $hairetu_card = array();
        $ex_cards = array();
        $tokens = array();
        $card_lists = Deck_card::where('deck_id', '=', $request->deckid)->get();
        foreach($card_lists as $card_list)
        {
            $card_id = $card_list->card_id;
            $cards = Card::where('id', '=', $card_id)->get();
            foreach($cards as $card)
            {

            }
                $card['count'] = $card_list->card_count;
                array_push($hairetu_card,$card);
        }

        $card_lists = Extra_deck::where('deck_id', '=', $request->deckid)->get();
        foreach($card_lists as $card_list)
        {
            $card_id = $card_list->card_id;
            $cards = Card::where('id', '=', $card_id)->get();
            foreach($cards as $card)
            {

            }
            $card['count'] = $card_list->card_count;
            array_push($ex_cards,$card);
            
        }

        $card_lists = Token::where('deck_id', '=', $request->deckid)->get();
        foreach($card_lists as $card_list)
        {
            $card_id = $card_list->card_id;
            $cards = Card::where('id', '=', $card_id)->get();
            foreach($cards as $card)
            {

            }
          
            $card['count'] = $card_list->card_count;
            array_push($tokens,$card);
        }
        array_multisort(array_column($hairetu_card, 'cost'), SORT_ASC, $hairetu_card);

        $class_cards = Card::where('card_name','like',"%$request->search_card%")
        ->where('card_class','=',$request->deckclass)
        ->where(function($query){
            $query->where('card_type','=','フォロワー')
            ->orWhere('card_type','=','アミュレット')
            ->orWhere('card_type','=','スペル');
        })
        ->orderByRaw('cast(cost as signed) asc')->get();

        $neutral_cards = Card::where([['card_name','like',"%$request->search_card%"],['card_class','=','ニュートラル']])
        ->where(function($query){
            $query->where('card_type','=','フォロワー')
            ->orWhere('card_type','=','アミュレット')
            ->orWhere('card_type','=','スペル');
        })
        ->orderByRaw('cast(cost as signed) asc')->get();

        $class_excards = Card::where('card_name','like',"%$request->search_card%")
        ->where('card_class','=',$request->deckclass)
        ->where(function($query){
            $query->where('card_type','=','フォロワー・エボルヴ');
        })
        ->orderByRaw('cast(cost as signed) asc')->get();

        $neutral_excards = Card::where('card_name','like',"%$request->search_card%")
        ->where('card_class','=','ニュートラル')
        ->where(function($query){
            $query->where('card_type','=','フォロワー・エボルヴ');
        })
        ->orderByRaw('cast(cost as signed) asc')->get();

        $class_tokens = Card::where('card_name','like',"%$request->search_card%")
        ->where('card_type','like',"%トークン%")
        ->where('card_class','=',$request->deckclass)
        ->orderByRaw('cast(cost as signed) asc')->get();

        return view('card_search', compact('class_cards','neutral_cards','hairetu_card','ex_cards','deck_id','deck_class','error','class_excards','neutral_excards','class_tokens','tokens'));
    }

    public function search_post()
    {
        $cards = Card::first();
        return view('deck');
    }

    public function post(Request $request)
    {
        Deck_card::where('deck_id', $request->deckid)->delete();
        Extra_deck::where('deck_id', $request->deckid)->delete();
        Token::where('deck_id', $request->deckid)->delete();
        
        $all_card = 0;
        for($i=0;$i<=49;$i++)
        {
            $cardid = "cardid".$i;
            if(!empty($request->$cardid))
            {
                $all_card++;
            };
        }
        for($i=0;$i<$all_card;$i++)
        {
            $cardid = "cardid".$i;
            $cardcount = "cardcount".$i;
            $deck_card = new Deck_card();
            $deck_card->deck_id = $request->deckid;
            $deck_card->card_id = $request->$cardid;
            $deck_card->card_count = $request->$cardcount;
            $deck_card->save();
        }
    
        $all_card = 0;
        for($i=0;$i<=9;$i++)
        {
            $excardid = "excardid".$i;
            if(!empty($request->$excardid))
            {
                $all_card++;
            };
        }
        for($i=0;$i<$all_card;$i++)
        {
            $excardid = "excardid".$i;
            $excardcount = "excardcount".$i;
            $exdeck_card = new Extra_deck();
            $exdeck_card->deck_id = $request->deckid;
            $exdeck_card->card_id = $request->$excardid;
            $exdeck_card->card_count = $request->$excardcount;
            $exdeck_card->save();
        }

        $all_card = 0;
        for($i=0;$i<=9;$i++)
        {
            $tcardid = "tcardid".$i;
            if(!empty($request->$tcardid))
            {
                $all_card++;
            };
        }
        for($i=0;$i<$all_card;$i++)
        {
            $tcardid = "tcardid".$i;
            $tcardcount = "tcardcount".$i;
            $tdeck_card = new Token();
            $tdeck_card->deck_id = $request->deckid;
            $tdeck_card->card_id = $request->$tcardid;
            $tdeck_card->card_count = $request->$tcardcount;
            $tdeck_card->save();
        }
        return redirect(route('card/search', [
                    $request,
                ]));
    }

    public function card_delete(Request $request)
    {
        if($request->cardtype =="フォロワー・エボルヴ"){
            $delete_cards = Extra_deck::where([['card_id', '=', $request->cardid],['deck_id', '=', $request->deckid]])->get();
            foreach($delete_cards as $delete_card)
            {
            }
            if(!empty($delete_card->id)){
                Extra_deck::destroy($delete_card->id);
            }
            return redirect(route('card/search', [
                $request,
            ]));
        }

        if(preg_match('/トークン/',$request->cardtype)){
            $delete_cards = Token::where([['card_id', '=', $request->cardid],['deck_id', '=', $request->deckid]])->get();
            foreach($delete_cards as $delete_card)
            {
            }
            if(!empty($delete_card->id)){
                Token::destroy($delete_card->id);
            }
            return redirect(route('card/search', [
                $request,
            ]));
        }


        $delete_cards = Deck_card::where([['card_id', '=', $request->cardid],['deck_id', '=', $request->deckid]])->get();
        foreach($delete_cards as $delete_card)
        {
        }
        if(!empty($delete_card->id)){
            Deck_card::destroy($delete_card->id);
        }
    
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
        
        return redirect(route('/', [
            $request,
        ]));
    }

    public function deck_delete(Request $request)
    {
        $deck_id = $request->deckid;
        Deck::where('id', '=', $deck_id)->delete();
        Deck_card::where('deck_id', '=', $deck_id)->delete();
        
        return redirect(route('/', [
            $request,
        ]));
    }
}
