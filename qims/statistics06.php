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
   	   <h1>거래분석</h1>
	   <ul class="title clear">
			<li></li>
			<li>거래분석</li>
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
		   </ul>
		   
<!-----------------------------------------table-->
		   <div class="twp">
<!-----------------------------------------table 버튼-->
			   <ul class="tw_btn clear">
				   <li class="on">일별 현황</li>
				   <li>월별 현황</li>
				   <li>요일별 현황</li>
				   <li>카테고리별 현황</li>
			   </ul>
			   <ul class="tw">
<!-----------------------------------------tw 01-->
				   <li class="on">
					   <p class="tw_data">(YYYY-MM-DD ~ YYYY-MM-DD)</p>
						<ul class="tw_btn02 clear v05">
						   <li class="on">
							   <h3>총 거래</h3>
							   <h4>0,000건</h4>
							   <p>(100%)</p>
						   </li>
						   <li>
							   <h3>직거래</h3>
							   <h4>0,000건</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>택배거래</h3>
							   <h4>0,000건</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>타서비스거래</h3>
							   <h4>000건</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>기타거래</h3>
							   <h4>000건</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>평균 <span class="org">직거래</span> 단가</h3>
							   <h4 class="h4_mt">000,000원</h4>
						   </li>
						   <li>
							   <h3>평균 <span class="org">택배거래</span> 단가</h3>
							   <h4 class="h4_mt">000,000원</h4>
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
									   <li>M월 DD일 (N)</li>
									   <li>
										   <ul class="clear">
											   <li><span style="background-color: #68b133;"></span>APP(iOS)</li>
											   <li>0,000건(100%)</li>
										   </ul>
									   </li>
									   <li class="mh_li">
										   <ul class="clear">
											   <li><span>1</span> 직거래</li>
											   <li>000건(00%)</li>
										   </ul>
									   </li>
									   <li class="mh_li">
										   <ul class="clear">
											   <li><span>2</span> 택배거래</li>
											   <li>000건(00%)</li>
										   </ul>
									   </li>
									   <li class="mh_li">
										   <ul class="clear">
											   <li><span>3</span> 타서비스거래</li>
											   <li>000건(00%)</li>
										   </ul>
									   </li>
									   <li class="mh_li">
										   <ul class="clear">
											   <li><span>4</span> 기타거래</li>
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
								   <th rowspan="2" class="y">총거래</th>
								   <th rowspan="2">총 거래금액</th>
								   <th colspan="3">APP 거래</th>
								   <th rowspan="2">WEB 거래</th>
								   <th colspan="2">직거래</th>
								   <th colspan="2">택배거래</th>
								   <th colspan="2">타서비스거래</th>
								   <th colspan="2">기타거래</th>
							   </tr>
							   <tr>
								   <th style="border-left:1px solid #ededed">iOS</th>
								   <th>Android</th>
								   <th class="gy">합계</th>
								   <th style="border-left:1px solid #ededed">건수</th>
								   <th>금액</th>
								   <th style="border-left:1px solid #ededed">건수</th>
								   <th>금액</th>
								   <th style="border-left:1px solid #ededed">건수</th>
								   <th>금액</th>
								   <th style="border-left:1px solid #ededed">건수</th>
								   <th>금액</th>
							   </tr>
							   <tr>
								   <td>YYYY-MM-DD (N)</td>
								   <td class="y">건</td>
								   <td>원</td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(00%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
							   </tr>
							   <tr>
								   <td>YYYY-MM-DD (N)</td>
								   <td class="y">건</td>
								   <td>원</td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(00%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
							   </tr>
							   <tr>
								   <td>YYYY-MM-DD (N)</td>
								   <td class="y">건</td>
								   <td>원</td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(00%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
							   </tr>
							   <tr>
								   <td>YYYY-MM-DD (N)</td>
								   <td class="y">건</td>
								   <td>원</td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(00%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
							   </tr>
						   </table>
					   </div>
				   </li>
<!-----------------------------------------tw 02-->
				   <li>
				  		<p class="tw_data">(YYYY-MM ~ YYYY-MM)</p>
						<ul class="tw_btn02 clear v05">
						   <li class="on">
							   <h3>총 거래</h3>
							   <h4>0,000건</h4>
							   <p>(100%)</p>
						   </li>
						   <li>
							   <h3>직거래</h3>
							   <h4>0,000건</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>택배거래</h3>
							   <h4>0,000건</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>타서비스거래</h3>
							   <h4>000건</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>기타거래</h3>
							   <h4>000건</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>평균 <span class="org">직거래</span> 단가</h3>
							   <h4 class="h4_mt">000,000원</h4>
						   </li>
						   <li>
							   <h3>평균 <span class="org">택배거래</span> 단가</h3>
							   <h4 class="h4_mt">000,000원</h4>
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
											   <li><span>1</span> 직거래</li>
											   <li>000건(00%)</li>
										   </ul>
									   </li>
									   <li class="mh_li">
										   <ul class="clear">
											   <li><span>2</span> 택배거래</li>
											   <li>000건(00%)</li>
										   </ul>
									   </li>
									   <li class="mh_li">
										   <ul class="clear">
											   <li><span>3</span> 타서비스거래</li>
											   <li>000건(00%)</li>
										   </ul>
									   </li>
									   <li class="mh_li">
										   <ul class="clear">
											   <li><span>4</span> 기타거래</li>
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
								   <th rowspan="2" class="y">총 거래</th>
								   <th rowspan="2" class="y02">전월대비</th>
								   <th rowspan="2">총 거래금액</th>
								   <th colspan="3">APP 거래</th>
								   <th rowspan="2">WEB 거래</th>
								   <th colspan="2">직거래</th>
								   <th colspan="2">택배거래</th>
								   <th colspan="2">타서비스거래</th>
								   <th colspan="2">기타거래</th>
							   </tr>
							   <tr>
								   <th style="border-left:1px solid #ededed">iOS</th>
								   <th>Android</th>
								   <th class="gy">합계</th>
								   <th style="border-left:1px solid #ededed">건수</th>
								   <th>금액</th>
								   <th style="border-left:1px solid #ededed">건수</th>
								   <th>금액</th>
								   <th style="border-left:1px solid #ededed">건수</th>
								   <th>금액</th>
								   <th style="border-left:1px solid #ededed">건수</th>
								   <th>금액</th>
							   </tr>
							   <tr>
								   <td>YYYY-MM</td>
								   <td class="y">건</td>
								   <td class="bl y02">%▼</td>
								   <td>원</td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(100%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
							   </tr>
							   <tr>
								   <td>YYYY-MM</td>
								   <td class="y">건</td>
								   <td class="rd y02">%▲</td>
								   <td>원</td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(100%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
							   </tr>
							   <tr>
								   <td>YYYY-MM</td>
								   <td class="y">건</td>
								   <td class="bl y02">%▼</td>
								   <td>원</td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(100%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
							   </tr>
							   <tr>
								   <td>YYYY-MM</td>
								   <td class="y">건</td>
								   <td class="rd y02">%▲</td>
								   <td>원</td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(100%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
							   </tr>
						   </table>
					   </div>
				   </li>
<!-----------------------------------------tw 03-->
				   <li>
						<p class="tw_data">(YYYY-MM-DD ~ YYYY-MM-DD)</p>
						<ul class="tw_btn02 clear">
						   <li class="on">
							   <h3>총 거래</h3>
							   <h4>0,000건</h4>
							   <p>(100%)</p>
						   </li>
						   <li>
							   <h3>직거래</h3>
							   <h4>0,000건</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>택배거래</h3>
							   <h4>0,000건</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>타서비스거래</h3>
							   <h4>000건</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>기타거래</h3>
							   <h4>000건</h4>
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
									   <li>N요일</li>
									   <li>
										   <ul class="clear">
											   <li><span style="background-color: #68b133;"></span>APP(iOS)</li>
											   <li>0,000건(100%)</li>
										   </ul>
									   </li>
									   <li class="mh_li">
										   <ul class="clear">
											   <li><span>1</span> 직거래</li>
											   <li>000건(00%)</li>
										   </ul>
									   </li>
									   <li class="mh_li">
										   <ul class="clear">
											   <li><span>2</span> 택배거래</li>
											   <li>000건(00%)</li>
										   </ul>
									   </li>
									   <li class="mh_li">
										   <ul class="clear">
											   <li><span>3</span> 타서비스거래</li>
											   <li>000건(00%)</li>
										   </ul>
									   </li>
									   <li class="mh_li">
										   <ul class="clear">
											   <li><span>4</span> 기타거래</li>
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
								   <th rowspan="2" class="y">총 거래</th>
								   <th rowspan="2">총 거래금액</th>
								   <th colspan="3">APP 거래</th>
								   <th rowspan="2">WEB 거래</th>
								   <th colspan="2">직거래</th>
								   <th colspan="2">택배거래</th>
								   <th colspan="2">타서비스거래</th>
								   <th colspan="2">기타거래</th>
							   </tr>
							   <tr>
								   <th style="border-left:1px solid #ededed">iOS</th>
								   <th>Android</th>
								   <th class="gy">합계</th>
								   <th style="border-left:1px solid #ededed">건수</th>
								   <th>금액</th>
								   <th style="border-left:1px solid #ededed">건수</th>
								   <th>금액</th>
								   <th style="border-left:1px solid #ededed">건수</th>
								   <th>금액</th>
								   <th style="border-left:1px solid #ededed">건수</th>
								   <th>금액</th>
							   </tr>
							   <tr>
								   <td>월요일</td>
								   <td class="y">건</td>
								   <td>원</td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(00%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
							   </tr>
							   <tr>
								   <td>화요일</td>
								   <td class="y">건</td>
								   <td>원</td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(00%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
							   </tr>
							   <tr>
								   <td>수요일</td>
								   <td class="y">건</td>
								   <td>원</td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(00%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
							   </tr>
							   <tr>
								   <td>목요일</td>
								   <td class="y">건</td>
								   <td>원</td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(00%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
							   </tr>
							   <tr>
								   <td>금요일</td>
								   <td class="y">건</td>
								   <td>원</td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(00%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
							   </tr>
							   <tr>
								   <td>토요일</td>
								   <td class="y">건</td>
								   <td>원</td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(00%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
							   </tr>
							   <tr>
								   <td>일요일</td>
								   <td class="y">건</td>
								   <td>원</td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(00%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
							   </tr>
						   </table>
					   </div>
				   </li>
<!-----------------------------------------tw 04-->
				   <li>
				   		<p class="tw_data">(YYYY-MM-DD ~ YYYY-MM-DD)</p>
						<ul class="tw_btn02 clear">
						   <li class="on">
							   <h3>총 거래</h3>
							   <h4>0,000건</h4>
							   <p>(100%)</p>
						   </li>
						   <li>
							   <h3>직거래</h3>
							   <h4>0,000건</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>택배거래</h3>
							   <h4>0,000건</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>타서비스거래</h3>
							   <h4>000건</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>기타거래</h3>
							   <h4>000건</h4>
							   <p>(00%)</p>
						   </li>
					   </ul>
					   <div class="tw_in">
						   <div class="gp clear">
							   <div class="gp_left v02">
									<h5 class="clear">
									그래프분석
										<ul class="clear">
											<li><span style="background-color: #93e1eb;"></span>직거래</li>
											<li><span style="background-color: #ca94e6;"></span>택배거래</li>
											<li><span style="background-color: #f7c39d;"></span>타서비스거래</li>
											<li><span style="background-color: #8fdd57;"></span>기타거래</li>
										</ul>
									</h5>
								   <div class="mh_line"></div>
								   <div class="mh_r"></div>
								   <ul class="mh_box">
									   <li style="font-size: 17px; padding: 0 20px;"><b>총 0,000건(100%)</b></li>
									   <li class="mh_li">
										   <ul class="clear">
											   <li><span class="c" style="background-color: #93e1eb;"></span> 직거래</li>
											   <li>0,000건(00%)</li>
										   </ul>
									   </li>
									   <li class="mh_li">
										   <ul class="clear">
											   <li><span class="c" style="background-color: #ca94e6;"></span> 택배거래</li>
											   <li>0,000건(00%)</li>
										   </ul>
									   </li>
									   <li class="mh_li">
										   <ul class="clear">
											   <li><span class="c"  style="background-color: #f7c39d;"></span> 타서비스거래</li>
											   <li>0,000건(00%)</li>
										   </ul>
									   </li>
									   <li class="mh_li">
										   <ul class="clear">
											   <li><span class="c"  style="background-color: #8fdd57;"></span> 기타거래</li>
											   <li>0,000건(00%)</li>
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
								   <th rowspan="2" class="y">총 거래</th>
								   <th rowspan="2">총 거래금액</th>
								   <th colspan="3">APP 거래</th>
								   <th rowspan="2">WEB 거래</th>
								   <th colspan="2">직거래</th>
								   <th colspan="2">택배거래</th>
								   <th colspan="2">타서비스거래</th>
								   <th colspan="2">기타거래</th>
							   </tr>
							   <tr>
								   <th style="border-left:1px solid #ededed">iOS</th>
								   <th>Android</th>
								   <th class="gy">합계</th>
								   <th style="border-left:1px solid #ededed">건수</th>
								   <th>금액</th>
								   <th style="border-left:1px solid #ededed">건수</th>
								   <th>금액</th>
								   <th style="border-left:1px solid #ededed">건수</th>
								   <th>금액</th>
								   <th style="border-left:1px solid #ededed">건수</th>
								   <th>금액</th>
							   </tr>
							   <tr>
								   <td rowspan="4">YYYY-MM-DD (N)</td>
								   <td style="padding:0px; text-align: center;">카테고리명</td>
								   <td class="y">건</td>
								   <td>원</td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(100%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
							   </tr>
							   <tr>
								   <td class="td_r02">카테고리명</td>
								   <td class="y">건</td>
								   <td>원</td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(100%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
							   </tr>
							   <tr>
								   <td class="td_r02">카테고리명</td>
								   <td class="y">건</td>
								   <td>원</td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(100%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
							   </tr>
							   <tr class="gray">
								   <td class="td_r02">합계</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(100%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
							   </tr>
							   <tr>
								   <td rowspan="4">YYYY-MM-DD (N)</td>
								   <td style="padding:0px; text-align: center;">카테고리명</td>
								   <td class="y">건</td>
								   <td>원</td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(100%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
							   </tr>
							   <tr>
								   <td class="td_r02">카테고리명</td>
								   <td class="y">건</td>
								   <td>원</td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td class="gy">건<span class="sm">(100%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
							   </tr>
							   <tr class="gray">
								   <td class="td_r02">합계</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(00%)</span></td>
								   <td>건<span class="sm">(100%)</span></td>
								   <td>건</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
								   <td>건</td>
								   <td>원</td>
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