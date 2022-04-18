//slick
$( function() {
    $( '.p-mainvisual__slider' ).slick( {
        dots: true,
        autoplay: true,
        autoplaySpeed:2000,
        arrows: true
    });
});



//News＆Pressのタブ切り替え
jQuery(function($){
  // 「tab」クラスをクリックした場合の挙動
  $('.tab').on('click',function(){

    // クリックした要素が何番目かを定数に入れる
    var idx=$('.tab').index(this);

    // (this).addClass('is-active')で、「is-active」クラスをクリックした要素に付与し、
    // siblings('.tab').removeClass('is-active')で、その他の兄弟要素からは「is-active」クラスを取り除く
    // これにより、今押されているタブがどれかがわかるようになる。
    $(this).addClass('is-active').siblings('.tab').removeClass('is-active'); 

    // 「tab-group」に一致する箇所を探し、
    // その次の「panel-group」要素を持っている要素から「panel」クラスを探し、
    // 「is-show」クラスを取り除く
    $(this).closest('.tab-group').next('.panel-group').find('.panel').removeClass('is-show');

    // クリックした要素に一致する「panel」クラスに「is-show」クラスを付与する
    // これにより、押されたタブの内容が表示されるようになる。
    $('.panel').eq(idx).addClass('is-show');
  });
});