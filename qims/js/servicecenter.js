$(document).ready(function(){
	
//	snb기본 바꾸기
	$(".snb_wrap").css({"margin-left":"-2000px"});
	$(".snb_wrap .snb_sub").removeClass("view");
	$(".snb_wrap .snb>li>ul>li").removeClass("on");
	$(".snb_wrap .snb>li>span").removeClass("on");
//	snb기본 바꾸기
	
//FAQ등록
	$(".sc_cb.ron").click(function() {
        var cked = $(this).is(":checked");
                     
		if(cked){
			$(".sc_cd01").removeClass("on");
			$(".sc_cd02").removeClass("on");
		}else{
			$(".sc_cd01").addClass("on");
			$(".sc_cd02").addClass("on");
		}
    });

//중고나라 이용안내
$(".depth").click(function(){
	window.open("http://ph.hansfrom.net/qims/servicecenter02_popup.html","servicecenter02_popup","width=1000,height=890,top=50,left=50"); 
});

//이용약관 관리 리스트
	$(".sc03 .list td:nth-child(6).a").click(function(){
		window.open("http://ph.hansfrom.net/qims/servicecenter03_popup.html","servicecenter03_popup","width=650,height=319,top=150,left=100"); 
	});
	
//이용약관 상세
	
	$(".sc03_mn").click(function(){
		window.open("http://ph.hansfrom.net/qims/servicecenter03_popup.html","servicecenter03_popup","width=650,height=319,top=150,left=100"); 
	});

});