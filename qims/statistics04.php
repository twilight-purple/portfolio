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
</head>
<body>
   
<!--   gnb/snb연결-->
  	<?php include "gnb.php"; ?>
    <?php include "snb.php"; ?>
<!--   gnb/snb연결-->

  
   <div id="wrap">
   	   <h1>방문자분석</h1>
	   <ul class="title clear">
			<li></li>
			<li>방문자분석</li>
		</ul>
	   <div class="stt03 v02">
<!-----------------------------------------검색영역-->
		   <ul class="sc_tab">
			   <li class="on">
			   		<table class="sc">
					   <tr>
						   <th>기간</th>
						   <td class="cd_img clear">
							   <input type="text" name="sc_txt" value="YYYY.MM.DD" class="sc_cd01 on">
							   <input type="button" name="sc_btn" value="" class="datepicker n01">
							   ~
							   <input type="text" name="sc_txt" value="YYYY.MM.DD" class="sc_cd02 on">
							   <input type="button" name="sc_btn" value="" class="datepicker n02">
						   </td>
					   </tr>
			   		</table>
			   </li>
			   <li>
			   		<table class="sc">
					   <tr>
						   <th>기간</th>
						   <td class="cd_img clear">
						   <span class="data_btn clear">
							   <li>전일</li>
							   <li class="on">7일</li>
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
						   <input type="button" value="검색">
						   </td>
					   </tr>
			   		</table>
			   </li>
			   <li>
			   		<table class="sc">
					   <tr>
						   <th>기간</th>
						   <td class="cd_img clear">
						   <span class="data_btn clear">
							   <li class="on">1개월</li>
							   <li>3개월</li>
							   <li>6개월</li>
							   <li>1년</li>
						   </span>
						   <input type="text" name="sc_txt" value="" class="sc_cd01">
						   <input type="button" name="sc_btn" value="" class="datepicker n01">
						   ~
						   <input type="text" name="sc_txt" value="" class="sc_cd02">
						   <input type="button" name="sc_btn" value="" class="datepicker n02">
						   <input type="button" value="검색">
						   </td>
					   </tr>
			   		</table>
			   </li>
			   <li>
			   		<table class="sc">
					   <tr>
						   <th>기간</th>
						   <td class="cd_img clear">
						   <span class="data_btn clear">
							   <li class="on">7일</li>
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
						   <input type="button" value="검색">
						   </td>
					   </tr>
			   		</table>
			   </li>
			   <li>
			   		<table class="sc">
					   <tr>
						   <th>기간</th>
						   <td class="cd_img clear">
						   <span class="data_btn clear">
						   	   <li>전일</li>
							   <li class="on">7일</li>
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
						   <input type="button" value="검색">
						   </td>
					   </tr>
			   		</table>
			   </li>
		   </ul>
		   
<!-----------------------------------------table-->
		   <div class="twp">
<!-----------------------------------------table 버튼-->
			   <ul class="tw_btn clear">
				   <li class="on">당일 현황</li>
				   <li>일별 현황</li>
				   <li>월별 현황</li>
				   <li>요일별 현황</li>
				   <li>시간대별 현황</li>
			   </ul>
			   <ul class="tw">
<!-----------------------------------------tw 01-->
				   <li class="on">
					   <p class="tw_data">(YYYY-MM-DD)</p>
						<ul class="tw_btn02 clear v02">
						   <li class="on">
							   <h3>총 방문자</h3>
							   <h4 class="h4_mt">0,000명</h4>
						   </li>
						   <li>
							   <h3>총 방문횟수</h3>
							   <h4 class="h4_mt">0,000회</h4>
						   </li>
						   <li>
							   <h3>상품등록</h3>
							   <h4>0,000명</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>상품구매</h3>
							   <h4>0,000명</h4>
							   <p>(00%)</p>
						   </li>
					   </ul>
					   <div class="tw_in">
						   <div class="gp clear">
							   <div class="gp_left">
									<h5 class="clear">
									그래프분석
										<ul class="clear">
											<li><span></span>전체</li>
											<li><span style="background-color: #68b133;"></span>APP(iOS)</li>
											<li><span style="background-color: #ff8c37;"></span>APP(And)</li>
											<li><span style="background-color: #9a4cc3;"></span>WEB</li>
										</ul>
									</h5>
								   <div class="mh_line"></div>
								   <div class="mh_r"></div>
								   <ul class="mh_box">
									   <li>HH시 ~ HH시</li>
									   <li>
										   <ul class="clear">
											   <li><span style="background-color: #68b133;"></span>APP(iOS)</li>
											   <li>0,000명</li>
										   </ul>
									   </li>
								   </ul>
							   </div>
							   <div class="gp_right"></div>
						   </div>
						   <div class="twin_exer clear">
							   <div class="twin_txt">* YYYY-MM-DD 12시 35분 기준 <span>(데이터는 정각에 갱신됩니다.)</span></div>
							   <div class="btn03">엑셀 다운로드</div>
						   </div>
						   <table class="twin_t">
							   <tr>
								   <th rowspan="2">시간대</th>
								   <th rowspan="2" class="y">방문자</th>
								   <th colspan="3">APP 방문자</th>
								   <th rowspan="2">WEB 방문자</th>
								   <th rowspan="2">방문횟수</th>
							   </tr>
							   <tr>
								   <th style="border-left:1px solid #ededed">iOS</th>
								   <th>Android</th>
								   <th class="gy">합계</th>
							   </tr>
							   <tr>
								   <td>00시~01시</td>
								   <td class="y">10,000명</td>
								   <td>3,000명<span class="sm">(33%)</span></td>
								   <td>6,000명<span class="sm">(67%)</span></td>
								   <td class="gy">9,000명<span class="sm">(100%)</span></td>
								   <td>1,000명</td>
								   <td>1,000명</td>
							   </tr>
							   <tr>
								   <td>01시~02시</td>
								   <td class="y">11,000명</td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td class="gy">0,000명<span class="sm">(100%)</span></td>
								   <td>0,000명</td>
								   <td>0,000명</td>
							   </tr>
							   <tr>
								   <td>02시~03시</td>
								   <td class="y">0,000명</td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td class="gy">0,000명<span class="sm">(100%)</span></td>
								   <td>0,000명</td>
								   <td>0,000명</td>
							   </tr>
							   <tr>
								   <td>03시~04시</td>
								   <td class="y">0,000명</td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td class="gy">0,000명<span class="sm">(100%)</span></td>
								   <td>0,000명</td>
								   <td>0,000명</td>
							   </tr>
							   <tr>
								   <td>04시~05시</td>
								   <td class="y">0,000명</td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td class="gy">0,000명<span class="sm">(100%)</span></td>
								   <td>0,000명</td>
								   <td>0,000명</td>
							   </tr>
						   </table>
					   </div>
				   </li>
<!-----------------------------------------tw 02-->
				   <li>
				  		<p class="tw_data">(YYYY-MM-DD ~ YYYY-MM-DD)</p>
						<ul class="tw_btn02 clear v04">
						   <li class="on">
							   <h3>총 방문자</h3>
							   <h4 class="h4_mt">0,000명</h4>
						   </li>
						   <li>
							   <h3>상품등록</h3>
							   <h4>0,000명</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>상품구매</h3>
							   <h4>0,000명</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>일평균 방문자</h3>
							   <h4 class="h4_mt">0,000명</h4>
						   </li>
						   <li>
							   <h3>방문횟수</h3>
							   <h4>0,000회</h4>
							   <p>1일당 평균 0.0회 방문</p>
						   </li>
						   <li>
							   <h3>일평균 이용시간</h3>
							   <h4>MM분 SS초</h4>
							   <p>남:MM분SS초, 여:MM분SS초</p>
						   </li>
					   </ul>
					   <div class="tw_in">
						   <div class="gp clear">
							   <div class="gp_left">
									<h5 class="clear">
									그래프분석
										<ul class="clear">
											<li><span></span>전체</li>
											<li><span style="background-color: #68b133;"></span>APP(iOS)</li>
											<li><span style="background-color: #ff8c37;"></span>APP(And)</li>
											<li><span style="background-color: #9a4cc3;"></span>WEB</li>
										</ul>
									</h5>
								   <div class="mh_line"></div>
								   <div class="mh_r"></div>
								   <ul class="mh_box">
									   <li>MM월 DD일 (N)</li>
									   <li>
										   <ul class="clear">
											   <li><span style="background-color: #68b133;"></span>APP(iOS)</li>
											   <li>0,000명</li>
										   </ul>
									   </li>
								   </ul>
							   </div>
							   <div class="gp_right"></div>
						   </div>
						   <div class="twin_exer clear">
							   <div class="btn03">엑셀 다운로드</div>
						   </div>
						   <table class="twin_t">
							   <tr>
								   <th rowspan="2">날짜</th>
								   <th rowspan="2" class="y">방문자</th>
								   <th rowspan="2" class="y02">전일대비</th>
								   <th colspan="3">APP 방문자</th>
								   <th rowspan="2">WEB 방문자</th>
								   <th rowspan="2" class="y">방문횟수</th>
								   <th rowspan="2" class="y02">전일대비</th>
								   <th rowspan="2">평균<br>이용시간</th>
								   <th colspan="7">재방문수</th>
							   </tr>
							   <tr>
								   <th style="border-left:1px solid #ededed">iOS</th>
								   <th>Android</th>
								   <th class="gy">합계</th>
								   <th style="border-left:1px solid #ededed">1회</th>
								   <th>2회</th>
								   <th>3회</th>
								   <th>4회</th>
								   <th>5회 이상</th>
								   <th>10회 이상</th>
								   <th>15회 이상</th>
							   </tr>
							   <tr>
								   <td>YYYY-MM-DD (N)</td>
								   <td class="y">명</td>
								   <td class="bl y02">7.3%▼</td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td class="gy">명<span class="sm">(100%)</span></td>
								   <td>명</td>
								   <td class="y">회</td>
								   <td class="bl y02">7.3%▼</td>
								   <td>분</td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
							   </tr>
							   <tr>
								   <td>YYYY-MM-DD (N)</td>
								   <td class="y">명</td>
								   <td class="rd y02">%▲</td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td class="gy">명<span class="sm">(100%)</span></td>
								   <td>명</td>
								   <td class="y">회</td>
								   <td class="rd y02">%▲</td>
								   <td>분</td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
							   </tr>
							   <tr>
								   <td>YYYY-MM-DD (N)</td>
								   <td class="y">명</td>
								   <td class="bl y02">%▼</td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td class="gy">명<span class="sm">(100%)</span></td>
								   <td>명</td>
								   <td class="y">회</td>
								   <td class="bl y02">%▼</td>
								   <td>분</td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
							   </tr>
							   <tr>
								   <td>YYYY-MM-DD (N)</td>
								   <td class="y">명</td>
								   <td class="rd y02">%▲</td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td class="gy">명<span class="sm">(100%)</span></td>
								   <td>명</td>
								   <td class="y">회</td>
								   <td class="rd y02">%▲</td>
								   <td>분</td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
							   </tr>
						   </table>
					   </div>
				   </li>
<!-----------------------------------------tw 03-->
				   <li>
						<p class="tw_data">(YYYY-MM-DD ~ YYYY-MM-DD)</p>
						<ul class="tw_btn02 clear v04">
						   <li class="on">
							   <h3>총 방문자</h3>
							   <h4 class="h4_mt">0,000명</h4>
						   </li>
						   <li>
							   <h3>상품등록</h3>
							   <h4>0,000명</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>상품구매</h3>
							   <h4>0,000명</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>월평균 방문자</h3>
							   <h4 class="h4_mt">0,000명</h4>
						   </li>
						   <li>
							   <h3>방문횟수</h3>
							   <h4>0,000회</h4>
							   <p>1일당 평균 0.0회 방문</p>
						   </li>
						   <li>
							   <h3>월평균 이용시간</h3>
							   <h4>MM분 SS초</h4>
							   <p>남:MM분SS초, 여:MM분SS초</p>
						   </li>
					   </ul>
					   <div class="tw_in">
						   <div class="gp clear">
							   <div class="gp_left">
									<h5 class="clear">
									그래프분석
										<ul class="clear">
											<li><span></span>전체</li>
											<li><span style="background-color: #68b133;"></span>APP(iOS)</li>
											<li><span style="background-color: #ff8c37;"></span>APP(And)</li>
											<li><span style="background-color: #9a4cc3;"></span>WEB</li>
										</ul>
									</h5>
								   <div class="mh_line"></div>
								   <div class="mh_r"></div>
								   <ul class="mh_box">
									   <li>YYYY년 MM월</li>
									   <li>
										   <ul class="clear">
											   <li><span style="background-color: #68b133;"></span>APP(iOS)</li>
											   <li>0,000명</li>
										   </ul>
									   </li>
								   </ul>
							   </div>
							   <div class="gp_right"></div>
						   </div>
						   <div class="twin_exer clear">
							   <div class="btn03">엑셀 다운로드</div>
						   </div>
						   <table class="twin_t">
							   <tr>
								   <th rowspan="2">날짜</th>
								   <th rowspan="2" class="y">방문자</th>
								   <th rowspan="2" class="y02">전일대비</th>
								   <th colspan="3">APP 방문자</th>
								   <th rowspan="2">WEB 방문자</th>
								   <th rowspan="2" class="y">방문횟수</th>
								   <th rowspan="2" class="y02">전일대비</th>
								   <th rowspan="2">평균<br>이용시간</th>
								   <th colspan="7">재방문수</th>
							   </tr>
							   <tr>
								   <th style="border-left:1px solid #ededed">iOS</th>
								   <th>Android</th>
								   <th class="gy">합계</th>
								   <th style="border-left:1px solid #ededed">1회</th>
								   <th>2회</th>
								   <th>3회</th>
								   <th>4회</th>
								   <th>5회 이상</th>
								   <th>10회 이상</th>
								   <th>15회 이상</th>
							   </tr>
							   <tr>
								   <td>YYYY-MM</td>
								   <td class="y">명</td>
								   <td class="bl y02">7.3%▼</td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td class="gy">명<span class="sm">(100%)</span></td>
								   <td>명</td>
								   <td class="y">회</td>
								   <td class="bl y02">7.3%▼</td>
								   <td>분</td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
							   </tr>
							   <tr>
								   <td>YYYY-MM</td>
								   <td class="y">명</td>
								   <td class="rd y02">%▲</td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td class="gy">명<span class="sm">(100%)</span></td>
								   <td>명</td>
								   <td class="y">회</td>
								   <td class="rd y02">%▲</td>
								   <td>분</td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
							   </tr>
							   <tr>
								   <td>YYYY-MM</td>
								   <td class="y">명</td>
								   <td class="bl y02">%▼</td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td class="gy">명<span class="sm">(100%)</span></td>
								   <td>명</td>
								   <td class="y">회</td>
								   <td class="bl y02">%▼</td>
								   <td>분</td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
							   </tr>
							   <tr>
								   <td>YYYY-MM</td>
								   <td class="y">명</td>
								   <td class="rd y02">%▲</td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td class="gy">명<span class="sm">(100%)</span></td>
								   <td>명</td>
								   <td class="y">회</td>
								   <td class="rd y02">%▲</td>
								   <td>분</td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
							   </tr>
						   </table>
					   </div>
				   </li>
<!-----------------------------------------tw 04-->
				   <li>
				   		<p class="tw_data">(YYYY-MM-DD ~ YYYY-MM-DD)</p>
						<ul class="tw_btn02 clear v02">
						   <li class="on">
							   <h3>총 방문자</h3>
							   <h4 class="h4_mt">0,000명</h4>
						   </li>
						   <li>
							   <h3>상품등록</h3>
							   <h4>0,000명</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>상품구매</h3>
							   <h4>0,000명</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>방문횟수</h3>
							   <h4>0,000회</h4>
							   <p>1인당 평균 0.0회 방문</p>
						   </li>
					   </ul>
					   <div class="tw_in">
						   <div class="gp clear">
							   <div class="gp_left">
									<h5 class="clear">
									그래프분석
										<ul class="clear">
											<li><span></span>전체</li>
											<li><span style="background-color: #68b133;"></span>APP(iOS)</li>
											<li><span style="background-color: #ff8c37;"></span>APP(And)</li>
											<li><span style="background-color: #9a4cc3;"></span>WEB</li>
										</ul>
									</h5>
								   <div class="mh_line"></div>
								   <div class="mh_r"></div>
								   <ul class="mh_box">
									   <li>N요일</li>
									   <li>
										   <ul class="clear">
											   <li><span style="background-color: #68b133;"></span>APP(iOS)</li>
											   <li>0,000명</li>
										   </ul>
									   </li>
								   </ul>
							   </div>
							   <div class="gp_right"></div>
						   </div>
						   <div class="twin_exer clear">
							   <div class="btn03">엑셀 다운로드</div>
						   </div>
						   <table class="twin_t">
							   <tr>
								   <th rowspan="2">요일</th>
								   <th rowspan="2" class="y">방문자</th>
								   <th colspan="3">APP 방문자</th>
								   <th rowspan="2">WEB 방문자</th>
								   <th rowspan="2" class="y">방문횟수</th>
								   <th rowspan="2">평균<br>이용시간</th>
								   <th colspan="7">재방문수</th>
							   </tr>
							   <tr>
								   <th style="border-left:1px solid #ededed">iOS</th>
								   <th>Android</th>
								   <th class="gy">합계</th>
								   <th style="border-left:1px solid #ededed">1회</th>
								   <th>2회</th>
								   <th>3회</th>
								   <th>4회</th>
								   <th>5회</th>
								   <th>10회 이상</th>
								   <th>15회 이상</th>
							   </tr>
							   <tr>
								   <td>월요일</td>
								   <td class="y">명</td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td class="gy">명<span class="sm">(100%)</span></td>
								   <td>명</td>
								   <td class="y">회</td>
								   <td>분</td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
							   </tr>
							   <tr>
								   <td>화요일</td>
								   <td class="y">명</td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td class="gy">명<span class="sm">(100%)</span></td>
								   <td>명</td>
								   <td class="y">회</td>
								   <td>분</td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
							   </tr>
							   <tr>
								   <td>수요일</td>
								   <td class="y">명</td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td class="gy">명<span class="sm">(100%)</span></td>
								   <td>명</td>
								   <td class="y">회</td>
								   <td>분</td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
							   </tr>
							   <tr>
								   <td>목요일</td>
								   <td class="y">명</td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td class="gy">명<span class="sm">(100%)</span></td>
								   <td>명</td>
								   <td class="y">회</td>
								   <td>분</td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
							   </tr>
							   <tr>
								   <td>금요일</td>
								   <td class="y">명</td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td class="gy">명<span class="sm">(100%)</span></td>
								   <td>명</td>
								   <td class="y">회</td>
								   <td>분</td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
							   </tr>
							   <tr>
								   <td>토요일</td>
								   <td class="y">명</td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td class="gy">명<span class="sm">(100%)</span></td>
								   <td>명</td>
								   <td class="y">회</td>
								   <td>분</td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
							   </tr>
							   <tr>
								   <td>일요일</td>
								   <td class="y">명</td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td class="gy">명<span class="sm">(100%)</span></td>
								   <td>명</td>
								   <td class="y">회</td>
								   <td>분</td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
							   </tr>
						   </table>
					   </div>
				   </li>
<!-----------------------------------------tw 05-->
				   <li>
						<p class="tw_data">(YYYY-MM-DD ~ YYYY-MM-DD)</p>
						<ul class="tw_btn02 clear v04">
						   <li class="on">
							   <h3>총 방문자</h3>
							   <h4 class="h4_mt">0,000명</h4>
						   </li>
						   <li>
							   <h3>상품등록</h3>
							   <h4>0,000명</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>상품구매</h3>
							   <h4>0,000명</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>시간당 평균 방문자</h3>
							   <h4 class="h4_mt">0,000명</h4>
						   </li>
						   <li>
							   <h3>방문횟수</h3>
							   <h4>0,000회</h4>
							   <p>1일당 평균 0.0회 방문</p>
						   </li>
						   <li>
							   <h3>시간당 평균 이용시간</h3>
							   <h4>MM분 SS초</h4>
							   <p>남:MM분SS초, 여:MM분SS초</p>
						   </li>
					   </ul>
					   <div class="tw_in">
						   <div class="gp clear">
							   <div class="gp_left">
									<h5 class="clear">
									그래프분석
										<ul class="clear">
											<li><span></span>전체</li>
											<li><span style="background-color: #68b133;"></span>APP(iOS)</li>
											<li><span style="background-color: #ff8c37;"></span>APP(And)</li>
											<li><span style="background-color: #9a4cc3;"></span>WEB</li>
										</ul>
									</h5>
								   <div class="mh_line"></div>
								   <div class="mh_r"></div>
								   <ul class="mh_box">
									   <li>HH시 ~ HH시</li>
									   <li>
										   <ul class="clear">
											   <li><span style="background-color: #68b133;"></span>APP(iOS)</li>
											   <li>0,000명</li>
										   </ul>
									   </li>
								   </ul>
							   </div>
							   <div class="gp_right"></div>
						   </div>
						   <div class="twin_exer clear">
							   <div class="btn03">엑셀 다운로드</div>
						   </div>
						   <table class="twin_t">
							   <tr>
								   <th rowspan="2">시간대</th>
								   <th rowspan="2" class="y">방문자</th>
								   <th colspan="3">APP 방문자</th>
								   <th rowspan="2">WEB 방문자</th>
								   <th rowspan="2" class="y">방문횟수</th>
								   <th rowspan="2">평균<br>이용시간</th>
								   <th colspan="7">재방문수</th>
							   </tr>
							   <tr>
								   <th style="border-left:1px solid #ededed">iOS</th>
								   <th>Android</th>
								   <th class="gy">합계</th>
								   <th style="border-left:1px solid #ededed">1회</th>
								   <th>2회</th>
								   <th>3회</th>
								   <th>4회</th>
								   <th>5회 이상</th>
								   <th>10회 이상</th>
								   <th>15회 이상</th>
							   </tr>
							   <tr>
								   <td>00시 ~ 01시</td>
								   <td class="y">명</td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td class="gy">명<span class="sm">(100%)</span></td>
								   <td>명</td>
								   <td class="y">회</td>
								   <td>분</td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
							   </tr>
							   <tr>
								   <td>01시 ~ 02시</td>
								   <td class="y">명</td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td class="gy">명<span class="sm">(100%)</span></td>
								   <td>명</td>
								   <td class="y">회</td>
								   <td>분</td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
							   </tr>
							   <tr>
								   <td>02시 ~ 03시</td>
								   <td class="y">명</td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td class="gy">명<span class="sm">(100%)</span></td>
								   <td>명</td>
								   <td class="y">회</td>
								   <td>분</td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
							   </tr>
							   <tr>
								   <td>03시 ~ 04시</td>
								   <td class="y">명</td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td>명<span class="sm">(00%)</span></td>
								   <td class="gy">명<span class="sm">(100%)</span></td>
								   <td>명</td>
								   <td class="y">회</td>
								   <td>분</td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
								   <td>명<span class="sm">(%)</span></td>
							   </tr>
						   </table>
					   </div>
				   </li>
			   </ul>
		   </div>
	   </div>
	</div>

<!--    footer연결-->
    <?php include "footer.php"; ?>
<!--    footer연결-->

</body>
</html>