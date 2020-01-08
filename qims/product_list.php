<!DOCTYPE html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
    <title>qdillion</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script src="js/jquery-ui.min.js"></script>
	<script src="js/int.js"></script>
    <script src="js/product.js"></script>
</head>
<body>
   
<!--   gnb/snb연결-->
  	<?php include "gnb.php"; ?>
    <?php include "snb.php"; ?>
<!--   gnb/snb연결-->

  
   <div id="wrap">
   	   <h1>상품통합 관리</h1>
	   <ul class="title clear">
			<li></li>
			<li>
				상품통합 관리 &nbsp;<span>상품의 모든 정보를 확인하고 관리할 수 있습니다.</span>
			</li>
		</ul>
	   <div class="pd01">
		   <div class="sc_view">
		   <div class="sc_wrap">
		   <table class="sc">
			   <tr>
				   <th>등록일</th>
				   <td class="cd_img clear" colspan="3" style="width:20%;">
					   <input type="text" value="" class="sc_cd01">
					   <input type="button" value="" class="datepicker n01">
					   ~
					   <input type="text" value="" class="sc_cd02">
					   <input type="button" value="" class="datepicker n02">
				   </td>
				   <th>상품구분</th>
				   <td>
					   <select>
						   <option>전체</option>
						   <option>판매중</option>
						   <option>예약중</option>
						   <option>판매보류</option>
						   <option>판매완료</option>
						   <option>상품삭제</option>
						   <option>관리자숨김</option>
						   <option>신고숨김</option>
					   </select>
				   </td>
				   <th>상품상태</th>
				   <td>
					   <select>
						   <option>전체</option>
						   <option>미개봉</option>
						   <option>거의새것</option>
						   <option>중고</option>
					   </select>
				   </td>
				   <th>첨부이미지</th>
				   <td>
					   <select>
						   <option>전체</option>
						   <option>Y</option>
						   <option>N</option>
					   </select>
				   </td>
				   <th>신고여부</th>
				   <td>
					   <select>
						   <option>전체</option>
						   <option>Y</option>
						   <option>N</option>
					   </select>
				   </td>
				   <th>댓글여부</th>
				   <td>
					   <select>
						   <option>전체</option>
						   <option>Y</option>
						   <option>N</option>
					   </select>
				   </td>
			   </tr>
			   	<tr>
				   <th>후기여부</th>
				   <td>
					   <select style="width:70px;">
						   <option>전체</option>
						   <option>Y</option>
						   <option>N</option>
					   </select>
				   </td>
				   <th>위탁여부</th>
				   <td>
					   <select style="width:70px;">
						   <option>전체</option>
						   <option>Y</option>
						   <option>N</option>
					   </select>
				   </td>
				   <th>상품명</th>
				   <td><input type="text" value="" style="width:70%"></td>
				   <th>상품내용</th>
				   <td><input type="text" value="" style="width:70%"></td>
				   <th>아이디</th>
				   <td><input type="text" value="" style="width:70%"></td>
				   <th>닉네임</th>
				   <td colspan="3">
				   		<input type="text" value="">
				   		<label class="cb">
						 <input type="checkbox" class="sc_cb" value="">
						 <span></span>
						 <p>이전닉네임 포함</p>
					   </label>
					   <input type="button" value="검색">
				   </td>
			   </tr>
		   </table>
		   <table class="sc v02">
		   		<colgroup>
					<col />
					<col width="15%"/>
					<col />
					<col width="15%"/>
					<col />
					<col width="15%"/>
					<col width="8%"/>
					<col />
				</colgroup>
				<tr>
				   <th>가격</th>
				   <td class="nb">
				   	<input type="number" value="">
					   ~
					   <input type="number" value="">
				   </td>
				   <th>신고수</th>
				   <td><input type="number" class="sc_nb" value=""> 회 이상</td>
				   <th>댓글수</th>
					<td><input type="number" class="sc_nb" value=""> 개 이상</td>
				   <th>업데이트 수</th>
				   <td><input type="number" class="sc_nb" value=""> 회 이상
				   <input type="button" value="상세검색"></td>
			   </tr>
		   </table>
		   </div>
		   	   <div class="scbox">
				   <ul class="scbox_line clear">
					   <li>|</li>
					   <li>|</li>
					   <li>|</li>
					   <li>|</li>
					   <li>|</li>
					   <li>|</li>
					   <li>|</li>
				   </ul>
			   </div>
		   </div>
		   <ul class="list_top clear">
			   <li>전체 11,200,121건,</li>
			   <li class="clear'">
				   <ul class="list_nm">
					   <li class="on">1</li>
				   </ul>
				   <p>/ 112,001 페이지</p>
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
				   <a href="#" class="btn02" style="width:90px;">일괄숨김해제</a>
				   <a href="#" class="btn03 clihide" style="width:90px;">일괄숨김적용</a>
				   <a href="#" class="btn01" style="width:110px;">엑셀 다운로드</a>
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
						   <th class="img">상품고유번호<img src="img/down02.png"></th>
						   <th>상품구분</th>
						   <th>상품명</th>
						   <th>상품상태</th>
						   <th>첨부이미지</th>
						   <th>아이디(이메일)</th>
						   <th>닉네임</th>
						   <th class="img">가격<img src="img/down02.png"></th>
						   <th class="img">신고<img src="img/down02.png"></th>
						   <th class="img">댓글<img src="img/down02.png"></th>
						   <th>후기</th>
						   <th>위탁</th>
						   <th class="img">업데이트<img src="img/down02.png"></th>
						   <th class="img">업데이트일<img src="img/down02.png"></th>
						   <th class="img">등록일<img src="img/down02.png"></th>
					   </tr>
					   <tr>
						   <td>
							<label class="cb li">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
							</label>
						   </td>
						   <td>11200121</td>
						   <td>JN17122000001</td>
						   <td>판매중</td>
						   <td>나이키240팝니다</td>
						   <td>미개봉</td>
						   <td class="a color">Y</td>
						   <td class="a">fusidin@naver.com</td>
						   <td class="a">한버로티</td>
						   <td>25,000</td>
						   <td class="a">1</td>
						   <td class="a">5</td>
						   <td>N</td>
						   <td>Y</td>
						   <td>3</td>
						   <td class="line">YYYY-MM-DD<br>HH:MM:SS</td>
						   <td class="line">YYYY-MM-DD<br>HH:MM:SS</td>
					   </tr>
					   <tr>
						   <td>
							<label class="cb li">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
							</label>
						   </td>
						   <td>11200120</td>
						   <td>JN17122000001</td>
						   <td>예약중</td>
						   <td>나이키240팝니다</td>
						   <td>미개봉</td>
						   <td class="a v02">N</td>
						   <td class="a">fusidin@naver.com</td>
						   <td class="a">한버로티</td>
						   <td>25,000</td>
						   <td class="a v02">-</td>
						   <td class="a v02">-</td>
						   <td>N</td>
						   <td>Y</td>
						   <td>-</td>
						   <td>-</td>
						   <td class="line">YYYY-MM-DD<br>HH:MM:SS</td>
					   </tr>
					   <tr>
						   <td>
							<label class="cb li">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
							</label>
						   </td>
						   <td>11200119</td>
						   <td>JN17122000001</td>
						   <td>판매보류</td>
						   <td>나이키240팝니다</td>
						   <td>거의새것</td>
						   <td class="a color">Y</td>
						   <td class="a">fusidin@naver.com</td>
						   <td class="a">한버로티</td>
						   <td>25,000</td>
						   <td class="a color">5</td>
						   <td class="a v02">-</td>
						   <td class="ud">Y</td>
						   <td>Y</td>
						   <td>1</td>
						   <td class="line">YYYY-MM-DD<br>HH:MM:SS</td>
						   <td class="line">YYYY-MM-DD<br>HH:MM:SS</td>
					   </tr>
					   <tr>
						   <td>
							<label class="cb li">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
							</label>
						   </td>
						   <td>11200121</td>
						   <td>JN17122000001</td>
						   <td>판매중</td>
						   <td>나이키240팝니다</td>
						   <td>미개봉</td>
						   <td class="a color">Y</td>
						   <td class="a">fusidin@naver.com</td>
						   <td class="a">한버로티</td>
						   <td>25,000</td>
						   <td class="a">1</td>
						   <td class="a">5</td>
						   <td class="ud">Y</td>
						   <td>Y</td>
						   <td>3</td>
						   <td class="line">YYYY-MM-DD<br>HH:MM:SS</td>
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
	   </div>
    </div>
    
<!--    footer연결-->
    <?php include "footer.php"; ?>
<!--    footer연결-->

</body>
</html>