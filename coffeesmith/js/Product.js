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
    
    
//    cont2 isotope 시작
    $(".menu li").click(function(){ // 버튼 클릭 시

    $(".menu_list").isotope({ // 정렬할 박스들 감싸는 부모 클래스 이름
            // options
        itemSelector: '.all', //정렬할 박스들 클래스 이름
        layoutMode: 'fitRows' // 정렬시 옵션
    });

    $(".menu li").removeClass("on"); // 활성화되어있는 버튼 클래스on제거
    $(this).addClass("on"); // 클릭한 버튼 활성화

    var selector = $(this).attr('data-filter'); 
    // 정렬시킬 박스들의 클래스 이름 받아오기

    $(".menu_list").isotope({ filter: selector });
    // 정렬시작 구문
        
        
    });	
//    cont2 isotope 끝
    
    
    
    
    
    
    
    
    
    
    
    
    
    
});