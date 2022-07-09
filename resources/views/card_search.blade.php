@extends('layouts.app')

@section('content')
<div class="container">
      <div class="justify-content-center card-body row card">
      {{  $error  }}
      <ul class="nav nav-tabs mt-5" role="tablist">
          <li class="nav-item" role="presentation">
            <a href="#photo1" id="tab1" class="nav-link active" role="tab" data-bs-toggle="tab" aria-selected="true"> {{ $deck_class }} </a>
          </li>
          <li class="nav-item" role="presentation">
            <a href="#photo2" id="tab2" class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false"> エクストラデッキ</a>
          </li>
        </ul>

      <div class="tab-content">

        <div id="photo1" class="tab-pane active" role="tabpanel" aria-labelledby="tab1">
          <div class="justify-content-center card-body row">
          <?php $i=0; ?>
          <div style="display:inline-flex" >
            @foreach($hairetu_card as $card)
              <form action="{{ route('card/delete') }}" method='post'>
                @csrf
                <div class='card border-0 text-center '>
                  <input type='hidden' name='cardtype' value='{{$card->card_type}}'>
                  <input type='hidden' name='cardid' value='{{$card->id}}'>
                  <input type="image" src='{{$card->card_img_url}}' class='p-1' style="width: 125px";>
                  <input type='hidden' name='deckid' value='{{$deck_id}}'>
                  <input type="hidden" name="deckclass" value="{{ $deck_class }}">
                  {{ $card->count }}
                </div>
              </form>
              <?php $i++; ?>
              @if( $i == 10)
                </div><div style="display:inline-flex" >
                <?php $i=0; ?>
              @endif
            @endforeach
          </div>
        </div>
      </div>

      <div id="photo2" class="tab-pane" role="tabpanel" aria-labelledby="tab2">
        <div class="justify-content-md-center card-body row">
          <?php $i=0; ?>
            <div style="display:inline-flex" >
                @foreach($ex_cards as $card)
                  <form action="{{ route('card/delete') }}" method='post'>
                    @csrf
                    <input type='hidden' name='cardtype' value='{{$card->card_type}}'>
                    <input type='hidden' name='cardid' value='{{$card->id}}'>
                    <input type="image" src='{{$card->card_img_url}}' class='p-1' style="width: 125px";>
                    <input type='hidden' name='deckid' value='{{$deck_id}}'>
                    <input type="hidden" name="deckclass" value="{{ $deck_class }}">
                    {{ $card->count }}
                  </form>
                  <?php $i++; ?>
                  @if( $i == 10)
                    </div><div style="display:inline-flex" >
                  @endif
                @endforeach
            </div>
        </div>
      </div>



        <ul class="nav nav-tabs mt-5" role="tablist">
          <li class="nav-item" role="presentation">
            <a href="#photo3" id="tab1" class="nav-link active" role="tab" data-bs-toggle="tab" aria-selected="true"> {{ $deck_class }} </a>
          </li>
          <li class="nav-item" role="presentation">
            <a href="#photo4" id="tab2" class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false"> ニュートラル </a>
          </li>
        </ul>

      <div class="tab-content ">

        <div id="photo3" class="tab-pane active" role="tabpanel" aria-labelledby="tab1">
          <div class="justify-content-center card-body row">
            <form action="{{ route('card/search') }}" method='post'> 
              @csrf
              <input type='text' name='search_card' placeholder='カード名を入力'>
              <input type='hidden' name='deckid' value='{{$deck_id}}'>
              <input type='hidden' name='deckclass' value='{{$deck_class}}'>
              <input type='submit'>
            </form>
          <?php $i=0; ?>
          <div style="display:inline-flex" >
            @foreach($class_cards as $card)
              <form action="{{ route('post') }}" method='post'>
                @csrf
                <input type='hidden' name='cardtype' value='{{$card->card_type}}'>
                <input type='hidden' name='cardid' value='{{$card->id}}'>
                <input type="image" src='{{$card->card_img_url}}' class='p-1' style="width: 125px";>
                <input type='hidden' name='deckid' value='{{$deck_id}}'>
                <input type="hidden" name="deckclass" value="{{ $deck_class }}">
              </form>
              <?php $i++; ?>
              @if( $i == 10)
                </div><div style="display:inline-flex" >
              @endif
            @endforeach
          </div>
          <div class="d-flex justify-content-center">
              {{ $class_cards->appends(request()->input())->links()}}
          </div>
        </div>
      </div>

      <div id="photo4" class="tab-pane" role="tabpanel" aria-labelledby="tab2">
        <div class="justify-content-md-center card-body row">
          <form action="{{ route('card/search') }}" method='post'> 
            @csrf
            <input type='text' name='search_card' placeholder='カード名を入力'>
            <input type='hidden' name='deckid' value='{{$deck_id}}'>
            <input type='submit'>
          </form>
          <?php $i=0; ?>
            <div style="display:inline-flex" >
                @foreach($neutral_cards as $card)
                  <form action="{{ route('post') }}" method='post'>
                    @csrf
                    <input type='hidden' name='cardtype' value='{{$card->card_type}}'>
                    <input type='hidden' name='cardid' value='{{$card->id}}'>
                    <input type="image" src='{{$card->card_img_url}}' class='p-1' style="width: 125px";>
                    <input type='hidden' name='deckid' value='{{$deck_id}}'>
                    <input type="hidden" name="deckclass" value="{{ $deck_class }}">
                  </form>
                  <?php $i++; ?>
                  @if( $i == 10)
                    </div><div style="display:inline-flex" >
                  @endif
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
              {{ $neutral_cards->appends(request()->input())->links()}}
          </div>
        </div>
      </div>
    </div>
</div>

@endsection
