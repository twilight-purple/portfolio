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
</head>
<body>
   
<!--   gnb/snb연결-->
  	<?php include "gnb.php"; ?>
    <?php include "snb.php"; ?>
<!--   gnb/snb연결-->

  
   <div id="wrap">
   	   <h1>우리동네 관리</h1>
	   <ul class="title clear">
			<li></li>
			<li>우리동네 관리 &nbsp;<span>우리동네별 설정현황 및 일 평균 노출 현황을 확인할 수 있습니다.</span></li>
		</ul>
	   <div class="sv06">
		   <table class="sc" width="100%">
			   <tr>
				   <th>기간</th>
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
				   <th>랜드마크</th>
				   <td>
					  <input type="search" name="sc_txt" value="">
					  <div class="cb_wrap">
						  <label class="cb">
							 <input type="checkbox" class="sc_cb" value="">
							 <span></span>
							 <p>랜드마크제외</p>
						   </label>
					   </div>
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
			   <li><span>(2018-01-01 ~ 2018-01-31)</span></li>
			   <li>
				   <select>
					   <option>50개씩</option>
					   <option>100개씩</option>
					   <option>150개씩</option>
					   <option>200개씩</option>
					   <option>250개씩</option>
				   </select>
			   </li>
			   <li class="list_topbtn clear">
				   <a href="#" class="btn01" style="width:110px;">엑셀 다운로드</a>
			   </li>
		   </ul>
		   <ul class="list_view clear">
			   <li class="on">
				   <table class="list">
					   <tr>
						   <th>NO.</th>
						   <th class="img">시/도<img src="img/down02.png"></th>
						   <th class="img">시/군/구<img src="img/down02.png"></th>
						   <th class="img">읍/면/동<img src="img/down02.png"></th>
						   <th>랜드마크</th>
						   <th class="img">일평균 클릭수<img src="img/down02.png"></th>
						   <th class="img">일평균 클릭회원수<img src="img/down02.png"></th>
					   </tr>
					   <tr>
						   <td>122</td>
						   <td>서울시(12,583)</td>
						   <td>송파구(1,266)</td>
						   <td>문정동(231)</td>
						   <td>MD타워(89)</td>
						   <td>700</td>
						   <td>316</td>
					   </tr>
					   <tr>
						   <td>121</td>
						   <td>서울시(12,583)</td>
						   <td>송파구(1,266)</td>
						   <td>문정동(231)</td>
						   <td>NY타워(89)</td>
						   <td>600</td>
						   <td>316</td>
					   </tr>
					   <tr>
						   <td>120</td>
						   <td>서울시(12,583)</td>
						   <td>종로구(1,266)</td>
						   <td>신교동(231)</td>
						   <td>Nc백화점(89)</td>
						   <td>456</td>
						   <td>279</td>
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