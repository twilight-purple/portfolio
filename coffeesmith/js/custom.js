$(document).ready(function(){
    
    $(".slider li .text").stop().animate({"margin-top":"250"});
    
    
//    원페이지 mousewheel 시작
    
    var sc_top = 0;
    
    $("#wrap > div").on("mousewheel",function(event,delta){    
      if (delta > 0) {
        sc_top = $(this).prev().offset().top;
        $("html,body").stop().animate({"scrollTop":sc_top},1000);
      }
        
    else if (delta < 0) {
        sc_top = $(this).next().offset().top;
        $("html,body").stop().animate({"scrollTop":sc_top},1000);
    }
    
});
//    원페이지 mousewheel 완료
    
    
    
////    새로고침 누르면 맨 위로 올라가게 시작
//    window.onload = function(){
//        setTimeout(function(){
//            scrollTo(0,0);
//        },100);
//    }
////    새로고침 누르면 맨 위로 올라가게 끝
    
    
    
    /*햄버거빵 메뉴 클릭시*/
    
    var ham = 0; 
    var check = true;
    
    $(".ham").click(function(){
       
        $(".ham span").css({"background-color":"#fff"});
        $(".gnb").toggleClass("on");
        $(".header_group").toggleClass("on");
        $(".cont2").toggleClass("on");
        $(".cont3").toggleClass("on");
        $(".cont4").toggleClass("on");
        $(".cont5").toggleClass("on");
        $(".cont6").toggleClass("on");
        $(".ham").toggleClass("on");
        
        check = $(".gnb").hasClass("on"); 
        
        if(check == true) {
            
            clearInterval(auto);
            
        }
        else if(check == false) {
            
            auto = setInterval(function(){
        
            if(list==len-1){
                list = 0;
            }
            else{
                list++;
            }
            
            $(".btn li").removeClass("on");
            $(".btn li").eq(list).addClass("on");
            $(".slider li").fadeOut(500);
            $(".slider li").eq(list).fadeIn(500);
            
        },10000);
            
        }
        
    });
    /*햄버거빵 메뉴 클릭시 완료*/
    
    
    
    
    
    
    
    
    
//    cont1 백그라운드 슬라이드 시작
    var list = 0;
    var len = $(".btn li").length;
    
    $(".btn li").click(function(){
        
        list = $(this).index();
        
        $(".btn li").removeClass("on");
        $(this).addClass("on");
        $(".slider li").stop().fadeOut();
        $(".slider li").eq(list).stop().fadeIn();
        
    });
    
    var auto = setInterval(function(){
        
        if(list==len-1){
            list = 0;
        }
        else{
            list++;
        }
        
        $(".btn li").removeClass("on");
        $(".btn li").eq(list).addClass("on");
        $(".slider li").stop().fadeOut(1000);
        $(".slider li").eq(list).stop().fadeIn(1000);
        
    },8000);
    
    $(".btn").mouseenter(function(){
        
        clearInterval(auto);
        
    });
    
    $(".btn").mouseleave(function(){
        
        auto = setInterval(function(){
        
            if(list==len-1){
                list = 0;
            }
            else{
                list++;
            }
            
            $(".btn li").removeClass("on");
            $(".btn li").eq(list).addClass("on");
            $(".slider li").stop().fadeOut(1000);
            $(".slider li").eq(list).stop().fadeIn(1000);
            
        },8000);
        
    });
    //    cont1 백그라운드 슬라이드 완료
    
    
    
    
    
//    전체 스크롤
    
    var r_num = 0;
    
    $(window).scroll(function(){
       
        var sc_top = $(this).scrollTop()+300;
        var cont1 = $(".cont1").offset().top;
        var cont2 = $(".cont2").offset().top;
        var cont3 = $(".cont3").offset().top;
        var cont4 = $(".cont4").offset().top;
        var cont5 = $(".cont5").offset().top;
        var cont6 = $(".cont6").offset().top;
        
        if(sc_top >= cont1 && sc_top < cont2) {
            r_num = 0;
        }
        
        else if(sc_top >= cont2 && sc_top < cont3) {
            r_num = 1;
        }
        
        else if(sc_top >= cont3 && sc_top < cont4) {
            r_num = 2;
//            $(".ham span").css({"background-color":"#fff"});
//            $(".quick_menu li").css({"border-top-color":"#fff"});
//            $(".quick_menu li").eq(list).css({"border-color":"#ff8900"});
        }
        
        else if(sc_top >= cont4 && sc_top < cont5) {
            r_num = 3;
        }
        
        else if(sc_top >= cont5 && sc_top < cont6) {
            r_num = 4;
        }
        
        else if(sc_top >= cont6) {
            r_num = 5;
        }
        
        $(".quick_menu li").removeClass("on");
        $(".quick_menu li").eq(r_num).addClass("on");
    });
//    전체스크롤 끝
   
    
    
    
    
    
    
//    quick_menu시작
    $(".quick_menu li").click(function(){
        
        r_num = $(this).index();
        
        $(".quick_menu li").removeClass("on");
        $(".quick_menu li").eq(r_num).addClass("on");
        
        var sec_name = $(this).attr('data-class');
        var move = $(sec_name).offset().top;
        
        $("html,body").stop().animate({"scrollTop":move},800);
        
    });
//    quick_menu 끝
    
    
    
//    cont2스크롤바 플러그인 사용
    $(".scroll_wrap").mCustomScrollbar({
        axis:"x",
        theme:"dark"
    });
//    cont2스크롤바 플러그인 완료
    
    
    
    
    /* cont2 isotope 시작*/
    $(".scroll_menu li").click(function(){
        
        var i = $(this).index();
        
        if(i == 0){
            
        location.reload();
        $(".scrollbar").css({"width":"29486px"});
        $("#mCSB_1_container").css({"width":"29486px"});
        $("#mCSB_1").css({"width":"29486px"});
        }
        else if(i== 1) {
            
        $(".scrollbar").css({"width":"8208px"});
        $("#mCSB_1_container").css({"width":"8208px"});
        $("#mCSB_1").css({"width":"8208px"});
        $(".mCSB_dragger_bar").css({"width":"8208px;"});
        }
        else if(i== 2) {
            
        $(".scrollbar").css({"width":"10032px"});
        $("#mCSB_1_container").css({"width":"10032px"});
        $("#mCSB_1").css({"width":"10032px"});
        }
        else if(i== 3) {
            
        $(".scrollbar").css({"width":"5776px"});
        $("#mCSB_1_container").css({"width":"5776px"});
        $("#mCSB_1").css({"width":"5776px"});
        }
        else if(i== 4) {
            
        $(".scrollbar").css({"width":"5472px"});
        $("#mCSB_1_container").css({"width":"5472px"});
        $("#mCSB_1").css({"width":"5472px"});
        }
        
        $("#mCSB_1_container").css({"left":0});
        $(".mCSB_container").css({"left":0});
        $("#mCSB_1_dragger_horizontal").css({"left":0});
        $(".mCSB_dragger").css({"left":0})
    });
    
    $(".scroll_menu li").click(function(){ // 버튼 클릭 시

    $(".scrollbar").isotope({ // 정렬할 박스들 감싸는 부모 클래스 이름
            // options
        itemSelector: '.all', //정렬할 박스들 클래스 이름
        layoutMode: 'fitRows' // 정렬시 옵션
    });

    $(".scroll_menu li").removeClass("on"); // 활성화되어있는 버튼 클래스on제거
    $(this).addClass("on"); // 클릭한 버튼 활성화

    var selector = $(this).attr('data-filter'); 
    // 정렬시킬 박스들의 클래스 이름 받아오기

    $(".scrollbar").isotope({ filter: selector });
    // 정렬시작 구문
        
        
    });	
    /*isotope 끝*/
    
    
    
    
    
    /* cont4 hoverdir 플러그인 적용할 선택자*/
    $(".cont4 .ist li").each( function() { $(this).hoverdir(); } );
    /* cont4 hoverdir 플러그인 적용할 선택자 끝*/
    
    
    
    
//    cont5캐러셀 시작
    $(".prev").click(function(){
        
        $(".cont5_slider").stop().animate({"margin-left":"0px"},800,function(){
            $(".cont5_slider li").eq(6).prependTo(".cont5_slider");
            $(".cont5_slider").css({"margin-left":"-1100px"});
        });
    });
    $(".next").click(function(){
        
        $(".cont5_slider").stop().animate({"margin-left":"-2200px"},800,function(){
            $(".cont5_slider li").eq(0).appendTo(".cont5_slider");
            $(".cont5_slider").css({"margin-left":"-1100px"});
        });
        
    });
//    cont5캐러셀 끝
    
    
    
//    cont6지도시작
    
    var map_num = 0;
    
    $(".map_ji01>li").click(function(){
        
        map_num = $(this).index();
        
        $(".map_ji01>li").removeClass("on");
        $(this).addClass("on");
        $(".map_box>li").hide();
        $(".map_box>li").eq(map_num).show();
        
    });
//    cont6지도끝
    
    
    
    
    
    
    
    
});