$(document).ready(function(){
	
	
//	snb바꾸기
	$(".snb_wrap").css({"margin-left":"-2750px"});
	$(".snb_wrap .snb_sub").removeClass("view");
	$(".snb_wrap .snb>li>ul>li").removeClass("on");
	$(".snb_wrap .snb>li>span").removeClass("on");
//	snb바꾸기
	
	$(".syt02 .tab>li>ol>li>div").click(function(){
		$(this).siblings(".syt02 .tab>li>ol>li>ol").stop().toggleClass("on");
		$(this).children(".tab_r").stop().toggleClass("on");
	});
	$(".syt02 .tab>li>ol>li>ol>li>div").click(function(){
		$(this).siblings(".syt02 .tab>li>ol>li>ol>li>ol").stop().toggleClass("on");
		$(this).children(".tab_r").stop().toggleClass("on");
	});
	
	$(".syt06 .list td:last-child input[type=button]").click(function(){
		$(this).parents(".syt06 .list tr").hide();
	});
	
	$("#pw.syt06 .tb li:first-child>ul>li").click(function(){
		$("#pw.syt06 .tb li:first-child>ul>li").removeClass("on");
		$(this).addClass("on");
	});
	
	
	$(".syt02 .tab>li>div>div input[type=checkbox]").click(function() {
        var tabck = $(this).is(":checked");                     
		if(tabck){
			$(this).parents(".syt02 .tab>li").find("input[type=checkbox]").prop('checked', true);
		}else{
			$(this).parents(".syt02 .tab>li").find("input[type=checkbox]").prop('checked', false);
		}
    });
	$(".syt02 .tab>li>ol>li>div>div input[type=checkbox]").click(function() {
        var tabck = $(this).is(":checked");                     
		if(tabck){
			$(this).parents(".syt02 .tab>li>ol>li").find("input[type=checkbox]").prop('checked', true);
		}else{
			$(this).parents(".syt02 .tab>li>ol>li").find("input[type=checkbox]").prop('checked', false);
		}
    });
	$(".syt02 .tab>li>ol>li>ol>li>div>div input[type=checkbox]").click(function() {
        var tabck = $(this).is(":checked");                     
		if(tabck){
			$(this).parents(".syt02 .tab>li>ol>li>ol>li").find("input[type=checkbox]").prop('checked', true);
		}else{
			$(this).parents(".syt02 .tab>li>ol>li>ol>li").find("input[type=checkbox]").prop('checked', false);
		}
    });
	
});