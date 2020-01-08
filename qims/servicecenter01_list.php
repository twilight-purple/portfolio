<!DOCTYPE html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
    <title>qdillion</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/int.js"></script>
    <script src="js/servicecenter.js"></script>
</head>
<body>
   
<!--   gnb/snb연결-->
  	<?php include "gnb.php"; ?>
    <?php include "snb.php"; ?>
<!--   gnb/snb연결-->

  
   <div id="wrap">
   	   <h1>FAQ</h1>
	   <ul class="title clear">
			<li></li>
			<li>FAQ &nbsp;<span>FAQ등록 및 이미 등록된 FAQ를 관리할 수 있습니다.</span></li>
		</ul>
	   <div class="sc01">
		   <table class="sc">
			   <tr>
				   <th>등록일</th>
				   <td class="cd_img clear">
					   <input type="text" name="sc_txt" value="" class="sc_cd01">
					   <input type="button" name="sc_btn" value="" class="datepicker n01">
					   ~
					   <input type="text" name="sc_txt" value="" class="sc_cd02">
					   <input type="button" name="sc_btn" value="" class="datepicker n02">
				   </td>
				   <th>카테고리</th>
				   <td>
					   <select style="width:120px;">
						   <option>전체</option>
						   <option>TOP10</option>
						   <option>회원</option>
						   <option>스토어</option>
						   <option>서비스</option>
						   <option>주문/결제</option>
						   <option>취소/반품</option>
						   <option>배송</option>
						   <option>포인트</option>
						   <option>카페</option>
						   <option>비밀의 공구</option>
						   <option>이벤트/광고문의</option>
						   <option>기타</option>
					   </select>
				   </td>
				   <th>사용여부</th>
				   <td>
					   <select>
						   <option>전체</option>
						   <option>Y</option>
						   <option>N</option>
					   </select>
				   </td>
				   <th>통합검색</th>
				   <td>
					   <select style="width:120px;">
						   <option>전체</option>
						   <option>전체>질문+답변</option>
						   <option>질문</option>
						   <option>답변</option>
					   </select>
					   <input type="text" value="" style="width:250px;">
					   <input type="button" value="검색">
				   </td>
			   </tr>
		   </table>
		   <ul class="list_top clear">
			   <li>총 121건,</li>
			   <li class="clear">
				   <ul class="list_nm">
					   <li class="on">1</li>
				   </ul>
				   <p>/ 2 페이지</p>
			   </li>
			   <li><span>(YYYY-MM-DD ~ YYYY-MM-DD)</span></li>
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
				   <a href="#" class="btn01" style="width:80px;">순서적용</a>
				   <a href="#" class="btn01" style="width:130px;">TOP10적용/해제</a>
				   <a href="#" class="btn01" style="width:110px;">엑셀 다운로드</a>
				   <a href="#" class="btn01" style="width:80px;">등록</a>
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
						   <th>카테고리</th>
						   <th>질문</th>
						   <th>답변</th>
						   <th class="img">조회수<img src="img/down02.png"></th>
						   <th class="img">사용여부<img src="img/down02.png"></th>
						   <th class="img">등록일<img src="img/down02.png"></th>
					   </tr>
					   <tr class="show">
						   <td>
							<label class="cb li">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
							</label>
						   </td>
						   <td>121</td>
						   <td>회원</td>
						   <td>전화번호가 만료되었어요.</td>
						   <td>전화번호가 만료되었을때는 이렇게 하면 됩니다...</td>
						   <td>1,255</td>
						   <td>Y</td>
						   <td>2016-12-25 00:23</td>
					   </tr>
					   <tr class="show">
						   <td>
							<label class="cb li">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
							</label>
						   </td>
						   <td>120</td>
						   <td>스토어</td>
						   <td>전문 스토어 신청은 어떻게 하나요?</td>
						   <td>전문 스토어 신청은 이렇게 하면 됩니다...</td>
						   <td>1,255</td>
						   <td>Y</td>
						   <td>2016-12-25 00:23</td>
					   </tr>
					   <tr class="show">
						   <td>
							<label class="cb li">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
							</label>
						   </td>
						   <td>119</td>
						   <td>스토어</td>
						   <td>전문 스토어 신청은 어떻게 하나요?</td>
						   <td>전문 스토어 신청은 이렇게 하면 됩니다...</td>
						   <td>1,255</td>
						   <td>Y</td>
						   <td>2016-12-25 00:23</td>
					   </tr>
					   <tr class="show">
						   <td>
							<label class="cb li">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
							</label>
						   </td>
						   <td>118</td>
						   <td>서비스</td>
						   <td>상품 등록은 어떻게 하나요?</td>
						   <td>상품등록은 하단에 위치한 버튼을 이용하시면됩니다..</td>
						   <td>1,255</td>
						   <td>Y</td>
						   <td>2016-12-25 00:23</td>
					   </tr>
					   <tr>
						   <td>
							<label class="cb li">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
							</label>
						   </td>
						   <td>117</td>
						   <td>주문/결제</td>
						   <td>안전거래 취소는 어떻게 하나요?</td>
						   <td>안전거래 취소는 이렇게하면 됩니다...</td>
						   <td>1,255</td>
						   <td>Y</td>
						   <td>2016-12-25 00:23</td>
					   </tr>
					   <tr class="hide">
						   <td>
							<label class="cb li">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
							</label>
						   </td>
						   <td>116</td>
						   <td>취소/반품</td>
						   <td>카드취소 어떻게 하나요?</td>
						   <td>카드취소는 버튼클릭하면 됩니다 승인 취소는....</td>
						   <td>1,255</td>
						   <td>N</td>
						   <td>2016-12-25 00:23</td>
					   </tr>
					   <tr class="hide">
						   <td>
							<label class="cb li">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
							</label>
						   </td>
						   <td>115</td>
						   <td>취소/반품</td>
						   <td>카드취소 어떻게 하나요?</td>
						   <td>카드취소는 버튼클릭하면 됩니다 승인 취소는....</td>
						   <td>1,255</td>
						   <td>N</td>
						   <td>2016-12-25 00:23</td>
					   </tr>
					   <tr>
						   <td>
							<label class="cb li">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
							</label>
						   </td>
						   <td>114</td>
						   <td>주문/결제</td>
						   <td>안전거래 취소는 어떻게 하나요?</td>
						   <td>안전거래 취소는 이렇게하면 됩니다...</td>
						   <td>1,255</td>
						   <td>Y</td>
						   <td>2016-12-25 00:23</td>
					   </tr>
					   <tr>
						   <td>
							<label class="cb li">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
							</label>
						   </td>
						   <td>113</td>
						   <td>주문/결제</td>
						   <td>안전거래 취소는 어떻게 하나요?</td>
						   <td>안전거래 취소는 이렇게하면 됩니다...</td>
						   <td>1,255</td>
						   <td>Y</td>
						   <td>2016-12-25 00:23</td>
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