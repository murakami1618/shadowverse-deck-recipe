@extends('search')

@section('card')
<div class='container  flex-nowrap'>
<div class="row justify-content-md-center">
@foreach($cards as $card)
        <img src='{{$card->card_img_url}}' class='p-1' style="width: 200px;">
@endforeach
{{ $cards->appends(request()->input())->links()}}
</div>
</div>
@endsection
