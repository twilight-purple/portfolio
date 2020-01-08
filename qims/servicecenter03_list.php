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
   	   <h1>이용약관</h1>
	   <ul class="title clear">
			<li></li>
			<li>이용약관 관리 &nbsp;<span>중고나라 이용약관, 위치정보 이용약관, 전자금융거래, 개인정보 취급방침을 등록 및 조회할 수 있습니다.</span></li>
		</ul>
	   <div class="sc03">
		   <table class="sc">
			   <tr>
				   <th>약관타입</th>
				   <td style="width:15%;">
					   <select style="width:160px; background-position: 140px;">
						   <option>전체</option>
					   </select>
				   </td>
				   <th>버전</th>
				   <td>
					   <input type="text" value="" style="width:300px;">
					   <input type="button" value="검색">
				   </td>
			   </tr>
		   </table>
		   <ul class="list_top clear">
			   <li>총 121건,</li>
			   <li class="clear'">
				   <ul class="list_nm">
					   <li class="on">1</li>
				   </ul>
				   <p>/ 7 페이지</p>
			   </li>
			   <li><span>(YYYY-MM-DD ~ YYYY-MM-DD)</span></li>
			   <li>
				   <select>
					   <option>20개씩</option>
					   <option>40개씩</option>
					   <option>60개씩</option>
					   <option>80개씩</option>
					   <option>100개씩</option>
				   </select>
			   </li>
			   <li class="list_topbtn clear">
				   <a href="#" class="btn01" style="width:80px;">등록</a>
			   </li>
		   </ul>
		   <ul class="list_view clear">
			   <li class="on">
				   <table class="list">
					   <tr>
						   <th>NO.</th>
						   <th class="img">약관타입<img src="img/down02.png"></th>
						   <th>버전</th>
						   <th class="img">적용일<img src="img/down02.png"></th>
						   <th class="img">노출여부<img src="img/down02.png"></th>
						   <th>관리자 수정이력</th>
						   <th class="img">등록일<img src="img/down02.png"></th>
					   </tr>
					   <tr>
						   <td>121</td>
						   <td>중고나라 이용약관</td>
						   <td class="a">V5.1</td>
						   <td>2017-12-31</td>
						   <td>Y</td>
						   <td class="a">Y</td>
						   <td>2017-12-19 00:22</td>
					   </tr>
					   <tr>
						   <td>120</td>
						   <td>전자금융거래</td>
						   <td class="a">V4.1</td>
						   <td>2017-12-31</td>
						   <td>Y</td>
						   <td class="a">Y</td>
						   <td>2017-12-19 00:22</td>
					   </tr>
					   <tr>
						   <td>119</td>
						   <td>위치정보 이용약관</td>
						   <td class="a">V3.2</td>
						   <td>2017-12-31</td>
						   <td>Y</td>
						   <td class="a">Y</td>
						   <td>2017-12-19 00:22</td>
					   </tr>
					   <tr>
						   <td>118</td>
						   <td>개인정보 취급방침</td>
						   <td class="a">V3.2</td>
						   <td>2017-12-31</td>
						   <td>Y</td>
						   <td class="a">Y</td>
						   <td>2017-12-19 00:22</td>
					   </tr>
					   <tr>
						   <td>117</td>
						   <td>개인정보 취급방침</td>
						   <td class="a">V3.1</td>
						   <td>2017-12-31</td>
						   <td>N</td>
						   <td>N</td>
						   <td>2017-12-19 00:22</td>
					   </tr>
					   <tr>
						   <td>116</td>
						   <td>전자금융거래</td>
						   <td class="a">V3.1</td>
						   <td>2017-12-31</td>
						   <td>N</td>
						   <td>N</td>
						   <td>2017-12-19 00:22</td>
					   </tr>
					   <tr>
						   <td>115</td>
						   <td>위치정보 이용약관</td>
						   <td class="a">V2.1</td>
						   <td>2017-12-31</td>
						   <td>N</td>
						   <td>N</td>
						   <td>2017-12-19 00:22</td>
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