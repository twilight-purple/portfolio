$(document).ready(function(){
    
    
/*2depth gnb영역*/
    var list = 0;
    
    $(".gnb").mouseenter(function(){
        $(".gnb_sub").addClass("on");
    });
    $(".gnb_view").mouseleave(function(){
        $(".gnb_sub").removeClass("on");
    });
    
    $(".gnb_sub>li").mouseenter(function(){
        list = $(this).index();
        $(".gnb>li>a").eq(list).addClass("on");
    });
    
    $(".gnb_sub>li").mouseleave(function(){
        $(".gnb>li>a").eq(list).removeClass("on");
    });
/*2depth gnb영역*/
    
    
});