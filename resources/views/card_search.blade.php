@extends('layouts.app')

@section('content')

<div class="card-header container">
  <div class="tab-panel">
    <ul class="nav nav-tabs">
      <li class="tab tab-A is-active">ドラゴン</li>
      
      <li class="tab tab-B">ニュートラル</li>
    </ul>
  </div>

  <div class="panel-group">
    <div class="panel tab-A is-show">
      <div class="justify-content-center card-body row">
        <form action="{{ route('card/search') }}" method='post'> 
          @csrf
          <input type='text' name='search_card' placeholder='カード名を入力'>
          <input type='submit'>
        </form>
        <?php $i=0; ?>
        <div style="display:inline-flex" >
          @foreach($cards as $card)
            <form action="{{ route('post') }}" method='post'>
              @csrf
              <input type='hidden' name='cardid' value='{{$card->id}}'>
              <input type="image" src='{{$card->card_img_url}}' class='p-1' style="width: 125px";>
            </form>
            <?php $i++; ?>
            @if( $i == 10)
              </div><div style="display:inline-flex" >
            @endif
          @endforeach
        </div>

        <div class="d-flex justify-content-center">
            {{ $cards->appends(request()->input())->links()}}
        </div>
      </div>
  </div>

  <div class="panel tab-B">
    <div class="justify-content-md-center card-body row">
      <form action="{{ route('card/search') }}" method='post'> 
        @csrf
        <input type='text' name='search_card' placeholder='カード名を入力'>
        <input type='submit'>
      </form>
      <?php $i=0; ?>
      <div style="display:inline-flex" >
        @foreach($neutral_cards as $card)
              <form action="{{ route('post') }}" method='post'>
                @csrf
                <input type='hidden' name='cardid' value='{{$card->id}}'>
                <input type="image" src='{{$card->card_img_url}}' class='p-1' style="width: 125px";>
              </form>
              <?php $i++; ?>
              @if( $i == 10)
                </div><div style="display:inline-flex" >
              @endif
            @endforeach
        </div>
      <div class="d-flex justify-content-center">
        {{ $cards->appends(request()->input())->links()}}
      </div>
    </div>
  </div>
</div>

<style type="text/css">
.tab{
  flex-grow: 1;
  list-style:none;
  text-align:center;
  cursor:pointer;
}
.panel-group{
  border-top:none;
}
.panel{
  display:none;
}
.tab.is-active{
  background:#007bff;
  color:#fff;
  transition: all 0.2s ease-out;
}
.panel.is-show{
  display:block;
}
</style>

 <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function(){
      const tabs = document.getElementsByClassName('tab');
      for(let i = 0; i < tabs.length; i++) {
        tabs[i].addEventListener('click', tabSwitch, false);
      }
      function tabSwitch(){
        // タブのclassの値を変更
        document.getElementsByClassName('is-active')[0].classList.remove('is-active');
        this.classList.add('is-active');
        // コンテンツのclassの値を変更
        document.getElementsByClassName('is-show')[0].classList.remove('is-show');
        const arrayTabs = Array.prototype.slice.call(tabs);
        const index = arrayTabs.indexOf(this);
        document.getElementsByClassName('panel')[index].classList.add('is-show');
      };
    }, false);
 </script>

@endsection
