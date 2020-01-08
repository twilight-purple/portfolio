$(document).ready(function(){
	
    
//    메인-기자리스트/리포트리스트 탭메뉴버튼
    $(".main-tab-btn>li:nth-child(1)").mouseenter(function(){
        $(".mtbl01 > span:nth-child(1)").stop().animate({"width":"100%"},100,function(){
            $(".mtbl01 > span:nth-child(2)").stop().animate({"height":"100%"},100);
        });
        $(".mtbl01 > span:nth-child(3)").stop().animate({"width":"100%"},100,function(){
            $(".mtbl01 > span:nth-child(4)").stop().animate({"height":"100%"},100);
        });
    });
    $(".main-tab-btn>li:nth-child(3)").mouseenter(function(){
        $(".mtbl02 > span:nth-child(1)").stop().animate({"width":"100%"},100,function(){
            $(".mtbl02 > span:nth-child(2)").stop().animate({"height":"100%"},100);
        });
        $(".mtbl02 > span:nth-child(3)").stop().animate({"width":"100%"},100,function(){
            $(".mtbl02 > span:nth-child(4)").stop().animate({"height":"100%"},100);
        });
    });
    $(".main-tab-btn>li:nth-child(1)").mouseleave(function(){
        $(".mtbl01 > span:nth-child(1)").stop().animate({"width":"0%"},100,function(){
            $(".mtbl01 > span:nth-child(2)").stop().animate({"height":"0%"},100);
        });
        $(".mtbl01 > span:nth-child(3)").stop().animate({"width":"0%"},100,function(){
            $(".mtbl01 > span:nth-child(4)").stop().animate({"height":"0%"},100);
        });
    });
    $(".main-tab-btn>li:nth-child(3)").mouseleave(function(){
        $(".mtbl02 > span:nth-child(1)").stop().animate({"width":"0%"},100,function(){
            $(".mtbl02 > span:nth-child(2)").stop().animate({"height":"0%"},100);
        });
        $(".mtbl02 > span:nth-child(3)").stop().animate({"width":"0%"},100,function(){
            $(".mtbl02 > span:nth-child(4)").stop().animate({"height":"0%"},100);
        });
    });
    $(".main-tab-btn>li").mouseenter(function(){
        $(this).stop().addClass("on");
    });
    $(".main-tab-btn>li").mouseleave(function(){
        $(this).stop().removeClass("on");
    });
    $(".main-tab-btn>li:nth-child(1),.main-tab-btn>li:nth-child(3)").click(function(){
        $(".main-tab-btn>li").stop().removeClass("onn");
        $(this).stop().addClass("onn");
    });
//    메인-기자리스트/리포트리스트 탭메뉴버튼
    
    
//    메인-기자리스트/리포트리스트 탭
    var width = $(".main-tab-view").width();
	$(".main-tab-btn>li:nth-child(1)").click(function(){
		$(".main-tab-wrap").stop().animate({"margin-left":0},400);
	});
	$(".main-tab-btn>li:nth-child(3)").click(function(){
		$(".main-tab-wrap").stop().animate({"margin-left":-width},400);
	});
//    메인-기자리스트/리포트리스트 탭

    
    
//    메인-기자리스트 isotope
    $(".main-tab-all-cont").hide();
    $(".main-tab-cont01").hide();
    
	$(".mtm01>li").click(function(){ // 버튼 클릭 시
        $(".main-tab-cont01").show();
        var mtm01list = $(this).index();
        $(".main-tab-cont01").isotope({ // 정렬할 박스들 감싸는 부모 클래스 이름
        // options
        itemSelector: '.all', //정렬할 박스들 클래스 이름
        layoutMode: 'fitRows' // 정렬시 옵션
        });
        $(".mtm01>li").removeClass("on"); // 활성화되어있는 버튼 클래스on제거
        $(this).addClass("on"); // 클릭한 버튼 활성화
        var selector = $(this).attr('data-filter');
        // 정렬시킬 박스들의 클래스 이름 받아오기
        $(".main-tab-cont01").isotope({ filter: selector });
        // 정렬시작 구문
        $(".mtm01 > li").stop().removeClass("on");
        $(".mtm01 > li").eq(mtm01list).stop().addClass("on");
        $(".main-tab-all-txt-wrap > li").stop().removeClass("on");
        $(".main-tab-all-txt-wrap > li").eq(mtm01list).stop().addClass("on");

            if(mtm01list==0){
                $(".main-tab-all-cont").hide();
                $(".main-tab-cont01-first").show();
            }
            else{
                $(".main-tab-all-cont").show();
                $(".main-tab-cont01-first").hide();
            }
	});
//    메인-기자리스트 isotope
    
//    메인-기자리스트-전체
    $(".main-tab-cont01-first > li > div").click(function(){
        $(".main-tab-cont01-first > li").stop().removeClass("on");
        $(this).parents(".main-tab-cont01-first > li").stop().addClass("on");
    });
//    메인-기자리스트-전체
    
    
//    메인-리포트리스트 isotope
	$(".mtm02>li").click(function(){ // 버튼 클릭 시
	$(".main-tab02-cont").isotope({ // 정렬할 박스들 감싸는 부모 클래스 이름
	// options
	itemSelector: '.all', //정렬할 박스들 클래스 이름
	layoutMode: 'fitRows' // 정렬시 옵션
	});
	$(".mtm02>li").removeClass("on"); // 활성화되어있는 버튼 클래스on제거
	$(this).addClass("on"); // 클릭한 버튼 활성화
	var selector = $(this).attr('data-filter');
	// 정렬시킬 박스들의 클래스 이름 받아오기
	$(".main-tab02-cont").isotope({ filter: selector });
	// 정렬시작 구문
	});

//    메인-리포트리스트 isotope
    
    
    $(".main-tab02-slide>li:first-child").css({"z-index":"99"});
    $(".mtm02>li").click(function(){
        var mtm02list = $(this).index();
        $(".main-tab02-slide>li").css({"z-index":"-1"});
        $(".main-tab02-slide>li").eq(mtm02list).css({"z-index":"99"});
    });
    
    var swiper1 = new Swiper('.s1', { pagination: '.swiper-pagination', nextButton: '.swiper-button-next', prevButton: '.swiper-button-prev', paginationClickable: true, spaceBetween: 30, centeredSlides: true, autoplay: {delay: 8000,disableOnInteraction: false,}, autoplayDisableOnInteraction: true, stopOnLast: false, noSwiping: true, spaceBetween:0, noSwipingClass: 'no-swiping', pagination: { el: '.swiper-pagination', type: 'fraction', }, navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev', }, loop : true, });
    var swiper2 = new Swiper('.s2', { pagination: '.swiper-pagination', nextButton: '.swiper-button-next', prevButton: '.swiper-button-prev', paginationClickable: true, spaceBetween: 30, centeredSlides: true, autoplay: {delay: 8000,disableOnInteraction: false,}, autoplayDisableOnInteraction: true, stopOnLast: false, noSwiping: true, spaceBetween:0, noSwipingClass: 'no-swiping', pagination: { el: '.swiper-pagination', type: 'fraction', }, navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev', }, loop : true, });
    var swiper3 = new Swiper('.s3', { pagination: '.swiper-pagination', nextButton: '.swiper-button-next', prevButton: '.swiper-button-prev', paginationClickable: true, spaceBetween: 30, centeredSlides: true, autoplay: {delay: 8000,disableOnInteraction: false,}, autoplayDisableOnInteraction: true, stopOnLast: false, noSwiping: true, spaceBetween:0, noSwipingClass: 'no-swiping', pagination: { el: '.swiper-pagination', type: 'fraction', }, navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev', }, loop : true, });
    var swiper4 = new Swiper('.s4', { pagination: '.swiper-pagination', nextButton: '.swiper-button-next', prevButton: '.swiper-button-prev', paginationClickable: true, spaceBetween: 30, centeredSlides: true, autoplay: {delay: 8000,disableOnInteraction: false,}, autoplayDisableOnInteraction: true, stopOnLast: false, noSwiping: true, spaceBetween:0, noSwipingClass: 'no-swiping', pagination: { el: '.swiper-pagination', type: 'fraction', }, navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev', }, loop : true, });
    var swiper5 = new Swiper('.s5', { pagination: '.swiper-pagination', nextButton: '.swiper-button-next', prevButton: '.swiper-button-prev', paginationClickable: true, spaceBetween: 30, centeredSlides: true, autoplay: {delay: 8000,disableOnInteraction: false,}, autoplayDisableOnInteraction: true, stopOnLast: false, noSwiping: true, spaceBetween:0, noSwipingClass: 'no-swiping', pagination: { el: '.swiper-pagination', type: 'fraction', }, navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev', }, loop : true, });
    var swiper6 = new Swiper('.s6', { pagination: '.swiper-pagination', nextButton: '.swiper-button-next', prevButton: '.swiper-button-prev', paginationClickable: true, spaceBetween: 30, centeredSlides: true, autoplay: {delay: 8000,disableOnInteraction: false,}, autoplayDisableOnInteraction: true, stopOnLast: false, noSwiping: true, spaceBetween:0, noSwipingClass: 'no-swiping', pagination: { el: '.swiper-pagination', type: 'fraction', }, navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev', }, loop : true, });
    var swiper7 = new Swiper('.s7', { pagination: '.swiper-pagination', nextButton: '.swiper-button-next', prevButton: '.swiper-button-prev', paginationClickable: true, spaceBetween: 30, centeredSlides: true, autoplay: {delay: 8000,disableOnInteraction: false,}, autoplayDisableOnInteraction: true, stopOnLast: false, noSwiping: true, spaceBetween:0, noSwipingClass: 'no-swiping', pagination: { el: '.swiper-pagination', type: 'fraction', }, navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev', }, loop : true, });
    var swiper8 = new Swiper('.s8', { pagination: '.swiper-pagination', nextButton: '.swiper-button-next', prevButton: '.swiper-button-prev', paginationClickable: true, spaceBetween: 30, centeredSlides: true, autoplay: {delay: 8000,disableOnInteraction: false,}, autoplayDisableOnInteraction: true, stopOnLast: false, noSwiping: true, spaceBetween:0, noSwipingClass: 'no-swiping', pagination: { el: '.swiper-pagination', type: 'fraction', }, navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev', }, loop : true, });
//    메인-뉴스 슬라이드 swiper
    
    
    
//    스페셜메인 - 리포트리스트 슬라이드  swiper
    var smain = new Swiper('.smain-slide', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
        el: '.swiper-pagination',
        clickable: true,
        },
        navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        },
        autoplay: {delay: 8000,disableOnInteraction: false,}, 
        autoplayDisableOnInteraction: true, 
    });
//    스페셜메인 - 리포트리스트 슬라이드  swiper

});