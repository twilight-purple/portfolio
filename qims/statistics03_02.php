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
			$(".snb_wrap .snb>li:nth-child(4)>.snb_sub").addClass("view");
			$(".snb_wrap .snb>li:nth-child(4)>ul>li:nth-child(2)").addClass("on");
			$(".snb_wrap .snb>li:nth-child(4)>span").addClass("on");
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
   	   <h1>회원분석</h1>
	   <ul class="title clear">
			<li></li>
			<li>탈퇴회원</li>
		</ul>
	   <div class="stt03 v02">
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
		   </ul>
		   
<!-----------------------------------------table-->
		   <div class="twp">
<!-----------------------------------------table 버튼-->
			   <ul class="tw_btn clear">
				   <li class="on">일별 현황</li>
				   <li>월별 현황</li>
				   <li>요일별 현황</li>
				   <li>시간대별 현황</li>
			   </ul>
			   <ul class="tw">
<!-----------------------------------------tw 01-->
				   <li class="on">
				   		<p class="tw_data">(YYYY-MM-DD ~ YYYY-MM-DD)</p>
						<ul class="tw_btn02 clear v02">
						   <li class="on">
							   <h3>총 탈퇴회원</h3>
							   <h4>0,000명</h4>
							   <p>(100%)</p>
						   </li>
						   <li>
							   <h3>상품 등록경험</h3>
							   <h4>0,000명</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>상품 구매경험</h3>
							   <h4>0,000명</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>일평균 탈퇴회원</h3>
							   <h4 class="h4_mt">0,000명</h4>
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
									   <li>MM월 DD일(N)</li>
									   <li>
										   <ul class="clear">
											   <li><span style="background-color: #68b133;"></span>APP(iOS)</li>
											   <li>1,000명</li>
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
								   <th rowspan="2" class="y">탈퇴회원</th>
								   <th rowspan="2" class="y02">전일대비</th>
								   <th colspan="3">APP 탈퇴</th>
								   <th rowspan="2">WEB 탈퇴</th>
							   </tr>
							   <tr>
								   <th style="border-left:1px solid #ededed">iOS</th>
								   <th>Android</th>
								   <th class="gy">합계</th>
							   </tr>
							   <tr>
								   <td>2018-04-01 (월)</td>
								   <td class="y">10,000명</td>
								   <td class="bl y02">7.3%▼</td>
								   <td>3,000명<span class="sm">(33%)</span></td>
								   <td>6,000명<span class="sm">(67%)</span></td>
								   <td class="gy">9,000명<span class="sm">(100%)</span></td>
								   <td>1,000명</td>
							   </tr>
							   <tr>
								   <td>YYYY-MM-DD (N)</td>
								   <td class="y">11,000명</td>
								   <td class="rd y02">10.0%▲</td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td class="gy">0,000명<span class="sm">(100%)</span></td>
								   <td>0,000명</td>
							   </tr>
							   <tr>
								   <td>YYYY-MM-DD (N)</td>
								   <td class="y">11,000명</td>
								   <td class="rd y02">00.0%▲</td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td class="gy">0,000명<span class="sm">(100%)</span></td>
								   <td>0,000명</td>
							   </tr>
							   <tr>
								   <td>YYYY-MM-DD (N)</td>
								   <td class="y">11,000명</td>
								   <td class="bl y02">00.0%▼</td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td class="gy">0,000명<span class="sm">(100%)</span></td>
								   <td>0,000명</td>
							   </tr>
							   <tr>
								   <td>YYYY-MM-DD (N)</td>
								   <td class="y">11,000명</td>
								   <td class="rd y02">00.0%▲</td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td class="gy">0,000명<span class="sm">(100%)</span></td>
								   <td>0,000명</td>
							   </tr>
							   <tr>
								   <td>YYYY-MM-DD (N)</td>
								   <td class="y">11,000명</td>
								   <td class="bl y02">10.0%▼</td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td class="gy">0,000명<span class="sm">(100%)</span></td>
								   <td>0,000명</td>
							   </tr>
								<tr>
								   <td>YYYY-MM-DD (N)</td>
								   <td class="y">11,000명</td>
								   <td class="rd y02">00.0%▲</td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td class="gy">0,000명<span class="sm">(100%)</span></td>
								   <td>0,000명</td>
							   </tr>
						   </table>
					   </div>
				   </li>
<!-----------------------------------------tw 02-->
				   <li>
				   		<p class="tw_data">(YYYY-MM ~ YYYY-MM)</p>
						<ul class="tw_btn02 clear v02">
						   <li class="on">
							   <h3>총 탈퇴회원</h3>
							   <h4>0,000명</h4>
							   <p>(100%)</p>
						   </li>
						   <li>
							   <h3>상품 등록경험</h3>
							   <h4>0,000명</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>상품 구매경험</h3>
							   <h4>0,000명</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>월평균 탈퇴회원</h3>
							   <h4 class="h4_mt">0,000명</h4>
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
											   <li>1,000명</li>
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
								   <th rowspan="2" class="y">탈퇴회원</th>
								   <th rowspan="2" class="y02">전월대비</th>
								   <th colspan="3">APP 탈퇴</th>
								   <th rowspan="2">WEB 탈퇴</th>
							   </tr>
							   <tr>
								   <th style="border-left:1px solid #ededed">iOS</th>
								   <th>Android</th>
								   <th class="gy">합계</th>
							   </tr>
							   <tr>
								   <td>2018-04</td>
								   <td class="y">10,000명</td>
								   <td class="bl y02">7.3%▼</td>
								   <td>3,000명<span class="sm">(33%)</span></td>
								   <td>6,000명<span class="sm">(67%)</span></td>
								   <td class="gy">9,000명<span class="sm">(100%)</span></td>
								   <td>1,000명</td>
							   </tr>
							   <tr>
								   <td>YYYY-MM</td>
								   <td class="y">11,000명</td>
								   <td class="rd y02">10.0%▲</td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td class="gy">0,000명<span class="sm">(100%)</span></td>
								   <td>0,000명</td>
							   </tr>
							   <tr>
								   <td>YYYY-MM</td>
								   <td class="y">11,000명</td>
								   <td class="rd y02">00.0%▲</td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td class="gy">0,000명<span class="sm">(100%)</span></td>
								   <td>0,000명</td>
							   </tr>
							   <tr>
								   <td>YYYY-MM</td>
								   <td class="y">11,000명</td>
								   <td class="bl y02">00.0%▼</td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td class="gy">0,000명<span class="sm">(100%)</span></td>
								   <td>0,000명</td>
							   </tr>
							   <tr>
								   <td>YYYY-MM</td>
								   <td class="y">11,000명</td>
								   <td class="rd y02">00.0%▲</td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td class="gy">0,000명<span class="sm">(100%)</span></td>
								   <td>0,000명</td>
							   </tr>
							   <tr>
								   <td>YYYY-MM</td>
								   <td class="y">11,000명</td>
								   <td class="bl y02">10.0%▼</td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td class="gy">0,000명<span class="sm">(100%)</span></td>
								   <td>0,000명</td>
							   </tr>
								<tr>
								   <td>YYYY-MM</td>
								   <td class="y">11,000명</td>
								   <td class="rd y02">00.0%▲</td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td class="gy">0,000명<span class="sm">(100%)</span></td>
								   <td>0,000명</td>
							   </tr>
						   </table>
					   </div>
				   </li>
<!-----------------------------------------tw 03-->
				   <li>
				   		<p class="tw_data">(YYYY-MM-DD ~ YYYY-MM-DD)</p>
						<ul class="tw_btn02 clear v03">
						   <li class="on">
							   <h3>총 탈퇴회원</h3>
							   <h4>0,000명</h4>
							   <p>(100%)</p>
						   </li>
						   <li>
							   <h3>상품 등록경험</h3>
							   <h4>0,000명</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>상품 구매경험</h3>
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
									   <li>N요일</li>
									   <li>
										   <ul class="clear">
											   <li><span style="background-color: #68b133;"></span>APP(iOS)</li>
											   <li>1,000명</li>
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
								   <th rowspan="2" class="y">탈퇴회원</th>
								   <th colspan="3" style="width:40%;">APP 탈퇴</th>
								   <th rowspan="2">WEB 탈퇴</th>
							   </tr>
							   <tr>
								   <th style="border-left:1px solid #ededed">iOS</th>
								   <th>Android</th>
								   <th class="gy">합계</th>
							   </tr>
							   <tr>
								   <td>월요일</td>
								   <td class="y">10,000명</td>
								   <td>3,000명<span class="sm">(33%)</span></td>
								   <td>6,000명<span class="sm">(67%)</span></td>
								   <td class="gy">9,000명<span class="sm">(100%)</span></td>
								   <td>1,000명</td>
							   </tr>
							   <tr>
								   <td>화요일</td>
								   <td class="y">11,100명</td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td class="gy">0,000명<span class="sm">(100%)</span></td>
								   <td>0,000명</td>
							   </tr>
							   <tr>
								   <td>수요일</td>
								   <td class="y">0,000명</td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td class="gy">0,000명<span class="sm">(100%)</span></td>
								   <td>0,000명</td>
							   </tr>
							   <tr>
								   <td>목요일</td>
								   <td class="y">0,000명</td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td class="gy">0,000명<span class="sm">(100%)</span></td>
								   <td>0,000명</td>
							   </tr>
							   <tr>
								   <td>금요일</td>
								   <td class="y">0,000명</td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td class="gy">0,000명<span class="sm">(100%)</span></td>
								   <td>0,000명</td>
							   </tr>
							   <tr>
								   <td>토요일</td>
								   <td class="y">0,000명</td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td class="gy">0,000명<span class="sm">(100%)</span></td>
								   <td>0,000명</td>
							   </tr>
							   <tr>
								   <td>일요일</td>
								   <td class="y">0,000명</td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td class="gy">0,000명<span class="sm">(100%)</span></td>
								   <td>0,000명</td>
							   </tr>
						   </table>
					   </div>
				   </li>
<!-----------------------------------------tw 04-->
				   <li>
				   		<p class="tw_data">(YYYY-MM-DD ~ YYYY-MM-DD)</p>
						<ul class="tw_btn02 clear v02">
						   <li class="on">
							   <h3>총 탈퇴회원</h3>
							   <h4>0,000명</h4>
							   <p>(100%)</p>
						   </li>
						   <li>
							   <h3>상품 등록경험</h3>
							   <h4>0,000명</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>상품 구매경험</h3>
							   <h4>0,000명</h4>
							   <p>(00%)</p>
						   </li>
						   <li>
							   <h3>시간당 평균 탈퇴회원</h3>
							   <h4 class="h4_mt">0,000명</h4>
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
											   <li>1,000명</li>
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
								   <th rowspan="2" class="y">탈퇴회원</th>
								   <th colspan="3" style="width:40%;">APP 탈퇴</th>
								   <th rowspan="2">WEB 탈퇴</th>
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
							   </tr>
							   <tr>
								   <td>01시~02시</td>
								   <td class="y">11,000명</td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td class="gy">0,000명<span class="sm">(100%)</span></td>
								   <td>0,000명</td>
							   </tr>
							   <tr>
								   <td>02시~03시</td>
								   <td class="y">0,000명</td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td class="gy">0,000명<span class="sm">(100%)</span></td>
								   <td>0,000명</td>
							   </tr>
							   <tr>
								   <td>03시~04시</td>
								   <td class="y">0,000명</td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td>0,000명<span class="sm">(00%)</span></td>
								   <td class="gy">0,000명<span class="sm">(100%)</span></td>
								   <td>0,000명</td>
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