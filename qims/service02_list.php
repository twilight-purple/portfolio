<!DOCTYPE html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
    <title>qdillion</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script src="js/jquery-ui.min.js"></script>
	<script src="js/int.js"></script>
    <script src="js/service.js"></script>
	<script>
//		snb바꾸기
		$(document).ready(function(){
			$(".snb_wrap .snb>li:nth-child(3)>.snb_sub").addClass("view");
			$(".snb_wrap .snb>li:nth-child(3)>ul>li:nth-child(1)").addClass("on");
			$(".snb_wrap .snb>li:nth-child(3)>span").addClass("on");
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
   	   <h1>스토어랭킹 관리</h1>
	   <ul class="title clear">
			<li></li>
			<li>
				스토어랭킹 &nbsp;<span>전체 스토어의 실시간 랭킹을 조회할 수 있습니다.</span>
			</li>
		</ul>
	   <div class="sv02">
		   <div class="sc_view">
		   <div class="sc_wrap">
		   <table class="sc">
		   		<colgroup>
					<col />
					<col width="20%"/>
					<col />
					<col />
					<col />
					<col />
					<col />
					<col />
				</colgroup>
			   <tr>
				   <th>가입일</th>
				   <td class="cd_img clear">
					   <input type="text" value="" class="sc_cd01">
					   <input type="button" value="" class="datepicker n01">
					   ~
					   <input type="text" value="" class="sc_cd02">
					   <input type="button" value="" class="datepicker n02">
				   </td>
				   <th>회원등급</th>
				   <td>
					   <select>
						   <option>전체</option>
						   <option>ORANGE</option>
						   <option>SILVER</option>
						   <option>GOLD</option>
						   <option>VIP</option>
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
				   <th>경고여부</th>
				   <td>
					   <select>
						   <option>전체</option>
						   <option>Y</option>
						   <option>N</option>
					   </select>
				   </td>
				   <th>관심여부</th>
				   <td>
					   <select>
						   <option>전체</option>
						   <option>Y</option>
						   <option>N</option>
					   </select>
				   </td>
			   </tr>
		   </table>
		   <table class="sc v02">
			   	<tr>
				   <th>아이디</th>
				   <td><input type="text" value=""></td>
				   <th>닉네임</th>
				   <td>
				   		<input type="text" value="">
				   		<label class="cb">
						 <input type="checkbox" class="sc_cb" value="">
						 <span></span>
						 <p>이전닉네임 포함</p>
					   </label>
				   </td>
				   <th>휴대폰번호</th>
				   <td><input type="text" value=""></td>
				   <th>점수</th>
				   <td class="nb">
				   	<input type="number" value="">
					   ~
					   <input type="number" value="">
					   <input type="button" value="검색">
				   </td>
			   </tr>
		   </table>
		   <table class="sc v02">
				<tr>
				   <th>생년월일</th>
				   <td class="cd_img clear">
					   <input type="text" value="" class="sc_cd03">
					   <input type="button" value="" class="datepicker n03">
					   ~
					   <input type="text" value="" class="sc_cd04">
					   <input type="button" value="" class="datepicker n04">
				   </td>
				   <th>성별</th>
				   <td>
					   <select>
						   <option>전체</option>
						   <option>남성</option>
						   <option>여성</option>
					   </select>
				   </td>
				   <th>신고수</th>
				   <td><input type="number" class="sc_nb" value=""> 회 이상</td>
				   <th>경고수</th>
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
			   <li>총 11,200,121건,</li>
			   <li class="clear'">
				   <ul class="list_nm">
					   <li class="on">1</li>
				   </ul>
				   <p>/ 112,001 페이지</p>
			   </li>
			   <li><span>(2018-07-01 20:56:42 기준)</span></li>
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
				   <a href="#" class="btn01" style="width:100px;">포인트 지급</a>
				   <a href="#" class="btn01" style="width:130px;">안드로이드 PUSH</a>
				   <a href="#" class="btn01" style="width:90px;">iOS PUSH</a>
				   <a href="#" class="btn01" style="width:90px;">SMS 전송</a>
				   <a href="#" class="btn01" style="width:100px;">E-mail 전송</a>
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
						   <th class="img">회원고유번호<img src="img/down02.png"></th>
						   <th>아이디(이메일)</th>
						   <th>닉네임</th>
						   <th>등급</th>
						   <th>휴대폰 번호</th>
						   <th>생년월일</th>
						   <th>성별</th>
						   <th>신고</th>
						   <th>경고</th>
						   <th>관심</th>
						   <th class="img">점수<img src="img/down02.png"></th>
						   <th>가입일</th>
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
						   <td>fusidin@naver.com</td>
						   <td>한버로티</td>
						   <td>SILVER</td>
						   <td>010-2576-8350</td>
						   <td>1991-02-07</td>
						   <td>남</td>
						   <td class="a v02">-</td>
						   <td class="a v02">-</td>
						   <td>N</td>
						   <td>168</td>
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
						   <td>fusidin@naver.com</td>
						   <td>한버로티</td>
						   <td>SILVER</td>
						   <td>010-2576-8350</td>
						   <td>1991-02-07</td>
						   <td>여</td>
						   <td class="a color">5</td>
						   <td class="a color">5</td>
						   <td>Y</td>
						   <td>200</td>
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
						   <td>fusidin@naver.com</td>
						   <td>한버로티</td>
						   <td>SILVER</td>
						   <td>010-2576-8350</td>
						   <td>1991-02-07</td>
						   <td>여</td>
						   <td class="a">1</td>
						   <td class="a">1</td>
						   <td>N</td>
						   <td>200</td>
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