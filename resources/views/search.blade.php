@extends('layouts.app')

@section('content')
<form action="{{ route('card/search') }}" method='post'> 
@csrf
    <input type='text' name='search_card' placeholder='カード名を入力'>
    <input type='submit'>
</fomr>
@endsection