$(document).ready(function(){
    $(document).scroll(function(){
        var headTop = $(".gnb01").height();
        var gnbchangeTop = $(".gnb-change").offset().top;
        var scroll_now = $(document).scrollTop();

        if(scroll_now>headTop+10 && scroll_now<gnbchangeTop-30){
            $("header").stop().addClass("gnb02");
            $("header").stop().removeClass("gnb03");
            $(".footer-top").css({"opacity":"1"});
            $("section").css({"padding-top":"170px"});
        }
        else if(scroll_now>gnbchangeTop){
            $("header").stop().addClass("gnb03");
            $("header").stop().removeClass("gnb02");
            $("section").css({"padding-top":"170px"});
            $(".footer-top").css({"opacity":"1"});
        }
        else{
            $("header").stop().removeClass("gnb02");
            $("header").stop().removeClass("gnb03");
            $(".footer-top").css({"opacity":"0"});
            $("section").css({"padding-top":"0px"});
        }
    });
});