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
   	   <h1>자동지급 포인트 관리</h1>
	   <ul class="title clear">
			<li></li>
			<li>자동지급 포인트 관리 &nbsp;<span>자동지급 포인트 항목 조회와 지급 포인트를 조회할 수 있습니다.</span></li>
		</ul>
	   <div class="sv11">
		   <table class="sc">
			   <tr>
				   <th>적용기간</th>
				   <td class="cd_img clear" width="27%">
					   <input type="text" name="sc_txt" value="" class="sc_cd01">
					   <input type="button" name="sc_btn" value="" class="datepicker n01">
					   ~
					   <input type="text" name="sc_txt" value="" class="sc_cd02">
					   <input type="button" name="sc_btn" value="" class="datepicker n02">
					   <label class="cb">
						 <input type="checkbox" class="sc_cb not" value="">
						 <span></span>
						 <p>기한없음</p>
					   </label>
				   </td>
				   <th>적용여부</th>
				   <td style="width:10%;">
					   <select>
						   <option>전체</option>
						   <option>적용</option>
						   <option>적용안함</option>
					   </select>
				   </td>
				   <th>사유</th>
				   <td>
				   	<input type="text" value="" style="width:300px;">
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
				   <p>/ 1 페이지</p>
			   </li>
			   <li><span>(YYYY-MM-DD ~ YYYY-MM-DD)</span></li>
			   <li>
				   <select>
					   <option>50개씩</option>
					   <option>100개씩</option>
					   <option>150개씩</option>
					   <option>200개씩</option>
					   <option>250개씩</option>
				   </select>
			   </li>
		   </ul>
		   <ul class="list_view clear">
			   <li class="on">
				   <table class="list">
					   <tr>
						   <th style="width:4%;">NO.</th>
						   <th>사유</th>
						   <th style="width:20%;">지급 조건</th>
						   <th class="img">지급 포인트 금액<img src="img/down02.png"></th>
						   <th>적용기간</th>
						   <th>적용여부</th>
						   <th>최근 수정자</th>
					   </tr>
					   <tr>
						   <td>7</td>
						   <td class="line">팔로워 달성 축하 포인트</td>
						   <td class="line">
						   	300명 최초 달성 시 때마다 (300명,600명,900명...)
						   	Ex) 300명 달성 후 299명으로 하락 → 다시 300달성: 포인트 지급 안함 
						   </td>
						   <td>1,000 P</td>
						   <td class="cd_img clear">
							   <input type="text" name="sc_txt" value="" class="sc_cd03">
							   <input type="button" name="sc_btn" value="" class="datepicker n03">
							   ~
							   <input type="text" name="sc_txt" value="" class="sc_cd04">
							   <input type="button" name="sc_btn" value="" class="datepicker n04">
							   <label class="cb">
								 <input type="checkbox" class="sc_cb nnot" value="">
								 <span></span>
								 <p>기한없음</p>
							   </label>
						   </td>
						   <td>
								<label class="rdb">
									<input type="radio" name="rd1" checked="">
									<span></span>적용
								</label>&nbsp;&nbsp;&nbsp;
								<label class="rdb">
									<input type="radio" name="rd1">
									<span></span>적용안함
								</label>
						   </td>
						   <td>민소연<br>(서비스기획팀)</td>
					   </tr>
					   <tr>
						   <td>6</td>
						   <td class="line">친구초대 성공 축하포인트</td>
						   <td class="line">
						   	초대한 친구 1명이 추천코드 입력하고 가입시,
						   	가입회원과 초대회원에게 각각 지급
						   </td>
						   <td>3,000 P</td>
						   <td class="cd_img clear">
							   <input type="text" name="sc_txt" value="" class="sc_cd03">
							   <input type="button" name="sc_btn" value="" class="datepicker n03">
							   ~
							   <input type="text" name="sc_txt" value="" class="sc_cd04">
							   <input type="button" name="sc_btn" value="" class="datepicker n04">
							   <label class="cb">
								 <input type="checkbox" class="sc_cb nnot" value="">
								 <span></span>
								 <p>기한없음</p>
							   </label>
						   </td>
						   <td>
								<label class="rdb">
									<input type="radio" name="rd2" checked="">
									<span></span>적용
								</label>&nbsp;&nbsp;&nbsp;
								<label class="rdb">
									<input type="radio" name="rd2">
									<span></span>적용안함
								</label>
						   </td>
						   <td>민소연<br>(서비스기획팀)</td>
					   </tr>
					   <tr>
						   <td>5</td>
						   <td class="line">신규가입 축하 포인트</td>
						   <td class="line">
						   	신규회원 가입완료시 지급
						   </td>
						   <td>3,000 P</td>
						   <td class="cd_img clear">
							   <input type="text" name="sc_txt" value="" class="sc_cd03">
							   <input type="button" name="sc_btn" value="" class="datepicker n03">
							   ~
							   <input type="text" name="sc_txt" value="" class="sc_cd04">
							   <input type="button" name="sc_btn" value="" class="datepicker n04">
							   <label class="cb">
								 <input type="checkbox" class="sc_cb nnot" value="">
								 <span></span>
								 <p>기한없음</p>
							   </label>
						   </td>
						   <td>
								<label class="rdb">
									<input type="radio" name="rd3" checked="">
									<span></span>적용
								</label>&nbsp;&nbsp;&nbsp;
								<label class="rdb">
									<input type="radio" name="rd3">
									<span></span>적용안함
								</label>
						   </td>
						   <td>민소연<br>(서비스기획팀)</td>
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