$(document).ready(function(){
    
//    gnb
    $("header li:first-child").click(function(){
        $("header").stop().toggleClass("on");
        
        var header = $("header").hasClass("on");
        if(header==true){
            $("section").click(function(){
                $("header").stop().removeClass("on");
            });
            $("footer").click(function(){
                $("header").stop().removeClass("on");
            });
        }
    });
    
    $("header li").click(function(){
        var offsetlist = 0;
        var offsetone = $(".cont2").offset().top;
        var offsettwo = $(".cont3").offset().top;
        var offsetthree = $(".cont5").offset().top;
        var offsetfore = $(".cont6").offset().top;
        offsetlist = $(this).index();
        
        if(offsetlist==1){
            $("html, body").animate({ scrollTop: offsetone-50},300);
        }
        if(offsetlist==2){
            $("html, body").animate({ scrollTop: offsettwo-50},300);
        }
        if(offsetlist==3){
            $("html, body").animate({ scrollTop: offsetthree-50},300);
        }
        if(offsetlist==4){
            $("html, body").animate({ scrollTop: offsetfore-50},300);
        }
    });
//    gnb
    
//    video
    $(".video-click").click(function(){
        $(".black-wrap").stop().addClass("on");
        $(".video").stop().addClass("on");
        $(".video_line div:nth-child(1)").stop().animate({"width":"100%"},200,function(){
            $(".video_line div:nth-child(2)").stop().animate({"height":"100%"},200,function(){
                $(".video_line div:nth-child(3)").stop().animate({"width":"100%"},200,function(){
                    $(".video_line div:nth-child(4)").stop().animate({"height":"100%"},200,function(){
                        $(".video iframe").stop().animate({"opacity":"1"});
                    });
                });
            });
        });
        
        var cont01video = $(".video").hasClass("on");
        
        if(cont01video==true){
            $(".black-wrap").click(function(){
                $(".video_line div:nth-child(1)").stop().animate({"width":"0%"},300,function(){
                    $(".black-wrap").stop().removeClass("on");
                    $(".video").stop().removeClass("on");
                    $(".video iframe").stop().animate({"opacity":"0"});
                    $("iframe")[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
                });
                $(".video_line > div:nth-child(2)").stop().animate({"height":"0%"},300);
                $(".video_line > div:nth-child(3)").stop().animate({"width":"0%"},300);
                $(".video_line > div:nth-child(4)").stop().animate({"height":"0%"},300);
            });
            $(".video_close").click(function(){
                $(".video_line div:nth-child(1)").stop().animate({"width":"0%"},300,function(){
                    $(".black-wrap").stop().removeClass("on");
                    $(".video").stop().removeClass("on");
                    $(".video iframe").stop().animate({"opacity":"0"});
                    $("iframe")[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
                });
                $(".video_line div:nth-child(2)").stop().animate({"height":"0%"},300);
                $(".video_line div:nth-child(3)").stop().animate({"width":"0%"},300);
                $(".video_line div:nth-child(4)").stop().animate({"height":"0%"},300); 
            });
        }
    });
    
    function stopVideo() {
    var div = document.getElementById("video");
    var iframe = div.getElementsByTagName("iframe")[0].contentWindow;
    iframe.postMessage('{"event":"command","func":"pauseVideo","args":""}','*');
}
//    video
    
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
            $(".cont4 > img").attr("src","./img/bg/chara_bg_sp.png");
            $(".cont04_tab01").stop().addClass("on");
            $(".cont04_tab02").stop().removeClass("on");
        }
        if(cont04lst==1){
            $(".cont4 > img").attr("src","./img/bg/intro_bg_sp.png");
            $(".cont04_tab02").stop().addClass("on");
            $(".cont04_tab01").stop().removeClass("on");
        }
        $(".cont04_menu > li").stop().removeClass("on");
        $(".cont04_menu > li").eq(cont04lst).stop().addClass("on");
    });
//    cont4 캐릭터/만화 탭
    
    
//    cont4 만화 레이어팝업
    $(".intro_click li").click(function(){
        
        var cont04list = $(this).index();
        
        $(".black-wrap").stop().addClass("on");
        $(".cont04_comic").stop().addClass("on");
        $(".comic-tab > li").stop().removeClass("on");
        $(".comic-tab > li").eq(cont04list).stop().addClass("on");
        
        var cont04tab = $(".cont04_comic").hasClass("on");
        if(cont04tab==true){
            $(".black-wrap").click(function(){
                $(".black-wrap").stop().removeClass("on");
                $(".cont04_comic").stop().removeClass("on");
            });
            $(".comic_close").click(function(){
                $(".black-wrap").stop().removeClass("on");
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