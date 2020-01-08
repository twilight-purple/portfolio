<!DOCTYPE html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
    <title>qdillion</title>
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script src="js/jquery.mCustomScrollbar.js"></script>
    <script src="js/jquery-ui.min.js"></script>
	<script src="js/int.js"></script>
    <script src="js/statistics.js"></script>
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
   	   <h1>랭킹분석</h1>
	   <ul class="title clear">
			<li></li>
			<li>
				키워드 랭킹 &nbsp;<span>키워드 관련 랭킹을 100위까지 기간별로 확인할 수 있습니다.</span>
			</li>
		</ul>
	   <div class="stt02">
<!-----------------------------------------검색영역-->
		   <table class="sc">
			   <tr>
				   <th>기간</th>
				   <td class="cd_img clear" style="width:40%;">
				   <span class="data_btn clear">
					   <li class="on">오늘</li>
					   <li>1주일</li>
					   <li>1개월</li>
					   <li>3개월</li>
					   <li>6개월</li>
					   <li>1년</li>
				   </span>
				   <input type="text" name="sc_txt" value="" class="sc_cd01">
				   <input type="button" name="sc_btn" value="" class="datepicker n01">
				   ~
				   <input type="text" name="sc_txt" value="" class="sc_cd02">
				   <input type="button" name="sc_btn" value="" class="datepicker n02">
				   </td>
				   <th>키워드</th>
				   <td>
					   <input type="text" value="" style="width:300px;">
					   <input type="button" value="검색">
				   </td>
			   </tr>
		   </table>
<!-----------------------------------------table-->
		   <ul class="rk_wp clear">
<!-----------------------------------------li 01-->
			   <li>
				   <h2>
				   	   마이태그(키워드)<br>
					   <span>2018.04.19(목)</span>
				   </h2>
				   <div class="rk_scroll">
					   <ul class="rk">
						   <li>
							   <ul class="clear">
								   <li><b>1</b></li>
								   <li>설정한 키워드명</li>
								   <li><b>0,000</b> 명</li>
							   </ul>
						   </li>
						   <li>
							   <ul class="clear">
								   <li><b>2</b></li>
								   <li>설정한 키워드명</li>
								   <li><b>0,000</b> 명</li>
							   </ul>
						   </li>
						   <li>
							   <ul class="clear">
								   <li><b>3</b></li>
								   <li>설정한 키워드명</li>
								   <li><b>0,000</b> 명</li>
							   </ul>
						   </li>
						   <li>
							   <ul class="clear">
								   <li><b>4</b></li>
								   <li>설정한 키워드명</li>
								   <li><b>0,000</b> 명</li>
							   </ul>
						   </li>
						   <li>
							   <ul class="clear">
								   <li><b>5</b></li>
								   <li>설정한 키워드명</li>
								   <li><b>0,000</b> 명</li>
							   </ul>
						   </li>
						   <li>
							   <ul class="clear">
								   <li><b>6</b></li>
								   <li>설정한 키워드명</li>
								   <li><b>0,000</b> 명</li>
							   </ul>
						   </li>
						   <li>
							   <ul class="clear">
								   <li><b>7</b></li>
								   <li>설정한 키워드명</li>
								   <li><b>0,000</b> 명</li>
							   </ul>
						   </li>
						   <li>
							   <ul class="clear">
								   <li><b>8</b></li>
								   <li>설정한 키워드명</li>
								   <li><b>0,000</b> 명</li>
							   </ul>
						   </li>
						   <li>
							   <ul class="clear">
								   <li><b>9</b></li>
								   <li>설정한 키워드명</li>
								   <li><b>0,000</b> 명</li>
							   </ul>
						   </li>
						   <li>
							   <ul class="clear">
								   <li><b>10</b></li>
								   <li>설정한 키워드명</li>
								   <li><b>0,000</b> 명</li>
							   </ul>
						   </li>
						   <li>
							   <ul class="clear">
								   <li><b>11</b></li>
								   <li>설정한 키워드명</li>
								   <li><b>0,000</b> 명</li>
							   </ul>
						   </li>
						   <li>
							   <ul class="clear">
								   <li><b>12</b></li>
								   <li>설정한 키워드명</li>
								   <li><b>0,000</b> 명</li>
							   </ul>
						   </li>
					   </ul>
				   </div>
			   </li>
<!-----------------------------------------li 02-->
			   <li>
				   <h2>
				   	   검색키워드<br>
					   <span>2018.04.19(목)</span>
				   </h2>
				   <div class="rk_scroll">
					   <ul class="rk">
						   <li>
							   <ul class="clear">
								   <li><b>1</b></li>
								   <li>아이폰</li>
								   <li><b>238</b> 회</li>
							   </ul>
						   </li>
						   <li>
							   <ul class="clear">
								   <li><b>2</b></li>
								   <li>나이키</li>
								   <li><b>238</b> 회</li>
							   </ul>
						   </li>
						   <li>
							   <ul class="clear">
								   <li><b>3</b></li>
								   <li>갤럭시노트</li>
								   <li><b>238</b> 회</li>
							   </ul>
						   </li>
						   <li>
							   <ul class="clear">
								   <li><b>4</b></li>
								   <li>픽시</li>
								   <li><b>238</b> 회</li>
							   </ul>
						   </li>
						   <li>
							   <ul class="clear">
								   <li><b>5</b></li>
								   <li>타이틀리스트</li>
								   <li><b>238</b> 회</li>
							   </ul>
						   </li>
						   <li>
							   <ul class="clear">
								   <li><b>6</b></li>
								   <li>원피스</li>
								   <li><b>238</b> 회</li>
							   </ul>
						   </li>
						   <li>
							   <ul class="clear">
								   <li><b>7</b></li>
								   <li>골든구스</li>
								   <li><b>238</b> 회</li>
							   </ul>
						   </li>
						   <li>
							   <ul class="clear">
								   <li><b>8</b></li>
								   <li>볼링</li>
								   <li><b>238</b> 회</li>
							   </ul>
						   </li>
						   <li>
							   <ul class="clear">
								   <li><b>9</b></li>
								   <li>에어팟</li>
								   <li><b>238</b> 회</li>
							   </ul>
						   </li>
						   <li>
							   <ul class="clear">
								   <li><b>10</b></li>
								   <li>전동킥보드</li>
								   <li><b>238</b> 회</li>
							   </ul>
						   </li>
						   <li>
							   <ul class="clear">
								   <li><b>11</b></li>
								   <li>아이폰se</li>
								   <li><b>238</b> 회</li>
							   </ul>
						   </li>
						   <li>
							   <ul class="clear">
								   <li><b>12</b></li>
								   <li>아이폰7</li>
								   <li><b>238</b> 회</li>
							   </ul>
						   </li>
					   </ul>
				   </div>
			   </li>
		   </ul>
	   </div>
    </div>
    
<!--    footer연결-->
    <?php include "footer.php"; ?>
<!--    footer연결-->

</body>
</html>