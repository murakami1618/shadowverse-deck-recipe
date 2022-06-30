@extends('layouts.app')

@section('content')

<div class="card-header container">
  <div class="tab-panel">
  </div>

  <div class="panel-group">
    <div class="panel tab-A is-show">
      <div class="justify-content-center card-body row">
        <?php $i=0; ?>
        <div style="display:inline-flex" >
          @foreach($make_dec_card as $card)
            <form action="{{ route('post') }}" method='post'>
              @csrf
              <input type='hidden' name='cardid' value='{{$card->id}}'>
              <input type="image" src='{{$card->card_img_url}}' class='p-1' style="width: 125px";>
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

@endsection
