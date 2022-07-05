@extends('layouts.app')

@section('content')
<form action="{{ route('deck/create') }}" method="post">
@csrf
    <input type="text" name="deckname" placeholder="デッキ名" class="text-center">
        <select name="deckclass">
            <option value="エルフ">エルフ</option>
            <option value="ロイヤル">ロイヤル</option>
            <option value="ウィッチ">ウィッチ</option>
            <option value="ドラゴン">ドラゴン</option>
            <option value="ナイトメア">ナイトメア</option>
            <option value="ビショップ">ビショップ</option>
        </select>
    <input type='hidden' name='user_id' value='{{ Auth::user()->id }}'>
    <button type="submit">送信</button>
</form>
<div class="container">
    <div class="row">
        @foreach($decks as $deck)
            <div class="col-3 p-4">
                <div class="card">
                    <form action="{{ route('card/search') }}" method="post">
                        @csrf
                        <input type="image" src="{{ $deck->leader_card }}" class="card-img-top" alt="leader_card">
                        <input type="hidden" name="deckid" value="{{ $deck->id }}">
                        <input type="hidden" name="deckname" value="{{ $deck->name }}">
                        <input type="hidden" name="deckclass" value="{{ $deck->deck_class }}">
                    </form>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-center">{{ $deck->deck_class }}</li>
                        <li class="list-group-item text-center">{{ $deck->deck_name }}</li>
                    </ul>
                </div>
            </div> 
        @endforeach
    </div>
</div>
@endsection
