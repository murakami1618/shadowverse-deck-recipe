@extends('layouts.app')

@section('content')
<img src='{{$cards->card_img_url}}'><br>
<a>{{$cards->card_name}}</a>
<a>{{$cards->card_type}}</a>
<a>{{$cards->cost}}</a>
@endsection