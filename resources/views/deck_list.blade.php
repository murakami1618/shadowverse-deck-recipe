@extends('layouts.app')
@section('content')

@foreach($decks as $deck)
    <img src={{ $deck->leader_card }}>
    </br>
    <a>{{ $deck->deck_class }}</a>
    </br>
    <a>{{ $deck->deck_name }}</a>
    </br>
@endforeach
@endsection