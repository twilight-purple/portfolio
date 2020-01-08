$(document).ready(function(){
    
////    새로고침시 맨위로시작
//    window.onload = function(){
//        
//        setTimeout (function(){
//            scrollTo(0,0);
//        },100);
//        
//    }
////    새로고침시 맨위로끝
    
    
    
    
    
    
    
    
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
    
    
//    cont2 AOS플러그인시작
    AOS.init(8000);
//    cont2 AOS플러그인끝
    
    
    
    /*구글맵 지도*/
   var map = new GMaps({
      
       div:'#map',   
       lat:37.4972333,
       lng:127.0321031,
       zoom: 17,
   });
    
    /*검색지점에 마커표시*/
    
    map.addMarker({
        lat:37.4972333,
        lng:127.0321031,
        title:"더조은컴퓨터 일산"
    });
//    구글맵 지도 끝
    
    
    
    
//    갤러리효과 시작
    $(".s li").click(function(){
        
        var attr_href = $(this).attr("data-chg");
        
        $(".big").css({"background-image":"url(" + attr_href + ")"});
        
//        $(".big img").attr("src",attr_href);
        $(".s li").removeClass("on");
        $(this).addClass("on");
        
    });
//    갤러리효과 끝
    
    
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
    
    
    
    
    
    
    
    
    
    
    
    
});