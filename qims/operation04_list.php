<!DOCTYPE html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
    <title>qdillion</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/int.js"></script>
    <script src="js/operation.js"></script>
    <script>
//		snb바꾸기
		$(document).ready(function(){
			$(".snb_wrap .snb>li:nth-child(2)>.snb_sub").addClass("view");
			$(".snb_wrap .snb>li:nth-child(2)>ul>li:nth-child(4)").addClass("on");
			$(".snb_wrap .snb>li:nth-child(2)>span").addClass("on");
		});
//		snb바꾸기
	</script>
</head>
    <body>
   
<!--   gnb/snb연결-->
  	<?php include "gnb.php"; ?>
    <?php include "snb.php"; ?>
<!--   gnb/snb연결-->

  
   <div id="wrap">
   	   <h1>1:1 문의</h1>
	   <ul class="title clear">
			<li></li>
			<li>상품신고 이의신청 &nbsp;<span>자동으로 숨김처리 되었으나 신고 처리에 대해 접수된 문의를 확인할 수 있습니다.</span></li>
		    <li style="float: right;"><input type="button" value="화면 가이드" style="width:120px;" class="btn03 op_wgd"></li>
		</ul>
	   <div class="op v04">
<!---------------------------------검색영역-->
		   <table class="sc">
			   <tr>
				   <th>이의제기일</th>
				   <td class="cd_img clear" style="width:19%;">
					   <input type="text" name="sc_txt" value="" class="sc_cd01">
					   <input type="button" name="sc_btn" value="" class="datepicker n01">
					   ~
					   <input type="text" name="sc_txt" value="" class="sc_cd02">
					   <input type="button" name="sc_btn" value="" class="datepicker n02">
				   </td>
				   <th>신고유형</th>
				   <td style="width:8%;">
					   <select id="qu03_sl">
						   <option>전체</option>
						   <option>비매너</option>
						   <option>스팸성광고</option>
						   <option>불법</option>
						   <option>사기</option>
						   <option>정보부정확</option>
						   <option>배너AD광고</option>
						   <option>기타사유</option>
					   </select>
				   </td>
				   <th>신고상세유형</th>
				   <td class="qu03">
					   <select class="on">
						   <option>전체</option>
					   </select>
					   <select>
						   <option>전체</option>
						   <option>일방적인 거래파기,연락두절</option>
						   <option>악의적 비방 및 욕설,명예훼손</option>
						   <option>성희롱</option>
						   <option>거래 불이행 및 분쟁신고</option>
						   <option>기타 비매너</option>
					   </select>
					   <select>
						   <option>전체</option>
						   <option>카페,블로그 홍보</option>
						   <option>타사이트 링크 유도</option>
						   <option>도박,대부업과 같은 광고</option>
						   <option>성인광고</option>
						   <option>기타스팸성 광고</option>
					   </select>
					   <select>
						   <option>전체</option>
						   <option>이미테이션 상품</option>
						   <option>술,담배,금연보조제</option>
						   <option>미성년자 이용 불가 제품</option>
						   <option>몰래카메라,스파이캠</option>
						   <option>모든 의약품 및 처방이 필요한 한약</option>
						   <option>개인정보 및 계정거래</option>
						   <option>내사진 또는 저작권 이미지 도용</option>
						   <option>저작권법 위반 복사본</option>
						   <option>기타 불법거래</option>
					   </select>
					   <select>
						   <option>전체</option>
						   <option>거래 전 사기 의심</option>
						   <option>거래 후 사기 피해신고</option>
						   <option>사기피해 사이트 등록 및 조회자</option>
						   <option>기타</option>
					   </select>
					   <select>
						   <option>전체</option>
						   <option>상품 설명 부족</option>
						   <option>중복 게시글</option>
						   <option>카테고리 잘못 지정</option>
						   <option>판매가치가 없는 상품</option>
						   <option>판매 내용과 다른 내용으로 예약중</option>
						   <option>기타 사기의심</option>
					   </select>
					   <select>
						   <option>전체</option>
						   <option>광고 배너 이미지 부적합</option>
						   <option>광고 배너 스토어명 부적합</option>
						   <option>광고 배너 소개글 부적합</option>
					   </select>
					   <select>
						   <option>-</option>
					   </select>
				   </td>
				   <th>상품처리</th>
				   <td>
					   <select>
						   <option>전체</option>
						   <option>자동숨김</option>
						   <option>관리자숨김</option>
					   </select>
				   </td>
				   <th>회원구분</th>
				   <td>
					   <select>
						   <option>전체</option>
						   <option>일반</option>
						   <option>블랙</option>
						   <option>정지</option>
						   <option>경고</option>
						   <option>관심</option>
						   <option>탈퇴</option>
						   <option>관리자삭제</option>
						   <option>휴면</option>
					   </select>
				   </td>
				   <th>첨부이미지</th>
				   <td>
					   <select style="width:70px;">
						   <option>전체</option>
						   <option>Y</option>
						   <option>N</option>
					   </select>
				   </td>
			   </tr>
		   </table>
		   <table class="sc v02">
			   <tr>
				   <th>처리상태</th>
				   <td>
					   <select>
						   <option>전체</option>
						   <option>Y</option>
						   <option>N</option>
					   </select>
				   </td>
				   <th>상품명</th>
				   <td><input type="text" value=""></td>
				   <th>신고누적수</th>
				   <td><input type="number"> 회 이상</td>
				   <th>내용</th>
				   <td><input type="text" value=""></td>
				   <th>아이디</th>
				   <td>
				   	<input type="text" value="">
				   </td>
				   <th>답변자</th>
				   <td>
					   <input type="text" name="sc_txt" value="">
					   <input type="button" name="sc_btn" value="검색">
				   </td>
			   </tr>
		   </table>
<!---------------------------------리스트영역-->
		   <ul class="list_top clear">
				   <li>총 11,200,121건,</li>
				   <li class="clear'">
					   <ul class="list_nm">
						   <li class="on">1</li>
					   </ul>
					   <p>/ 112,001 페이지</p>
				   </li>
				   <li><span>(2018-07-01 ~ 2018-09-05)</span></li>
				   <li>
					   <select>
						   <option>100개씩</option>
						   <option>200개씩</option>
						   <option>300개씩</option>
						   <option>400개씩</option>
						   <option>500개씩</option>
					   </select>
				   </li>
				   <li class="list_topbtn clear">
					   <select id="qu04_sl">
						   <option>전체</option>
						   <option>비매너</option>
						   <option>스팸성광고</option>
						   <option>불법</option>
						   <option>사기</option>
						   <option>정보부정확</option>
						   <option>배너 AD 광고</option>
						   <option>기타사유</option>
					   </select>
					   <span class="qu04 liheight">
						   <select class="on" style="height: 30px;">
							   <option>전체</option>
						   </select>
						   <select style="height: 30px;">
							   <option>전체</option>
							   <option>일방적인 거래파기,연락두절</option>
							   <option>악의적 비방 및 욕설,명예훼손</option>
							   <option>성희롱</option>
							   <option>거래 불이행 및 분쟁신고</option>
							   <option>기타 비매너</option>
						   </select>
						   <select style="height: 30px;">
							   <option>전체</option>
							   <option>카페,블로그 홍보</option>
							   <option>타사이트 링크 유도</option>
							   <option>도박,대부업과 같은 광고</option>
							   <option>성인광고</option>
							   <option>기타스팸성 광고</option>
						   </select>
						   <select style="height: 30px;">
							   <option>전체</option>
							   <option>이미테이션 상품</option>
							   <option>술,담배,금연보조제</option>
							   <option>미성년자 이용 불가 제품</option>
							   <option>몰래카메라,스파이캠</option>
							   <option>모든 의약품 및 처방이 필요한 한약</option>
							   <option>개인정보 및 계정거래</option>
							   <option>내사진 또는 저작권 이미지 도용</option>
							   <option>저작권법 위반 복사본</option>
							   <option>기타 불법거래</option>
						   </select>
						   <select style="height: 30px;">
							   <option>전체</option>
							   <option>거래 전 사기 의심</option>
							   <option>거래 후 사기 피해신고</option>
							   <option>사기피해 사이트 등록 및 조회자</option>
							   <option>기타</option>
						   </select>
						   <select style="height: 30px;">
							   <option>전체</option>
							   <option>상품 설명 부족</option>
							   <option>중복 게시글</option>
							   <option>카테고리 잘못 지정</option>
							   <option>판매가치가 없는 상품</option>
							   <option>판매 내용과 다른 내용으로 예약중</option>
							   <option>기타 사기의심</option>
						   </select>
						   <select style="height: 30px;">
							   <option>전체</option>
							   <option>광고 배너 이미지 부적합</option>
							   <option>광고 배너 스토어명 부적합</option>
							   <option>광고 배너 소개글 부적합</option>
						   </select>
						   <select style="height: 30px;">
							   <option>-</option>
						   </select>
					   </span>
					   <a href="#" class="btn01 ap_pop" style="width:70px;">적용</a>
					   <a href="#" class="btn01 op_ans" style="width:100px;">선택답변</a>
				   </li>
			   </ul>
			   <ul class="list_view clear">
				   <li class="on">
					   <table class="list">
						   <tr>
							   <th>
								<label class="cb li">
									 <input type="checkbox" class="sc_cb all" value="">
									 <span></span>
								</label>
							   </th>
							   <th>NO.</th>
							   <th>신고유형</th>
							   <th>신고상세유형</th>
							   <th>상품명</th>
							   <th class="img">신고누적수<img src="img/down02.png"></th>
							   <th>상품처리</th>
							   <th>회원구분</th>
							   <th>아이디(이메일)</th>
							   <th>첨부이미지</th>
							   <th>이의제기일</th>
							   <th>처리상태</th>
							   <th>답변자</th>
						   </tr>
						   <tr>
							   <td rowspan="2">
								<label class="cb li">
									 <input type="checkbox" class="sc_cb" value="">
									 <span></span>
								</label>
							   </td>
							   <td>11200121</td>
							   <td>비매너</td>
							   <td>성희롱</td>
							   <td class="a">아이폰 6S 최상급</td>
							   <td class="a">12</td>
							   <td>자동숨김</td>
							   <td>일반</td>
							   <td class="a">fu@ccc.com</td>
							   <td class="a color">Y</td>
							   <td class="line">
							   	YYYY-MM-DD<br>HH:MM:SS
							   </td>
							   <td class="a">답변완료</td>
							   <td>김보배(서비스기획팀)</td>
						   </tr>
						   <tr>
							   <td colspan="12" class="list_m">
								<div>
								   이의내용을 2줄까지 미리 표기합니다.<br>
								   이의내용을 2줄까지 미리 표기합니다.
								</div>
								<img src="img/pop_next.png">
							   </td>
						   </tr>
						   <tr>
							   <td rowspan="2">
								<label class="cb li">
									 <input type="checkbox" class="sc_cb" value="">
									 <span></span>
								</label>
							   </td>
							   <td>11200121</td>
							   <td>스팸성광고</td>
							   <td>카페,블로그 홍보</td>
							   <td class="a">아이폰 6S 최상급</td>
							   <td class="a">15</td>
							   <td>자동숨김</td>
							   <td>경고</td>
							   <td class="a">fu@ccc.com</td>
							   <td class="a color">Y</td>
							   <td class="line">
							   	YYYY-MM-DD<br>HH:MM:SS
							   </td>
							   <td class="a color">답변하기</td>
							   <td>-</td>
						   </tr>
						   <tr>
							   <td colspan="12" class="list_m on">
								<div>
								   이의내용을 전부 표기합니다.<br>
								   이의내용을 전부 표기합니다.<br>
								   이의내용을 전부 표기합니다.<br>
								   이의내용을 전부 표기합니다.<br>
								   이의내용을 전부 표기합니다.
								</div>
								<img src="img/pop_next.png">
							   </td>
						   </tr>
						   <tr>
							   <td rowspan="2">
								<label class="cb li">
									 <input type="checkbox" class="sc_cb" value="">
									 <span></span>
								</label>
							   </td>
							   <td>11200121</td>
							   <td>불법</td>
							   <td>저작권법 위반 복사본</td>
							   <td class="a">아이폰 6S 최상급</td>
							   <td class="a">3</td>
							   <td>관리자숨김</td>
							   <td>일반</td>
							   <td class="a">fu@ccc.com</td>
							   <td>N</td>
							   <td class="line">
							   	YYYY-MM-DD<br>HH:MM:SS
							   </td>
							   <td class="a color">답변하기</td>
							   <td>-</td>
						   </tr>
						   <tr>
							   <td colspan="12" class="list_m">
								<div>
								   이의내용을 2줄까지 미리 표기합니다.<br>
								   이의내용을 2줄까지 미리 표기합니다.
								</div>
								<img src="img/pop_next.png">
							   </td>
						   </tr>
					   </table>
				   </li>
				</ul>
			   <div class="btn_wrap clear">
				   <ul class="btn_left clear">
					   <li><img src="img/back02.png"></li>
					   <li><img src="img/back.png"></li>
				   </ul>
				   <ul class="btn clear">
					   <li class="on">1</li>
				   </ul>
				   <ul class="btn_right clear">
					   <li><img src="img/next.png"></li>
					   <li><img src="img/next02.png"></li>
				   </ul>
			   </div>
    	</div>
    </div>
    
<!--    footer연결-->
    <?php include "footer.php"; ?>
<!--    footer연결-->

</body>
</html>