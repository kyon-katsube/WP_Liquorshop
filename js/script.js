//slick
$( function() {
    $( '.p-mainvisual__slider' ).slick( {
        dots: true,
        autoplay: true,
        autoplaySpeed:2000,
        arrows: false
    });
});



//News＆Pressのタブ切り替え
$ (function(){

    //カテゴリ名をホバーしたとき
    $(".p-archive__contents__tab__category").hover(function(){
          $(this).addClass("hover")},
          function(){
          $(this).removeClass("hover");
    });      

    //カテゴリ名をクリックしたとき
    $('.p-archive__contents__tab__category').click(function(){
        //p-archive--の要素の順番を取得したものをidxという変数として定義する
        var idx=$('.p-archive__contents__tab__category').index(this);
        //取得した変数と同じ階層のデータを取得する
        $('.p-archive__contents__post__wrapper').removeClass('is-show').eq(idx).addClass('is-show');
      });

});  //functionの閉じかっこ
