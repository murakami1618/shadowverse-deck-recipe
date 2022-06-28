@extends('layouts.app')

@section('content')

<div class='p-5'>
        <div class="card-header">
                <form action="{{ route('card/search') }}" method='post'> 
                        @csrf
                        <input type='text' name='search_card' placeholder='カード名を入力'>
                        <input type='submit'>
                </form>
        </div>
        <div class="justify-content-center card-body row">
@foreach($cards as $card)

                <img src='{{$card->card_img_url}}' class='p-1' style="width: 10%;">

@endforeach
                <div class="d-flex justify-content-center">
                        {{ $cards->appends(request()->input())->links()}}
                </div>
        </div>
</div>


<div class='p-5'>
        <div class="card-header">
                <form action="{{ route('card/search') }}" method='post'> 
                        @csrf
                        <input type='text' name='search_card' placeholder='カード名を入力'>
                        <input type='submit'>
                </form>
        </div>
        <div class="justify-content-md-center card-body row">
@foreach($neutral_cards as $card)
        <img src='{{$card->card_img_url}}' class='p-1' style="width: 10%;">
@endforeach
        <div class="d-flex justify-content-center">
                {{ $cards->appends(request()->input())->links()}}
        </div>
</div>
@endsection
