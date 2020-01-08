<!DOCTYPE html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
    <title>qdillion</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/int.js"></script>
    <script src="js/system.js"></script>
</head>
<body>
   
<!--   gnb/snb연결-->
  	<?php include "gnb.php"; ?>
    <?php include "snb.php"; ?>
<!--   gnb/snb연결-->

  
   <div id="wrap">
   	   <h1>앱 버전 관리</h1>
	   <ul class="title clear">
			<li></li>
			<li>앱 버전 관리 &nbsp;<span>중고나라 앱의 버전을 등록/관리할 수 있습니다.</span></li>
		</ul>
	   <div class="syt01">
		   <table class="sc">
			   <tr>
				   <th>등록일</th>
				   <td class="cd_img clear" width="27%">
					   <input type="text" name="sc_txt" value="" class="sc_cd01">
					   <input type="button" name="sc_btn" value="" class="datepicker n01">
					   ~
					   <input type="text" name="sc_txt" value="" class="sc_cd02">
					   <input type="button" name="sc_btn" value="" class="datepicker n02">
					   <label class="cb">
						 <input type="checkbox" class="sc_cb not02" value="">
						 <span></span>
						 <p>전체</p>
					   </label>
				   </td>
				   <th>운영체제</th>
				   <td style="width:10%;">
					   <select>
						   <option>전체</option>
						   <option>안드로이드</option>
						   <option>iOS</option>
					   </select>
				   </td>
				   <th>업데이트 설정</th>
				   <td>
					   <select>
						   <option>전체</option>
						   <option>체크 안 함</option>
						   <option>선택</option>
						   <option>강제</option>
					   </select>
				   </td>
			   </tr>
			   <tr>
			   	   <th>통합검색</th>
				   <td colspan="5">
				   	<select>
						<option>전체</option>
						<option>제목</option>
						<option>내용</option>
				   	</select>
				   	<input type="text" value="" style="width:70%;">
				   	<input type="button" value="검색">
				   </td>
			   </tr>
		   </table>
		   <ul class="list_top clear">
			   <li>총 20건,</li>
			   <li class="clear'">
				   <ul class="list_nm">
					   <li class="on">1</li>
				   </ul>
				   <p>/ 11 페이지</p>
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
				   <a href="#" class="btn01" style="width:80px;">저장</a>
			   </li>
		   </ul>
		   <ul class="list_view clear">
			   <li class="on">
				   <table class="list">
					   <tr>
						   <th>NO.</th>
						   <th class="img">운영체제<img src="img/down02.png"></th>
						   <th class="img">버전명<img src="img/down02.png"></th>
						   <th class="img">등록일<img src="img/down02.png"></th>
						   <th class="img">업데이트 변경일<img src="img/down02.png"></th>
						   <th>등록자</th>
						   <th>선택</th>
						   <th>강제</th>
					   </tr>
					   <tr>
						   <td>20</td>
						   <td>안드로이드</td>
						   <td>6.3.4</td>
						   <td>2018-01-08 13:30</td>
						   <td>-</td>
						   <td>허길행</td>
						   <td>
								<label class="rdb">
									<input type="radio" name="rd1" checked="">
									<span></span>
								</label>
						   </td>
						   <td>
								<label class="rdb">
									<input type="radio" name="rd1">
									<span></span>
								</label>
						   </td>
					   </tr>
					   <tr>
						   <td>19</td>
						   <td>iOS</td>
						   <td>3.8.7</td>
						   <td>2018-01-08 13:30</td>
						   <td>-</td>
						   <td>허길행</td>
						   <td>
								<label class="rdb">
									<input type="radio" name="rd2" checked="">
									<span></span>
								</label>
						   </td>
						   <td>
								<label class="rdb">
									<input type="radio" name="rd2">
									<span></span>
								</label>
						   </td>
					   </tr>
					   <tr>
						   <td>18</td>
						   <td>안드로이드</td>
						   <td>6.3.3</td>
						   <td>2018-01-08 13:30</td>
						   <td>2018-01-08 13:30(선택)</td>
						   <td>허길행</td>
						   <td>
								<label class="rdb">
									<input type="radio" name="rd3">
									<span></span>
								</label>
						   </td>
						   <td>
								<label class="rdb">
									<input type="radio" name="rd3" checked="">
									<span></span>
								</label>
						   </td>
					   </tr>
					   <tr>
						   <td>17</td>
						   <td>iOS</td>
						   <td>3.8.6</td>
						   <td>2018-01-08 13:30</td>
						   <td>2018-01-08 13:30(선택)</td>
						   <td>허길행</td>
						   <td>
								<label class="rdb">
									<input type="radio" name="rd4" checked="">
									<span></span>
								</label>
						   </td>
						   <td>
								<label class="rdb">
									<input type="radio" name="rd4">
									<span></span>
								</label>
						   </td>
					   </tr>
					   <tr>
						   <td>16</td>
						   <td>iOS</td>
						   <td>3.8.6</td>
						   <td>2018-01-08 13:30</td>
						   <td>2018-01-08 13:30(강제)</td>
						   <td>허길행</td>
						   <td>
								<label class="rdb">
									<input type="radio" name="rd5">
									<span></span>
								</label>
						   </td>
						   <td>
								<label class="rdb">
									<input type="radio" name="rd5" checked="">
									<span></span>
								</label>
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