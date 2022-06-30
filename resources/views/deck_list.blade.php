@extends('layouts.app')
@section('content')

@foreach($decks as $deck)
<form action="{{ route('/test') }}" method="post">
@csrf
        <input type="image" src="{{ $deck->leader_card }}">
        <input type="hidden" name="deck_id" value="{{ $deck->id }}">
    </form>    
    </br>
    <a>{{ $deck->deck_class }}</a>
    </br>
    <a>{{ $deck->deck_name }}</a>
    </br>
@endforeach
@endsection