<!DOCTYPE html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
    <title>qdillion</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script src="js/jquery-ui.min.js"></script>
	<script src="js/int.js"></script>
    <script src="js/deal.js"></script>
</head>
    <body>
   
<!--   gnb/snb연결-->
  	<?php include "gnb.php"; ?>
    <?php include "snb.php"; ?>
<!--   gnb/snb연결-->

  
   <div id="wrap">
<!--   타이틀-->
   	   <h1>즉시송금관리</h1>
	   <ul class="title clear">
			<li></li>
			<li>
				즉시송금관리 &nbsp;<span>즉시송금 거래내역을 조회 및 확인할 수 있습니다. 기간 검색 시 해당 기간의 거래내역 요약이 노출됩니다.</span>
			</li>
		</ul>
<!--   타이틀-->
<!--   검색영역-->
	   <div class="dl04">
		   <table class="sc">
			   <tr>
				   <th>기간</th>
				   <td class="cd_img clear">
				   <input type="text" name="sc_txt" value="" class="sc_cd01">
				   <input type="button" name="sc_btn" value="" class="datepicker n01">
				   ~
				   <input type="text" name="sc_txt" value="" class="sc_cd02">
				   <input type="button" name="sc_btn" value="" class="datepicker n02">
				   <span class="data_btn clear">
					   <li>오늘</li>
					   <li>1주일</li>
					   <li>1개월</li>
					   <li>3개월</li>
					   <li>6개월</li>
					   <li>1년</li>
				   </span>
				   <label class="cb">
					 <input type="checkbox" class="sc_cb not02" value="">
					 <span></span>
					 <p>전체</p>
				   </label>
				   </td>
			   </tr>
		   </table>
		   <table class="sc v02">
			   <tr>
				   <th>카테고리</th>
				   <td class="depth">
					   <select>
						   <option>1Depth 전체</option>
					   </select>
					   <select class="on">
						   <option>2Depth 전체</option>
					   </select>
					   <select class="on">
						   <option>3Depth 전체</option>
					   </select>
				   </td>
				   <th>연령별</th>
				   <td>
				   	   <select>
						   <option>전체</option>
						   <option>10대(0~19세)</option>
						   <option>20대</option>
						   <option>30대</option>
						   <option>40대</option>
						   <option>50대</option>
						   <option>60대 이상</option>
					   </select>
				   </td>
				   <th>성별</th>
				   <td>
				   	   <select>
						   <option>전체</option>
						   <option>남성</option>
						   <option>여성</option>
					   </select>
				   </td>
				   <th>판매지역별</th>
				   <td class="depth">
					   <select>
						   <option>1Depth 전체</option>
					   </select>
					   <select class="on">
						   <option>2Depth 전체</option>
					   </select>
					   <select class="on">
						   <option>3Depth 전체</option>
					   </select>
				   </td>
			   </tr>
		   </table>
		   <table class="sc v02">
			   <tr>
				   <th>즉시송금수단</th>
				   <td>
					   <select>
						   <option>전체</option>
						   <option>PAYCO</option>
					   </select>
				   </td>
				   <th>정상거래여부</th>
				   <td colspan="5">
					   <select>
						   <option>전체</option>
						   <option>완료</option>
						   <option>실패</option>
					   </select>
				   </td>
			   </tr>
			   <tr>
				   <th>거래번호</th>
				   <td><input type="text" name="sc_txt" value=""></td>
				   <th>상품명</th>
				   <td><input type="text" name="sc_txt" value=""></td>
				   <th>아이디/닉네임</th>
				   <td><input type="text" name="sc_txt" value="스즈땽"></td>
				   <th>보기설정</th>
				   <td>
					   <ul class="clear rb_wp">
							<li>
								<label class="rdb">
									<input type="radio" name="rd1" checked="">
									<span></span>아이디/닉네임 전체보기
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd1">
									<span></span>판매만 보기
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd1">
									<span></span>구매만 보기
								</label>
							</li>
						</ul>
					   <input type="button" name="sc_btn" value="검색">
				   </td>
			   </tr>
		   </table>
		   <ul class="tb_top">
			   <li>거래내역 요약 <span>(2018-01-01 ~ 2018-01-01)</span></li>
			   <li><a href="#" class="btn01 gd01" style="width:110px;">상세 통계 보기</a></li>
		   </ul>
		   <table class="tb02">
			   <tr>
				   <th>즉시송금수단</th>
				   <th>이용건수</th>
				   <th>거래금액</th>
				   <th>총 이용건수</th>
				   <th>총 거래금액</th>
			   </tr>
			   <tr>
				   <td class="bold">PAYCO</td>
				   <td class="bold">5,000건</td>
				   <td class="bold">92,773,274원</td>
				   <td class="bold02" rowspan="2">10,000건</td>
				   <td class="bold02" rowspan="2">185,546,548원</td>
			   </tr>
			   <tr>
				   <td class="bold" width="15%">추후 결제수단 추가되는 경우</td>
				   <td class="bold">5,000건</td>
				   <td class="bold">92,773,274원</td>
			   </tr>
		   </table>
		   <ul class="list_top clear">
			   <li>전체 10,000건,</li>
			   <li class="clear'">
				   <ul class="list_nm">
					   <li class="on">1</li>
				   </ul>
				   <p>/ 1,000 페이지</p>
			   </li>
			   <li><span>(2018-07-01 ~ 2018-09-05)</span></li>
			   <li>
				   <select>
					   <option>100개씩</option>
					   <option>200개씩</option>
					   <option>300개씩</option>
					   <option>400개씩</option>
					   <option>500개씩</option>
				   </select>
			   </li>
			   <li class="list_topbtn clear">
				   <a href="#" class="btn01" style="width:110px;">엑셀 다운로드</a>
			   </li>
		   </ul>
		   <ul class="list_view clear">
			   <li class="on">
				   <table class="list">
					   <tr>
						   <th>NO.</th>
						   <th class="img v02">
						   		거래번호
						   		<img src="img/down02.png">
						   		<img src="img/down01.png">
						   </th>
						   <th>판매자</th>
						   <th>구매자</th>
						   <th>상품명</th>
						   <th>카테고리</th>
						   <th>즉시송금수단</th>
						   <th class="img">결제금액<img src="img/down02.png"></th>
						   <th class="img">결제일(송금일)<br><img src="img/down02.png"></th>
						   <th>정상거래여부</th>
						   <th>중고나라 택배<br>신청여부</th>
						   <th>연령</th>
						   <th>성별</th>
						   <th>판매지역</th>
					   </tr>
					   <tr>
						   <td>20</td>
						   <td>1231234678</td>
						   <td class="color">k@m.com<br>(스즈땽)</td>
						   <td>a@m.com<br>(아노찡)</td>
						   <td class="a">나이키 후드 삼줄</td>
						   <td>수입명품&#62;여성신발&#62;구두</td>
						   <td>PAYCO</td>
						   <td>50,000</td>
						   <td>YYYY-MM-DD<br>HH:MM:SS</td>
						   <td>완료</td>
						   <td>N</td>
						   <td>10대</td>
						   <td>남</td>
						   <td>서울시&#62;관악구&#62;봉천동</td>
					   </tr>
					   <tr>
						   <td>19</td>
						   <td>1231234678</td>
						   <td>a@m.com<br>(아노찡)</td>
						   <td class="color">k@m.com<br>(스즈땽)</td>
						   <td class="a">뉴발 250mm미착용 새상품</td>
						   <td>악세서리&#62;반지</td>
						   <td>PAYCO</td>
						   <td>176,000</td>
						   <td>YYYY-MM-DD<br>HH:MM:SS</td>
						   <td>실패<br>(계좌 정보 오류)</td>
						   <td>N</td>
						   <td>20대</td>
						   <td>여</td>
						   <td>서울시&#62;관악구&#62;봉천동</td>
					   </tr>
					   <tr>
						   <td>18</td>
						   <td>1231234676</td>
						   <td>a@m.com<br>(아노찡)</td>
						   <td class="color">k@m.com<br>(스즈땽)</td>
						   <td class="a">재키인형 팔아요</td>
						   <td>모바일&#62;SKT</td>
						   <td>PAYCO</td>
						   <td>50,000</td>
						   <td>YYYY-MM-DD<br>HH:MM:SS</td>
						   <td>완료</td>
						   <td>Y</td>
						   <td>10대</td>
						   <td>남</td>
						   <td>서울시&#62;관악구&#62;봉천동</td>
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