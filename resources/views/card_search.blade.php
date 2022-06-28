@extends('layouts.app')

@section('content')
@foreach($cards as $card)
    <img src='{{$card->card_img_url}}' class='w-25'><br>
    <a>{{ $card->card_rea }}</a>
    <a>{{ card->cost }}コスト:</a>
    <a>{{ $card->card_type }}</a>
    <br>
    <a>{{ $card->card_name }}</a>
    <br>
@endforeach
@endsection