$('.CardTrigger').on('click', function() {//カードが押されたとき
    const deckarray = [];//構築されているデッキの要素取得
    const decklength = $('.normal-pc').children().find('input[name="cardid"]').length;//構築されているデッキの要素数(カードの種類の数)を取得

    for(var i = 0; i < decklength;i++)//配列に構築されているカードのidを保存
    {
        var card = $('.normal-pc').children().find('input[name="cardid"]').eq(i).val();
        deckarray.push(card);
    }

    var Trigger = ($(this).children().find('input[name="cardid"]').val()); //押されたカードのidを取得

    if(deckarray.indexOf(Trigger) == -1){//deckarray.indexOf(Trigger)でTriggerに一致する（すでに構築されているカード）があれば何番目に構築されているか返すなければ-1が返ってくるので追加する
        $(this).clone(true, false).appendTo('.normal-pc');
        $('.normal-pc').children().find('input[name="cardcount"]').eq(deckarray.indexOf(Trigger)).val(1);
        $('.normal-pc').children().find('a[name="cardcount"]').eq(deckarray.indexOf(Trigger)).text(1);
        $('.error').find('a[name="error"]').text("");
    }else{
        var cardcount=$('.normal-pc').children().find('input[name="cardcount"]').eq(deckarray.indexOf(Trigger)).val();//構築されているカードの枚数を取得してinput要素のvalueとa要素の1プラス
        cardcount++;
        if(cardcount <= 3){
            $('.normal-pc').children().find('input[name="cardcount"]').eq(deckarray.indexOf(Trigger)).val(cardcount);
            $('.normal-pc').children().find('a[name="cardcount"]').eq(deckarray.indexOf(Trigger)).text(cardcount);
            $('.error').find('a[name="error"]').text("");
          }else{
            $('.error').find('a[name="error"]').text("同じカードは3枚以内にしてください");
          }
    }
})

