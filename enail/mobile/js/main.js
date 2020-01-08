$(document).ready(function(){
    
//    메인-비주얼
    $(document).scroll(function(){
        var mainheadTop = $("section").offset().top;
        var mainscroll_now = $(document).scrollTop();
        
		if(mainscroll_now>mainheadTop){
			$(".reporter-main-visual").addClass("on");
		}
		else{
			$(".reporter-main-visual").removeClass("on");
		}
    });
//    메인-비주얼

//    메인-탭메뉴
    var width = $(".repoter-main-tab").width();
    $(".repoter-main-tab>li:nth-child(2)").css({"height":"100px"});
	$(".repoter-main-btn>li:nth-child(1)").click(function(){
		$(".repoter-main-tab").stop().animate({"margin-left":0},400,function(){
            $(".repoter-main-tab>li:nth-child(1)").css({"height":"auto"});
            $(".repoter-main-tab>li:nth-child(2)").css({"height":"100px"});
        });
        $(".repoter-main-btn>li").stop().removeClass("on");
        $(this).stop().addClass("on");
	});
	$(".repoter-main-btn>li:nth-child(2)").click(function(){
		$(".repoter-main-tab").stop().animate({"margin-left":-width/2},400,function(){
            $(".repoter-main-tab>li:nth-child(2)").css({"height":"auto"});
            $(".repoter-main-tab>li:nth-child(1)").css({"height":"100px"});
        });
        $(".repoter-main-btn>li").stop().removeClass("on");
        $(this).stop().addClass("on");
	});
//    메인-탭메뉴
    
//    메인-기자리포트
    $(".tab-cont").stop().addClass("no");
    $(".tab-cont.on").stop().removeClass("no");
    $(".tab").click(function(){
        $(".tab-cont").stop().slideUp(400);
        $(this).siblings(".tab-cont").stop().slideDown(400);
        $(".main-editorlist > li").stop().removeClass("on");
        $(this).parents(".main-editorlist > li").stop().addClass("on");

    });
//    메인-기자리포트
    
//    메인-리포트리스트
    $(".main-repoter-select > li:nth-child(1)").click(function(){
        $(this).stop().toggleClass("view");
        var repoterselect = $(".main-repoter-select > li:nth-child(1)").hasClass("view");
        if(repoterselect==true){
            $('.main-repoter-select > li:nth-child(n+2)').stop().slideDown(200);
            $(".main-repoter-select > li:nth-child(n+2)").click(function(){
                var mainselecttext = $(this).text();
                $(".main-repoter-select > li:first-child").text(mainselecttext);
                $(".main-repoter-select > li:nth-child(n+2)").stop().removeClass("on");
                $(this).stop().addClass("on");
                
                $(".main-repoter-select > li:nth-child(1)").stop().removeClass("view");
                $(".main-repoter-select > li:nth-child(n+2)").css({"display":"none"});
            });
        }
        else{
            $('.main-repoter-select > li:nth-child(n+2)').stop().slideUp(200);
        }
    });
    
    
    $("body").click(function(e) { 
         if($(".main-repoter-select").css("display") == "block") {
              if(!$('.main-repoter-select').has(e.target).length) { 
                    $('.main-repoter-select > li:nth-child(n+2)').stop().slideUp(200);
                    $(".main-repoter-select > li:nth-child(1)").stop().removeClass("view");
              } 
         }
    });
//    메인-리포트리스트
    
});