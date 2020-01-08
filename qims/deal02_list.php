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
   	   <h1>안전결제 관리</h1>
	   <ul class="title clear">
			<li></li>
			<li>
				안전결제 관리 &nbsp;<span>안전결제 거래내역을 조회 및 확인할 수 있습니다. 기간 검색 시 해당 기간의 거래내역 요약이 노출됩니다.</span>
			</li>
		</ul>
	   <div class="dl02">
		   <table class="sc">
			   <tr>
				   <th>기간</th>
				   <td class="cd_img clear" style="width:42.5%">
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
				   <th>결제수단</th>
				   <td>
					   <select>
						   <option>전체</option>
						   <option>신용카드</option>
						   <option>무통장입금</option>
						   <option>실시간계좌이체</option>
					   </select>
				   </td>
				   <th>거래상태</th>
				   <td>
					   <select id="st_dim">
						   <option>전체</option>
						   <option>무통장입금예정</option>
						   <option>결제완료</option>
						   <option>판매수락</option>
						   <option>배송중</option>
						   <option>배송완료</option>
						   <option>거래완료</option>
						   <option>거래취소</option>
						   <option>반품신청</option>
						   <option>반품수락</option>
						   <option>반품배송중</option>
						   <option>반품완료</option>
					   </select>
					   <div class="st_dim_s">
						   	<select class="on">
							   <option>전체</option>
						   </select>
						   	<select>
							   <option>전체</option>
							   <option>판매자취소</option>
							   <option>구매자취소</option>
							   <option>무통장입금취소</option>
							   <option>관리자취소</option>
						   </select>
					   </div>
				   </td>
				   <th>배송신청방식</th>
				   <td>
					   <select>
						   <option>전체</option>
						   <option>편의점 택배</option>
						   <option>안전결제 배송등록</option>
					   </select>
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
				   <th>거래번호</th>
				   <td><input type="text" name="sc_txt" value=""></td>
				   <th>상품명</th>
				   <td><input type="text" name="sc_txt" value=""></td>
				   <th>아이디/닉네임</th>
				   <td><input type="text" name="sc_txt" value="k@m.com"></td>
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
			   <li><a href="#" class="btn01 gd01" style="width:100px;">항목가이드</a></li>
		   </ul>
		   <table class="tb02">
			   <tr>
				   <th>총 거래건수</th>
				   <th>거래금액</th>
				   <th>진행중 거래</th>
				   <th>거래완료</th>
				   <th>거래취소</th>
				   <th>반품</th>
				   <th>무통장입금예정</th>
			   </tr>
			   <tr>
				   <td class="bold">10,000건</td>
				   <td class="bold">185,546,549원</td>
				   <td>700건</td>
				   <td>8,000건</td>
				   <td>500건</td>
				   <td>500건</td>
				   <td>300건</td>
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
				   <a href="#" class="btn01 gd02" style="width:110px;">항목 가이드</a>
				   <a href="#" class="btn01" style="width:110px;">엑셀 다운로드</a>
			   </li>
		   </ul>
		   <ul class="list_view clear">
			   <li class="on">
				   <table class="list">
					   <tr>
						   <th width="2%">NO.</th>
						   <th class="img">거래번호<img src="img/down02.png"></th>
						   <th class="img">제휴사<br>거래번호<img src="img/down02.png"></th>
						   <th>판매자</th>
						   <th>구매자</th>
						   <th>상품명</th>
						   <th>카테고리</th>
						   <th>결제수단</th>
						   <th class="img">결제금액<img src="img/down02.png"></th>
						   <th class="img">수수료<img src="img/down02.png"></th>
						   <th>거래상태</th>
						   <th>배송신청<br>방식</th>
						   <th class="img">결제일<img src="img/down02.png"></th>
						   <th class="img v02">
						   		상태변경일
						   		<img src="img/down02.png">
						   		<img src="img/down01.png">
						   </th>
						   <th class="img">구매확정일<img src="img/down02.png"></th>
						   <th class="img">계좌송금일<img src="img/down02.png"></th>
						   <th class="img">취소일<img src="img/down02.png"></th>
						   <th>취소사유</th>
						   <th>연령</th>
						   <th>성별</th>
						   <th>판매지역</th>
					   </tr>
					   <tr>
						   <td>20</td>
						   <td>1231234678</td>
						   <td>1231234678</td>
						   <td>a@m.com<br>(아노찡)</td>
						   <td class="color">k@m.com<br>(스즈땽)</td>
						   <td class="a">나이키 후드 삼줄</td>
						   <td>수입명품&#62;여성<br>신발&#62;구두</td>
						   <td>무통장입금</td>
						   <td>500.000</td>
						   <td>500</td>
						   <td>결제완료</td>
						   <td>편의점 택배</td>
						   <td>YYYY-MM-DD<br>HH:MM:SS</td>
						   <td>YYYY-MM-DD<br>HH:MM:SS</td>
						   <td>YYYY-MM-DD<br>HH:MM:SS</td>
						   <td>YYYY-MM-DD<br>HH:MM:SS</td>
						   <td>YYYY-MM-DD<br>HH:MM:SS</td>
						   <td>-</td>
						   <td>10대</td>
						   <td>남</td>
						   <td>서울시&#62;관악구&#62;봉천동</td>
					   </tr>
					   <tr>
						   <td>20</td>
						   <td>1231234678</td>
						   <td>1231234678</td>
						   <td class="color">k@m.com<br>(스즈땽)</td>
						   <td>a@m.com<br>(아노찡)</td>
						   <td class="a">뉴발 250mm미착용 새상품</td>
						   <td>수입명품&#62;여성<br>신발&#62;구두</td>
						   <td>무통장입금</td>
						   <td>500.000</td>
						   <td>500</td>
						   <td>결제완료</td>
						   <td>안전결제<br>배송등록</td>
						   <td>YYYY-MM-DD<br>HH:MM:SS</td>
						   <td>YYYY-MM-DD<br>HH:MM:SS</td>
						   <td>YYYY-MM-DD<br>HH:MM:SS</td>
						   <td>YYYY-MM-DD<br>HH:MM:SS</td>
						   <td>YYYY-MM-DD<br>HH:MM:SS</td>
						   <td>판매자 신뢰 하락</td>
						   <td>10대</td>
						   <td>남</td>
						   <td>서울시&#62;관악구&#62;봉천동</td>
					   </tr>
					   <tr>
						   <td>20</td>
						   <td>1231234678</td>
						   <td>1231234678</td>
						   <td>a@m.com<br>(아노찡)</td>
						   <td class="color">k@m.com<br>(스즈땽)</td>
						   <td class="a">나이키 후드 삼줄</td>
						   <td>수입명품&#62;여성<br>신발&#62;구두</td>
						   <td>무통장입금</td>
						   <td>500.000</td>
						   <td>500</td>
						   <td>결제완료</td>
						   <td>편의점 택배</td>
						   <td>YYYY-MM-DD<br>HH:MM:SS</td>
						   <td>YYYY-MM-DD<br>HH:MM:SS</td>
						   <td>YYYY-MM-DD<br>HH:MM:SS</td>
						   <td>YYYY-MM-DD<br>HH:MM:SS</td>
						   <td>YYYY-MM-DD<br>HH:MM:SS</td>
						   <td>판매자 신뢰 하락</td>
						   <td>10대</td>
						   <td>남</td>
						   <td>서울시&#62;관악구&#62;봉천동</td>
					   </tr>
					   <tr>
						   <td>20</td>
						   <td>1231234678</td>
						   <td>1231234678</td>
						   <td class="color">k@m.com<br>(스즈땽)</td>
						   <td>a@m.com<br>(아노찡)</td>
						   <td class="a">뉴발 250mm미착용 새상품</td>
						   <td>수입명품&#62;여성<br>신발&#62;구두</td>
						   <td>무통장입금</td>
						   <td>500.000</td>
						   <td>500</td>
						   <td>결제완료</td>
						   <td>안전결제<br>배송등록</td>
						   <td>YYYY-MM-DD<br>HH:MM:SS</td>
						   <td>YYYY-MM-DD<br>HH:MM:SS</td>
						   <td>YYYY-MM-DD<br>HH:MM:SS</td>
						   <td>YYYY-MM-DD<br>HH:MM:SS</td>
						   <td>YYYY-MM-DD<br>HH:MM:SS</td>
						   <td>-</td>
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