@extends('layouts.app')

@section('content')
<!-- PC画面 -->
<div class="container d-none d-lg-block">
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
                        <li class="list-group-item text-center p-3">{{ $deck->deck_name }}</li>
                        <li class="list-group-item text-center p-3">{{ $deck->deck_class }}</li>
                        <form action="{{ route('deck/delete') }}" method="post">
                            @csrf
                            <input type="hidden" name="deckid" value="{{ $deck->id }}">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-outline-danger">削除</button>
                            </div>
                        </form>
                    </ul>
                </div>
            </div> 
        @endforeach
        <div class="col-3 p-4">
                <div class="card">
                        <img src="https://m.media-amazon.com/images/I/41IiTq4ZU5L._SL500_.jpg" class="card-img-top " alt="leader_card">
                    <ul class="list-group list-group-flush">
                        <form action="{{ route('deck/create') }}" method="post">
                            @csrf
                            <li class="list-group-item text-center">
                                <input type="text" name="deckname" placeholder="デッキ名" class="text-center form-control" required>
                                <input type='hidden' name='user_id' value='{{ Auth::user()->id }}'>
                            </li>
                            <li class="list-group-item text-center"> 
                                <select class="form-select p-2 text-center" aria-label="Default select example" name="deckclass">
                                    <option value="エルフ">エルフ</option>
                                    <option value="ロイヤル">ロイヤル</option>
                                    <option value="ウィッチ">ウィッチ</option>
                                    <option value="ドラゴン">ドラゴン</option>
                                    <option value="ナイトメア">ナイトメア</option>
                                    <option value="ビショップ">ビショップ</option>
                                </select>
                            </li>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-outline-primary">新規作成</button>
                            </div>
                        </form>
                    </ul>
                </div>
            </div> 
    </div>
</div>

<!-- スマホ画面 -->

<div class="container d-lg-none d-block">
    <div class="row">
        @foreach($decks as $deck)
            <div class="col-6 p-4">
                <div class="card">
                    <form action="{{ route('card/search') }}" method="post">
                        @csrf
                        <input type="image" src="{{ $deck->leader_card }}" class="card-img-top" alt="leader_card">
                        <input type="hidden" name="deckid" value="{{ $deck->id }}">
                        <input type="hidden" name="deckname" value="{{ $deck->name }}">
                        <input type="hidden" name="deckclass" value="{{ $deck->deck_class }}">
                    </form>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-center p-3">{{ $deck->deck_name }}</li>
                        <li class="list-group-item text-center p-3">{{ $deck->deck_class }}</li>
                        <form action="{{ route('deck/delete') }}" method="post">
                            @csrf
                            <input type="hidden" name="deckid" value="{{ $deck->id }}">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-outline-danger">削除</button>
                            </div>
                        </form>
                    </ul>
                </div>
            </div> 
        @endforeach
        <div class="col-6 p-4">
                <div class="card">
                        <img src="https://m.media-amazon.com/images/I/41IiTq4ZU5L._SL500_.jpg" class="card-img-top " alt="leader_card">
                    <ul class="list-group list-group-flush">
                        <form action="{{ route('deck/create') }}" method="post">
                            @csrf
                            <li class="list-group-item text-center">
                                <input type="text" name="deckname" placeholder="デッキ名" class="text-center form-control" required>
                                <input type='hidden' name='user_id' value='{{ Auth::user()->id }}'>
                            </li>
                            <li class="list-group-item text-center"> 
                                <select class="form-select p-3 text-center" aria-label="Default select example" name="deckclass">
                                    <option value="エルフ">エルフ</option>
                                    <option value="ロイヤル">ロイヤル</option>
                                    <option value="ウィッチ">ウィッチ</option>
                                    <option value="ドラゴン">ドラゴン</option>
                                    <option value="ナイトメア">ナイトメア</option>
                                    <option value="ビショップ">ビショップ</option>
                                </select>
                            </li>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-outline-primary">新規作成</button>
                            </div>
                        </form>
                    </ul>
                </div>
            </div> 
    </div>
</div>
@endsection
