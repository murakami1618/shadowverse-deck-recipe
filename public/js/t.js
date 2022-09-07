$(document).on('click', '.NormalCardTrigger', function() {//カードが押されたとき
    const deckarray = [];//構築されているデッキの要素取得
    var allcardcount=0;
    const decklength = $('.normal-pc').children().find('input[class="cardid"]').length;//構築されているデッキの要素数(カードの種類の数)を取得

    for(var i = 0; i < decklength;i++)//配列に構築されているカードのidを保存
    {
        var card = $('.normal-pc').children().find('input[class="cardid"]').eq(i).val();
        var deckcount = $('.normal-pc').children().find('a[class="cardcount"]').eq(i).text();
        allcardcount = allcardcount+Number(deckcount);
        deckarray.push(card);
    }
    if(allcardcount>49){
        alert('デッキは50枚以内にしてください');
    }else{
        var Trigger = ($(this).find('input[class="cardid"]').val()); //押されたカードのidを取得
        console.log(deckarray.indexOf(Trigger));
        if(deckarray.indexOf(Trigger) == -1){//deckarray.indexOf(Trigger)でTriggerに一致する（すでに構築されているカード）があれば何番目に構築されているか返すなければ-1が返ってくるので追加する
            $(this).clone(true).attr('class', 'DelNormalCardTrigger').appendTo('.normal-pc');
            $('.normal-pc').children().find('input[class="cardtype"]').eq(deckarray.indexOf(Trigger)).attr('name', 'cardtype'+decklength);
            $('.normal-pc').children().find('input[class="cardid"]').eq(deckarray.indexOf(Trigger)).attr('name', 'cardid'+decklength);
            $('.normal-pc').children().find('input[class="cardcount"]').eq(deckarray.indexOf(Trigger)).attr('name', 'cardcount'+decklength);
            $('.normal-pc').children().find('input[class="cardcount"]').eq(deckarray.indexOf(Trigger)).val(1);
            $('.normal-pc').children().find('a[class="cardcount"]').eq(deckarray.indexOf(Trigger)).text(1);
            $('.error').find('a[class="error"]').text("");
        }else{
            var cardcount=$('.normal-pc').children().find('input[class="cardcount"]').eq(deckarray.indexOf(Trigger)).val();//構築されているカードの枚数を取得してinput要素のvalueとa要素の1プラス
            cardcount++;
            if(cardcount <= 3){
                $('.normal-pc').children().find('input[class="cardcount"]').eq(deckarray.indexOf(Trigger)).val(cardcount);
                $('.normal-pc').children().find('a[class="cardcount"]').eq(deckarray.indexOf(Trigger)).text(cardcount);
                $('.error').find('a[class="error"]').text("");
            }else{
                alert('"同じカードは3枚以内にしてください"');
            }
        }
        $('.normal-pc').find('input[class="deckcardcount"]').val($('.normal-pc').children().find('input[class="cardid"]').length);
    }
    allcardcount =0;
    for(var i = 0; i < decklength;i++)//配列に構築されているカードのidを保存
    {
        var deckcount = $('.normal-pc').children().find('a[class="cardcount"]').eq(i).text();
        allcardcount = allcardcount+Number(deckcount);
    }
    console.log(allcardcount);
})

$(document).on('click', '.ExCardTrigger',function() {//カードが押されたとき
    const deckarray = [];//構築されているデッキの要素取得
    var allexcardcount=0;
    const decklength = $('.ex-pc').children().find('input[class="excardid"]').length;//構築されているデッキの要素数(カードの種類の数)を取得

    for(var i = 0; i < decklength;i++)//配列に構築されているカードのidを保存
    {
        var card = $('.ex-pc').children().find('input[class="excardid"]').eq(i).val();
        var exdeckcount = $('.ex-pc').children().find('a[class="excardcount"]').eq(i).text();
        allexcardcount = allexcardcount+Number(exdeckcount);
        deckarray.push(card);
    }
    console.log(allexcardcount);
    if(allexcardcount>9){
        alert('エクストラデッキは10枚以内にしてください');
    }else{
        var Trigger = ($(this).find('input[class="excardid"]').val()); //押されたカードのidを取得
        console.log(deckarray.indexOf(Trigger));
        if(deckarray.indexOf(Trigger) == -1){//deckarray.indexOf(Trigger)でTriggerに一致する（すでに構築されているカード）があれば何番目に構築されているか返すなければ-1が返ってくるので追加する
            $(this).clone(true).attr('class', 'DelExCardTrigger').appendTo('.ex-pc');
            $('.ex-pc').children().find('input[class="excardtype"]').eq(deckarray.indexOf(Trigger)).attr('name', 'excardtype'+decklength);
            $('.ex-pc').children().find('input[class="excardid"]').eq(deckarray.indexOf(Trigger)).attr('name', 'excardid'+decklength);
            $('.ex-pc').children().find('input[class="excardcount"]').eq(deckarray.indexOf(Trigger)).attr('name', 'excardcount'+decklength);
            $('.ex-pc').children().find('input[class="excardcount"]').eq(deckarray.indexOf(Trigger)).val(1);
            $('.ex-pc').children().find('a[class="excardcount"]').eq(deckarray.indexOf(Trigger)).text(1);
            $('.error').find('a[class="error"]').text("");
        }else{
            var cardcount=$('.ex-pc').children().find('input[class="excardcount"]').eq(deckarray.indexOf(Trigger)).val();//構築されているカードの枚数を取得してinput要素のvalueとa要素の1プラス
            cardcount++;
            if(cardcount <= 3){
                $('.ex-pc').children().find('input[class="excardcount"]').eq(deckarray.indexOf(Trigger)).val(cardcount);
                $('.ex-pc').children().find('a[class="excardcount"]').eq(deckarray.indexOf(Trigger)).text(cardcount);
                $('.error').find('a[class="error"]').text("");
            }else{
                alert('"同じカードは3枚以内にしてください"');
            }
        }
        $('.ex-pc').find('input[class="exdeckcardcount"]').val($('.ex-pc').children().find('input[class="excardid"]').length);
    }

})

$(document).on('click', '.TokenCardTrigger',function() {//カードが押されたとき
    const deckarray = [];//構築されているデッキの要素取得
    const decklength = $('.token-pc').children().find('input[class="tcardid"]').length;//構築されているデッキの要素数(カードの種類の数)を取得

    for(var i = 0; i < decklength;i++)//配列に構築されているカードのidを保存
    {
        var card = $('.token-pc').children().find('input[class="tcardid"]').eq(i).val();
        deckarray.push(card);
    }

    var Trigger = ($(this).find('input[class="tcardid"]').val()); //押されたカードのidを取得
    console.log(deckarray.indexOf(Trigger));
    if(deckarray.indexOf(Trigger) == -1){//deckarray.indexOf(Trigger)でTriggerに一致する（すでに構築されているカード）があれば何番目に構築されているか返すなければ-1が返ってくるので追加する
        $(this).clone(true).attr('class', 'DelTokenCardTrigger').appendTo('.token-pc');
        $('.token-pc').children().find('input[class="tcardtype"]').eq(deckarray.indexOf(Trigger)).attr('name', 'tcardtype'+decklength);
        $('.token-pc').children().find('input[class="tcardid"]').eq(deckarray.indexOf(Trigger)).attr('name', 'tcardid'+decklength);
        $('.token-pc').children().find('input[class="tcardcount"]').eq(deckarray.indexOf(Trigger)).attr('name', 'tcardcount'+decklength);
        $('.token-pc').children().find('input[class="tcardcount"]').eq(deckarray.indexOf(Trigger)).val(1);
        $('.token-pc').children().find('a[class="tcardcount"]').eq(deckarray.indexOf(Trigger)).text(1);
        $('.error').find('a[class="error"]').text("");
    }else{
        var cardcount=$('.token-pc').children().find('input[class="tcardcount"]').eq(deckarray.indexOf(Trigger)).val();//構築されているカードの枚数を取得してinput要素のvalueとa要素の1プラス
        cardcount++;
            $('.token-pc').children().find('input[class="tcardcount"]').eq(deckarray.indexOf(Trigger)).val(cardcount);
            $('.token-pc').children().find('a[class="tcardcount"]').eq(deckarray.indexOf(Trigger)).text(cardcount);
            $('.error').find('a[class="error"]').text("");

    }
    $('.token-pc').find('input[class="tdeckcardcount"]').val($('.token-pc').children().find('input[class="tcardid"]').length);

})

$('.ex-pc').find('input[class="exdeckcardcount"]').val($('.ex-pc').children().find('input[class="excardid"]').length);
$('.normal-pc').find('input[class="deckcardcount"]').val($('.normal-pc').children().find('input[class="cardid"]').length);
$('.token-pc').find('input[class="tdeckcardcount"]').val($('.token-pc').children().find('input[class="tcardid"]').length);

$(document).on('click','.DelNormalCardTrigger', function() {
    var cardcount = $(this).find('input[class="cardcount"]').val() -1;
    if(cardcount >0)
    {
        $(this).find('input[class="cardcount"]').val(cardcount);
        $(this).find('a[class="cardcount"]').text(cardcount);
    }else{
        $(this).remove();        
    }
})

$(document).on('click', '.DelExCardTrigger' ,function() {
    var cardcount = $(this).find('input[class="excardcount"]').val() -1;
    if(cardcount >0)
    {
        $(this).find('input[class="excardcount"]').val(cardcount);
        $(this).find('a[class="excardcount"]').text(cardcount);
    }else{
        $(this).remove();        
    }
})

$(document).on('click', '.DelTokenCardTrigger' ,function() {
    var cardcount = $(this).find('input[class="tcardcount"]').val() -1;
    if(cardcount >0)
    {
        $(this).find('input[class="tcardcount"]').val(cardcount);
        $(this).find('a[class="tcardcount"]').text(cardcount);
    }else{
        $(this).remove();        
    }
})