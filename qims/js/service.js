$(document).ready(function(){
	
//	snb기본 바꾸기
	$(".snb_wrap").css({"margin-left":"-1500px"});
	$(".snb_wrap .snb_sub").removeClass("view");
	$(".snb_wrap .snb>li>ul>li").removeClass("on");
	$(".snb_wrap .snb>li>span").removeClass("on");
//	snb기본 바꾸기
	
//	스토어랭킹 리스트
	var ed = $(".sv02 .list td:nth-child(n+2).a")
	$(".sv02 .list td:nth-child(n+2)").not(ed).click(function(){
		window.open("http://ph.hansfrom.net/qims/member_popup.html","member_popup","width=1300,height=813,top=50,left=50");
	});
//	스토어랭킹 리스트
	
//	앱 카테고리 관리
	$(".sv03 .list .cgbt03").click(function(){
		window.open("http://ph.hansfrom.net/qims/service03_01_popup.html","service03_01_popup","width=300,height=180,top=400,left=1200");
	});
	$(".sv03 .cb.sv03").click(function(){
		window.open("http://ph.hansfrom.net/qims/service03_02_popup.html","service03_02_popup","width=300,height=180,top=400,left=300");
	});
	$(".sv03 .list td:nth-child(3) input[type=button]").click(function(){
		window.open("http://ph.hansfrom.net/qims/service03_popup.html","service03_popup","width=800,height=772,top=100,left=100");
	});
//	앱 카테고리 관리
	
//	카테고리 옵션 설정 팝업 js
	$("#pw.sv03 .btn").click(function(){
			$("#pw.sv03 .ptl03_wrap").toggleClass("on");
		});
		$("#pw.sv03 .ptl02>li img").click(function(){
			$("#pw.sv03 .ptl03_wrap").toggleClass("on");
		});
		$("#pw.sv03 .ptl02>li>label").click(function(){
			window.open("http://ph.hansfrom.net/qims/service03_03_popup.html","service03_03_popup","width=300,height=180,top=200,left=200"); 
	});
//	카테고리 옵션 설정 팝업 js
	
//	등록된 랜드마크 관리 js
	$('.sv04 .list td ul>li:nth-child(2) .rb').click(function(){
		window.open("http://ph.hansfrom.net/qims/service04_popup.html","service04_popup","width=300,height=180,top=200,left=200"); 
	});
//	등록된 랜드마크 관리 js
	
//	랜드마크 등록요청 js
	$('.sv05 .dp_pop').click(function(){
		window.open("http://ph.hansfrom.net/qims/service05_popup01.html","service05_popup02","width=300,height=180,top=350,left=800");
	});
	$('.sv05 .list td:nth-child(9).a').click(function(){
		window.open("http://ph.hansfrom.net/qims/service05_popup02.html","service05_popup02","width=300,height=180,top=350,left=800");
		window.open("http://ph.hansfrom.net/qims/service05_popup03.html","service05_popup03","width=300,height=180,top=350,left=1100");
	});
//	랜드마크 등록요청 js
	
//	포인트 통합관리 js
	$('.sv10 .list td:nth-child(n+5):nth-child(-n+6).a').click(function(){
		window.open("http://ph.hansfrom.net/qims/service10_popup.html","service10_popup","width=1100,height=710,top=50,left=50");
	});
//	포인트 통합관리 js
	
//	포인트 상세정보 팝업 js
	$("#pw.sv_10 .pot").click(function(){
		window.open("http://ph.hansfrom.net/qims/service10_popup02.html","service10_popup02","width=600,height=220,top=100,left=100");
	});
	$("#pw.sv_10 .pot02").click(function(){
		window.open("http://ph.hansfrom.net/qims/service10_popup03.html","service10_popup03","width=600,height=220,top=100,left=100");
	});
	$("#pw.sv_10 .tb02 td:nth-child(n+1):nth-child(-n+2).a").click(function(){
		window.open("http://ph.hansfrom.net/qims/member_popup.html","member_popup","width=1300,height=813,top=50,left=50");
	});
//	포인트 상세정보 팝업 js
	
//	금지 키워드 관리 js
	$('.sv_group').click(function(){
		window.open("http://ph.hansfrom.net/qims/service12_popup01.html","service12_popup01","width=500,height=685,top=50,left=50");
	});
	$('.sv_kw').click(function(){
		window.open("http://ph.hansfrom.net/qims/service12_popup02.html","service12_popup02","width=500,height=225,top=200,left=300");
	});
	$('.sv_ex').click(function(){
		window.open("http://ph.hansfrom.net/qims/service12_popup03.html","service12_popup03","width=800,height=285,top=200,left=200");
	});
//	금지 키워드 관리 js
	
//  상픔등록 권한
	$(".qus .sc_cb.al03").click(function() {
        var ckeee = $(this).is(":checked");
                     
		if(ckeee){
			$(this).parents(".qus").find("input[type=checkbox]").prop('checked', true);
		}else{
			$(this).parents(".qus").find("input[type=checkbox]").prop('checked', false);
		}
    });
	
	$(".qus>ul>li:first-child").click(function(){
		$(".qus>ul").removeClass("vw");
		$(this).parents(".qus>ul").addClass("vw");
	});
	$(".qus>ul>li:last-child>div").click(function(){
		$(this).parents(".qus>ul").removeClass("vw");
		var cbnf = $(this).parents(".qus>ul").find("input:checkbox:checked").siblings("p").text();
		var cbntt = $(this).parents(".qus>ul").find("input:checkbox:checked").length;
		var cbnte = $(this).parents(".qus>ul").find("input:checkbox").length;
		
		
		if(cbntt == cbnte-1){
		   $(this).parents(".qus>ul").children(".qus>ul>li:nth-child(1)").text("전체");
	   }
		else if(cbntt == 0){
		   $(this).parents(".qus>ul").children(".qus>ul>li:nth-child(1)").text("0개 선택");
	   }
		else if(cbntt == cbnte){
		   $(this).parents(".qus>ul").children(".qus>ul>li:nth-child(1)").text("전체");
	   }
		else{
		   $(this).parents(".qus>ul").children(".qus>ul>li:nth-child(1)").text(cbnf);
	   }
	});
//  상픔등록 권한
	
	
//  포인트 지급 select박스
	$("#sv10ss").change(function(){
		var sndexx = $("#sv10ss option").index($("#sv10ss option:selected"));
		if(sndexx == 0){
			$("#pw.sv_10_01 .sv10st input[type=text]").removeClass("hid");
		}
		if(sndexx == 1){
			$("#pw.sv_10_01 .sv10st input[type=text]").addClass("hid");
		}
	});
//  포인트 지급 select박스
	
//	앱 카테고리 관리 카페연동 카테고리 설정 추가하기 체크박스 체크시 테이블 변화
	$(".tbshowwp tr th:nth-child(4)").hide();
	$(".tbshowwp tr td:nth-child(4)").hide();
	
	$(".tbshowch").click(function(){
		var tbshow = $(this).is(":checked");
		
		if(tbshow){
			$(".tbshowwp tr th:nth-child(4)").show();
			$(".tbshowwp tr td:nth-child(4)").show();
		}
		else{
			$(".tbshowwp tr th:nth-child(4)").hide();
			$(".tbshowwp tr td:nth-child(4)").hide();
		}
	});
//	앱 카테고리 관리 카페연동 카테고리 설정 추가하기 체크박스 체크시 테이블 변화
	
	
});