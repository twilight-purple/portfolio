$(document).ready(function(){
    
//    gnb
    var offsetlist = 0;
    var offsetone = $(".cont02").offset().top;
    var offsettwo = $(".cont03").offset().top;
    var offsetthree = $(".cont05").offset().top;
    var offsetfore = $(".cont06").offset().top;
    
    $("header li").click(function(){
        
        offsetlist = $(this).index();
        
        if(offsetlist==0){
            $("html, body").animate({ scrollTop: offsetone-55},300);
        }
        if(offsetlist==1){
            $("html, body").animate({ scrollTop: offsettwo-55},300);
        }
        if(offsetlist==2){
            $("html, body").animate({ scrollTop: offsetthree-55},300);
        }
        if(offsetlist==3){
            $("html, body").animate({ scrollTop: offsetfore-55},300);
        }
    });
    
    var scroll_now = 0;
    $(document).scroll(function(){
        scroll_now = $(document).scrollTop();

        if(scroll_now<offsetone-60){
            $("header li").stop().removeClass("on");
        }
        if(scroll_now>offsetone-60){
            $("header li").stop().removeClass("on");
            $("header li").eq(0).stop().addClass("on");
        }
        if(scroll_now>offsettwo-60){
            $("header li").stop().removeClass("on");
            $("header li").eq(1).stop().addClass("on");
        }
        if(scroll_now>offsetthree-60){
            $("header li").stop().removeClass("on");
            $("header li").eq(2).stop().addClass("on");
        }
        if(scroll_now>offsetfore-60){
            $("header li").stop().removeClass("on");
            $("header li").eq(3).stop().addClass("on");
        }
    });
    
//    gnb
    
//   cont1캐릭터
    $(".cont01_character li:nth-child(1)").stop().animate({"opacity":"1"},300,function(){
        $(".cont01_character li:nth-child(2)").stop().animate({"opacity":"1"},300,function(){
            $(".cont01_character li:nth-child(3)").stop().animate({"opacity":"1"},300,function(){
                $(".cont01_character li:nth-child(4)").stop().animate({"opacity":"1"},300,function(){
                    $(".cont01_character li:nth-child(5)").stop().animate({"opacity":"1"},300);
                });
            });
        });
    });
//   cont1캐릭터
    
//    cont1 비디오 클릭
    $(".cont01_video").click(function(){
        $(".modalblack").stop().addClass("on");
        $(".cont01_videoview").stop().addClass("on");
        $(".videoview_line div:nth-child(1)").stop().animate({"width":"100%"},200,function(){
            $(".videoview_line div:nth-child(2)").stop().animate({"height":"100%"},200,function(){
                $(".videoview_line div:nth-child(3)").stop().animate({"width":"100%"},200,function(){
                    $(".videoview_line div:nth-child(4)").stop().animate({"height":"100%"},200,function(){
                        $(".cont01_videoview iframe").stop().animate({"opacity":"1"});
                    });
                });
            });
        });
        
        var cont01video = $(".cont01_videoview").hasClass("on");
        
        if(cont01video==true){
            $(".modalblack").click(function(){
                $(".videoview_line div:nth-child(1)").stop().animate({"width":"0%"},300,function(){
                    $(".modalblack").stop().removeClass("on");
                    $(".cont01_videoview").stop().removeClass("on");
                    $(".cont01_videoview iframe").stop().animate({"opacity":"0"});
                    $("iframe")[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
                });
                $(".videoview_line > div:nth-child(2)").stop().animate({"height":"0%"},300);
                $(".videoview_line > div:nth-child(3)").stop().animate({"width":"0%"},300);
                $(".videoview_line > div:nth-child(4)").stop().animate({"height":"0%"},300);
            });
            $(".video_close").click(function(){
                $(".videoview_line div:nth-child(1)").stop().animate({"width":"0%"},300,function(){
                    $(".modalblack").stop().removeClass("on");
                    $(".cont01_videoview").stop().removeClass("on");
                    $(".cont01_videoview iframe").stop().animate({"opacity":"0"});
                    $("iframe")[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
                });
                $(".videoview_line div:nth-child(2)").stop().animate({"height":"0%"},300);
                $(".videoview_line div:nth-child(3)").stop().animate({"width":"0%"},300);
                $(".videoview_line div:nth-child(4)").stop().animate({"height":"0%"},300); 
            });
        }
    });
    
    function stopVideo() {
    var div = document.getElementById("video_slide");
    var iframe = div.getElementsByTagName("iframe")[0].contentWindow;
    iframe.postMessage('{"event":"command","func":"pauseVideo","args":""}','*');
}

//    cont1 비디오 클릭
    
//    input 숫자만 적용
    function autoHypenPhone(str){
        str = str.replace(/[^0-9]/g, '');
        var tmp = '';
        if( str.length < 4){
            return str;
        }else if(str.length < 7){
            tmp += str.substr(0, 3);
            tmp += '-';
            tmp += str.substr(3);
            return tmp;
        }else if(str.length < 11){
            tmp += str.substr(0, 3);
            tmp += '-';
            tmp += str.substr(3, 3);
            tmp += '-';
            tmp += str.substr(6);
            return tmp;
        }else{              
            tmp += str.substr(0, 3);
            tmp += '-';
            tmp += str.substr(3, 4);
            tmp += '-';
            tmp += str.substr(7);
            return tmp;
        }
        return str;
    }

    var cellPhone = document.getElementById('cellPhone');
    cellPhone.onkeyup = function(event){
            event = event || window.event;
            var _val = this.value.trim();
            this.value = autoHypenPhone(_val) ;
    }
//    input 숫자만 적용
    
//    cont2사전등록 버튼클릭
    $(".cont02-btn").click(function(){
        $(".cont02-layer").css({"display":"block"});
        $(".cont02-layer").css({"background-image":"url(./img/icon/alert_pop_2.png)"});
    });
    $(".cont02-layer").click(function(){
        $(this).css({"display":"none"});
    });
    $(".cont02-tmi").click(function(){
        $(".cont02-layer").css({"display":"block"});
        $(".cont02-layer").css({"background-image":"url(./img/icon/alert_pop_5.png)"});
    });
//    cont2사전등록 버튼클릭
    
    
//    cont4 캐릭터/만화 탭
    $(".cont04_menu > li").click(function(){
        var cont04lst = $(this).index();
        
        if(cont04lst==0){
           $(".cont04").css({"background-image":"url(./img/bg/cont04_bg02.jpg)"});
            $(".cont04_tab01").stop().addClass("on");
            $(".cont04_tab02").stop().removeClass("on");
        }
        if(cont04lst==1){
           $(".cont04").css({"background-image":"url(./img/bg/cont04_bg.jpg)"}); 
            $(".cont04_tab02").stop().addClass("on");
            $(".cont04_tab01").stop().removeClass("on");
        }
        $(".cont04_menu > li").stop().removeClass("on");
        $(".cont04_menu > li").eq(cont04lst).stop().addClass("on");
    });
//    cont4 캐릭터/만화 탭
    
//    cont4 만화 레이어팝업
    $(".cont04_tab02 li").click(function(){
        
        var cont04list = $(this).index();
        
        $(".modalblack").stop().addClass("on");
        $(".cont04_comic").stop().addClass("on");
        $(".comic-tab > li").stop().removeClass("on");
        $(".comic-tab > li").eq(cont04list).stop().addClass("on");
        
        var cont04tab = $(".cont04_comic").hasClass("on");
        if(cont04tab==true){
            $(".modalblack").click(function(){
                $(".modalblack").stop().removeClass("on");
                $(".cont04_comic").stop().removeClass("on");
            });
            $(".comic_close").click(function(){
                $(".modalblack").stop().removeClass("on");
                $(".cont04_comic").stop().removeClass("on");
            });
        }
    });
//    cont4 만화 레이어팝업
    
//    cont04슬라이드
    // swiper1
    new Swiper('.swiper1', {
        navigation : {
            nextEl : '.swiper-button-next',
            prevEl : '.swiper-button-prev',
        },
        loop : true,
    });

    // swiper2
    new Swiper('.swiper2', {
        navigation : {
            nextEl : '.swiper-button-next',
            prevEl : '.swiper-button-prev',
        },
    });
    
    // swiper3
    new Swiper('.c01', {
          pagination: {
            el: '.swiper-pagination',
            type: 'fraction',
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
        observer: true,
        observeParents: true,
    });
    new Swiper('.c02', {
          pagination: {
            el: '.swiper-pagination',
            type: 'fraction',
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
        observer: true,
        observeParents: true,
    });
    new Swiper('.c03', {
          pagination: {
            el: '.swiper-pagination',
            type: 'fraction',
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
        observer: true,
        observeParents: true,
    });
    new Swiper('.c04', {
          pagination: {
            el: '.swiper-pagination',
            type: 'fraction',
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
        observer: true,
        observeParents: true,
    });
    new Swiper('.c05', {
          pagination: {
            el: '.swiper-pagination',
            type: 'fraction',
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
        observer: true,
        observeParents: true,
    });
//    cont04슬라이드
    
});