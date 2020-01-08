$(document).ready(function(){
    
//    gnb
    $(".gnb-search").click(function(){
        $(".gnb-search").stop().toggleClass("on");
        
        var gnbsearch = $(".gnb-search").hasClass("on");
        if(gnbsearch == true){
            $(".searchbox").stop().addClass("on");
        }
        else{
            $(".searchbox").stop().removeClass("on");
        }
    });
//    gnb
    
//    좌측 gnb
    $(".gnb-ham").click(function(){
        $(".left-gnb").stop().addClass("on");
        $(".left-gnb-black").stop().addClass("on");
        $('.left-gnb-black').on('scroll touchmove mousewheel', function(event) {
          event.preventDefault();
          event.stopPropagation();
          return false;
        });
        $(".left-gnb").on('scroll touchmove mousewheel', function(event) {
          event.preventDefault();
          event.stopPropagation();
          return false;
        });
    });
    $(".left-gnb-close").click(function(){
        $(".left-gnb").stop().removeClass("on");
        $(".left-gnb-black").stop().removeClass("on");
        $('.left-gnb-black').off('scroll touchmove mousewheel');
    });
//    좌측 gnb

//	footer-스크롤top
	$(".footer-top").click(function(){
		$("html, body").animate({ scrollTop: 0 },200);
	});
//	footer-스크롤top
//    footer-selectbox
    $(".footer-select-wrap").click(function(e) {   
        $(this).stop().toggleClass("on");
    });
    $("body").click(function(e) { 
         if($(".footer-select-wrap").css("display") == "block") {
              if(!$('.footer-select-wrap').has(e.target).length) { 
                   $(".footer-select-wrap").stop().removeClass("on");
              } 
         }
    });
//    footer-selectbox
    
    
    
    
    
//    기자프로필 상세페이지 - 기자프로필view스크롤바플러그인
    $(".editor-history-scroll").mCustomScrollbar({ axis:"y", theme:"light-3" });
    
    $(".profile-btn > li.pf").click(function(){
        $(".profile-view").stop().addClass("on");
    });
    $(".profile-close").click(function(){
        $(".profile-view").stop().removeClass("on");
    });
    $(".profile-btn > li.fl").click(function(){
        $(this).stop().toggleClass("on");
    });
//    기자프로필 상세페이지 - 기자프로필view스크롤바플러그인
    
//    기자프로필 상세페이지 - 뉴스날짜슬라이드
    var swiper1 = new Swiper('.data', { 
        slidesPerView: 7,
        spaceBetween: 30,
        navigation: { nextEl: '.data-next', prevEl: '.data-prev', },
    });
    
    $(".news-data-wrap .swiper-slide").click(function(){
        var swiperdata = $(this).index();
        
        $(".news-data-wrap .swiper-slide").stop().removeClass("on");
        $(this).stop().addClass("on");
    });
//    기자프로필 상세페이지 - 뉴스날짜슬라이드
    
//    셀렉트박스 플러그인
     $(".select-box").select_box({
        width:"128",
        maxWidth    : "",
        minWidth    : "",
        height      : "32",
        maxScroll   : "",
        useBorderbox : false, 
        onchange:function(){},
        onload:function(){}
    });
    $(".select-box>ul").css({"top":"28px"});
//    셀렉트박스 플러그인
    
    
    
    
//    기사뷰 상세페이지 - 에디터 폰트 조절
    $(".editor-fontsize li").not(".editor-fontsize li:first-child").click(function(){
        var editorsize = $(this).index();
        $(".editor-fontsize li").removeClass("on");
        $(this).addClass("on");
        
        if(editorsize==1){
            $(".reporter-editor-cont").css({"zoom":"80%"});
        }
        if(editorsize==2){
            $(".reporter-editor-cont").css({"zoom":"100%"});
        }
        if(editorsize==3){
            $(".reporter-editor-cont").css({"zoom":"120%"});
        }
    });
//    기사뷰 상세페이지 - 에디터 폰트 조절
    
//    기사뷰 상세페이지 - 댓글 비공개
    $(".comment-write > div > div:nth-child(1)").click(function(){
        $(this).stop().toggleClass("on");
    });
    
    $(".com-view").click(function(){
        $(this).parents(".comment-basic").toggleClass("on");
    });
    
    $(".comment-btn ul:nth-child(2) li").click(function(){
        $(".comment-btn ul:nth-child(2) li").stop().removeClass("on");
        $(this).stop().addClass("on");
    });
    $(".comment-btn ul:nth-child(1) li").click(function(){
        $(".comment-btn ul:nth-child(2) li").stop().removeClass("on");
        $(".comment-btn ul:nth-child(2) li:first-child").stop().addClass("on");
    });
    $(".comment-btn ul:nth-child(3) li").click(function(){
        $(".comment-btn ul:nth-child(2) li").stop().removeClass("on");
        $(".comment-btn ul:nth-child(2) li:last-child").stop().addClass("on");
    });
//    기사뷰 상세페이지 - 댓글 비공개
    
    
//    스페셜리포트 - 기자프로필 기자슬라이드
    var swiper2 = new Swiper('.sprofile-slide', { 
        slidesPerView: 5,
        spaceBetween: 5,
        navigation: { nextEl: '.snext', prevEl: '.sprev', },
    });
//    스페셜리포트 - 기자프로필 기자슬라이드
//    스페셜리포트 - 기자프로필 팔로우
    $(".sprofile-cont .sprofile-follow").click(function(){
        $(this).stop().toggleClass("on");
    });
//    스페셜리포트 - 기자프로필 팔로우
//    스페셜리포트 - 외부필진
    $(".out-editor").click(function(){
        $(".sprofile-out-wrap").stop().addClass("on");
    });
    $(".sprofile-out-wrap-close").click(function(){
        $(".sprofile-out-wrap").stop().removeClass("on");
    });
//    스페셜리포트 - 외부필진
    
    
    
    
//    비쥬얼뉴스 - 동영상 슬라이드
    var swiper3 = new Swiper('.v-video', { 
        slidesPerView: 2,
        spaceBetween: 40,
        slidesPerGroup : 2 ,
        autoplay: {delay: 8000,disableOnInteraction: false,}, autoplayDisableOnInteraction: true, stopOnLast: false,
        loop : true,
        navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev', },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
      },
    });
//    비쥬얼뉴스 - 동영상 슬라이드
    
//    비쥬얼뉴스 - 탭메뉴
    $(".visual-news-tabmenu > li").click(function(){
        var visuallist = $(this).index();
        $(".visual-news-tabmenu > li").stop().removeClass("on");
        $(".visual-news-tabmenu > li").eq(visuallist).stop().addClass("on");
        $(".visual-news-tab > li").stop().removeClass("on");
        $(".visual-news-tab > li").eq(visuallist).stop().addClass("on");
    });
//    비쥬얼뉴스 - 탭메뉴
    
//    비쥬얼뉴스 - 탭슬라이드
    var swiper4 = new Swiper('.v1', { 
        slidesPerView: 3,
        pagination: {
        el: '.swiper-pagination',
        type: 'fraction',
        },
        loop : true,
        spaceBetween: 40,
        slidesPerGroup : 3 ,
        navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev', },
    });
//    비쥬얼뉴스 - 탭슬라이드
    
    
//    검색결과
    $(".searchpage-main ul li").click(function(){
        var searchlist = $(this).index();
        
        $(".searchpage-main ul > li").stop().removeClass("on");
        $(".searchpage-main ul > li").eq(searchlist).stop().addClass("on");
        $(".searchpage-tab > li").stop().removeClass("on");
        $(".searchpage-tab > li").eq(searchlist).stop().addClass("on");
    });
//    검색결과
    
    
//    마이페이지-팔로우한 기자
    $(".mypage-fle-tabmenu > li").click(function(){
        var mpfelist = $(this).index();
        
        $(".mypage-fle-tabmenu > li").stop().removeClass("on");
        $(".mypage-fle-tabmenu > li").eq(mpfelist).stop().addClass("on");
        $(".mypage-fle-tab > li").stop().removeClass("on");
        $(".mypage-fle-tab > li").eq(mpfelist).stop().addClass("on");
    });
//    마이페이지-팔로우한 기자
    
//	AOS.init();
    
    
    
    
    
    
    
    
});