$(document).ready(function(){
	
	
//	snb바꾸기
	$(".snb_wrap").css({"margin-left":"-3000px"});
	$(".snb_wrap .snb_sub").removeClass("view");
	$(".snb_wrap .snb>li>ul>li").removeClass("on");
	$(".snb_wrap .snb>li>span").removeClass("on");
//	snb바꾸기
	
//	(상세)삭제버튼 누르면 이미지 삭제
	$(".ibtn").click(function(){
		$(this).parents(".imgbox02>ul>li").hide();
	});
//	(상세)삭제버튼 누르면 이미지 삭제
	
	
//	오픈기간 input 비활성화/활성화
	$(".vtcheck input[type=checkbox]").click(function(){
		var vtcheck = $(".vtcheck input[type=checkbox]").is(":checked");
		
		if(vtcheck){
			$(".vtcheck select:nth-child(n+7)").addClass("on");
			$(".vtcheck select:nth-child(n+7).on").attr("disabled",true).attr("readonly",false);
		}
		else{
			$(".vtcheck select:nth-child(n+7)").removeClass("on");
			$(".vtcheck select:nth-child(n+7)").attr("disabled",false).attr("readonly",false);
		}
	});
//	오픈기간 input 비활성화/활성화
	
//	게시상태 input 비활성화/활성화
	$(".vtrdb input[type=radio]").click(function(){
		var vtrdb = $(".vtrdb input[type=radio].vtrdbh").is(":checked");
		
		if(vtrdb){
			$(".vtrdb input[type=text]").removeClass("on");
			$(".vtrdb input[type=text]").css({"background-color":"#fff"});
			$(".vtrdb select").css({"background-color":"#fff"});
			$(".vtrdb input[type=text]").attr("disabled",false).attr("readonly",false);
			$(".vtrdb select").removeClass("on");
			$(".vtrdb select").attr("disabled",false).attr("readonly",false);
		}
		else{
			$(".vtrdb input[type=text]").css({"background-color":"#eaeaea"});
			$(".vtrdb select").css({"background-color":"#eaeaea"});
			$(".vtrdb input[type=text]").addClass("on");
			$(".vtrdb input[type=text].on").attr("disabled",true).attr("readonly",false);
			$(".vtrdb select").addClass("on");
			$(".vtrdb select.on").attr("disabled",true).attr("readonly",false);
			$(".vtrdb select").val("00");
			$(".vtrdb input[type=text]").val("");
		}
	});
//	게시상태 input 비활성화/활성화
	
//	구매버튼 연결 url input 비활성화/활성화
	$(".vttxt input[type=url].on").css({"background-color":"#eaeaea"});
	$(".vttxt input[type=url].on").attr("disabled",true).attr("readonly",true);
	
	$(".vttxt input[type=radio]").click(function(){
		var vttxt = $(".vttxt input[type=radio].bttxth").is(":checked");
		
		if(vttxt){
			$(".vttxt input[type=url]").removeClass("on");
			$(".vttxt input[type=url]").css({"background-color":"#fff"});
			$(".vttxt input[type=url]").attr("disabled",false).attr("readonly",false);
		}
		else{
			$(".vttxt input[type=url]").addClass("on");
			$(".vttxt input[type=url]").css({"background-color":"#eaeaea"});
			$(".vttxt input[type=url]").attr("disabled",true).attr("readonly",false);
		}
		
	});
//	구매버튼 연결 url input 비활성화/활성화
	
});