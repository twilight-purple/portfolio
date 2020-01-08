$(document).ready(function(){
		
//	snb바꾸기
	$(".snb_wrap").css({"margin-left":"-1750px"});
	$(".snb_wrap .snb_sub").removeClass("view");
	$(".snb_wrap .snb>li>ul>li").removeClass("on");
	$(".snb_wrap .snb>li>span").removeClass("on");
//	snb바꾸기
	
	
//	종합통계
	$(".stt01 .tab_btn>ul:nth-child(1)>li").click(function(){
		var me = $(this).index();
		
		$(".stt01 .tab_btn>ul>li").removeClass("on");
		$(this).addClass("on");
		$(".tab_tb>li").removeClass("on");
		
		if(me==0){
			$(".tab_tb>li:nth-child(1)").addClass("on");
		}
		else if(me==1){
			$(".tab_tb>li:nth-child(2)").addClass("on");
		}
		else if(me==2){
			$(".tab_tb>li:nth-child(7)").addClass("on");
		}
		else if(me==3){
			$(".tab_tb>li:nth-child(8)").addClass("on");
		}
	});
	$(".stt01 .tab_btn>ul:nth-child(2)>li").click(function(){
		var met = $(this).index();
		
		$(".stt01 .tab_btn>ul>li").removeClass("on");
		$(this).addClass("on");
		$(".tab_tb>li").removeClass("on");
		
		if(met==0){
			$(".tab_tb>li:nth-child(3)").addClass("on");
		}
		else if(met==1){
			$(".tab_tb>li:nth-child(4)").addClass("on");
		}
		else if(met==2){
			$(".tab_tb>li:nth-child(9)").addClass("on");
		}
		else if(met==3){
			$(".tab_tb>li:nth-child(10)").addClass("on");
		}
	});
	$(".stt01 .tab_btn>ul:nth-child(3)>li").click(function(){
		var meth = $(this).index();
		
		$(".stt01 .tab_btn>ul>li").removeClass("on");
		$(this).addClass("on");
		$(".tab_tb>li").removeClass("on");
		
		if(meth==0){
			$(".tab_tb>li:nth-child(5)").addClass("on");
		}
		else if(meth==1){
			$(".tab_tb>li:nth-child(6)").addClass("on");
		}
		else if(meth==2){
			$(".tab_tb>li:nth-child(11)").addClass("on");
		}
		else if(meth==3){
			$(".tab_tb>li:nth-child(12)").addClass("on");
		}
	});

	$(".stt01 .chart").mouseenter(function(){
		$(this).children(".mh_r").addClass("on");
		$(this).children(".mh_line").addClass("on");
		$(this).children(".mh_box").addClass("on");
	});
	$(".stt01 .chart").mouseleave(function(){
		$(this).children(".mh_r").removeClass("on");
		$(this).children(".mh_line").removeClass("on");
		$(this).children(".mh_box").removeClass("on");
	});
	
	
	
// 랭킹분석
	$(".rk_scroll").mCustomScrollbar({
		axis:"y",
		theme:"dark-thick"
	});
	

//	$(".rk_btn>li:nth-child(2)").removeClass("on");
	
	var rkwid = $(".rk_vw>ul").width();
	var rklist = 0;
	var rklen = $(".rk_vw>ul").length;
	var rk_f = $(".rk_vw>ul:first-child").hasClass("on");
	var rk_l = $(".rk_vw>ul:last-child").hasClass("on");
	
	$(".stt02 .rk_btn>li:nth-child(1).on").click(function(){
		
		if(rklist == rklen-1){
			rklist = rklen-1;
		}
		else{
			rklist++;
		}
		$(".rk_vw").stop().animate({"margin-left":-rkwid*rklist});
		$(".rk_btn>li").addClass("on");
		$(".rk_vw>ul").removeClass("on");
		$(".rk_vw>ul").eq(rklist).addClass("on");
		rk_f = $(".rk_vw>ul:first-child").hasClass("on");
		rk_l = $(".rk_vw>ul:last-child").hasClass("on");
			if(rk_f==true){
				$(".rk_btn>li:nth-child(2)").removeClass("on");
				$(".rk_btn>li:nth-child(1)").addClass("on");
			}
			else if(rk_l==true){
				$(".rk_btn>li:nth-child(1)").removeClass("on");
				$(".rk_btn>li:nth-child(2)").addClass("on");
			}
	});
	
	
	$(".stt02 .rk_btn>li:nth-child(2).on").click(function(){
		
		if(rklist == 0){
			rklist = 0;
		}
		else{
			rklist--;
		}
		$(".rk_vw").stop().animate({"margin-left":-rkwid*rklist});
		$(".rk_btn>li").addClass("on");
		$(".rk_vw>ul").removeClass("on");
		$(".rk_vw>ul").eq(rklist).addClass("on");
		rk_f = $(".rk_vw>ul:first-child").hasClass("on");
		rk_l = $(".rk_vw>ul:last-child").hasClass("on");
			if(rk_f==true){
				$(".rk_btn>li:nth-child(2)").removeClass("on");
				$(".rk_btn>li:nth-child(1)").addClass("on");
			}
			else if(rk_l==true){
				$(".rk_btn>li:nth-child(1)").removeClass("on");
				$(".rk_btn>li:nth-child(2)").addClass("on");
			}
	});

		rk_f = $(".rk_vw>ul:first-child").hasClass("on");
		rk_l = $(".rk_vw>ul:last-child").hasClass("on");
			if(rk_f==true){
				$(".rk_btn>li:nth-child(2)").removeClass("on");
				$(".rk_btn>li:nth-child(1)").addClass("on");
			}
			else if(rk_l==true){
				$(".rk_btn>li:nth-child(1)").removeClass("on");
				$(".rk_btn>li:nth-child(2)").addClass("on");
			}
	

// 상품랭킹
	$(".stt02.v04 .rk>li>ul>li:nth-child(2).a").click(function(){
		window.open("http://ph.hansfrom.net/qims/product_popup.html","product_popup","width=1200,height=700,top=50,left=50");
	});
	
	
	
//	회원분석
	$(".stt03 .tw_btn>li").click(function(){
		var stwb = $(this).index();
		$(".stt03 .tw_btn>li").removeClass("on");
		$(".stt03 .tw_btn>li").eq(stwb).addClass("on");
		$(".stt03 .tw>li").removeClass("on");
		$(".stt03 .tw>li").eq(stwb).addClass("on");
		$(".stt03 .sc_tab>li").removeClass("on");
		$(".stt03 .sc_tab>li").eq(stwb).addClass("on");
	});
	
	$(".stt03 .gp_left").mouseenter(function(){
		$(".mh_box").addClass("on");
		$(".mh_line").addClass("on");
		$(".mh_r").addClass("on");
	});
	$(".stt03 .gp_left").mouseleave(function(){
		$(".mh_box").removeClass("on");
		$(".mh_line").removeClass("on");
		$(".mh_r").removeClass("on");
	});
	
	
	
	
	
	
	
	
	
});