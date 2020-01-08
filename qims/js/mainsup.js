$(document).ready(function(){
	
	//	snb바꾸기
	$(".snb_wrap .snb_sub").removeClass("view");
	$(".snb_wrap .snb>li>ul>li").removeClass("on");
	$(".snb_wrap .snb>li>span").removeClass("on");
	$(".snb_wrap").css({"margin-left":"-1250px"});
//	snb바꾸기
	
//	팝업 설정
//	alert
	$(".ms01_01 .data select").click(function(){
		window.open("http://ph.hansfrom.net/qims/mainsup01_reg_popup.html","mainsup01_reg_popup","width=300,height=180,top=300,left=600");
	});
//	상세 이미지박스 삭제
	$(".ibtn").click(function(){
		$(this).parents(".imgbox02>ul>li").hide();
	});
//	팝업 설정
	
//	메인프로모션 배너관리
	$(".ms02 .list tr.theme").mouseenter(function(){
		$(".ms02 .tm_wp").addClass("on");
	});
	$(".ms02 .list tr.theme").mouseleave(function(){
		$(".ms02 .tm_wp").removeClass("on");
	});
	$(".ms02 .tm_wp").mouseenter(function(){
		$(this).addClass("on");
	});
	$(".ms02 .tm_wp").mouseleave(function(){
		$(this).removeClass("on");
	});
//	메인프로모션 배너관리
	
	
//	메인프로모션 배너 등록 테마
//	조건설정 가이드 팝업
	$(".ms02_02 .gd01").click(function(){
		window.open("http://ph.hansfrom.net/qims/mainsup02-2_reg_popup01.html","mainsup02-2_reg_popup01","width=550,height=300,top=300,left=500");
	});
//	카테고리 선택 라디오 체크시
	$(".ms02_02 .tm_rb01 input[type=button]").attr("disabled",true);
	$(".ms02_02 .tm_rb01 input[type=radio]").click(function(){
		var ch = $("#rd6").prop("checked");
		var chh = $("#rd7").prop("checked");
		
		if(ch==true){
			$(".ms02_02 .tm_rb01 input[type=button]").addClass("dim02");
			$(".ms02_02 .tm_rb01 input[type=button]").attr("disabled",true);
		}
		else if(chh==true){
			$(".ms02_02 .tm_rb01 input[type=button]").removeClass("dim02");
			$(".ms02_02 .tm_rb01 input[type=button]").attr("disabled",false);
		}
	});
//	카테고리 선택 팝업
	$(".ms02_02 .tm_rb01 input[type=button]").click(function(){
		window.open("http://ph.hansfrom.net/qims/mainsup02-2_popup.html","mainsup02-2_popup","width=1200,height=860,top=50,left=50");
	});
//	소속 상품 미리보기 팝업
	$(".ms_pdd").click(function(){
		window.open("http://ph.hansfrom.net/qims/mainsup_product_popup.html","mainsup_product_popup","width=1200,height=800,top=50,left=50");
	});
//	상품상태
	$(".ms02_02 .mi_wp input[type=checkbox]").attr("disabled",true);
	$(".ms02_02 .mi_wp input[type=checkbox]").prop("checked", false);
	$(".ms02_02 .mi_wp input[type=radio]").click(function(){
		var rh = $("#rd8").prop("checked");
		var rhh = $("#rd9").prop("checked");
		
		if(rh==true){
			$(".ms02_02 .mi_wp select").removeClass("on");
			$(".ms02_02 .mi_wp select:nth-child(1)").addClass("on");
			$(".ms02_02 .mi_wp input[type=checkbox]").attr("disabled",true);
			$(".ms02_02 .mi_wp input[type=checkbox]").prop("checked", false);
			$(".ms02_02 .mi_wp .cb").addClass("on");
		}
		else if(rhh==true){
			$(".ms02_02 .mi_wp select").removeClass("on");
			$(".ms02_02 .mi_wp select:nth-child(2)").addClass("on");
			$(".ms02_02 .mi_wp input[type=checkbox]").prop("checked", false);
		}
	});
	$(".ms02_02 .mi_wp select").change(function(){
		var sh = $(".ms02_02 .mi_wp select option:selected").text();
		 
		if(sh=='선택선택'){
			$(".ms02_02 .mi_wp input[type=checkbox]").attr("disabled",true);
			$(".ms02_02 .mi_wp input[type=checkbox]").prop("checked", false);
			$(".ms02_02 .mi_wp .cb").addClass("on");
		}
		else if(sh=='선택미개봉'){
			$(".ms02_02 .mi_wp input[type=checkbox]").attr("disabled",true);
			$(".ms02_02 .mi_wp input[type=checkbox]").prop("checked", false);
			$(".ms02_02 .mi_wp .cb").addClass("on");
			$(".ms02_02 .mi_wp .ch01 input[type=checkbox]").attr("disabled",false);
			$(".ms02_02 .mi_wp .cb.ch01").removeClass("on");
		}
		else{
			$(".ms02_02 .mi_wp input[type=checkbox]").attr("disabled",false);
			$(".ms02_02 .mi_wp input[type=checkbox]").prop("checked", false);
			$(".ms02_02 .mi_wp .cb").removeClass("on");
		}
	});
//	가격대 dim 처리
	$(".sc_cb.not04").click(function() {
        var ck = $(this).is(":checked");
                     
		if(ck){
			$('.nm_not').addClass("on");
		}else{
			$('.nm_not').removeClass("on");
		}
    });
//	alert
	$(".ms02_02 .ibtn02").click(function(){
		window.open("http://ph.hansfrom.net/qims/mainsup02-2_reg_popup02.html","mainsup02-2_reg_popup02","width=300,height=180,top=400,left=100");
	});
	$(".ms02_02 .al01").click(function(){
		window.open("http://ph.hansfrom.net/qims/mainsup02-2_reg_popup03.html","mainsup02-2_reg_popup03","width=300,height=180,top=400,left=600");
		
		window.open("http://ph.hansfrom.net/qims/mainsup02-2_reg_popup04.html","mainsup02-2_reg_popup04","width=300,height=180,top=400,left=900");
	});
//	상세 키워드 삭제
	$(".bt_txt>.btn02").click(function(){
		$(this).parents(".bt_txt").hide();
	});
	
	
//	카테고리 및 상세옵션 선택
	$("#pw.ms_ct .lt.v01>li").click(function(){
		$("#pw.ms_ct .lt.v01>li").removeClass("on");
		$(this).addClass("on");
	});
	$("#pw.ms_ct .lt.v02>li").click(function(){
		$("#pw.ms_ct .lt.v02>li").removeClass("on");
		$(this).addClass("on");
	});
	$("#pw.ms_ct .lt.v03>li").click(function(){
		$("#pw.ms_ct .lt.v03>li").removeClass("on");
		$(this).addClass("on");
	});
	
	$("#pw.ms_ct .al01").click(function(){
		window.open("http://ph.hansfrom.net/qims/mainsup02-2_popup02.html","mainsup02-2_popup02","width=300,height=180,top=100,left=100");
	});
	$("#pw.ms_ct .al02").click(function(){
		window.open("http://ph.hansfrom.net/qims/mainsup02-2_popup03.html","mainsup02-2_popup03","width=300,height=180,top=100,left=100");
	});
	$("#pw.ms_ct .al03").click(function(){
		window.open("http://ph.hansfrom.net/qims/mainsup02-2_popup04.html","mainsup02-2_popup04","width=300,height=180,top=100,left=100");
		
		window.open("http://ph.hansfrom.net/qims/mainsup02-2_popup05.html","mainsup02-2_popup05","width=300,height=180,top=100,left=300");
	});
//	카테고리 및 상세옵션 선택
	
//	소속 상품보기 팝업
	var eed = $("#pw.ms_pr .list td.a")
	$("#pw.ms_pr .list td").not(eed).click(function(){
		window.open("http://ph.hansfrom.net/qims/product_popup.html","product_popup","width=1200,height=700,top=50,left=50");
	});
	$("#pw.ms_pr .list td.a").click(function(){
		window.open("http://ph.hansfrom.net/qims/member_popup.html","member_popup","width=1300,height=840,top=50,left=100");
	});
//	소속 상품보기 팝업
	
});