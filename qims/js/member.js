$(document).ready(function(){
	
//	snb바꾸기
	$(".snb_wrap").css({"margin-left":"0px"});
	$(".snb_wrap .snb_sub").removeClass("view");
	$(".snb_wrap .snb>li>ul>li").removeClass("on");
	$(".snb_wrap .snb>li>span").removeClass("on");
//	snb바꾸기
	
//	리스트 - 클릭 팝업
	var ed = $(".mb01 .list td:nth-child(n+2).a")
	$(".mb01 .list td:nth-child(n+2)").not(ed).click(function(){
		window.open("http://ph.hansfrom.net/qims/member_popup.html","member_popup","width=1300,height=813,top=50,left=100");
	});
	var ed02 = $(".mb02 .list td:nth-child(n+2).a")
	$(".mb02 .list td:nth-child(n+2)").not(ed02).click(function(){
		window.open("http://ph.hansfrom.net/qims/member_popup02.html","member_popup02","width=1300,height=813,top=50,left=100");
	});
//	리스트 - 클릭 팝업
	
//	택배서비스 이용이력 팝업 - 클릭 팝업
	$("#pw.mb_ps .list td").click(function(){
		window.open("http://ph.hansfrom.net/qims/deal05_popup.html","deal05_popup","width=1100,height=760,top=50,left=50");
	});
//	택배서비스 이용이력 팝업 - 클릭 팝업
	
//	팔로워/팔로잉 팝업 
	$("#pw.mb_fl .tb_btn>li").click(function(){
		var clmb = $(this).index();
		$("#pw.mb_fl .tb_btn>li").removeClass("on");
		$(this).addClass("on");
		$("#pw.mb_fl .tb_wp>li").removeClass("on");
		$("#pw.mb_fl .tb_wp>li").eq(clmb).addClass("on");
	});
//	팔로워/팔로잉 팝업 
	
});