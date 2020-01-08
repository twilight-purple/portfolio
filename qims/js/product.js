$(document).ready(function(){
		
//	snb바꾸기
	$(".snb_wrap").css({"margin-left":"-250px"});
	$(".snb_wrap .snb_sub").removeClass("view");
	$(".snb_wrap .snb>li>ul>li").removeClass("on");
	$(".snb_wrap .snb>li>span").removeClass("on");
//	snb바꾸기
	
	
//	첨부이미지 모아보기 팝업
	$("#pw.img_pop .p_prev").click(function(){
        $("#pw.img_pop .pop_view>ul").stop().animate({"margin-left":"0px"},300,function(){
            $("#pw.img_pop .pop_view>ul>li").eq(4).prependTo("#pw.img_pop .pop_view>ul");
            $("#pw.img_pop .pop_view>ul").css({"margin-left":"-370px"});
        });
    });
    $("#pw.img_pop .p_next").click(function(){
        $("#pw.img_pop .pop_view>ul").stop().animate({"margin-left":"-740px"},300,function(){
            $("#pw.img_pop .pop_view>ul li").eq(0).appendTo("#pw.img_pop .pop_view>ul");
            $("#pw.img_pop .pop_view>ul").css({"margin-left":"-370px"});
        });
    });
//	첨부이미지 모아보기 팝업
	
	
//	상품 상세정보 팝업
//  관리자 숨김-사유보기
	$("#stxt").change(function(){
		var sndex = $("#stxt option").index($("#stxt option:selected"));
		
		if(sndex == 5){
			$("#pw.prd .stxt_a").addClass("on");
		}
		else{
			$("#pw.prd .stxt_a").removeClass("on");
		}
	});
//  관리자 숨김-사유보기
//	상품 상세정보 팝업
	
	
//  일괄숨김적용 사유입력 팝업
	$(".pd01 .clihide").click(function(){
		window.open("http://ph.hansfrom.net/qims/product_hide_popup.html","product_hide_popup","width=750,height=350,top=100,left=200");
	});
//	리스트 - 버튼 클릭 팝업
	var ed = $(".pd01 .list td:nth-child(n+2).a")
//  상품상세 팝업
	$(".pd01 .list td:nth-child(n+2)").not(ed).click(function(){
		window.open("http://ph.hansfrom.net/qims/product_popup.html","product_popup","width=1200,height=691,top=50,left=50");
	});
//  첨부이미지 팝업
	var ed01 = $(".pd01 .list td:nth-child(n+2).a.v02")
	$(".pd01 .list td:nth-child(7).a").not(ed01).click(function(){
		window.open("http://ph.hansfrom.net/qims/img_popup.html","img_popup","width=430,height=707,top=150,left=600"); 
	});
//  회원스토어 상세정보 팝업
	$(".pd01 .list td:nth-child(n+8):nth-child(-n+9).a").click(function(){
		window.open("http://ph.hansfrom.net/qims/member_popup.html","member_popup","width=1300,height=813,top=50,left=100");
	});
//	리스트 - 버튼 클릭 팝업
	
//	팝업 - 버튼 클릭 팝업
//	사유보기 팝업
	$("#pw.prd .stxt_a").click(function(){
		window.open("http://ph.hansfrom.net/qims/product_hide02_popup.html","product_hide02_popup","width=750,height=337,top=200,left=200");
	});
//	상품숨김 팝업
	$("#pw.prd .bt_hd").click(function(){
		window.open("http://ph.hansfrom.net/qims/product_hide_popup.html","product_hide_popup","width=750,height=350,top=100,left=200");
	});
//	회원스토어 팝업
	$("#pw.prd_cm .list td.a").click(function(){
		window.open("http://ph.hansfrom.net/qims/member_popup.html","member_popup","width=1300,height=813,top=50,left=100");
	});
//	팝업 - 버튼 클릭 팝업
	

});