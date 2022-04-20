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
$ (function(){

    //カテゴリ名をホバーしたとき
    $(".p-archive__contents__tab__category").hover(function(){
          $(this).addClass("hover")},
          function(){
          $(this).removeClass("hover");
    });      

    $('.p-archive__contents__tab__category').on('click',function(){
        var idx=$('.p-archive__contents__tab__category').index(this);
        $(this).addClass('is-active').siblings('.p-archive__contents__tab__category').removeClass('is-active');
        $(this).closest('.p-archive__contents__tab').next('.p-archive__contents__post').find('.p-archive__contents__post__wrapper').removeClass('is-show');
        $('.p-archive__contents__post__wrapper').eq(idx).addClass('is-show');
      });


//     //クリックしたときの挙動  別の記述
//     $(".p-archive__wrapper__news").click(function(){     
//         $(".p-archive__post-news").removeClass("tabactive");
//         $(this).addClass("tabactive");
//         $(".p-archive__post-news:not('.tabactive + .p-archive__post-news')").fadeOut();
//     $(".tabactive + .p-archive__post-news").fadeIn();      
//     });

});  //functionの閉じかっこ
