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
			$(".snb_wrap .snb>li:nth-child(2)>ul>li:nth-child(3)").addClass("on");
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
			<li>불편사항 및 개선사항 &nbsp;<span>회원들의 불편사항과 개선사항을 확인할 수 있습니다.</span></li>
		    <li style="float: right;"><input type="button" value="화면 가이드" style="width:120px;" class="btn03 op_wgd"></li>
		</ul>
	   <div class="op v03">
<!---------------------------------검색영역-->
		   <table class="sc">
			   <tr>
				   <th>등록일</th>
				   <td class="cd_img clear" style="width:20%;">
					   <input type="text" name="sc_txt" value="" class="sc_cd01">
					   <input type="button" name="sc_btn" value="" class="datepicker n01">
					   ~
					   <input type="text" name="sc_txt" value="" class="sc_cd02">
					   <input type="button" name="sc_btn" value="" class="datepicker n02">
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
				   <td style="width:10%;">
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
				   <th>처리상태</th>
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
				   <th>제목+내용</th>
				   <td style="width:25%;">
				   	<input type="text" value="" style="width:300px;">
				   </td>
				   <th>아이디</th>
				   <td style="width:15%;">
				   	<input type="text" value="">
				   </td>
				   <th>처리자</th>
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
						<select style="width:110px;">
						   <option>처리상태변경</option>
						   <option>적용</option>
						   <option>미적용</option>
					   </select>
					   <a href="#" class="btn01 ap_pop" style="width:70px;">적용</a>
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
							   <th>제목</th>
							   <th>첨부이미지</th>
							   <th>회원구분</th>
							   <th>아이디(이메일)</th>
							   <th>등록일</th>
							   <th>처리상태</th>
							   <th>처리자</th>
						   </tr>
						   <tr>
							   <td rowspan="2">
								<label class="cb li">
									 <input type="checkbox" class="sc_cb" value="">
									 <span></span>
								</label>
							   </td>
							   <td>11200121</td>
							   <td>제 생각을 읽어서 바로 등록 해주는건 없나요?</td>
							   <td>N</td>
							   <td>일반</td>
							   <td class="a">fusidin@naver.com</td>
							   <td class="line">YYYY-MM-DD<br>HH:MM:SS</td>
							   <td class="a v03">
								   <ul>
									   <li class="a on">적용</li>
									   <li class="a color">미적용</li>
								   </ul>
							   </td>
							   <td>김보배(서비스기획팀)</td>
						   </tr>
						   <tr>
							   <td colspan="10" class="list_m">
								<div>
								   내용을 2줄까지 미리 표기합니다.<br>
								   내용을 2줄까지 미리 표기합니다.
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
							   <td>제 생각을 읽어서 바로 등록 해주는건 없나요?</td>
							   <td class="a color">Y</td>
							   <td>일반</td>
							   <td class="a">fusidin@naver.com</td>
							   <td class="line">YYYY-MM-DD<br>HH:MM:SS</td>
							   <td class="a v03">
								   <ul>
									   <li class="a">적용</li>
									   <li class="a color on">미적용</li>
								   </ul>
							   </td>
							   <td>-</td>
						   </tr>
						   <tr>
							   <td colspan="10" class="list_m on">
								<div>
								   내용을 전부 표기합니다.<br>
								   내용을 전부 표기합니다.<br>
								   내용을 전부 표기합니다.<br>
								   내용을 전부 표기합니다.<br>
								   내용을 전부 표기합니다.
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
							   <td>제 생각을 읽어서 바로 등록 해주는건 없나요?</td>
							   <td class="a color">Y</td>
							   <td>관심</td>
							   <td class="a">fusidin@naver.com</td>
							   <td class="line">YYYY-MM-DD<br>HH:MM:SS</td>
							   <td class="a v03">
								   <ul>
									   <li class="a">적용</li>
									   <li class="a color on">미적용</li>
								   </ul>
							   </td>
							   <td>-</td>
						   </tr>
						   <tr>
							   <td colspan="10" class="list_m">
								<div>
								   내용을 2줄까지 미리 표기합니다.<br>
								   내용을 2줄까지 미리 표기합니다.
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