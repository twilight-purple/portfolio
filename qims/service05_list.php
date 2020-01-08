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
			$(".snb_wrap .snb>li:nth-child(5)>.snb_sub").addClass("view");
			$(".snb_wrap .snb>li:nth-child(5)>ul>li:nth-child(2)").addClass("on");
			$(".snb_wrap .snb>li:nth-child(5)>span").addClass("on");
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
   	   <h1>랜드마크 관리</h1>
	   <ul class="title clear">
			<li></li>
			<li>랜드마크 등록요청 &nbsp;<span>회원이 신청한 랜드마크 리스트 확인 및 랜드마크를 등록할 수 있습니다.</span></li>
		</ul>
	   <div class="sv05">
		<table class="sc">
			   <tr>
				   <th>등록일</th>
				   <td class="cd_img clear">
					   <input type="text" value="" class="sc_cd01">
					   <input type="button" value="" class="datepicker n01">
					   ~
					   <input type="text" value="" class="sc_cd02">
					   <input type="button" value="" class="datepicker n02">
				   </td>
				   <th>시/도</th>
				   <td>
					   <select>
						   <option>전체</option>
					   </select>
				   </td>
				   <th>시/군/구</th>
				   <td>
					   <select>
						   <option>전체</option>
					   </select>
				   </td>
				   <th>읍/면/동</th>
				   <td>
					   <select>
						   <option>전체</option>
					   </select>
				   </td>
				   <th>등록상태</th>
				   <td>
					   <select>
						   <option>전체</option>
						   <option>등록전</option>
						   <option>등록완료</option>
					   </select>
				   </td>
				   <th>등록요청 랜드마크</th>
				   <td>
					  <input type="search" name="sc_txt" value="">
					  <input type="button" name="sc_btn" value="검색">
				   </td>
			   </tr>
		   </table>
			<ul class="list_top clear">
			   <li>전체 121건,</li>
			   <li class="clear'">
				   <ul class="list_nm">
					   <li class="on">1</li>
				   </ul>
				   <p>/ 3 페이지</p>
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
				   <a href="#" class="btn01 dp_pop" style="width:80px;">적용</a>
				   <a href="#" class="btn01" style="width:100px;">엑셀 업로드</a>
				   <a href="#" class="btn01" style="width:110px;">엑셀 다운로드</a>
				   <a href="#" class="btn01" style="width:90px;">신규등록</a>
			   </li>
		   </ul>
		   <ul class="list_view clear">
			   <li class="on">
				   <table class="list">
					   <tr>
						   <th>NO.</th>
						   <th>등록요청 랜드마크</th>
						   <th class="img">시/도<img src="img/down02.png"></th>
						   <th class="img">시/군/구<img src="img/down02.png"></th>
						   <th class="img">읍/면/동<img src="img/down02.png"></th>
						   <th class="img">누적 신청 횟수<img src="img/down02.png"></th>
						   <th style="width:30%">상세주소</th>
						   <th>주소찾기</th>
						   <th class="img">등록상태<img src="img/down02.png"></th>
						   <th class="img">등록일<img src="img/down02.png"></th>
					   </tr>
					   <tr>
						   <td>121</td>
						   <td><input type="text" value=""></td>
						   <td>
							   <select>
								   <option>전체</option>
							   </select>
						   </td>
						   <td>
							   <select>
								   <option>전체</option>
							   </select>
						   </td>
						   <td>
							   <select>
								   <option>전체</option>
							   </select>
						   </td>
						   <td>-</td>
						   <td><input type="text" value=""></td>
						   <td class="a color">주소찾기</td>
						   <td class="a color">등록전</td>
						   <td>-</td>
					   </tr>
					   <tr>
						   <td>120</td>
						   <td>모즈아울렛</td>
						   <td>서울시</td>
						   <td>송파구</td>
						   <td>문정동</td>
						   <td>30,000</td>
						   <td><input type="text" value=""></td>
						   <td class="a color">주소찾기</td>
						   <td class="a color">등록전</td>
						   <td>YYYY-MM-DD<br>HH:MM:SS</td>
					   </tr>
					   <tr>
						   <td>119</td>
						   <td>모즈아울렛</td>
						   <td>서울시</td>
						   <td>송파구</td>
						   <td>문정동</td>
						   <td>30,000</td>
						   <td><input type="text" value=""></td>
						   <td class="a color">주소찾기</td>
						   <td>등록완료</td>
						   <td>YYYY-MM-DD<br>HH:MM:SS</td>
					   </tr>
					   <tr>
						   <td>118</td>
						   <td>모즈아울렛</td>
						   <td>서울시</td>
						   <td>송파구</td>
						   <td>문정동</td>
						   <td>30,000</td>
						   <td>112-8</td>
						   <td>-</td>
						   <td class="a color">등록전</td>
						   <td>YYYY-MM-DD<br>HH:MM:SS</td>
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