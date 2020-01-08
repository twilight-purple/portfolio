$(document).ready(function(){
    
    
//    가로/세로 회전시 새로고침
    $(window).trigger("orientationchange");
    $(window).bind("orientationchange", function(e) {
        var orientation = window.orientation;

        if (orientation == 90 || orientation == -90) {
            location.reload();
        } 
        else {
            location.reload();
        }
    });
//    $(window).resize(function(){
//        location.reload();
//    });
//    가로/세로 회전시 새로고침
    
    
    
//    gnb-검색창
    $(".gnb-search").click(function(){
        $(".gnb-search").stop().toggleClass("on");
        
        var gnbsearch = $(".gnb-search").hasClass("on");
        if(gnbsearch == true){
            $(".gnb-searchbox").stop().addClass("on");
        }
        else{
            $(".gnb-searchbox").stop().removeClass("on");
        }
    });
    
    var posY = 0;
    $(".gnb-search.searchboxlong").click(function(){
        $(".gnb-search").stop().toggleClass("onn");
        var gnbsearchonn = $(".gnb-search").hasClass("onn");
        
         if(gnbsearchonn==true){
            $(".gnb-searchbox").stop().addClass("onn");
            posY = $(window).scrollTop();
            $("html, body").addClass("not_scroll");
            $("section").css("top",-posY);
             $(".sns-wrap").css({"z-index":"99"});
        }
        else{
            $(".gnb-searchbox").stop().removeClass("onn");
            $("html, body").removeClass("not_scroll");
            posY = $(window).scrollTop(posY);
            $(".sns-wrap").css({"z-index":"9999"});
        }
    });
//    gnb-검색창
    
//    gnb-좌측메뉴
    $(".gnb-ham").click(function(){
        $(".wrap-black").stop().addClass("on");
        $(".left-gnb").stop().addClass("on");
        posY = $(window).scrollTop();
        $("html, body").addClass("not_scroll");
        $("section").css("top",-posY);
        $(".sns-wrap").css({"z-index":"999"});
    });
    
    $(".left-gnb-close").click(function(){
        $(".wrap-black").stop().removeClass("on");
        $(".left-gnb").stop().removeClass("on");
        $("html, body").removeClass("not_scroll");
        posY = $(window).scrollTop(posY);
        $(".sns-wrap").css({"z-index":"9999"});
    });
//    gnb-좌측메뉴
    
//    gnb-섹션텍스트변경
    var scroll_now = 0;
    var headTop = 0;

    $(document).scroll(function(){
        headTop = $(".gnb").height();
        scroll_now = $(document).scrollTop();

        if(scroll_now>headTop+100){
            $("header").stop().addClass("gnb02");
            $(".footer-top").css({"opacity":"1"});
        }
        else{
            $("header").stop().removeClass("gnb02");
            $(".footer-top").css({"opacity":"0"});
        }
    });
    
    $(".footer-top").click(function(){
        $("html, body").animate({ scrollTop: 0 },400);
    });
//    gnb-섹션텍스트변경
    
    
//    footer-패밀리사이트
    $(".footer-btn > li:nth-child(2)").click(function(){
        $(this).stop().toggleClass("on");
    });
//    footer-패밀리사이트
    
//    sns
    $(".sns > li:first-child").click(function(){
        $(this).stop().toggleClass("view");
        var snshas = $(".sns > li:first-child").hasClass("view");
        if(snshas==true){
            $(".wrap-black").stop().addClass("on");
            $(".sns-wrap").stop().addClass("on");
            posY = $(window).scrollTop();
            $("html, body").addClass("not_scroll");
            $("section").css("top",-posY);
            $(".m-editor-profile-open").css({"z-index":"999"});
        }
        else{
            $(".wrap-black").stop().removeClass("on");
            $(".sns-wrap").stop().removeClass("on");
            $("html, body").removeClass("not_scroll");
            posY = $(window).scrollTop(posY);
            $(".m-editor-profile-open").css({"z-index":"9999"});
        }
        
    });
//    sns
    
    
    
    
    
//    기자프로필 상세페이지 - 팔로우
    $(".m-editor-profile li:nth-child(1)").click(function(){
        $(this).stop().toggleClass("on");
    });
    $(".m-editor-profile li:nth-child(2)").click(function(){
        $(".m-editor-profile-open").stop().addClass("on");
        
        posY = $(window).scrollTop();
        $("html, body").addClass("not_scroll");
        $("section").css("top",-posY);
    });
    $(".m-editor-profile-open > div").click(function(){
        $(".m-editor-profile-open").stop().removeClass("on");
        
        $("html, body").removeClass("not_scroll");
        posY = $(window).scrollTop(posY);
    });
//    기자프로필 상세페이지 - 팔로우
//    기자프로필 상세페이지 - 뉴스날짜슬라이드
    var swiper1 = new Swiper('.data', { 
        slidesPerView: 4,
        spaceBetween: 30,
        navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev', },
    });
    
    $(".m-editor-data-wrap .swiper-slide").click(function(){
        $(".m-editor-data-wrap .swiper-slide").stop().removeClass("on");
        $(this).stop().addClass("on");
    });
//    기자프로필 상세페이지 - 뉴스날짜슬라이드
//    기자프로필 상세페이지 - 월별 셀렉트박스
    $(".ulselect > li:nth-child(1)").click(function(){
        $(this).stop().toggleClass("view");
        var ulrepoterselect = $(".ulselect > li:nth-child(1)").hasClass("view");
        if(ulrepoterselect==true){
            $('.ulselect > li:nth-child(n+2)').stop().slideDown(200);
            $(".ulselect > li:nth-child(n+2)").click(function(){
                var ulmainselecttext = $(this).text();
                $(".ulselect > li:first-child").text(ulmainselecttext);
                $(".ulselect > li:nth-child(n+2)").stop().removeClass("on");
                $(this).stop().addClass("on");
                
                $(".ulselect > li:nth-child(1)").stop().removeClass("view");
                $(".ulselect > li:nth-child(n+2)").css({"display":"none"});
            });
        }
        else{
            $('.ulselect > li:nth-child(n+2)').stop().slideUp(200);
        }
    });
    
    $("body").click(function(e) { 
         if($(".ulselect").css("display") == "block") {
              if(!$('.ulselect').has(e.target).length) { 
                    $('.ulselect > li:nth-child(n+2)').stop().slideUp(200);
                    $(".ulselect > li:nth-child(1)").stop().removeClass("view");
              } 
         }
    });
//    기자프로필 상세페이지 - 월별 셀렉트박스
    
    
//    기자리포트 기사뷰 페이지
//    스크랩
    $(".m-et-btn > div").click(function(){
        $(this).stop().toggleClass("on");
    });
//    스크랩
//    에디터폰트사이즈
    $('.m-et-btn li').click(function(){
        var metbtnlist = $(this).index();
        $('.m-et-btn li').stop().removeClass("on");
        $(this).stop().addClass("on");
        if(metbtnlist==0){
            $(".m-et-cont").css({"zoom":"80%"});
        }
        if(metbtnlist==1){
            $(".m-et-cont").css({"zoom":"100%"});
        }
        if(metbtnlist==2){
            $(".m-et-cont").css({"zoom":"120%"});
        }
    });
//    에디터폰트사이즈
//    코멘트 락
    $(".rock").click(function(){
        $(this).stop().toggleClass("on");
    });
//    코멘트 락
//    코멘트 접힘 펼침
    $(".m-comment > li > div div").click(function(){
        $(this).parent("div").siblings("ul").stop().slideToggle(200);
    });
    $(".ccoment > li:last-child").click(function(){
        $(this).parent("ul").stop().slideUp(200);
    });
//    코멘트 접힘 펼침
//    기자리포트 기사뷰 페이지
    
    
//    스페셜리포트 기자프로필 페이지
//    팔로우버튼
    $(".msep-btn li:nth-child(1)").click(function(){
        $(this).stop().toggleClass("on");
    });
//    기자들 여러명 슬라이드
    $(".msep-people-wrap").click(function(){
        $(".msep-people-slide").stop().addClass("on");
    });
    $(".msep-close").click(function(){
        $(".msep-people-slide").stop().removeClass("on");
    });
    var swiper2 = new Swiper('.mesp', { 
        slidesPerView: 4,
    });
//    외부필진
    $(".m-special-editor-profile.outside .msep-btn>li:nth-child(2)").click(function(){
        $(".m-editor-profile-open").stop().addClass("on");
        posY = $(window).scrollTop();
        $("html, body").addClass("not_scroll");
        $("section").css("top",-posY);
    });
//    스페셜리포트 기자프로필 페이지
    
    
//    동영상뉴스
//    메인비쥬얼슬라이드
    var swiper3 = new Swiper('.m-video', { 
        slidesPerView: 1,
        slidesPerGroup : 1 ,
        autoplay: {delay: 8000,disableOnInteraction: false,}, autoplayDisableOnInteraction: true, stopOnLast: false,
        loop : true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
//    탭메뉴
    $(".m-video-tabmenu li").click(function(){
        var videotablist = $(this).index();
        $(".m-video-tabmenu li").stop().removeClass("on");
        $(".m-video-tabmenu li").eq(videotablist).stop().addClass("on");
        $(".m-video-tab>li").stop().removeClass("on");
        $(".m-video-tab>li").eq(videotablist).stop().addClass("on");
    });
//    탭슬라이드
    var swiper4 = new Swiper('.mv1', { 
        slidesPerView: 2.5,
        pagination: {
        el: '.swiper-pagination',
        type: 'fraction',
        },
        spaceBetween: 20,
        slidesPerGroup : 1 ,
    });
//    탭슬라이드 맨 앞으로
    $('.firstmove').click(function(){
        $(this).parents(".swiper-wrapper").css({"transform":"translate3d(0px, 0px, 0px)","transition-duration": "300ms"});
    });
//    동영상뉴스
    
    
//    검색결과
//    탭메뉴
    $(".m-searchpage-tabbtn li").click(function(){
        var searchpagelist = $(this).index();
        $(".m-searchpage-tabbtn li").stop().removeClass("on");
        $(".m-searchpage-tabbtn li").eq(searchpagelist).stop().addClass("on");
        $(".m-searchpage-tab > li").stop().removeClass("on");
        $(".m-searchpage-tab > li").eq(searchpagelist).stop().addClass("on");
    });
//    검색결과
    
//    마이페이지 -내가 팔로우한 기자
//    탭메뉴
    $(".m-mypage-tabbtn > li").click(function(){
        var mypagelist = $(this).index();
        $(".m-mypage-tabbtn > li").stop().removeClass("on");
        $(".m-mypage-tabbtn > li").eq(mypagelist).stop().addClass("on");
        $(".m-mypage-tab > li").stop().removeClass("on");
        $(".m-mypage-tab > li").eq(mypagelist).stop().addClass("on");
    });
//    마이페이지 -내가 팔로우한 기자
    
//    마이페이지-내가 스크랩한 기사
    $(".m-sclist-select li:first-child").click(function(){
        $(this).stop().toggleClass("on");
        var scrapselect = $(this).hasClass("on");
        if(scrapselect==true){
            $(".m-sclist-select li:nth-child(n+2)").stop().slideDown(200);
            $(".m-sclist-select li:nth-child(n+2)").click(function(){
                var scrapselectext = $(this).text();
                $(".m-sclist-select li:first-child span").text(scrapselectext);
                $(".m-sclist-select li:first-child").stop().removeClass("on");
                $(".m-sclist-select li:nth-child(n+2)").css({"display":"none"});
            });
        }
        else{
            $(".m-sclist-select li:nth-child(n+2)").stop().slideUp(200);
        }
    });
    $("body").click(function(e) { 
         if($(".m-sclist-select ul").css("display") == "block") {
              if(!$('.m-sclist-select ul').has(e.target).length) { 
                    $('.m-sclist-select ul li:nth-child(n+2)').stop().slideUp(200);
                    $(".m-sclist-select ul li:nth-child(1)").stop().removeClass("on");
              } 
         }
    });
//    마이페이지-내가 스크랩한 기사
    

    
});