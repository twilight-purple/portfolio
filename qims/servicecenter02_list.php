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
   	   <h1>중고나라 이용안내</h1>
	   <ul class="title clear">
			<li></li>
			<li>중고나라 이용안내 &nbsp;<span>중고나라 이용안내 등록 및 이미 등록된 중고나라 이용안내를 관리할 수 있습니다.</span></li>
		</ul>
	   <div class="sc02">
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
				   <th>1depth카테고리</th>
				   <td>
					   <select>
						   <option>전체</option>
						   <option>운영정책</option>
						   <option>스토어</option>
						   <option>서비스기능</option>
						   <option>구매절차</option>
						   <option>반품절차</option>
						   <option>사기예방</option>
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
				   <th>이용안내 타이틀</th>
				   <td>
				   	<input type="text" value="" style="width:200px">
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
				   <a href="#" class="btn01 depth" style="width:160px;">1depth 카테고리 관리</a>
				   <a href="#" class="btn01" style="width:100px;">순서적용</a>
				   <a href="#" class="btn01" style="width:80px;">등록</a>
			   </li>
		   </ul>
		   <ul class="list_view clear">
			   <li class="on">
				   <table class="list">
					   <tr>
						   <th style="width:4%;">NO.</th>
						   <th>1depth 카테고리명</th>
						   <th>이용안내 타이틀</th>
						   <th style="width:30%">내용 이미지</th>
						   <th class="img">조회수<img src="img/down02.png"></th>
						   <th class="img">사용여부<img src="img/down02.png"></th>
						   <th class="img">등록일<img src="img/down02.png"></th>
					   </tr>
					   <tr class="y">
						   <td>121</td>
						   <td class="a">운영정책</td>
						   <td class="a">도배기준</td>
						   <td class="imgbox_wp"><div class="imgbox">img</div></td>
						   <td>1,259</td>
						   <td>Y</td>
						   <td>YYYY-MM-DD HH:MM</td>
					   </tr>
					   <tr class="y">
						   <td>120</td>
						   <td class="a">스토어</td>
						   <td class="a">일반스토어</td>
						   <td class="imgbox_wp"><div class="imgbox">img</div></td>
						   <td>159</td>
						   <td>Y</td>
						   <td>YYYY-MM-DD HH:MM</td>
					   </tr>
					   <tr class="y">
						   <td>119</td>
						   <td class="a">스토어</td>
						   <td class="a">일반스토어</td>
						   <td class="imgbox_wp"><div class="imgbox">img</div></td>
						   <td>159</td>
						   <td>Y</td>
						   <td>YYYY-MM-DD HH:MM</td>
					   </tr>
					   <tr class="hide">
						   <td>114</td>
						   <td class="a">사기예방</td>
						   <td class="a">사기예방</td>
						   <td class="imgbox_wp"><div class="imgbox">img</div></td>
						   <td>1,259</td>
						   <td>N</td>
						   <td>YYYY-MM-DD HH:MM</td>
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