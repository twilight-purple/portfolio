<!DOCTYPE html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
    <title>qdillion</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/int.js"></script>
    <script src="js/marketing.js"></script>
	<script>
//		snb바꾸기
		$(document).ready(function(){
			$(".snb_wrap .snb>li:nth-child(2)>.snb_sub").addClass("view");
			$(".snb_wrap .snb>li:nth-child(2)>ul>li:nth-child(2)").addClass("on");
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
   	   <h1>이벤트 관리</h1>
	   <ul class="title clear">
			<li></li>
			<li>
				이벤트 포인트경품 자동지급관리 &nbsp;<span>이벤트 타입의 바로당첨형, 선착순형 등록 시 설정하는 포인트 경품 자동 지급 관리 리스트 입니다.</span>
			</li>
		</ul>
	   <div class="mk01_02">
			   <table class="sc">
				   <tr>
					   <th>적립일</th>
					   <td class="cd_img clear">
						   <input type="text" name="sc_txt" value="" class="sc_cd01">
						   <input type="button" name="sc_btn" value="" class="datepicker n01">
						   ~
						   <input type="text" name="sc_txt" value="" class="sc_cd02">
						   <input type="button" name="sc_btn" value="" class="datepicker n02">
					   </td>
					   <th>아이디(이메일)</th>
					   <td><input type="text" name="sc_txt" value=""></td>
					   <th>닉네임</th>
					   <td><input type="text" name="sc_txt" value=""></td>
						<th>이름</th>
					   <td><input type="text" name="sc_txt" value=""></td>
					</tr>
					<tr>
						<th>사유</th>
						<td colspan="7">
						   <input type="text" name="sc_txt" value="" style="width:225px">
						   <input type="button" name="sc_btn" value="검색">
					   </td>
					</tr>
				</table>
			   <ul class="list_top clear">
			   	   <li>총 11,200,121건,</li>
				   <li class="clear'">
					   <ul class="list_nm">
						   <li class="on">1</li>
					   </ul>
					   <p>/ 112,001 페이지</p>
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
			   </ul>
			   <ul class="list_view clear">
				   <li class="on">
					   <table class="list">
						   <tr>
							   <th>NO.</th>
							   <th>처리타입</th>
							   <th class="img">포인트 금액<img src="img/down02.png"></th>
							   <th>사유</th>
							   <th>아이디(이메일)</th>
							   <th>닉네임</th>
							   <th>이름</th>
							   <th class="img">적립일<img src="img/down02.png"></th>
							   <th>처리자</th>
							   <th>비고</th>
						   </tr>
						   <tr>
							   <td>###</td>
							   <td>적립</td>
							   <td>100P</td>
							   <td>중고나라 기프티콘</td>
							   <td>minso@joongna.com</td>
							   <td>민민</td>
							   <td>민소연</td>
							   <td>2016-1225 00:23:56</td>
							   <td>전혜윤</td>
							   <td>이벤트 당첨 포인트 지급</td>
						   </tr>
						   <tr>
							   <td>###</td>
							   <td>적립</td>
							   <td>100P</td>
							   <td>중고나라 기프티콘</td>
							   <td>minso@joongna.com</td>
							   <td>민민</td>
							   <td>민소연</td>
							   <td>2016-1225 00:23:56</td>
							   <td>전혜윤</td>
							   <td>이벤트 당첨 포인트 지급</td>
						   </tr>
						   <tr>
							   <td>###</td>
							   <td>적립</td>
							   <td>100P</td>
							   <td>중고나라 기프티콘</td>
							   <td>minso@joongna.com</td>
							   <td>민민</td>
							   <td>민소연</td>
							   <td>2016-1225 00:23:56</td>
							   <td>전혜윤</td>
							   <td>이벤트 당첨 포인트 지급</td>
						   </tr>
						   <tr>
							   <td>###</td>
							   <td>적립</td>
							   <td>100P</td>
							   <td>중고나라 기프티콘</td>
							   <td>minso@joongna.com</td>
							   <td>민민</td>
							   <td>민소연</td>
							   <td>2016-1225 00:23:56</td>
							   <td>전혜윤</td>
							   <td>이벤트 당첨 포인트 지급</td>
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