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
			$(".snb_wrap .snb>li:nth-child(2)>ul>li:nth-child(5)").addClass("on");
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
			<li>자동답변문의 &nbsp;<span>자동으로 답변된 문의를 확인할 수 있습니다.</span></li>
		    <li style="float: right;"><input type="button" value="화면 가이드" style="width:120px;" class="btn03 op_wgd"></li>
		</ul>
	   <div class="op v05">
<!---------------------------------검색영역-->
		   <table class="sc">
			   <tr>
				   <th>문의일</th>
				   <td class="cd_img clear" style="width:20%;">
					   <input type="text" name="sc_txt" value="" class="sc_cd01">
					   <input type="button" name="sc_btn" value="" class="datepicker n01">
					   ~
					   <input type="text" name="sc_txt" value="" class="sc_cd02">
					   <input type="button" name="sc_btn" value="" class="datepicker n02">
				   </td>
				   <th>문의구분</th>
				   <td style="width:10%;">
					   <select id="qu_sl">
						   <option>전체</option>
						   <option>앱</option>
						   <option>카페</option>
					   </select>
				   </td>
				   <th>문의유형</th>
				   <td class="qu" style="width:155px;">
					   <ul class="on fst">
						   <li>전체</li>
					   </ul>
					   <ul>
						   <li>전체</li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb all04" value="">
								 <span></span>
								 <p>전체</p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>회원</p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>스토어</p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>서비스</p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>주문/결제</p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>취소/반품</p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>배송</p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>포인트</p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>기타</p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>비밀의공구</p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>이벤트/광고문의</p>
							   </label>
						   </li>
						   <li>
							   <div class="btn03">선택완료</div>
						   </li>
					   </ul>
					   <ul>
						   <li>전체</li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb all04" value="">
								 <span></span>
								 <p>전체</p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>등급관련</p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>이용제한</p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>운영정책위반</p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>사기신고</p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>이벤트/광고문의</p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>기타</p>
							   </label>
						   </li>
						   <li>
							   <div class="btn03">선택완료</div>
						   </li>
					   </ul>
				   </td>
				   <th>첨부이미지</th>
				   <td style="width:10%;">
					   <select>
						   <option>전체</option>
						   <option>Y</option>
						   <option>N</option>
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
			   </tr>
		   </table>
		   <table class="sc v02">
			   <tr>
				   <th>제목+내용</th>
				   <td style="width:25%;">
				   	<input type="text" value="" style="width:300px;">
				   </td>
				   <th>아이디</th>
				   <td>
				   	<input type="text" value="">
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
					   <a href="#" class="btn01 op_auto" style="width:130px;">자동화 답변 관리</a>
				   </li>
			   </ul>
			   <ul class="list_view clear">
				   <li class="on">
					   <table class="list">
						   <tr>
							   <th>NO.</th>
							   <th>문의구분</th>
							   <th>문의유형</th>
							   <th>제목</th>
							   <th>첨부이미지</th>
							   <th>회원구분</th>
							   <th>아이디(이메일)</th>
							   <th>문의일</th>
						   </tr>
						   <tr>
							   <td>11200121</td>
							   <td>앱</td>
							   <td>회원</td>
							   <td>오늘 팔면 돈이 바로 들어오나요?</td>
							   <td class="a v02">N</td>
							   <td>일반</td>
							   <td class="a">fusidin@naver.com</td>
							   <td class="line">YYYY-MM-DD<br>HH:MM:SS</td>
						   </tr>
						   <tr>
							   <td>11200120</td>
							   <td>카페</td>
							   <td>스토어</td>
							   <td>오늘 팔면 돈이 바로 들어오나요?</td>
							   <td class="a color">Y</td>
							   <td>일반</td>
							   <td class="a">fusidin@naver.com</td>
							   <td class="line">YYYY-MM-DD<br>HH:MM:SS</td>
						   </tr>
						   <tr>
							   <td>11200119</td>
							   <td>앱</td>
							   <td>서비스</td>
							   <td>자꾸 앱이 꺼져요</td>
							   <td class="a color">Y</td>
							   <td>관심</td>
							   <td class="a">fusidin@naver.com</td>
							   <td class="line">YYYY-MM-DD<br>HH:MM:SS</td>
						   </tr>
						   <tr>
							   <td>11200118</td>
							   <td>앱</td>
							   <td>주문/결제</td>
							   <td>결제취소는 어떻게 함?</td>
							   <td class="a v02">N</td>
							   <td>정지</td>
							   <td class="a">fusidin@naver.com</td>
							   <td class="line">YYYY-MM-DD<br>HH:MM:SS</td>
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
		   <div class="auto_wp">
			   <div class="top">자동답변내역 미리보기</div>
			   <div class="pw_div">
				   <h4>조합유형</h4>
				   <table class="tb01">
					   <tr>
						   <th>카테고리</th>
						   <td>사기신고</td>
					   </tr>
					   <tr>
						   <th>키워드</th>
						   <td>
							   <ul>
								   <li><span class="cc">1</span> 사기</li>
								   <li><span class="cc">2</span> 사이버수사대</li>
								   <li><span class="cc">3</span> 신고</li>
							   </ul>
						   </td>
					   </tr>
				   </table>
				   <h4>문의내역</h4>
				   <table class="tb01">
					   <tr>
						   <th>제목</th>
						   <td>오늘 팔면 돈이 바로 들어오나요?</td>
					   </tr>
					   <tr>
						   <th>내용</th>
						   <td>
						   	문의내용을 전부 표기합니다.<br>
						   	문의내용을 전부 표기합니다.<br>
						   	문의내용을 전부 표기합니다.
						   </td>
					   </tr>
				   </table>
				   <h4>자동답변내역</h4>
				   <table class="tb01">
					   <tr>
						   <th>내용</th>
						   <td>
						   	답변내용을 전부 표기합니다.<br>
						   	답변내용을 전부 표기합니다.<br>
						   	답변내용을 전부 표기합니다.
						   </td>
					   </tr>
				   </table>
			   </div>
		   </div>
    	</div>
    </div>
    
<!--    footer연결-->
    <?php include "footer.php"; ?>
<!--    footer연결-->

</body>
</html>