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
$(function(){    
    //tabactiveがついている__post でないものはhideする
    $(".p-archive__post:not('.tabactive + .p-archive__post')").hide();       
    
    //カテゴリ部分をホバーしたときの表示
    $(".p-archive__tab__menu__category").hover(
      function(){
        $(this).addClass("hover")
        },
      function(){
        $(this).removeClass("hover")
    }); 

    //クリックしたときの挙動
    $(".p-archive__tab__menu__category").click(function(){
        
        $(".p-archive__tab__menu__category").removeClass("tabactive");
        $(this).addClass("tabactive");
        $(".p-archive__post:not('.tabactive + .p-archive__post')").fadeOut();
    $(".tabactive + .p-archive__post").fadeIn();      
    });
});
