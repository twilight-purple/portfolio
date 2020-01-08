$(document).ready(function(){
	
//	snb바꾸기
	$(".snb_wrap .snb_sub").removeClass("view");
	$(".snb_wrap .snb>li>ul>li").removeClass("on");
	$(".snb_wrap .snb>li>span").removeClass("on");
//	snb바꾸기
	
//	거래통함관리 리스트 팝업
	$(".dl01 .list td.a").click(function(){
		window.open("http://ph.hansfrom.net/qims/deal_popup.html","deal_popup","width=1200,height=783,top=50,left=50"); 
	});
//	거래통함관리 리스트 팝업
	
//	안전결제 관리 리스트
	$(".dl02 #st_dim").change(function(){
		var sndex = $(".dl02 #st_dim option").index($(".dl02 #st_dim option:selected"));
		
		if(sndex == 7){
			$(".dl02 .st_dim_s>select").removeClass("on");
			$(".dl02 .st_dim_s>select:nth-child(2)").addClass("on");
		}
		else{
			$(".dl02 .st_dim_s>select").removeClass("on");
			$(".dl02 .st_dim_s>select:nth-child(1)").addClass("on");
		}
	});
//	항목가이드01
	$(".dl02 .gd01").click(function(){
		window.open("http://ph.hansfrom.net/qims/deal02_guide_popup.html","deal02_guide_popup","width=510,height=560,top=100,left=100"); 
	});
//	항목가이드02
	$(".dl02 .gd02").click(function(){
		window.open("http://ph.hansfrom.net/qims/deal02_guide02_popup.html","deal02_guide02_popup","width=520,height=575,top=100,left=100"); 
	});
	$(".dl02 .list td.a").click(function(){
		window.open("http://ph.hansfrom.net/qims/deal02_popup.html","deal02_popup","width=1200,height=790,top=50,left=50"); 
	});
//	안전결제 관리 리스트
	
//	안전결제 정산내역 리스트
//	항목가이드01
	$(".dl03 .gd01").click(function(){
		window.open("http://ph.hansfrom.net/qims/deal03_guide_popup.html","deal03_guide_popup","width=530,height=460,top=100,left=100"); 
	});
//	상세통계보기
	$(".dl03 .gd02").click(function(){
		window.open("http://ph.hansfrom.net/qims/deal03_popup.html","deal03_popup","width=1100,height=800,top=50,left=50"); 
	});
//	안전결제 정산내역 리스트
	
//	즉시송금관리 리스트
//	상세통계보기
	$(".dl04 .gd01").click(function(){
		window.open("http://ph.hansfrom.net/qims/deal04_popup02.html","deal04_popup02","width=1100,height=790,top=50,left=50"); 
	});
	$(".dl04 .list td.a").click(function(){
		window.open("http://ph.hansfrom.net/qims/deal04_popup.html","deal04_popup","width=1200,height=790,top=50,left=50"); 
	});
//	즉시송금관리 리스트
	
//	편의점 택배 리스트
	$(".dl05 .list td:nth-child(2).a").click(function(){
		window.open("http://ph.hansfrom.net/qims/deal05_popup02.html","deal05_popup02","width=1100,height=630,top=50,left=50"); 
	});
	$(".dl05 .list td:nth-child(n+3):nth-child(-n+4).a").click(function(){
		window.open("http://ph.hansfrom.net/qims/deal05_popup.html","deal05_popup","width=1100,height=780,top=50,left=50"); 
	});
	$(".dl05 .list td:nth-child(10).a").click(function(){
		window.open("http://ph.hansfrom.net/qims/product_popup.html","product_popup","width=1200,height=700,top=50,left=50");
	});
//	편의점 택배 리스트
	
//	편의점 택배 안내 콘텐츠
	$(".dl06 .d_yy").click(function(){
		window.open("http://ph.hansfrom.net/qims/deal06_popup.html","deal06_popup","width=450,height=465,top=200,left=700");
	});
	$(".dl06 .rb_wp>li:nth-child(1)>.rb").click(function(){
		window.open("http://ph.hansfrom.net/qims/deal06_popup01.html","deal06_popup01","width=300,height=180,top=300,left=1200");
	});
	$(".dl06 .rb_wp>li:nth-child(2)>.rb").click(function(){
		window.open("http://ph.hansfrom.net/qims/deal06_popup02.html","deal06_popup02","width=300,height=180,top=300,left=1200");
	});
//	편의점 택배 안내 콘텐츠
	
//	통합거래내역 상세정보 팝업
//	이전거래내역
	$("#pw.dl .d_prev").click(function(){
		window.open("http://ph.hansfrom.net/qims/deal_prev_popup.html","deal_prev_popup","width=1300,height=758,top=50,left=50"); 
	});
//	부정거래내역
	$("#pw.dl .d_ill").click(function(){
		window.open("http://ph.hansfrom.net/qims/deal_illegal_popup.html","deal_illegal_popup","width=1300,height=780,top=50,left=50"); 
	});
//	통합거래내역 상세정보 팝업
	
//	안전거래내역 상세정보 팝업
//	이전거래내역
	$("#pw.dl .d_prev02").click(function(){
		window.open("http://ph.hansfrom.net/qims/deal02_prev_popup.html","deal02_prev_popup","width=1300,height=780,top=50,left=50"); 
	});
//	안전거래내역 상세정보 팝업
	
//	이전거래내역 팝업
	$("#pw.dl01_01 .list td.a").click(function(){
		window.open("http://ph.hansfrom.net/qims/deal_popup.html","deal_popup","width=1200,height=783,top=50,left=50"); 
	});
//	이전거래내역 팝업
	
//	택배서비스 이용 상세정보 팝업
	$("#pw.dl05 .list td:nth-child(n+4):nth-child(-n+5).a").click(function(){
		window.open("http://ph.hansfrom.net/qims/member_popup.html","member_popup","width=1300,height=840,top=50,left=100");
	});
	$("#pw.dl05 .list td:nth-child(8).a").click(function(){
		window.open("http://ph.hansfrom.net/qims/product_popup.html","product_popup","width=1200,height=700,top=50,left=50");
	});
//	택배서비스 이용 상세정보 팝업
	
//	편의접 택배 안내 콘텐츠 등록
	$("#pw.dl06 .upload_text").val("등록된 파일이 없습니다.");
	$("#pw.dl06 .input_file").change(function(){
		var i = $(this).val();
		var oFile = $(this)[0].files;

		if(oFile.length < 1){
			$("#pw.dl06 .upload_text").val("등록된 파일이 없습니다.");
		  }
		  else {
			  $("#pw.dl06 .upload_text").val(i);
		  }
	});
	$("#pw.dl06 .d_y").click(function(){
		window.open("http://ph.hansfrom.net/qims/deal06_popup03.html","deal06_popup03","width=300,height=180,top=100,left=100");
	});
//	편의접 택배 안내 콘텐츠 등록

});