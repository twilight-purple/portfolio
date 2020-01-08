$(document).ready(function(){
	
//    달력 플러그인 사용
//	  01 달력
	$(".datepicker.n01").datepicker({
		showOn:"both",//버튼으로 바꾸기
		buttonImage: "./img/iconmonstr-calendar-4-24.png",  
        buttonImageOnly: true,
		showOtherMonths: true,//다른달보기
		dayNamesMin: ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'],//요일
		monthNames: ['JANUARY','FEBUARY','MARCH','APRIL','MAY','JUNE', 'JULY','AUGUST','SEPTEMBER','OCTOBER','NOVEMBER','DECEMBER'],
		monthNamesShort: ['JANUARY','FEBUARY','MARCH','APRIL','MAY','JUNE','JULY','AUGUST','SEPTEMBER','OCTOBER','NOVEMBER','DECEMBER'],//달
		beforeShow: function(input, inst){
			inst.dpDiv.css({marginTop: -input.offsetHeight + '34px', marginLeft: input.offsetWidth + 'px'});//위치조정
		},
		firstDay: 1,//월요일부터 시작
		altFormat: "yy.mm.dd",//text박스에 날짜 기입되는 방식
		altField: ".sc_cd01",//날짜 기입되는 text박스
		nextText: "", 
		prevText: ""//prev,next버튼 text없애기
	});
//	  01 달력
//	  02 달력
	$(".datepicker.n02").datepicker({
		showOn:"both",
		buttonImage: "./img/iconmonstr-calendar-4-24.png", 
        buttonImageOnly: true,
		showOtherMonths: true,
		dayNamesMin: ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'],
		monthNames: ['JANUARY','FEBUARY','MARCH','APRIL','MAY','JUNE', 'JULY','AUGUST','SEPTEMBER','OCTOBER','NOVEMBER','DECEMBER'],
		monthNamesShort: ['JANUARY','FEBUARY','MARCH','APRIL','MAY','JUNE','JULY','AUGUST','SEPTEMBER','OCTOBER','NOVEMBER','DECEMBER'],
		beforeShow: function(input, inst){
			inst.dpDiv.css({marginTop: -input.offsetHeight + '34px', marginLeft: input.offsetWidth + 'px'});
		},
		firstDay: 1,
		altField: ".sc_cd02",
		altFormat: "yy.mm.dd",
		constrainInput: false,
		nextText: "", 
		prevText: ""
	});
//	  02 달력
//	  03 달력
	$(".datepicker.n03").datepicker({
		showOn:"both",//버튼으로 바꾸기
		buttonImage: "./img/iconmonstr-calendar-4-24.png",  
        buttonImageOnly: true,
		showOtherMonths: true,//다른달보기
		dayNamesMin: ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'],//요일
		monthNames: ['JANUARY','FEBUARY','MARCH','APRIL','MAY','JUNE', 'JULY','AUGUST','SEPTEMBER','OCTOBER','NOVEMBER','DECEMBER'],
		monthNamesShort: ['JANUARY','FEBUARY','MARCH','APRIL','MAY','JUNE','JULY','AUGUST','SEPTEMBER','OCTOBER','NOVEMBER','DECEMBER'],//달
		beforeShow: function(input, inst){
			inst.dpDiv.css({marginTop: -input.offsetHeight + '34px', marginLeft: input.offsetWidth + 'px'});//위치조정
		},
		firstDay: 1,//월요일부터 시작
		altFormat: "yy.mm.dd",//text박스에 날짜 기입되는 방식
		altField: ".sc_cd03",//날짜 기입되는 text박스
		nextText: "", 
		prevText: ""//prev,next버튼 text없애기
	});
//	  03 달력
//	  04 달력
	$(".datepicker.n04").datepicker({
		showOn:"both",
		buttonImage: "./img/iconmonstr-calendar-4-24.png", 
        buttonImageOnly: true,
		showOtherMonths: true,
		dayNamesMin: ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'],
		monthNames: ['JANUARY','FEBUARY','MARCH','APRIL','MAY','JUNE', 'JULY','AUGUST','SEPTEMBER','OCTOBER','NOVEMBER','DECEMBER'],
		monthNamesShort: ['JANUARY','FEBUARY','MARCH','APRIL','MAY','JUNE','JULY','AUGUST','SEPTEMBER','OCTOBER','NOVEMBER','DECEMBER'],
		beforeShow: function(input, inst){
			inst.dpDiv.css({marginTop: -input.offsetHeight + '34px', marginLeft: input.offsetWidth + 'px'});
		},
		firstDay: 1,
		altField: ".sc_cd04",
		altFormat: "yy.mm.dd",
		constrainInput: false,
		nextText: "", 
		prevText: ""
	});
//	  04 달력
//    달력 플러그인 사용
	
	
	
//    리스트 버튼 영역
    var list = 0; 
	
	$(".btn>li").click(function(){
		list = $(this).index();
		btn();
	});
    
    $(".btn_left>li:first-child").click(function(){
        $(".btn>li").removeClass("on");
        $(".btn>li:first-child").addClass("on");
        $(".list_view>li").removeClass("on");
        $(".list_view>li:first-child").addClass("on");
        $(".list_nm>li").removeClass("on");
        $(".list_nm>li:first-child").addClass("on");
    });
    
    $(".btn_right>li:last-child").click(function(){
        $(".btn>li").removeClass("on");
        $(".btn>li:last-child").addClass("on");
        $(".list_view>li").removeClass("on");
        $(".list_view>li:last-child").addClass("on");
        $(".list_nm>li").removeClass("on");
        $(".list_nm>li:last-child").addClass("on");
    });
    
    $(".btn_left>li:last-child").click(function(){
        
        list = $(".btn>li.on").index();
        
        if(list==0){
            $(".btn>li").removeClass("on");
            $(".btn>li:first-child").addClass("on");
            $(".list_view>li").removeClass("on");
            $(".list_view>li:first-child").addClass("on");
            $(".list_nm>li").removeClass("on");
            $(".list_nm>li:first-child").addClass("on");
        }
        else{
            list--;
            btn();
        }
    });
    
    $(".btn_right>li:first-child").click(function(){
        
        var len = $(".btn>li").length;
        list = $(".btn>li.on").index();
        
        if(list == len-1){
            $(".btn>li").removeClass("on");
            $(".btn>li:last-child").addClass("on");
            $(".list_view>li").removeClass("on");
            $(".list_view>li:last-child").addClass("on");
            $(".list_nm>li").removeClass("on");
            $(".list_nm>li:last-child").addClass("on");
        }
        else{
            list++;
            btn();
        }
    });
    
    function btn(){
        $(".btn>li").removeClass("on");
        $(".btn>li").eq(list).addClass("on");
        $(".list_view>li").removeClass("on");
        $(".list_view>li").eq(list).addClass("on");
        $(".list_nm>li").removeClass("on");
        $(".list_nm>li").eq(list).addClass("on");
    }
//    리스트 버튼 영역
	
//	검색영역 기한없음 체크박스 - dim 처리
	$(".sc_cb.not").click(function() {
        var ck = $(this).is(":checked");
                     
		if(ck){
			$('.sc_cd02').addClass("on");
			$('.sc_cd02').val("");
			$('.sc_cd02').attr("disabled",true).attr("readonly",false);
		}else{
			$('.sc_cd02').removeClass("on");
			$('.sc_cd02').attr("disabled",false).attr("readonly",false);
		}
    });
	$(".sc_cb.nnot").click(function() {
        var ckk = $(this).is(":checked");
                     
		if(ckk){
			$(this).parents("td").find(".sc_cd04").addClass("on");
			$(this).parents("td").find(".sc_cd04").attr('disabled', true);
		}else{
			$(this).parents("td").find(".sc_cd04").removeClass("on");
			$(this).parents("td").find(".sc_cd04").attr('disabled', false);
		}
    });
//	검색영역 기한없음 체크박스 - dim 처리
//	검색영역 전체 체크박스 - dim 처리
	$(".sc_cb.not02").click(function() {
        var cck = $(this).is(":checked");
                     
		if(cck){
			$('.sc_cd01').addClass("on");
			$('.sc_cd02').addClass("on");
		}else{
			$('.sc_cd01').removeClass("on");
			$('.sc_cd02').removeClass("on");
		}
    });
//	검색영역 data버튼 클릭시 활성화모양을 변경
	$(".data_btn>li").click(function(){
		$(".data_btn>li").removeClass("on");
		$(this).addClass("on");
	});
	$(".sc_cb.not02").click(function() {
        var ck = $(this).is(":checked");
                     
		if(ck){
			$(".data_btn>li").removeClass("on");
			$('.sc_cd01, .sc_cd02').attr("disabled",true).attr("readonly",false);
			$('.sc_cd01, .sc_cd02').val("")
			$(".data_btn>li").click(function(){
				$(".data_btn>li").removeClass("on");
			});
		}
		else{
			$('.sc_cd01, .sc_cd02').attr("disabled",false).attr("readonly",false);
			$(".data_btn>li").click(function(){
				$(".data_btn>li").removeClass("on");
				$(this).addClass("on");
			});
		}
    });
	$(".sc_cd01").click(function(){
		$(".data_btn>li").removeClass("on");
	});
	$(".sc_cd02").click(function(){
		$(".data_btn>li").removeClass("on");
	});
	$(".cd_img img").click(function(){
		$(".data_btn>li").removeClass("on");
	});
//	검색영역 data버튼 클릭시 활성화모양을 변경
//	검색영역 전체 체크박스 - dim 처리
	
	
//    리스트 최상위 리스트 음영처리
//	$(".list_view tr:nth-child(1)>.list>ul:nth-child(2)").css("background-color", "#ecf2df");
//    리스트 최상위 리스트 음영처리
//    리스트 앱에 노출중/노출되지 않은 리스트 음영처리
	$(".list tr.show").css("background-color", "#fffbeb");
	$(".list tr.hide").css("background-color", "#e5e5e5");
//    리스트 앱에 노출중/노출되지 않은 리스트 음영처리
	
	
//    리스트 등록 필수항목 채우지 않은곳 음영처리
	$(".table tr.must td").css({"background-color":"#fff7f7"});
//    리스트 등록 필수항목 채우지 않은곳 음영처리
	
	
//	input file버튼
	$(".upload_text").val("첨부된 파일이 없습니다.");
	$(".input_file").change(function(){
		var i = $(this).val();
		var oFile = $(this)[0].files;
		
		if(oFile.length < 1){
			$(".upload_text").val("첨부된 파일이 없습니다.");
		  }
		else{
			  $(".upload_text").val(i);
		  }
	});
//	input file버튼
	
	
//	리스트 등록/상세버튼 팝업
	$(".list_pt").click(function(){
		window.open("http://ph.hansfrom.net/qims/list_popup.html","list_popup","width=300,height=180,top=300,left=600"); 
	});
	$(".enr_pt").click(function(){
		window.open("http://ph.hansfrom.net/qims/enr_popup.html","enr_popup","width=300,height=180,top=300,left=900"); 
	});
	$(".revise_list_pt").click(function(){
		window.open("http://ph.hansfrom.net/qims/revise_list_popup.html","revise_list_popup","width=300,height=180,top=300,left=600"); 
	});
	$(".revise_pt").click(function(){
		window.open("http://ph.hansfrom.net/qims/revise_popup.html","revise_popup","width=300,height=180,top=300,left=900"); 
	});
//	리스트 등록/상세버튼 팝업
	
	
//	리스트 a클릭 팝업
//	첨부이미지 팝업
	$(".img_pop").click(function(){
		window.open("http://ph.hansfrom.net/qims/img_popup.html","img_popup","width=430,height=707,top=150,left=600"); 
	});
//	회원스토어 상세정보 팝업
	$(".mb_pop").click(function(){
		window.open("http://ph.hansfrom.net/qims/member_popup.html","member_popup","width=1300,height=813,top=50,left=50");
	});
//	상품 상세 팝업
	$(".pd_pop").click(function(){
		window.open("http://ph.hansfrom.net/qims/product_popup.html","product_popup","width=1200,height=691,top=50,left=50");
	});
//	통합거래상세 팝업
	$(".de_pop").click(function(){
		window.open("http://ph.hansfrom.net/qims/deal_popup.html","deal_popup","width=1200,height=783,top=50,left=50");
	});
//	택배서비스 이용 상세정보 팝업
	$(".pp_pop").click(function(){
		window.open("http://ph.hansfrom.net/qims/deal05_popup.html","deal05_popup","width=1100,height=780,top=50,left=50");
	});
//	후기 상세정보 팝업
	$(".rvw_pop").click(function(){
		window.open("http://ph.hansfrom.net/qims/product_review_popup.html","product_review_popup","width=800,height=342,top=100,left=100");
	});
//	상품댓글 팝업
	$(".cmm_pop").click(function(){
		window.open("http://ph.hansfrom.net/qims/product_comment_popup.html","product_comment_popup","width=800,height=417,top=100,left=100");
	});
//	상품 관리자 이력 팝업
	$(".mg_pop").click(function(){
		window.open("http://ph.hansfrom.net/qims/product_manager_popup.html","product_manager_popup","width=800,height=365,top=100,left=100");
	});
//	적용버튼 팝업
	$(".ap_pop").click(function(){
		window.open("http://ph.hansfrom.net/qims/apply_pop.html","apply_pop","width=300,height=180,top=300,left=1300");
	});
//	순서적용버튼 팝업
	$(".ap_pop02").click(function(){
		window.open("http://ph.hansfrom.net/qims/mainsup02_list_popup.html","mainsup02_list_popup","width=300,height=180,top=300,left=1300");
	});
//	닉네임/이름 변경이력 팝업
	$(".pname_pop").click(function(){
		window.open("http://ph.hansfrom.net/qims/member_name_popup.html","member_name_popup","width=700,height=359,top=100,left=100");
	});
//	휴대폰 변경이력 팝업
	$(".ptel_pop").click(function(){
		window.open("http://ph.hansfrom.net/qims/member_tel_popup.html","member_tel_popup","width=700,height=359,top=100,left=100");
	});
//	경고이력 팝업
	$(".pwar_pop").click(function(){
		window.open("http://ph.hansfrom.net/qims/member_war_popup.html","member_war_popup","width=700,height=311,top=100,left=100");
	});
//	경고 사유입력 팝업
	$(".prs_pop").click(function(){
		window.open("http://ph.hansfrom.net/qims/member_rs_popup.html","member_rs_popup","width=700,height=350,top=100,left=100");
	});
//	수정이력팝
	$(".pmng_pop").click(function(){
		window.open("http://ph.hansfrom.net/qims/member_manager_popup.html","member_manager_popup","width=700,height=559,top=100,left=100");
	});
//	택배서비스 이용이력 팝업
	$(".pps_pop").click(function(){
		window.open("http://ph.hansfrom.net/qims/member_ps_popup.html","member_ps_popup","width=1000,height=770,top=50,left=50");
	});
//	통합거래내역 팝업
	$(".d_pop").click(function(){
		window.open("http://ph.hansfrom.net/qims/deal_popup.html","deal_popup","width=1200,height=783,top=50,left=50");
	});
//	운영 - 화면가이드 팝업
	$(".op_wgd").click(function(){
		window.open("http://ph.hansfrom.net/qims/operation01_popup.html","operation01_popup","width=1000,height=800,top=50,left=50");
	});
//	운영 - 문의 답변관리/등록 팝업
	$(".op_ans").click(function(){
		window.open("http://ph.hansfrom.net/qims/operation01_popup02.html","operation01_popup02","width=1200,height=850,top=50,left=50");
	});
	
	
//	검색영역 높이 클릭
	$(".scbox").click(function(){
		$(".sc_wrap").toggleClass("on");
	});
//	검색영역 높이 클릭
	
//	버튼 바뀜 클릭
	$(".hide_btn").click(function(){
		$(this).toggleClass("on");
	});
//	버튼 바뀜 클릭
	
//	체크박스 선택시 전체 선택 이벤트
	$(".sc_cb.all").click(function() {
        var cke = $(this).is(":checked");
                     
		if(cke){
			$('.list_view>li.on input[class="sc_cb"]').prop('checked', true);
		}else{
			$('.list_view>li.on input[class="sc_cb"]').prop('checked', false);
		}
    });
	$(".sc_cb.all02").click(function() {
        var ckeo = $(this).is(":checked");
                     
		if(ckeo){
			$('input[class="sc_cb"]').prop('checked', true);
		}else{
			$('input[class="sc_cb"]').prop('checked', false);
		}
    });
	$(".sc_cb.all03").click(function() {
        var cket = $(this).is(":checked");
                     
		if(cket){
			$('.list tr input[class="sc_cb"]').prop('checked', true);
		}else{
			$('.list tr input[class="sc_cb"]').prop('checked', false);
		}
    });
	$(".sc_cb.all04").click(function() {
        var ckes = $(this).is(":checked");
                     
		if(ckes){
			$('ul.on input[class="sc_cb"]').prop('checked', true);
		}else{
			$('ul.on input[class="sc_cb"]').prop('checked', false);
		}
    });
//	체크박스 선택시 전체 선택 이벤트
	
	
//	리스트 more클릭하면 늘어남
	$(".list_m").click(function(){
		$(this).toggleClass("on");
	});
//	리스트 more클릭하면 늘어남
	
//	input 체크 못하게 막기
	$("input.dim").attr("disabled",true);
//	input 체크 못하게 막기
	
//	리스트 정렬 세모
	$(".list .img.v02").click(function(){
		$(this).addClass("color");
		$(".list .img.v02 img").stop().toggleClass("on");
	});
//	리스트 정렬 세모
	
	
//	file (상세)삭제버튼 누르면 이미지 삭제
	$(".ibtn").click(function(){
		var file_ibtn = $(this).parents(".imgbox02>ul>li").index();
		var file_len = $(this).parents(".imgbox02>ul").children("li").length;
		$(this).parents(".imgbox_wrap").find(".imgbox_ftxt>li").eq(file_ibtn).remove();
		$(this).parents(".imgbox02>ul>li").remove();

		if(file_len == 1){
			
			$(".img_more").hide();
		}
	});
//	$('#upload').change(function(){
//		$(this).val('');
//		var el = $('.clone').clone();
//		el.removeClass('clone');
//		$('.img_list').append(el);
//
//		$('.img_more').css("display", "none");
//
//		console.log($('.img_list').find('li').length);
//
//		if ( parseInt($('.img_list').find('li').length) > parseInt($('.img_list').attr('max-btn')) ){
//			$('.img_more').css("display", "none");
//		}									
//	});	

//	file (상세)삭제버튼 누르면 이미지 삭제
	
//	select on클래스 이름 붙은 애들 비활성화
	$('select').attr('disabled', false);
	$('select.on').attr('disabled', true);
	$('select.on').css({"background-color":"#ebebeb"});
//	select on클래스 이름 붙은 애들 비활성화
	
//	라디오박스에 on클래스 이름 붙은 애들 비활성화
	$(".rdb input[type=radio]").attr('disabled', false);
	$(".rdb.on input[type=radio]").attr('disabled', true);
//	라디오박스에 on클래스 이름 붙은 애들 비활성화
	
//	text박스에 on클래스 이름 붙은 애들 비활성화
	$('input[type=text]').attr('disabled', false);
	$('input[type=text].on').attr('disabled', true);
	$('input[type=text].on').css({"background-color":"#ebebeb"});
//	text박스에 on클래스 이름 붙은 애들 비활성화
	
	
//	number콧마
	$(document).on("keypress", "input[type=text].number", function () {

		if  ((event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105) && (event.keyCode != 8) && (event.keyCode != 46))

			event.returnValue = false;

	});



	$(document).on("keyup", "input[type=text].number", function () {

		var $this = $(this);

		var num = $this.val().replace(/[,]/g, "");



		var parts = num.toString().split(".");

		parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");

		$this.val(parts.join("."));

	});
//	number콧마
	
});