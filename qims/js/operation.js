$(document).ready(function(){
	
	
//	snb바꾸기
	$(".snb_wrap").css({"margin-left":"-2250px"});
	$(".snb_wrap .snb_sub").removeClass("view");
	$(".snb_wrap .snb>li>ul>li").removeClass("on");
	$(".snb_wrap .snb>li>span").removeClass("on");
//	snb바꾸기
	
//	운영 - 문의구분/문의유형
	$("#qu_sl").change(function(){
		var sndex = $("#qu_sl option").index($("#qu_sl option:selected"));
		
		$(".qu>ul>li:nth-child(1)").text('전체');
		$(".qu>ul>li input:checkbox").prop("checked", false);
		$(".qu>ul").removeClass("on");
		$(".qu>ul").eq(sndex).addClass("on");
	});
	$(".qu>ul>li:first-child").click(function(){
		$(this).parents(".qu>ul").toggleClass("vw");
	});
	$(".qu>ul>li:last-child>div").click(function(){
		$(this).parents(".qu>ul").removeClass("vw");
		
		var cbn = $(".qu>ul>li input:checkbox:checked").length;
		$(".qu>ul>li:nth-child(1)").text(cbn+'개선택');
	});
//-------------------------
	$("#qu02_sl").change(function(){
		var sndexd = $("#qu02_sl option").index($("#qu02_sl option:selected"));
		
		$(".qu02>ul>li:nth-child(1)").text('전체');
		$(".qu02>ul>li input:checkbox").prop("checked", false);
		$(".qu02>ul").removeClass("on");
		$(".qu02>ul").eq(sndexd).addClass("on");
	});
	$(".qu02>ul>li:first-child").click(function(){
		$(this).parents(".qu02>ul").toggleClass("vw");
	});
	$(".qu02>ul>li:last-child>div").click(function(){
		$(this).parents(".qu02>ul").removeClass("vw");
		
		var cbnd = $(".qu02>ul>li input:checkbox:checked").length;
		$(".qu02>ul>li:nth-child(1)").text(cbnd+'개선택');
	});
//	운영 - 문의구분/문의유형
	
//	운영 - 신고유형/신고상세유형
	$("#qu03_sl").change(function(){
		var snd = $("#qu03_sl option").index($("#qu03_sl option:selected"));
		
		$(".qu03 select").removeClass("on");
		$(".qu03 select").eq(snd).addClass("on");
	});
	$("#qu04_sl").change(function(){
		var sndd = $("#qu04_sl option").index($("#qu04_sl option:selected"));
		
		$(".qu04 select").removeClass("on");
		$(".qu04 select").eq(sndd).addClass("on");
	});
//	운영 - 신고유형/신고상세유형
	
//	운영 - 신규문의 리스트
	$(".op.v01 .list td:nth-child(6).a").click(function(){
		window.open("http://ph.hansfrom.net/qims/img_popup.html","img_popup","width=430,height=707,top=150,left=600"); 
	});
	$(".op.v01 .list td:nth-child(8).a").click(function(){
		window.open("http://ph.hansfrom.net/qims/member_popup.html","member_popup","width=1300,height=840,top=50,left=50");
	});
	$(".op.v01 .list td:nth-child(10).a").click(function(){
		window.open("http://ph.hansfrom.net/qims/operation01_popup02.html","operation01_popup02","width=1200,height=850,top=50,left=50");
	});
//	운영 - 신규문의 리스트
	
//	운영 - 문의답변관리/등록
	$("#pw.op_answer .list td:nth-child(7).a").click(function(){
		window.open("http://ph.hansfrom.net/qims/img_popup.html","img_popup","width=430,height=707,top=150,left=600"); 
	});
//	운영 - 문의답변관리/등록
	
//	운영 - 재문의 리스트
	var nlr = $(".op.v02 .list td.a.v02")
	$(".op.v02 .list td:nth-child(6).a").not(nlr).click(function(){
		window.open("http://ph.hansfrom.net/qims/img_popup.html","img_popup","width=430,height=707,top=150,left=600"); 
	});
	var nlrr = $(".op.v02 .list td.a")
	$(".op.v02 .list td:nth-child(n+2)").not(nlrr).click(function(){
		window.open("http://ph.hansfrom.net/qims/operation02_popup.html","operation02_popup","width=600,height=815,top=50,left=50"); 
	});
	$(".op.v02 .list td:nth-child(10).a").click(function(){
		window.open("http://ph.hansfrom.net/qims/operation01_popup02.html","operation01_popup02","width=1200,height=850,top=50,left=50"); 
	});
//	운영 - 재문의 리스트
	
//	운영 - 문의/재문의 내역
	$("#pw.op_ag .tb01 a").click(function(){
		window.open("http://ph.hansfrom.net/qims/img_popup.html","img_popup","width=430,height=707,top=50,left=50"); 
	});
//	운영 - 문의/재문의 내역
	
//	운영 - 불편사항 및 개선사항
	$('.op.v03 .list td:nth-child(4).a').click(function(){
		window.open("http://ph.hansfrom.net/qims/img_popup.html","img_popup","width=430,height=707,top=50,left=50"); 
	});
	$('.op.v03 .list td:nth-child(6).a').click(function(){
		window.open("http://ph.hansfrom.net/qims/member_popup.html","member_popup","width=1300,height=840,top=50,left=50");
	});
	$(".op.v03 .list td:nth-child(8) ul>li").click(function(){
		$(this).removeClass("on");
		$(this).siblings(".op.v03 .list td:nth-child(8) ul>li").addClass("on");
	});
//	운영 - 불편사항 및 개선사항
	
//	운영 - 상품신고 이의신청
	$(".op.v04 .list td:nth-child(5).a").click(function(){
		window.open("http://ph.hansfrom.net/qims/product_popup.html","product_popup","width=1200,height=700,top=50,left=50");
	});
	$(".op.v04 .list td:nth-child(9).a").click(function(){
		window.open("http://ph.hansfrom.net/qims/member_popup.html","member_popup","width=1300,height=840,top=50,left=50");
	});
	$(".op.v04 .list td:nth-child(10).a").click(function(){
		window.open("http://ph.hansfrom.net/qims/img_popup.html","img_popup","width=430,height=707,top=150,left=600"); 
	});
	$(".op.v04 .list td:nth-child(12).a").click(function(){
		window.open("http://ph.hansfrom.net/qims/operation04_popup.html","operation04_popup","width=1200,height=850,top=50,left=50"); 
	});
//	운영 - 상품신고 이의신청
	
//	운영 - 상품신고 이의제기 답변관리 팝업
	$("#pw.op_pd .list td.a").click(function(){
		window.open("http://ph.hansfrom.net/qims/img_popup.html","img_popup","width=430,height=707,top=150,left=600"); 
	});
//	운영 - 상품신고 이의제기 답변관리 팝업
	
//	운영 - 자동답변문의
	var nlao = $(".op.v05 .list td.a.v02")
	$(".op.v05 .list td:nth-child(5).a").not(nlao).click(function(){
		window.open("http://ph.hansfrom.net/qims/img_popup.html","img_popup","width=430,height=707,top=150,left=600"); 
	});
	$(".op_auto").click(function(){
		window.open("http://ph.hansfrom.net/qims/operation05_popup.html","operation05_popup","width=1200,height=850,top=50,left=50");
	});
	$(".op.v05 .list td:nth-child(7).a").click(function(){
		window.open("http://ph.hansfrom.net/qims/member_popup.html","member_popup","width=1300,height=840,top=50,left=50");
	});
	var nlat = $(".op.v05 .list td.a")
	$(".op.v05 .list td").not(nlat).click(function(){
		window.open("http://ph.hansfrom.net/qims/operation05_popup02.html","operation05_popup02","width=600,height=610,top=50,left=50"); 
	});
	$(".op.v05 .list tr").mouseenter(function(){
		$(".op.v05 .auto_wp").addClass("on");
	});
	$(".op.v05 .list tr").mouseleave(function(){
		$(".op.v05 .auto_wp").removeClass("on");
	});
	$(".op.v05 .auto_wp").mouseenter(function(){
		$(this).addClass("on");
	});
	$(".op.v05 .auto_wp").mouseleave(function(){
		$(this).removeClass("on");
	});
//	운영 - 자동답변문의
	
//	운영 - 자동답변내역 상세보기 팝업
	$("#pw.op_at .tb01 a").click(function(){
		window.open("http://ph.hansfrom.net/qims/img_popup.html","img_popup","width=430,height=707,top=150,left=600"); 
	});
//	운영 - 자동답변내역 상세보기 팝업
	
//	운영 - 신고관리
	var oplso = $(".op.v06 .list td.a");
	$(".op.v06 .list td").not(oplso).click(function(){
		window.open("http://ph.hansfrom.net/qims/operation06_popup02.html","operation06_popup02","width=700,height=510,top=50,left=50");
	});
	$(".op.v06 .list td").mouseenter(function(){
		$(".op.v06 .op06_pw").addClass("on");
	});
	$(".op.v06 .list td").mouseleave(function(){
		$(".op.v06 .op06_pw").removeClass("on");
	});
	$(".op.v06 .op06_pw").mouseenter(function(){
		$(this).addClass("on");
	});
	$(".op.v06 .op06_pw").mouseleave(function(){
		$(this).removeClass("on");
	});
	var oplst = $(".op.v06 .list td.a.v02");
	$(".op.v06 .list td:nth-child(5)").not(oplst).click(function(){
		window.open("http://ph.hansfrom.net/qims/member_popup.html","member_popup","width=1300,height=840,top=50,left=50");
	});
	$(".op.v06 .list td:nth-child(9)").not(oplst).click(function(){
		window.open("http://ph.hansfrom.net/qims/member_popup.html","member_popup","width=1300,height=840,top=50,left=50");
	});
	$(".op.v06 .list td:nth-child(6)").not(oplst).click(function(){
		window.open("http://ph.hansfrom.net/qims/product_popup.html","product_popup","width=1200,height=700,top=50,left=50");
	});
	$(".op.v06 .list td:nth-child(8)").not(oplst).click(function(){
		window.open("http://ph.hansfrom.net/qims/img_popup.html","img_popup","width=430,height=707,top=150,left=600"); 
	});
	$(".op.v06 .list td:nth-child(10).a").not(oplst).click(function(){
		window.open("http://ph.hansfrom.net/qims/operation06_popup04.html","operation06_popup04","width=1200,height=620,top=50,left=50"); 
	});
	$(".op.v06 .list td:nth-child(12).a").not(oplst).click(function(){
		window.open("http://ph.hansfrom.net/qims/operation06_popup03.html","operation06_popup03","width=700,height=390,top=50,left=50"); 
	});
	$(".op.v06 .list td:nth-child(14).a.color").click(function(){
		window.open("http://ph.hansfrom.net/qims/operation06_popup03.html","operation06_popup03","width=700,height=390,top=50,left=50"); 
	});
	$(".at02").click(function(){
		window.open("http://ph.hansfrom.net/qims/operation06_popup01.html","operation06_popup01","width=1200,height=790,top=50,left=50"); 
	});
	$(".at03").click(function(){
		window.open("http://ph.hansfrom.net/qims/operation06_popup03.html","operation06_popup03","width=700,height=390,top=50,left=50"); 
	});
	$(".at04").click(function(){
		window.open("http://ph.hansfrom.net/qims/operation06_popup04.html","operation06_popup04","width=1200,height=620,top=50,left=50"); 
	});
//	운영 - 신고관리
	
//	운영 - 신고자 상세보기 팝업
	$("#pw.op06_03 .list td:nth-child(6).a").click(function(){
		window.open("http://ph.hansfrom.net/qims/img_popup.html","img_popup","width=430,height=707,top=150,left=600");
	});
	$("#pw.op06_03 .list td:nth-child(7).a").click(function(){
		window.open("http://ph.hansfrom.net/qims/member_popup.html","member_popup","width=1300,height=840,top=50,left=50");
	});
	$("#pw.op06_03 .list td:nth-child(11).color02").click(function(){
		window.open("http://ph.hansfrom.net/qims/operation06_popup03.html","operation06_popup03","width=700,height=390,top=50,left=50");
	});
//	운영 - 신고자 상세보기 팝업
	
//	운영 - 앱 공지사항
	$(".rdbbox input[type=text]").addClass("on");
	$(".rdbbox input[type=text]").attr("readonly",true);
	
	$(".rdbbox>ul>li .rdb input[type=radio]").click(function() {
        var rdcck = $(".rdbbox>ul>li:nth-child(1) .rdb input[type=radio]").is(":checked");
        var rdccked = $(".rdbbox>ul>li:nth-child(2) .rdb input[type=radio]").is(":checked");
                     
		if(rdcck){
			$(".rdbbox input[type=text]").addClass("on");
			$(".rdbbox input[type=text]").attr("readonly",true);
		}
		else if(rdccked){
			$(".rdbbox input[type=text]").removeClass("on");
			$(".rdbbox input[type=text]").attr("readonly",false);
		}
    });
	
	$(".gud").click(function(){
		window.open("http://ph.hansfrom.net/qims/operation07_guide_popup.html","operation07_guide_popup","width=510,height=260,top=200,left=800");
	});
//	운영 - 앱 공지사항
	
//	운영 - 안드로이드 PUSH발송 팝업
	$("#pw.op08_02 .tb01 tr:first-child ul:first-child>li>.rb").click(function(){
		
		var op_rvd = $(this).parents("#pw.op08_02 .tb01 tr:first-child ul:first-child>li").index();
		
		$("#pw.op08_02 .tb01 tr:first-child ul:nth-child(2)>li").removeClass("on");
		$("#pw.op08_02 .tb01 tr:first-child ul:nth-child(2)>li").eq(op_rvd).addClass("on");
	});
//	운영 - 안드로이드 PUSH발송 팝업
	
//	운영 - PUSH발송 리스트
	$(".op.v08 .send").click(function(){
		window.open("http://ph.hansfrom.net/qims/operation08_popup02.html","operation08_popup02","width=1000,height=760,top=50,left=50");
	});
	$(".op.v08 .list tr:nth-child(n+2)").click(function(){
		window.open("http://ph.hansfrom.net/qims/operation08_popup01.html","operation08_popup01","width=800,height=625,top=50,left=50");
	});
//	운영 - PUSH발송 리스트
	
//	운영 - SMS 발송 리스트
	$(".op.v09 .send").click(function(){
		window.open("http://ph.hansfrom.net/qims/operation09_popup02.html","operation09_popup02","width=1000,height=760,top=50,left=50");
	});
	$(".op.v09 .list tr:nth-child(n+2)").click(function(){
		window.open("http://ph.hansfrom.net/qims/operation09_popup01.html","operation09_popup01","width=800,height=625,top=50,left=50");
	});
//	운영 - SMS 발송 리스트
	
//	운영 - SMS 발송 팝업
	$("#pw.op09_02 .tb01 tr:nth-child(2) ul:first-child>li>.rb").click(function(){
		
		op_rvd = $(this).parents("#pw.op09_02 .tb01 tr:nth-child(2) ul:first-child>li").index();
		
		$("#pw.op09_02 .tb01 tr:nth-child(2) ul:nth-child(2)>li").removeClass("on");
		$("#pw.op09_02 .tb01 tr:nth-child(2) ul:nth-child(2)>li").eq(op_rvd).addClass("on");
	});
//	운영 - SMS 발송 팝업
	
	
//	운영 - E-mail 발송 리스트
	$(".op.v10 .send").click(function(){
		window.open("http://ph.hansfrom.net/qims/operation10_popup02.html","operation10_popup02","width=1000,height=760,top=50,left=50");
	});
	$(".op.v10 .list tr:nth-child(n+2)").click(function(){
		window.open("http://ph.hansfrom.net/qims/operation10_popup01.html","operation10_popup01","width=800,height=625,top=50,left=50");
	});
//	운영 - E-mail 발송 리스트
	
	
	
	
	

	
});