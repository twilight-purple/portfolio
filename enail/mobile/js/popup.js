$(document).ready(function(){
    
    var posY = 0;
    
    $(".wrap-black").stop().addClass("on");
    posY = $(window).scrollTop();
    $("html, body").addClass("not_scroll");
    $("section").css("top",-posY);
    
    $(".popup-cont h3 span").click(function(){
        $(".popup").stop().removeClass("view");
        $(".wrap-black").stop().removeClass("on");
        $(".popup").stop().remove();
        $("html, body").removeClass("not_scroll");
        posY = $(window).scrollTop(posY);
        $(".sns-wrap").css({"z-index":"9999"});
    });
});