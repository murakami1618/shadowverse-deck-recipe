@extends('layouts.app')

@section('content')
<!-- PC画面 -->
<div class="container d-none d-sm-block">
    <div class="justify-content-center card-body row card error">
        <a name='error'>{{ $error }}</a>
      <ul class="nav nav-tabs mt-5" role="tablist">
          <li class="nav-item" role="presentation">
            <a href="#photo1" id="tab1" class="nav-link active" role="tab" data-bs-toggle="tab" aria-selected="true"> {{ $deck_class }} </a>
          </li>
          <li class="nav-item" role="presentation">
            <a href="#photo2" id="tab2" class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false"> エクストラデッキ</a>
          </li>
          <li class="nav-item" role="presentation">
            <a href="#token" id="tab2" class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">トークン</a>
          </li>
      </ul>

      <form action="{{ route('post') }}" method='post' class="cardpost">
        <div class="tab-content">
          
          <div id="photo1" class="tab-pane active" role="tabpanel" aria-labelledby="tab1">
              <div class="card-body row normal-pc">
                <?php $i=0; ?>
                @csrf
                @foreach($hairetu_card as $card)
                  <div style="width: 8vw";>
                    <div class='card border-0 deckcard'>
                      <input type='hidden' class="cardtype" name='cardtype<?php echo($i); ?>' value='{{$card->card_type}}'>
                      <input type='hidden' class="cardid" name='cardid<?php echo($i); ?>' value='{{$card->id}}'>
                      <image src='{{$card->card_img_url}}' class='p-1' style="width: 8vw";>
                      <input type="hidden" class="cardcount" name="cardcount<?php echo($i); ?>" value="{{ $card->count }}">
                      <a name='cardcount' class="cardcount">{{ $card->count }}</a>
                    </div>
                  </div>
                  <?php $i++?>
                @endforeach
                <input type='hidden' class="deckcardcount" name='deckcardcount' value=''>
              </div>
            
          </div>

          <div id="photo2" class="tab-pane" role="tabpanel" aria-labelledby="tab2">
            <div class=" card-body row ex-pc">
              <?php $i=0; ?>
              @foreach($ex_cards as $card)
                <div style="width: 8vw";>
                  <div class='card border-0'>
                    <input type='hidden' name='excardtype<?php echo($i); ?>' class='excardtype' value='{{$card->card_type}}'>
                    <input type='hidden' name='excardid<?php echo($i); ?>' class='excardid' value='{{$card->id}}'>
                    <image src='{{$card->card_img_url}}' class='p-1' style="width: 8vw";>
                    <input type="hidden" class="excardcount" name="excardcount<?php echo($i);?>" value="{{ $card->count }}">
                    <a name='excardcount' class="excardcount">{{ $card->count }}</a>
                  </div>
                </div>
                <?php $i++?>
              @endforeach
              <input type='hidden' class="exdeckcardcount" name='exdeckcardcount' value=''>
            </div>
          </div>

          <div id="token" class="tab-pane" role="tabpanel" aria-labelledby="tab2">
            <div class=" card-body row token-pc">
              <?php $i=0; ?>
              @foreach($tokens as $card)
                <div style="width: 8vw";>
                  @csrf
                  <div class='card border-0'>
                    <input type='hidden' name='tcardtype<?php echo($i); ?>' class='tcardtype' value='{{$card->card_type}}'>
                    <input type='hidden' name='tcardid<?php echo($i); ?>' class='tcardid' value='{{$card->id}}'>
                    <image src='{{$card->card_img_url}}' class='p-1' style="width: 8vw";>
                    <input type="hidden" class="tcardcount" name="tcardcount<?php echo($i);?>" value="{{ $card->count }}">
                    <a name='tcardcount' class="tcardcount">{{ $card->count }}</a>
                  </div>
                </div>
              @endforeach
              <input type='hidden' class="tdeckcardcount" name='tdeckcardcount' value=''>
            </div>
          </div>
      </div>
      <input type='hidden' class="deckid" name='deckid' value='{{$deck_id}}'>
      <input type="hidden" class="deckclass" name='deckclass' value="{{ $deck_class }}">
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="submit" class="btn btn-secondary">デッキを保存</button>
      </div>
    </form>




        <ul class="nav nav-tabs mt-5" role="tablist">
          <li class="nav-item" role="presentation">
            <a href="#photo3" id="tab1" class="nav-link active" role="tab" data-bs-toggle="tab" aria-selected="true"> {{ $deck_class }} </a>
          </li>
          <li class="nav-item" role="presentation">
            <a href="#photo4" id="tab2" class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false"> ニュートラル </a>
          </li>
          <li class="nav-item" role="presentation">
            <a href="#photo5" id="tab2" class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">{{ $deck_class }}/エボルヴ</a>
          </li>
          <li class="nav-item" role="presentation">
            <a href="#photo6" id="tab2" class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">ニュートラル/エボルヴ</a>
          </li>
          <li class="nav-item" role="presentation">
            <a href="#photo7" id="tab2" class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">トークン</a>
          </li>
        </ul>

      <div class="tab-content ">
        <div id="photo3" class="tab-pane active" role="tabpanel" aria-labelledby="tab1">
          <div class="card-body row">
            <form action="{{ route('card/search') }}" method='post'> 
              @csrf
              <input type='text' name='search_card' placeholder='カード名を入力'>
              <input type='hidden' name='deckid' value='{{$deck_id}}'>
              <input type='hidden' name='deckclass' value='{{$deck_class}}'>
              <input type='submit'>
            </form>
            <?php $i=0; ?>
              @foreach($class_cards as $card)
              <div class='NormalCardTrigger' style="width: 8vw";>
                
                    @csrf
                    <input type='hidden' class="cardtype" name='cardtype' value='{{$card->card_type}}'>
                    <input type='hidden' class="cardid" name='cardid'  value='{{$card->id}}'>
                    <image src='{{$card->card_img_url}}' class='p-1' style="width: 8vw";>
                    <input type="hidden" class="cardcount" name="cardcount" value="">
                    <a name='cardcount' class="cardcount"></a>
                
              </div>
              @endforeach
          <div class="d-flex justify-content-center">
              {{ $class_cards->appends(request()->input())->links()}}
          </div>
        </div>
      </div>

      <div id="photo4" class="tab-pane" role="tabpanel" aria-labelledby="tab2">
        <div class="card-body row">
              <form action="{{ route('card/search') }}" method='post'> 
                @csrf
                <input type='text' name='search_card' placeholder='カード名を入力'>
                <input type='hidden' name='deckid' value='{{$deck_id}}'>
                <input type='hidden' name='deckclass' value='{{$deck_class}}'>
                <input type='submit'>
              </form>
              <?php $i=0; ?>
                @foreach($neutral_cards as $card)
                <div class='NormalCardTrigger' style="width: 8vw";>
                      @csrf
                      <input type='hidden' name='cardtype' class="cardtype" value='{{$card->card_type}}'>
                      <input type='hidden' name='cardid' class="cardid" value='{{$card->id}}'>
                      <image src='{{$card->card_img_url}}' class='p-1' style="width: 8vw";>
                      <input type="hidden" name="cardcount" class="cardcount" value="">
                      <a name='cardcount' class="cardcount"></a>
                </div>
                @endforeach
            <div class="d-flex justify-content-center">
                {{ $neutral_cards->appends(request()->input())->links()}}
            </div>
        </div>
      </div>

      <div id="photo5" class="tab-pane" role="tabpanel" aria-labelledby="tab2">
        <div class="card-body row">
              <form action="{{ route('card/search') }}" method='post'> 
                @csrf
                <input type='text' name='search_card' placeholder='カード名を入力'>
                <input type='hidden' name='deckid' value='{{$deck_id}}'>
                <input type='hidden' name='deckclass' value='{{$deck_class}}'>
                <input type='submit'>
              </form>
              <?php $i=0; ?>
                @foreach($class_excards as $card)
                <div class='ExCardTrigger' style="width: 8vw";>
                      @csrf
                      <input type='hidden' name='excardtype' class='excardtype' value='{{$card->card_type}}'>
                      <input type='hidden' name='excardid' class='excardid' value='{{$card->id}}'>
                      <image src='{{$card->card_img_url}}' class='p-1' style="width: 8vw";>
                      <input type="hidden" name="excardcount" class='excardcount'  value="">
                      <a name='excardcount' class='excardcount' ></a>
                </div>
                @endforeach
            <div class="d-flex justify-content-center">
                {{ $class_excards->appends(request()->input())->links()}}
            </div>
        </div>
      </div>

      <div id="photo6" class="tab-pane" role="tabpanel" aria-labelledby="tab2">
        <div class="card-body row">
              <form action="{{ route('card/search') }}" method='post'> 
                @csrf
                <input type='text' name='search_card' placeholder='カード名を入力'>
                <input type='hidden' name='deckid' value='{{$deck_id}}'>
                <input type='hidden' name='deckclass' value='{{$deck_class}}'>
                <input type='submit'>
              </form>
              <?php $i=0; ?>
                @foreach($neutral_excards as $card)
                <div class='ExCardTrigger' style="width: 8vw";>
                      @csrf
                      <input type='hidden' name='excardtype' class="excardtype" value='{{$card->card_type}}'>
                      <input type='hidden' name='excardid' class='excardid' value='{{$card->id}}'>
                      <image src='{{$card->card_img_url}}' class='p-1' style="width: 8vw";>
                      <input type="hidden" name="excardcount" class="excardcount" value="">
                      <a name='excardcount' class="excardcount"></a>
                </div>
                @endforeach
            <div class="d-flex justify-content-center">
                {{ $neutral_excards->appends(request()->input())->links()}}
            </div>
        </div>
      </div>

      <div id="photo7" class="tab-pane" role="tabpanel" aria-labelledby="tab2">
        <div class="card-body row">
              <form action="{{ route('card/search') }}" method='post'> 
                @csrf
                <input type='text' name='search_card' placeholder='カード名を入力'>
                <input type='hidden' name='deckid' value='{{$deck_id}}'>
                <input type='hidden' name='deckclass' value='{{$deck_class}}'>
                <input type='submit'>
              </form>
              <?php $i=0; ?>
                @foreach($class_tokens as $card)
                <div class='CardTrigger' style="width: 8vw";>
                  <div class='TokenCardTrigger' style="width: 8vw";> 
                      @csrf
                      <input type='hidden' name='tcardtype' class="tcardtype" value='{{$card->card_type}}'>
                      <input type='hidden' name='tcardid' class='tcardid' value='{{$card->id}}'>
                      <image src='{{$card->card_img_url}}' class='p-1' style="width: 8vw";>
                      <input type="hidden" name="tcardcount" class="tcardcount" value="">
                      <a name='tcardcount' class="tcardcount"></a>
                  </div>
                </div>
                @endforeach
            <div class="d-flex justify-content-center">
                {{ $class_tokens->appends(request()->input())->links()}}
            </div>
        </div>
      </div>

    </div>
</div>
</div>
</div>

<!-- スマホ画面 -->
<div class="container d-sm-none d-block">

      {{  $error  }}
      <ul class="nav nav-tabs " role="tablist">
          <li class="nav-item" role="presentation">
            <a href="#phone1" id="tab1" class="nav-link active" role="tab" data-bs-toggle="tab" aria-selected="true"> {{ $deck_class }} </a>
          </li>
          <li class="nav-item" role="presentation">
            <a href="#phone2" id="tab2" class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false"> エクストラデッキ</a>
          </li>
          <li class="nav-item" role="presentation">
            <a href="#phonetoken" id="tab2" class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">トークン</a>
          </li>
      </ul>

      <div class="tab-content">
        <div id="phone1" class="tab-pane active" role="tabpanel" aria-labelledby="tab1">
          <div class="justify-content-center card-body row">
          <?php $i=0; ?>
            <div style="display:inline-flex" >
              @foreach($hairetu_card as $card)
                <form action="{{ route('card/delete') }}" method='post'>
                  @csrf
                  <div class='card border-0 text-center '>
                    <input type='hidden' name='cardtype' value='{{$card->card_type}}'>
                    <input type='hidden' name='cardid' value='{{$card->id}}'>
                    <input type="image" src='{{$card->card_img_url}}' class='p-1' style="width: 18vw";>
                    <input type='hidden' name='deckid' value='{{$deck_id}}'>
                    <input type="hidden" name="deckclass" value="{{ $deck_class }}">
                    {{ $card->count }}
                  </div>
                </form>
                <?php $i++; ?>
                @if( $i == 5)
                  </div><div style="display:inline-flex" >
                  <?php $i=0; ?>
                @endif
              @endforeach
            </div>
          </div>
        </div>

        <div id="phone2" class="tab-pane" role="tabpanel" aria-labelledby="tab2">
          <div class="justify-content-md-center card-body row">
              <?php $i=0; ?>
              <div style="display:inline-flex" >
                @foreach($ex_cards as $card)
                  <form action="{{ route('card/delete') }}" method='post'>
                    @csrf
                    <div class='card border-0 text-center '>
                      <input type='hidden' name='cardtype' value='{{$card->card_type}}'>
                      <input type='hidden' name='cardid' value='{{$card->id}}'>
                      <input type="image" src='{{$card->card_img_url}}' class='p-1' style="width: 18vw";>
                      <input type='hidden' name='deckid' value='{{$deck_id}}'>
                      <input type="hidden" name="deckclass" value="{{ $deck_class }}">
                      {{ $card->count }}
                    </div>
                  </form>
                  <?php $i++; ?>
                  @if( $i == 5)
                    </div><div style="display:inline-flex" >
                  @endif
                @endforeach
              </div>
          </div>
        </div>

        <div id="phonetoken" class="tab-pane" role="tabpanel" aria-labelledby="tab2">
          <div class="justify-content-md-center card-body row">
              <?php $i=0; ?>
              <div style="display:inline-flex">
                @foreach($tokens as $card)
                  <form action="{{ route('card/delete') }}" method='post'>
                    @csrf
                    <div class='card border-0 text-center '>
                      <input type='hidden' name='cardtype' value='{{$card->card_type}}'>
                      <input type='hidden' name='cardid' value='{{$card->id}}'>
                      <input type="image" src='{{$card->card_img_url}}' class='p-1' style="width: 18vw";>
                      <input type='hidden' name='deckid' value='{{$deck_id}}'>
                      <input type="hidden" name="deckclass" value="{{ $deck_class }}">
                      {{ $card->count }}
                    </div>
                  </form>
                  <?php $i++; ?>
                  @if( $i == 5)
                    </div><div style="display:inline-flex" >
                  @endif
                @endforeach
              </div>
          </div>
        </div>

        




        <ul class="nav nav-tabs mt-5" role="tablist">
          <li class="nav-item" role="presentation">
            <a href="#phone3" id="tab1" class="nav-link active" role="tab" data-bs-toggle="tab" aria-selected="true"> {{ $deck_class }} </a>
          </li>
          <li class="nav-item" role="presentation">
            <a href="#phone4" id="tab2" class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false"> ニュートラル </a>
          </li>
          <li class="nav-item" role="presentation">
            <a href="#phone5" id="tab2" class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">{{ $deck_class }}/エボルヴ</a>
          </li>
          <li class="nav-item" role="presentation">
            <a href="#phone6" id="tab2" class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">ニュートラル/エボルヴ</a>
          </li>
          <li class="nav-item" role="presentation">
            <a href="#phone7" id="tab2" class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false">トークン</a>
          </li>
        </ul>

      <div class="tab-content ">

        <div id="phone3" class="tab-pane active" role="tabpanel" aria-labelledby="tab1">
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
                <input type="image" src='{{$card->card_img_url}}' class='p-1' style="width: 18vw";>
                <input type='hidden' name='deckid' value='{{$deck_id}}'>
                <input type="hidden" name="deckclass" value="{{ $deck_class }}">
              </form>
              <?php $i++; ?>
              @if( $i == 5)
                </div><div style="display:inline-flex" >
                <?php $i=0; ?>
              @endif
            @endforeach
          </div>
          <div class="d-flex justify-content-center">
              {{ $class_cards->appends(request()->input())->links()}}
          </div>
        </div>
      </div>

      <div id="phone4" class="tab-pane" role="tabpanel" aria-labelledby="tab2">
        <div class="justify-content-md-center card-body row">
          <form action="{{ route('card/search') }}" method='post'> 
            @csrf
            <input type='text' name='search_card' placeholder='カード名を入力'>
            <input type='hidden' name='deckid' value='{{$deck_id}}'>
            <input type="hidden" name="deckclass" value="{{ $deck_class }}">
            <input type='submit'>
          </form>
          <?php $i=0; ?>
            <div style="display:inline-flex" >
                @foreach($neutral_cards as $card)
                  <form action="{{ route('post') }}" method='post'>
                    @csrf
                    <input type='hidden' name='cardtype' value='{{$card->card_type}}'>
                    <input type='hidden' name='cardid' value='{{$card->id}}'>
                    <input type="image" src='{{$card->card_img_url}}' class='p-1' style="width: 18vw";>
                    <input type='hidden' name='deckid' value='{{$deck_id}}'>
                    <input type="hidden" name="deckclass" value="{{ $deck_class }}">
                  </form>
                  <?php $i++; ?>
                  @if( $i == 5)
                    </div><div style="display:inline-flex" >
                    <?php $i=0; ?>
                  @endif
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
              {{ $neutral_cards->appends(request()->input())->links()}}
          </div>
        </div>
      </div>

      <div id="phone5" class="tab-pane" role="tabpanel" aria-labelledby="tab2">
        <div class="justify-content-md-center card-body row">
          <form action="{{ route('card/search') }}" method='post'> 
            @csrf
            <input type='text' name='search_card' placeholder='カード名を入力'>
            <input type='hidden' name='deckid' value='{{$deck_id}}'>
            <input type="hidden" name="deckclass" value="{{ $deck_class }}">
            <input type='submit'>
          </form>
          <?php $i=0; ?>
            <div style="display:inline-flex" >
                @foreach($class_excards as $card)
                  <form action="{{ route('post') }}" method='post'>
                    @csrf
                    <input type='hidden' name='cardtype' value='{{$card->card_type}}'>
                    <input type='hidden' name='cardid' value='{{$card->id}}'>
                    <input type="image" src='{{$card->card_img_url}}' class='p-1' style="width: 18vw";>
                    <input type='hidden' name='deckid' value='{{$deck_id}}'>
                    <input type="hidden" name="deckclass" value="{{ $deck_class }}">
                  </form>
                  <?php $i++; ?>
                  @if( $i == 5)
                    </div><div style="display:inline-flex" >
                    <?php $i=0; ?>
                  @endif
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
              {{ $neutral_cards->appends(request()->input())->links()}}
          </div>
        </div>
      </div>

      <div id="phone6" class="tab-pane" role="tabpanel" aria-labelledby="tab2">
        <div class="justify-content-md-center card-body row">
          <form action="{{ route('card/search') }}" method='post'> 
            @csrf
            <input type='text' name='search_card' placeholder='カード名を入力'>
            <input type='hidden' name='deckid' value='{{$deck_id}}'>
            <input type="hidden" name="deckclass" value="{{ $deck_class }}">
            <input type='submit'>
          </form>
          <?php $i=0; ?>
            <div style="display:inline-flex" >
                @foreach($neutral_excards as $card)
                  <form action="{{ route('post') }}" method='post'>
                    @csrf
                    <input type='hidden' name='cardtype' value='{{$card->card_type}}'>
                    <input type='hidden' name='cardid' value='{{$card->id}}'>
                    <input type="image" src='{{$card->card_img_url}}' class='p-1' style="width: 18vw";>
                    <input type='hidden' name='deckid' value='{{$deck_id}}'>
                    <input type="hidden" name="deckclass" value="{{ $deck_class }}">
                  </form>
                  <?php $i++; ?>
                  @if( $i == 5)
                    </div><div style="display:inline-flex" >
                    <?php $i=0; ?>
                  @endif
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
              {{ $neutral_cards->appends(request()->input())->links()}}
          </div>
        </div>
      </div>

      <div id="phone7" class="tab-pane" role="tabpanel" aria-labelledby="tab2">
        <div class="justify-content-md-center card-body row">
          <form action="{{ route('card/search') }}" method='post'> 
            @csrf
            <input type='text' name='search_card' placeholder='カード名を入力'>
            <input type='hidden' name='deckid' value='{{$deck_id}}'>
            <input type="hidden" name="deckclass" value="{{ $deck_class }}">
            <input type='submit'>
          </form>
          <?php $i=0; ?>
            <div style="display:inline-flex" >
                @foreach($class_tokens as $card)
                  <form action="{{ route('post') }}" method='post'>
                    @csrf
                    <input type='hidden' name='cardtype' value='{{$card->card_type}}'>
                    <input type='hidden' name='cardid' value='{{$card->id}}'>
                    <input type="image" src='{{$card->card_img_url}}' class='p-1' style="width: 18vw";>
                    <input type='hidden' name='deckid' value='{{$deck_id}}'>
                    <input type="hidden" name="deckclass" value="{{ $deck_class }}">
                  </form>
                  <?php $i++; ?>
                  @if( $i == 5)
                    </div><div style="display:inline-flex" >
                    <?php $i=0; ?>
                  @endif
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
              {{ $neutral_cards->appends(request()->input())->links()}}
          </div>
        </div>
      </div>

    </div>
@endsection
