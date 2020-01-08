$(document).ready(function(){
    
    
    
//    햄버거빵 클릭시
    $(".ham").addClass("onn");

    $(".ham").click(function(){
       
        $(".gnb").toggleClass("on");
        $("#wrap").toggleClass("on");
        $(".ham").toggleClass("on");
    });
//        햄버거빵 클릭시 끝
    
    
    
//    스크롤 조금 내리면 logo_wrap배경색 시작
    $(document).scroll(function(){
    var headTop=$(".cont1").height();
    var scroll_now=$(document).scrollTop();
    if(scroll_now>headTop){
        $(".logo_wrap").addClass("on");
        $(".logo").addClass("on");
        $(".ham").removeClass("onn");
        $(".logo").stop().fadeIn();
    }
    else{
        $(".logo_wrap").removeClass("on");
        $(".logo").removeClass("on");
        $(".ham").addClass("onn");
        $(".logo").hide();
    }
    });
//    스크롤 조금 내리면 logo_wrap배경색 끝
    
    
    
//    top버튼 시작
    $(document).scroll(function(){
        var topTop=$(".cont1").height();
        scroll_now=$(document).scrollTop();
        
        if(scroll_now>topTop){
            $(".top").show();
        }
        else{
            $(".top").hide();
        }
    });
    
    $(".top").click(function(){
        
        $("html, body").animate({ scrollTop: 0 },1000);
        
    });
//    top버튼 끝
    
    
//    AOS플러그인시작
    AOS.init(8000);
//    AOS플러그인끝
    
    
//    cont2 more버튼시작
    $(".more").click(function(){
        
        $(".panel").toggleClass("on");
        $(".more").toggleClass("on");
        $(".more_ico").toggleClass("on");
        
    });
    
//    cont2 more버튼 끝
    
    
    
    
    
    
    
    
    
    
//    cont3 시작
    $(".cont3_img li").click(function(){
        
        $(".cont3_img li").removeClass("on");
        $(this).addClass("on");
        
        
    });
//    cont3 끝
    
    
    
    
    
    
    
    
});