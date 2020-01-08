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
   	   <h1>상품분석</h1>
	   <ul class="title clear">
			<li></li>
			<li>상품분석</li>
		</ul>
	   <div class="stt03 v05">
<!-----------------------------------------검색영역-->
		   <ul class="sc_tab">
			   <li class="on">
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
			   <li>
			   		<table class="sc">
					   <tr>
						   <th>기간</th>
						   <td class="cd_img clear" style="width:40%;">
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
						   </td>
						   <th>카테고리</th>
						   <td>
							   <select>
								   <option>1Depth 전체</option>
							   </select>
							   <select class="on">
								   <option>2Depth 전체</option>
							   </select>
							   <input type="button" value="검색">
						   </td>
					   </tr>
			   		</table>
			   </li>
			   <li>
			   		<table class="sc">
					   <tr>
						   <th>기간</th>
						   <td class="cd_img clear" style="width:40%;">
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
						   </td>
						   <th>지역</th>
						   <td>
							   <select>
								   <option>시/도 전체</option>
							   </select>
							   <select class="on">
								   <option>시/군/구 전체</option>
							   </select>
							   <select class="on">
								   <option>읍/면/동 전체</option>
							   </select>
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
				   <li class="on">일별 현황</li>
				   <li>월별 현황</li>
				   <li>요일별 현황</li>
				   <li>시간대별 현황</li>
				   <li>카테고리별 현황</li>
				   <li>거래희망지역별 현황</li>
			   </ul>
			   <ul class="tw">
<!-----------------------------------------tw 01-->
				   <li class="on">
					   <p class="tw_data">(YYYY-MM-DD ~ YYYY-MM-DD)</p>
						<ul class="tw_btn02 clear v05">
						   <li class="on">
							   <h3> 총상품등록</h3>
							   <h4>0,000건</h4>
							   <p>등록자 000명</p>
						   </li>
						   <li>
							   <h3>미개봉 상품</h3>
							   <h4>0,000건</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>거의새것 상품</h3>
							   <h4>0,000건</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>중고 상품</h3>
							   <h4>000건</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>한정판 등록</h3>
							   <h4 class="h4_mt">000건</h4>
						   </li>
						   <li>
							   <h3><span class="org">신규 상품등록</span></h3>
							   <h4>0,000건</h4>
							   <p>총 상품 대비 00%</p>
						   </li>
						   <li>
							   <h3><span class="org">재 상품등록</span></h3>
							   <h4>0,000건</h4>
							   <p>총 상품 대비 00%</p>
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
								   <ul class="mh_box clear">
									   <li>M월 DD일 (N)</li>
									   <li>
										   <ul class="clear">
											   <li><span style="background-color: #68b133;"></span>APP(iOS)</li>
											   <li>0,000건(100%)</li>
										   </ul>
									   </li>
									   <li class="mh_li">
										   <ul class="clear">
											   <li><span>1</span> 미개봉</li>
											   <li>000건(00%)</li>
										   </ul>
									   </li>
									   <li class="mh_li">
										   <ul class="clear">
											   <li><span>2</span> 거의새것</li>
											   <li>000건(00%)</li>
										   </ul>
									   </li>
									   <li class="mh_li">
										   <ul class="clear">
											   <li><span>3</span> 중고</li>
											   <li>000건(00%)</li>
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
								   <th rowspan="2" class="y">상품등록</th>
								   <th rowspan="2">신규등록</th>
								   <th rowspan="2">재등록</th>
								   <th colspan="3">APP 등록</th>
								   <th rowspan="2">WEB 등록</th>
								   <th rowspan="2">미개봉</th>
								   <th rowspan="2">거의새것</th>
								   <th rowspan="2">중고</th>
								   <th rowspan="2">한정판</th>
							   </tr>
							   <tr>
								   <th style="border-left:1px solid #ededed">iOS</th>
								   <th>Android</th>
								   <th class="gy">합계</th>
							   </tr>
							   <tr>
								   <td>2018-04-01 (월)</td>
								   <td class="y">건(100%)</td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(00%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
							   </tr>
							   <tr>
								   <td>YYYY-MM-DD (N)</td>
								   <td class="y">건(100%)</td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(00%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
							   </tr>
							   <tr>
								   <td>YYYY-MM-DD (N)</td>
								   <td class="y">건(100%)</td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(00%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
							   </tr>
							   <tr>
								   <td>YYYY-MM-DD (N)</td>
								   <td class="y">건(100%)</td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(00%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
							   </tr>
						   </table>
					   </div>
				   </li>
<!-----------------------------------------tw 02-->
				   <li>
				  		<p class="tw_data">(YYYY-MM ~ YYYY-MM)</p>
						<ul class="tw_btn02 clear v05">
						   <li class="on">
							   <h3> 총상품등록</h3>
							   <h4>0,000건</h4>
							   <p>등록자 000명</p>
						   </li>
						   <li>
							   <h3>미개봉 상품</h3>
							   <h4>0,000건</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>거의새것 상품</h3>
							   <h4>0,000건</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>중고 상품</h3>
							   <h4>000건</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>한정판 등록</h3>
							   <h4 class="h4_mt">000건</h4>
						   </li>
						   <li>
							   <h3><span class="org">신규 상품등록</span></h3>
							   <h4>0,000건</h4>
							   <p>총 상품 대비 00%</p>
						   </li>
						   <li>
							   <h3><span class="org">재 상품등록</span></h3>
							   <h4>0,000건</h4>
							   <p>총 상품 대비 00%</p>
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
											   <li>0,000건(100%)</li>
										   </ul>
									   </li>
									   <li class="mh_li">
										   <ul class="clear">
											   <li><span>1</span> 미개봉</li>
											   <li>000건(00%)</li>
										   </ul>
									   </li>
									   <li class="mh_li">
										   <ul class="clear">
											   <li><span>2</span> 거의새것</li>
											   <li>000건(00%)</li>
										   </ul>
									   </li>
									   <li class="mh_li">
										   <ul class="clear">
											   <li><span>3</span> 중고</li>
											   <li>000건(00%)</li>
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
								   <th rowspan="2" class="y">상품등록</th>
								   <th rowspan="2" class="y02">전월대비</th>
								   <th rowspan="2">신규등록</th>
								   <th rowspan="2">재등록</th>
								   <th colspan="3">APP 등록</th>
								   <th rowspan="2">WEB 등록</th>
								   <th rowspan="2">미개봉</th>
								   <th rowspan="2">거의새것</th>
								   <th rowspan="2">중고</th>
								   <th rowspan="2">한정판</th>
							   </tr>
							   <tr>
								   <th style="border-left:1px solid #ededed">iOS</th>
								   <th>Android</th>
								   <th class="gy">합계</th>
							   </tr>
							   <tr>
								   <td>YYYY-MM</td>
								   <td class="y">건<span class="sm">(100%)</span></td>
								   <td class="bl y02">%▼</td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(00%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
							   </tr>
							   <tr>
								   <td>YYYY-MM</td>
								   <td class="y">건<span class="sm">(100%)</span></td>
								   <td class="rd y02">%▲</td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(00%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
							   </tr>
							   <tr>
								   <td>YYYY-MM</td>
								   <td class="y">건<span class="sm">(100%)</span></td>
								   <td class="bl y02">%▼</td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(00%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
							   </tr>
							   <tr>
								   <td>YYYY-MM</td>
								   <td class="y">건<span class="sm">(100%)</span></td>
								   <td class="rd y02">%▲</td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(00%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
							   </tr>
						   </table>
					   </div>
				   </li>
<!-----------------------------------------tw 03-->
				   <li>
						<p class="tw_data">(YYYY-MM-DD ~ YYYY-MM-DD)</p>
						<ul class="tw_btn02 clear">
						   <li class="on">
							   <h3> 총상품등록</h3>
							   <h4>0,000건</h4>
							   <p>등록자 000명</p>
						   </li>
						   <li>
							   <h3>미개봉 상품</h3>
							   <h4>0,000건</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>거의새것 상품</h3>
							   <h4>0,000건</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>중고 상품</h3>
							   <h4>000건</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>한정판 등록</h3>
							   <h4 class="h4_mt">000건</h4>
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
											   <li>0,000건(100%)</li>
										   </ul>
									   </li>
									   <li class="mh_li">
										   <ul class="clear">
											   <li><span>1</span> 미개봉</li>
											   <li>000건(00%)</li>
										   </ul>
									   </li>
									   <li class="mh_li">
										   <ul class="clear">
											   <li><span>2</span> 거의새것</li>
											   <li>000건(00%)</li>
										   </ul>
									   </li>
									   <li class="mh_li">
										   <ul class="clear">
											   <li><span>3</span> 중고</li>
											   <li>000건(00%)</li>
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
								   <th rowspan="2" class="y">상품등록</th>
								   <th rowspan="2">신규등록</th>
								   <th rowspan="2">재등록</th>
								   <th colspan="3">APP 등록</th>
								   <th rowspan="2">WEB 등록</th>
								   <th rowspan="2">미개봉</th>
								   <th rowspan="2">거의새것</th>
								   <th rowspan="2">중고</th>
								   <th rowspan="2">한정판</th>
							   </tr>
							   <tr>
								   <th style="border-left:1px solid #ededed">iOS</th>
								   <th>Android</th>
								   <th class="gy">합계</th>
							   </tr>
							   <tr>
								   <td>월요일</td>
								   <td class="y">건<span class="sm">(100%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(00%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
							   </tr>
							   <tr>
								   <td>화요일</td>
								   <td class="y">건<span class="sm">(100%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(00%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
							   </tr>
							   <tr>
								   <td>수요일</td>
								   <td class="y">건<span class="sm">(100%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(00%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
							   </tr>
							   <tr>
								   <td>목요일</td>
								   <td class="y">건<span class="sm">(100%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(00%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
							   </tr>
							   <tr>
								   <td>금요일</td>
								   <td class="y">건<span class="sm">(100%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(00%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
							   </tr>
							   <tr>
								   <td>토요일</td>
								   <td class="y">건<span class="sm">(100%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(00%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
							   </tr>
							   <tr>
								   <td>일요일</td>
								   <td class="y">건<span class="sm">(100%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(00%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
							   </tr>
						   </table>
					   </div>
				   </li>
<!-----------------------------------------tw 04-->
				   <li>
				   		<p class="tw_data">(YYYY-MM-DD ~ YYYY-MM-DD)</p>
						<ul class="tw_btn02 clear">
						   <li class="on">
							   <h3> 총상품등록</h3>
							   <h4>0,000건</h4>
							   <p>등록자 000명</p>
						   </li>
						   <li>
							   <h3>미개봉 상품</h3>
							   <h4>0,000건</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>거의새것 상품</h3>
							   <h4>0,000건</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>중고 상품</h3>
							   <h4>000건</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>한정판 등록</h3>
							   <h4 class="h4_mt">000건</h4>
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
											   <li>0,000건(100%)</li>
										   </ul>
									   </li>
									   <li class="mh_li">
										   <ul class="clear">
											   <li><span>1</span> 미개봉</li>
											   <li>000건(00%)</li>
										   </ul>
									   </li>
									   <li class="mh_li">
										   <ul class="clear">
											   <li><span>2</span> 거의새것</li>
											   <li>000건(00%)</li>
										   </ul>
									   </li>
									   <li class="mh_li">
										   <ul class="clear">
											   <li><span>3</span> 중고</li>
											   <li>000건(00%)</li>
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
								   <th rowspan="2" class="y">상품등록</th>
								   <th rowspan="2">신규등록</th>
								   <th rowspan="2">재등록</th>
								   <th colspan="3">APP 등록</th>
								   <th rowspan="2">WEB 등록</th>
								   <th rowspan="2">미개봉</th>
								   <th rowspan="2">거의새것</th>
								   <th rowspan="2">중고</th>
								   <th rowspan="2">한정판</th>
							   </tr>
							   <tr>
								   <th style="border-left:1px solid #ededed">iOS</th>
								   <th>Android</th>
								   <th class="gy">합계</th>
							   </tr>
							   <tr>
								   <td>00시 ~ 01시</td>
								   <td class="y">건<span class="sm">(100%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(00%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
							   </tr>
							   <tr>
								   <td>01시 ~ 02시</td>
								   <td class="y">건<span class="sm">(100%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(00%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
							   </tr>
							   <tr>
								   <td>02시 ~ 03시</td>
								   <td class="y">건<span class="sm">(100%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(00%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
							   </tr>
							   <tr>
								   <td>03시 ~ 04시</td>
								   <td class="y">건<span class="sm">(100%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(00%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
							   </tr>
						   </table>
					   </div>
				   </li>
<!-----------------------------------------tw 05-->
				   <li>
						<p class="tw_data">(YYYY-MM-DD ~ YYYY-MM-DD)</p>
						<ul class="tw_btn02 clear">
						   <li class="on">
							   <h3>총 상품등록</h3>
							   <h4>0,000건</h4>
							   <p>등록자 000명</p>
						   </li>
						   <li>
							   <h3>미개봉 상품</h3>
							   <h4>0,000건</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>거의새것 상품</h3>
							   <h4>0,000건</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>중고 상품</h3>
							   <h4>000건</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>한정판 등록</h3>
							   <h4 class="h4_mt">000건</h4>
						   </li>
					   </ul>
					   <div class="tw_in">
						   <div class="gp clear">
							   <div class="gp_left v02">
									<h5 class="clear">
									그래프분석
										<ul class="clear">
											<li><span style="background-color: #93e1eb;"></span>미개봉</li>
											<li><span style="background-color: #ca94e6;"></span>거의새것</li>
											<li><span style="background-color: #f7c39d;"></span>중고</li>
										</ul>
									</h5>
								   <div class="mh_line"></div>
								   <div class="mh_r"></div>
								   <ul class="mh_box">
									   <li style="font-size: 17px; padding: 0 20px;"><b>총 0,000건(100%)</b></li>
									   <li class="mh_li">
										   <ul class="clear">
											   <li><span class="c" style="background-color: #93e1eb;"></span> 미개봉</li>
											   <li>00건(00%)</li>
										   </ul>
									   </li>
									   <li class="mh_li">
										   <ul class="clear">
											   <li><span class="c" style="background-color: #ca94e6;"></span> 거의새것</li>
											   <li>00건(00%)</li>
										   </ul>
									   </li>
									   <li class="mh_li">
										   <ul class="clear">
											   <li><span class="c"  style="background-color: #f7c39d;"></span> 중고</li>
											   <li>00건(00%)</li>
										   </ul>
									   </li>
								   </ul>
							   </div>
						   </div>
						   <div class="twin_exer clear">
							   <div class="btn03">엑셀 다운로드</div>
						   </div>
						   <table class="twin_t">
							   <tr>
								   <th rowspan="2">날짜</th>
								   <th rowspan="2">1depth 카테고리</th>
								   <th rowspan="2" class="y">상품등록</th>
								   <th rowspan="2">신규등록</th>
								   <th rowspan="2">재등록</th>
								   <th colspan="3">APP 등록</th>
								   <th rowspan="2">WEB 등록</th>
								   <th rowspan="2">미개봉</th>
								   <th rowspan="2">거의새것</th>
								   <th rowspan="2">중고</th>
								   <th rowspan="2">한정판</th>
							   </tr>
							   <tr>
								   <th style="border-left:1px solid #ededed">iOS</th>
								   <th>Android</th>
								   <th class="gy">합계</th>
							   </tr>
							   <tr>
								   <td rowspan="4">YYYY-MM-DD (N)</td>
								   <td style="text-align: center; padding:0px;">카테고리명</td>
								   <td class="y">건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(00%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
							   </tr>
							   <tr>
								   <td class="td_c">카테고리명</td>
								   <td class="y">건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(00%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
							   </tr>
							   <tr>
								   <td class="td_c">카테고리명</td>
								   <td class="y">건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(00%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
							   </tr>
							   <tr class="gray">
								   <td class="td_c">합계</td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
							   </tr>
							   <tr>
								   <td rowspan="3">YYYY-MM-DD (N)</td>
								   <td style="text-align: center; padding:0px;">카테고리명</td>
								   <td class="y">건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(00%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
							   </tr>
							   <tr>
								   <td class="td_c">카테고리명</td>
								   <td class="y">건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(00%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
							   </tr>
							   <tr class="gray">
								   <td class="td_c">합계</td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
								   <td>건</td>
							   </tr>
						   </table>
					   </div>
				   </li>
<!-----------------------------------------tw 06-->
				   <li>
						<p class="tw_data">(YYYY-MM-DD ~ YYYY-MM-DD)</p>
						<ul class="tw_btn02 v06 clear">
						   <li class="on">
							   <h3>총 거래희망지역 설정</h3>
							   <h4 class="h4_mt">0,000건</h4>
						   </li>
						   <li>
							   <h3>총 상품등록</h3>
							   <h4 class="h4_mt">000건</h4>
						   </li>
					   </ul>
					   <div class="tw_in">
						   <div class="gp clear">
							   <div class="gp_left v02">
									<h5 class="clear">
									그래프분석
									</h5>
								   <div class="mh_line"></div>
								   <div class="mh_r"></div>
								   <ul class="mh_box">
									   <li style="font-size: 17px; padding: 10px 40px 0px 40px;"><b>총 0,000건</b></li>
								   </ul>
							   </div>
						   </div>
						   <div class="twin_exer clear">
							   <div class="btn03">엑셀 다운로드</div>
						   </div>
						   <table class="twin_t">
							   <tr>
								   <th>날짜</th>
								   <th>시/도</th>
								   <th class="y">거래희망지역 설정</th>
								   <th>상품등록</th>
							   </tr>
							   <tr>
								   <td rowspan="4">YYYY-MM-DD (N)</td>
								   <td class="td_c" style="text-align: center; padding:0px;">시/도</td>
								   <td class="y">개</td>
								   <td>건</td>
							   </tr>
							   <tr>
								   <td class="td_c">시/도</td>
								   <td class="y">개</td>
								   <td>건</td>
							   </tr>
							   <tr>
								   <td class="td_c">시/도</td>
								   <td class="y">개</td>
								   <td>건</td>
							   </tr>
							   <tr class="gray">
								   <td class="td_c">합계</td>
								   <td>개</td>
								   <td>건</td>
							   </tr>
							   <tr>
								   <td rowspan="3">YYYY-MM-DD (N)</td>
								   <td class="td_c" style="text-align: center; padding:0px;">시/도</td>
								   <td class="y">개</td>
								   <td>건</td>
							   </tr>
							   <tr>
								   <td class="td_c">시/도</td>
								   <td class="y">개</td>
								   <td>건</td>
							   </tr>
							   <tr class="gray">
								   <td class="td_c">합계</td>
								   <td>개</td>
								   <td>건</td>
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