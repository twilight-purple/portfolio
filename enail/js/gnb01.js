$(document).ready(function(){
    var scroll_now = 0;
    var headTop = 0;

    $(document).scroll(function(){
        headTop = $(".gnb01").height();
        scroll_now = $(document).scrollTop();

        if(scroll_now>headTop+10){
            $("header").stop().addClass("gnb02");
            $(".footer-top").css({"opacity":"1"});
            $("section").css({"padding-top":"170px"});
        }
        else{
            $("header").stop().removeClass("gnb02");
            $(".footer-top").css({"opacity":"0"});
            $("section").css({"padding-top":"0px"});
        }
    });
});