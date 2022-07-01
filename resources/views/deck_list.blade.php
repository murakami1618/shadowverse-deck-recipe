@extends('layouts.app')
@section('content')

@foreach($decks as $deck)
<form action="{{ route('card/search') }}" method="post">
@csrf
        <input type="image" src="{{ $deck->leader_card }}">
        <input type="hidden" name="deckid" value="{{ $deck->id }}">
        <input type="hidden" name="deckclass" value="{{ $deck->deck_class }}">
    </form>    
    </br>
    <a>{{ $deck->deck_class }}</a>
    </br>
    <a>{{ $deck->deck_name }}</a>
    </br>
@endforeach
@endsection