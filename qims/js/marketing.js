$(document).ready(function(){
	
//	snb바꾸기
	$(".snb_wrap").css({"margin-left":"-750px"});
	$(".snb_wrap .snb_sub").removeClass("view");
	$(".snb_wrap .snb>li>ul>li").removeClass("on");
	$(".snb_wrap .snb>li>span").removeClass("on");
//	snb바꾸기
	
	$(".rb_none2>li:nth-child(2) input[type=radio].on").attr("disabled",true);
	$(".rb_none>li input[type=radio]").click(function() {
        var rbnone = $(".rb_none>li:nth-child(1) input[type=radio]").is(":checked");
		var rbnonen = $(".rb_none>li:nth-child(2) input[type=radio]").is(":checked");
                     
		if(rbnone){
			$(".rb_none2>li:nth-child(1) input[type=radio]").prop('checked', true);
			$(".rb_none2>li:nth-child(2) input[type=radio]").attr("disabled",true);
			$(".rb_none2>li:nth-child(2) input[type=radio]").addClass("on");
		}
		else if(rbnonen){
			$(".rb_none2>li:nth-child(2) input[type=radio]").attr("disabled",false);
			$(".rb_none2>li:nth-child(2) input[type=radio]").removeClass("on");
		}
    });
	
	$(".number_check>li input[type=radio]").click(function() {
        var nucheck = $(".number_check>li:nth-child(1) input[type=radio]").is(":checked");
        var nucheckd = $(".number_check>li:nth-child(2) input[type=radio]").is(":checked");
                     
		if(nucheck){
			$(".number_check>li input[type=number]").addClass("on");
			$(".number_check>li input[type=text]").addClass("on");
		}
		else if(nucheckd){
			$(".number_check>li input[type=number]").removeClass("on");
			$(".number_check>li input[type=text]").removeClass("on");
		}
    });
	
	
//	(상세)삭제버튼 누르면 이미지 삭제
	$(".ibtn").click(function(){
		$(this).parents(".imgbox02>ul>li").hide();
	});
//	(상세)삭제버튼 누르면 이미지 삭제
	
	
	$(".mk01_01 td.nm>ol>li>.qd-btn").click(function(){
		$(this).parent(".mk01_01 td.nm>ol>li").hide();
	});
	$(".mk02_01 td.nm>ol>li>.qd-btn").click(function(){
		$(this).parent(".mk02_01 td.nm>ol>li").hide();
	});
	
	$(".mk_datachecked label.cb.allcb input[type=checkbox]").click(function(){
		var mkdatacck = $(this).is(":checked");
                     
		if(mkdatacck){
			$(this).parents(".mk_datachecked").find("input[type=checkbox]").prop('checked', true);
		}else{
			$(this).parents(".mk_datachecked").find("input[type=checkbox]").prop('checked', false);
		}
		
	});
	
	$(".tg_btn_wp .cb input[type=checkbox]").removeClass("on");
	$(".tg_btn_wp .cb input[type=checkbox]").attr("disabled",true);
	$(".tg_btn_wp input[type=number]").removeClass("on");
	$(".tg_btn_wp input[type=number]").attr("disabled",true).attr("readonly",false);
	$(".tg_btn_wp .cb input[type=checkbox]").addClass("on");
	$(".tg_btn_wp input[type=number]").addClass("on");
	
	$(".tg_btn_wp .toggle-switch input[type=checkbox]").click(function(){
		var mktg = $(".tg_btn_wp .toggle-switch.tg_btn01 input[type=checkbox]").is(":checked");
		var mktged = $(".tg_btn_wp .toggle-switch.tg_btn02 input[type=checkbox]").is(":checked");
		if(mktg){
			$(".tg_btn_wp .cb input[type=checkbox]").removeClass("on");
			$(".tg_btn_wp .cb input[type=checkbox]").attr("disabled",false);
		}else{
			$(".tg_btn_wp .cb input[type=checkbox]").addClass("on");
			$(".tg_btn_wp .cb input[type=checkbox]").attr("disabled",true);
			$(".tg_btn_wp .cb input[type=checkbox]").prop('checked', false);
		}
		if(mktged){
			$(".tg_btn_wp input[type=number]").removeClass("on");
			$(".tg_btn_wp input[type=number]").attr("disabled",false).attr("readonly",false);
		}else{
			$(".tg_btn_wp input[type=number]").addClass("on");
			$(".tg_btn_wp input[type=number]").attr("disabled",true).attr("readonly",false);
			$(".tg_btn_wp input[type=number]").val("");
		}
	});
	
	
//	마케팅 키워드 추가버튼 활성화/비활성화
	$(".mkrbbutton input[type=radio]").click(function(){
		var mkrbbutton = $(".mkrbbutton>li:nth-child(1) input[type=radio]").is(":checked");
		var mkrbbuttont = $(".mkrbbutton>li:nth-child(2) input[type=radio]").is(":checked");
		
		if(mkrbbutton){
			$(".mkrbbutton input[type=button]").addClass("ong");
		}
		else if(mkrbbuttont){
			$(".mkrbbutton input[type=button]").removeClass("ong");
		}
	});
//	마케팅 키워드 추가버튼 활성화/비활성화
	
	
	
	
});