$(document).ready(function(){
	
//	탭메뉴버튼
	var pb = 0;
	
	$(".pt_btn>li").click(function(){
		
		pb = $(this).index();
		
		$(".pt_btn>li").removeClass("on");
		$(".pt_btn>li").eq(pb).addClass("on");
		$(".pt_wrap>li").removeClass("on");
		$(".pt_wrap>li").eq(pb).addClass("on");
	});
//	탭메뉴버튼
	
//	통합정보 탭영역 주소/계좌정보 삭제
	$(".ibtn").click(function(){
		$(this).parents(".ulli>ul>li").hide();
	});
//	통합정보 탭영역 주소/계좌정보 삭제
	


//	서브 탭메뉴
	$(".v03_st>li").click(function(){
		var st01 = $(this).index();
		$(".v03_st>li").removeClass("on");
		$(".v03_st>li").eq(st01).addClass("on");
		$(".v03_sb>li").removeClass("on");
		$(".v03_sb>li").eq(st01).addClass("on");
	});
	$(".v04_st>li").click(function(){
		var st02 = $(this).index();
		$(".v04_st>li").removeClass("on");
		$(".v04_st>li").eq(st02).addClass("on");
		$(".v04_sb>li").removeClass("on");
		$(".v04_sb>li").eq(st02).addClass("on");
	});
	$(".v05_st>li").click(function(){
		var st03 = $(this).index();
		$(".v05_st>li").removeClass("on");
		$(".v05_st>li").eq(st03).addClass("on");
		$(".v05_sb>li").removeClass("on");
		$(".v05_sb>li").eq(st03).addClass("on");
	});
//	서브 탭메뉴
	
//	문의구분-문의유형
	$("#stxt").change(function(){
		var sndex = $("#stxt option").index($("#stxt option:selected"));
		if(sndex == 0){
			$("#pw.mb .v04_sb01 .sc td:nth-child(6) select").removeClass("on");
			$("#pw.mb .v04_sb01 .sc td:nth-child(6) select:nth-child(1)").addClass("on");
		}
		if(sndex == 1){
			$("#pw.mb .v04_sb01 .sc td:nth-child(6) select").removeClass("on");
			$("#pw.mb .v04_sb01 .sc td:nth-child(6) select:nth-child(2)").addClass("on");
		}
		if(sndex == 2){
			$("#pw.mb .v04_sb01 .sc td:nth-child(6) select").removeClass("on");
			$("#pw.mb .v04_sb01 .sc td:nth-child(6) select:nth-child(3)").addClass("on");
		}
	});
//	문의구분-문의유형
	
//	클릭 탭이동
	$(".tc01").click(function(){
		$(".pt_btn>li").removeClass("on");
		$(".pt_btn>li").eq(3).addClass("on");
		$(".pt_wrap>li").removeClass("on");
		$(".pt_wrap>li").eq(3).addClass("on");
		$(".v04_st>li").removeClass("on");
		$(".v04_st>li").eq(0).addClass("on");
		$(".v04_sb>li").removeClass("on");
		$(".v04_sb>li").eq(0).addClass("on");
	});
	$(".tc02").click(function(){
		$(".pt_btn>li").removeClass("on");
		$(".pt_btn>li").eq(3).addClass("on");
		$(".pt_wrap>li").removeClass("on");
		$(".pt_wrap>li").eq(3).addClass("on");
		$(".v04_st>li").removeClass("on");
		$(".v04_st>li").eq(1).addClass("on");
		$(".v04_sb>li").removeClass("on");
		$(".v04_sb>li").eq(1).addClass("on");
	});
	$(".tc03").click(function(){
		$(".pt_btn>li").removeClass("on");
		$(".pt_btn>li").eq(4).addClass("on");
		$(".pt_wrap>li").removeClass("on");
		$(".pt_wrap>li").eq(4).addClass("on");
	});
	$(".tc04").click(function(){
		$(".pt_btn>li").removeClass("on");
		$(".pt_btn>li").eq(1).addClass("on");
		$(".pt_wrap>li").removeClass("on");
		$(".pt_wrap>li").eq(1).addClass("on");
	});
//	클릭 탭이동
	
	
//	클릭 팝업
//	경고초기화 팝업
	$(".rst").click(function(){
		window.open("http://ph.hansfrom.net/qims/member_rst_popup.html","member_rst_popup","width=300,height=180,top=100,left=100");
	});
//	거래내역 팝업
	var ed = $(".pt_wrap>.v02 .list td.a")
	$(".pt_wrap>.v02 .list td").not(ed).click(function(){
		window.open("http://ph.hansfrom.net/qims/deal_popup.html","deal_popup","width=1200,height=783,top=50,left=50");
	});
	$(".pt_wrap>.v02 .list td.a").click(function(){
		window.open("http://ph.hansfrom.net/qims/product_popup.html","product_popup","width=1200,height=691,top=50,left=50");
	});
//	스토어 정보 팝업
	$(".m_st").click(function(){
		window.open("http://ph.hansfrom.net/qims/member_store_popup.html","member_store_popup","width=600,height=771,top=100,left=200");
	});
	$(".m_fl").click(function(){
		window.open("http://ph.hansfrom.net/qims/member_follower_popup.html","member_follower_popup","width=600,height=765,top=100,left=200");
	});
//	스토어 후기 팝업
	$(".pt_wrap>.v03 .v03_sb02 .list td.a").click(function(){
		window.open("http://ph.hansfrom.net/qims/member_popup.html","member_popup01","width=1300,height=813,top=50,left=100");
	});
//	1:1문의 팝업
	$(".pt_wrap>.v04 .v04_sb01 .list td:nth-child(6).a").click(function(){
		window.open("http://ph.hansfrom.net/qims/img_popup.html","img_popup","width=430,height=707,top=150,left=600"); 
	});
//	신고 팝업
	$(".pt_wrap>.v04 .v04_sb02 .list td:nth-child(5).a").click(function(){
		window.open("http://ph.hansfrom.net/qims/member_popup.html","member_popup01","width=1300,height=813,top=50,left=100");
	});
	$(".pt_wrap>.v04 .v04_sb02 .list td:nth-child(6).a").click(function(){
		window.open("http://ph.hansfrom.net/qims/product_popup.html","product_popup","width=1200,height=691,top=50,left=50");
	});
	$(".pt_wrap>.v04 .v04_sb02 .list td:nth-child(8).a").click(function(){
		window.open("http://ph.hansfrom.net/qims/img_popup.html","img_popup","width=430,height=707,top=150,left=600"); 
	});
	$(".pt_wrap>.v04 .v04_sb02 .list td:nth-child(9).a").click(function(){
		window.open("http://ph.hansfrom.net/qims/member_popup.html","member_popup02","width=1300,height=813,top=50,left=100");
	});
//	클릭 팝업
    
});