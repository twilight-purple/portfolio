$(document).ready(function(){
	
	
//	snb바꾸기
	$(".snb_wrap").css({"margin-left":"-1000px"});
	$(".snb_wrap .snb_sub").removeClass("view");
	$(".snb_wrap .snb>li>ul>li").removeClass("on");
	$(".snb_wrap .snb>li>span").removeClass("on");
//	snb바꾸기
	
	
//	영역 미리보기 버튼 팝업
	$(".ct_lk01").click(function(){
		window.open("http://ph.hansfrom.net/qims/contents_splash01_popup.html","contents_splash01_popup","width=300,height=449,top=300,left=1000");
	});
	
	$(".ct_lk02").click(function(){
		window.open("http://ph.hansfrom.net/qims/contents_login01_popup.html","contents_login01_popup","width=300,height=449,top=300,left=1000");
	});
	$(".ct_lk03").click(function(){
		window.open("http://ph.hansfrom.net/qims/contents_payment01_popup.html","contents_payment01_popup","width=300,height=449,top=300,left=1000");
	});
//	영역 미리보기 버튼 팝업
	
//	이미지 모아보기 팝업
	$(".ct.v01 .imgbox").click(function(){
		window.open("http://ph.hansfrom.net/qims/img_popup.html","img_popup","width=430,height=707,top=150,left=600"); 
	});
//	이미지 모아보기 팝업
	
});