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
			$(".snb_wrap .snb>li:nth-child(3)>ul>li:nth-child(5)").addClass("on");
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
				회원/스토어 랭킹 &nbsp;<span>회원의 각종 랭킹을 100위까지 기간별로 확인할 수 있습니다. (스토어 종합 랭킹, 상품등록, 매출액, 팔로워/팔로잉, 거래만족수, 누적 찜 랭커)</span>
			</li>
		</ul>
	   <div class="stt02 v05">
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
				   <th>회원</th>
				   <td>
					   <input type="text" value="" style="width:250px;">
					   <input type="button" value="검색">
				   </td>
			   </tr>
		   </table>
		   <div class="rk_view">
			   <div class="rk_vw clear" style="width:4650px;">
<!-----------------------------------------table-->
				   <ul class="rk_wp clear on">
<!-----------------------------------------li 01-->
					   <li>
						   <h2>
							   스토어 종합 랭킹<br>
							   <span>2018.04.19(목)</span>
						   </h2>
						   <div class="rk_scroll">
							   <ul class="rk">
								   <li>
									   <ul class="clear">
										   <li><b>1</b></li>
										   <li>회원 닉네임(스토어명)</li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>2</b></li>
										   <li>회원 닉네임(스토어명)</li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>3</b></li>
										   <li>회원 닉네임(스토어명)</li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>4</b></li>
										   <li>회원 닉네임(스토어명)</li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>5</b></li>
										   <li>회원 닉네임(스토어명)</li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>6</b></li>
										   <li>회원 닉네임(스토어명)</li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>7</b></li>
										   <li>회원 닉네임(스토어명)</li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>8</b></li>
										   <li>회원 닉네임(스토어명)</li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>9</b></li>
										   <li>회원 닉네임(스토어명)</li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>10</b></li>
										   <li>회원 닉네임(스토어명)</li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>11</b></li>
										   <li>회원 닉네임(스토어명)</li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>12</b></li>
										   <li>회원 닉네임(스토어명)</li>
									   </ul>
								   </li>
							   </ul>
						   </div>
					   </li>
<!-----------------------------------------li 02-->
					   <li>
						   <h2>
							   상품등록<br>
							   <span>2018.04.19(목)</span>
						   </h2>
						   <div class="rk_scroll">
							   <ul class="rk">
								   <li>
									   <ul class="clear">
										   <li><b>1</b></li>
										   <li>회원 닉네임(스토어명)</li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>2</b></li>
										   <li>회원 닉네임(스토어명)</li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>3</b></li>
										   <li>회원 닉네임(스토어명)</li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>4</b></li>
										   <li>회원 닉네임(스토어명)</li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>5</b></li>
										   <li>회원 닉네임(스토어명)</li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>6</b></li>
										   <li>회원 닉네임(스토어명)</li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>7</b></li>
										   <li>회원 닉네임(스토어명)</li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>8</b></li>
										   <li>회원 닉네임(스토어명)</li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>9</b></li>
										   <li>회원 닉네임(스토어명)</li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>10</b></li>
										   <li>회원 닉네임(스토어명)</li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>11</b></li>
										   <li>회원 닉네임(스토어명)</li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>12</b></li>
										   <li>회원 닉네임(스토어명)</li>
									   </ul>
								   </li>
							   </ul>
						   </div>
					   </li>
<!-----------------------------------------li 03-->
					   <li>
						   <h2>
							   매출액<br>
							   <span>2018.04.19(목)</span>
						   </h2>
						   <div class="rk_scroll">
							   <ul class="rk">
								   <li>
									   <ul class="clear">
										   <li><b>1</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000,000</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>2</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000,000</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>3</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000,000</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>4</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000,000</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>5</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000,000</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>6</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000,000</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>7</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000,000</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>8</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000,000</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>9</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000,000</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>10</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000,000</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>11</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000,000</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>12</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000,000</b></li>
									   </ul>
								   </li>
							   </ul>
						   </div>
					   </li>
				   </ul>
<!-----------------------------------------table-->
				   <ul class="rk_wp clear">
<!-----------------------------------------li 01-->
					   <li>
						   <h2>
							   팔로워<br>
							   <span>2018.04.19(목)</span>
						   </h2>
						   <div class="rk_scroll">
							   <ul class="rk">
								   <li>
									   <ul class="clear">
										   <li><b>1</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000명</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>2</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000명</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>3</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000명</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>4</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000명</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>5</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000명</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>6</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000명</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>7</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000명</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>8</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000명</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>9</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000명</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>10</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000명</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>11</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000명</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>12</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000명</b></li>
									   </ul>
								   </li>
							   </ul>
						   </div>
					   </li>
<!-----------------------------------------li 02-->
					   <li>
						   <h2>
							   팔로잉<br>
							   <span>2018.04.19(목)</span>
						   </h2>
						   <div class="rk_scroll">
							   <ul class="rk">
								   <li>
									   <ul class="clear">
										   <li><b>1</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000명</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>2</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000명</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>3</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000명</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>4</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000명</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>5</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000명</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>6</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000명</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>7</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000명</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>8</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000명</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>9</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000명</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>10</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000명</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>11</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000명</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>12</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000명</b></li>
									   </ul>
								   </li>
							   </ul>
						   </div>
					   </li>
<!-----------------------------------------li 03-->
					   <li>
						   <h2>
							   거래만족수<br>
							   <span>2018.04.19(목)</span>
						   </h2>
						   <div class="rk_scroll">
							   <ul class="rk">
								   <li>
									   <ul class="clear">
										   <li><b>1</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000건</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>2</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000건</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>3</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000건</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>4</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000건</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>5</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000건</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>6</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000건</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>7</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000건</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>8</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000건</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>9</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000건</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>10</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000건</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>11</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000건</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>12</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000건</b></li>
									   </ul>
								   </li>
							   </ul>
						   </div>
					   </li>
				   </ul>
<!-----------------------------------------table-->
				   <ul class="rk_wp clear">
<!-----------------------------------------li 01-->
					   <li>
						   <h2>
							   누적 찜 랭커<br>
							   <span>2018.04.19(목)</span>
						   </h2>
						   <div class="rk_scroll">
							   <ul class="rk">
								   <li>
									   <ul class="clear">
										   <li><b>1</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000건</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>2</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000건</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>3</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000건</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>4</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000건</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>5</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000건</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>6</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000건</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>7</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000건</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>8</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000건</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>9</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000건</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>10</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000건</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>11</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000건</b></li>
									   </ul>
								   </li>
								   <li>
									   <ul class="clear">
										   <li><b>12</b></li>
										   <li>회원 닉네임(스토어명)</li>
										   <li><b>0,000건</b></li>
									   </ul>
								   </li>
							   </ul>
						   </div>
					   </li>
				   </ul>
			   </div>
		   </div>
<!-----------------------------------------버튼-->
		   <ul class="rk_btn">
			   <li class="on"></li>
			   <li class="on"></li>
		   </ul>
	   </div>
    </div>
    
<!--    footer연결-->
    <?php include "footer.php"; ?>
<!--    footer연결-->

</body>
</html>