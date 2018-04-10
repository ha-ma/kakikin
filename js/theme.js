jQuery(document).ready(function($) {

  // $('.bxslider').bxSlider({
  //   mode: "fade",
  //   auto: true,
  //   pager: true,
  // });

  $('.bxslider1').bxSlider({
    mode: "fade",
    auto: true,
    pager: true,
    controls: false,
  });

  $('.bxslider2').bxSlider({
    controls: true,
    auto: false,
    pager: false,
    maxSlides: 1,        //表示される最大要素数
    moveSlides: 1,       //一度にスライドする要素数
    // slideWidth: 200,
    // slideMargin: 10, 
  });

  $('.bxslider3').bxSlider({
    auto: false,
    pager: false,

  });


  $('.btn_menu').click(function(){
    $('nav').toggleClass('open');
    $('.btn_menu').toggleClass('active');
  });



  // グローバル変数
  var syncerTimeout = null ;
  // 一連の処理
  $( function() {
  // スクロールイベントの設定
  $( window ).scroll( function() {
    // 1秒ごとに処理
    if( syncerTimeout == null ) {
      // セットタイムアウトを設定
      syncerTimeout = setTimeout( function(){

        // 対象のエレメント
        var element = $( '#totop-btn' );

        // 現在、表示されているか？
        var visible = element.is( ':visible' );

        // 最上部から現在位置までの距離を取得して、変数[now]に格納
        var now = $( window ).scrollTop();

        // 最下部から現在位置までの距離を計算して、変数[under]に格納
        var under = $( 'body' ).height() - ( now + $(window).height() );

        // 最上部から現在位置までの距離(now)が500以上かつ
        // 最下部から現在位置までの距離(under)が200px以上かつ…
        if( now > 500 && 100 < under )
        {
          // 非表示状態だったら
          if( !visible )
          {
            // [#page-top]をゆっくりフェードインする
            element.fadeIn( 'slow' ) ;
          }
        }

        // 500px以下かつ
        // 表示状態だったら
        else if( visible ) {
          // [#page-top]をゆっくりフェードアウトする
          element.fadeOut( 'slow' );
        }

        // フラグを削除
        syncerTimeout = null;
      } , 1000 );
    }
  });

  // クリックイベントを設定する
  $( '#totop-btn' ).click(
    function() {
      // スムーズにスクロールする
      $( 'html,body' ).animate( {scrollTop:0} , 'slow' ) ;
    });
});



});


