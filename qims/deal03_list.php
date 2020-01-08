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
			$(".snb_wrap .snb>li:nth-child(3)>ul>li:nth-child(2)").addClass("on");
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
<!--   타이틀-->
   	   <h1>안전결제 관리</h1>
	   <ul class="title clear">
			<li></li>
			<li>
				안전결제 정산내역 &nbsp;<span>정산내역을 확인할 수 있습니다. 기간 검색 시 해당 기간의 정산내역이 노출됩니다.</span>
			</li>
		</ul>
	   <div class="dl03">
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
				   <input type="button" value="검색">
				   </td>
			   </tr>
		   </table>
		   <ul class="tb_top">
			   <li>정산내역 요약 <span>(2018-01-01 ~ 2018-01-01)</span></li>
			   <li><a href="#" class="btn01 gd01" style="width:100px;">항목가이드</a></li>
		   </ul>
		   <table class="tb02">
			   <tr>
				   <th>정산완료 건수</th>
				   <th>거래금액</th>
				   <th>안전결제 수수료</th>
				   <th>수수료 정산액(공급가액)</th>
				   <th>VAT</th>
			   </tr>
			   <tr>
				   <td><b>10,000건</b></td>
				   <td><b>185,546,549원</b></td>
				   <td>1,147,845원</td>
				   <td>0원</td>
				   <td>114,784원</td>
			   </tr>
		   </table>
		   <ul class="tb_top">
			   <li>검색 기간별 거래 건수</li>
			   <li><a href="#" class="btn01 gd02" style="width:110px;">상세 통계 보기</a></li>
		   </ul>
		   <div class="graph"></div>
		   <ul class="list_top clear">
			   <li>총 10,000건,</li>
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
						   <th class="img">거래번호<img src="img/down02.png"></th>
						   <th class="img">제휴사<br>거래번호<img src="img/down02.png"></th>
						   <th>판매자</th>
						   <th>구매자</th>
						   <th>상품명</th>
						   <th>결제수단</th>
						   <th class="img">결제금액<img src="img/down02.png"></th>
						   <th class="img">수수료<img src="img/down02.png"></th>
						   <th>거래상태</th>
						   <th class="img">결제일<img src="img/down02.png"></th>
						   <th class="img">구매확정일<img src="img/down02.png"></th>
						   <th class="img">계좌송금일<img src="img/down02.png"></th>
					   </tr>
					   <tr>
						   <td>20</td>
						   <td>1231234678</td>
						   <td>1231234678</td>
						   <td>a@m.com<br>(아노찡)</td>
						   <td>k@m.com<br>(스즈땽)</td>
						   <td>나이키 후드 삼줄</td>
						   <td>무통장입금</td>
						   <td>500.000</td>
						   <td>500</td>
						   <td>거래완료</td>
						   <td class="line">YYYY-MM-DD<br>HH:MM:SS</td>
						   <td class="line">YYYY-MM-DD<br>HH:MM:SS</td>
						   <td class="line">YYYY-MM-DD<br>HH:MM:SS</td>
					   </tr>
					   <tr>
						   <td>19</td>
						   <td>1231234678</td>
						   <td>1231234678</td>
						   <td>a@m.com<br>(아노찡)</td>
						   <td>k@m.com<br>(스즈땽)</td>
						   <td>뉴발 250mm미착용 새상품</td>
						   <td>신용카드</td>
						   <td>176.000</td>
						   <td>500</td>
						   <td>거래완료</td>
						   <td class="line">YYYY-MM-DD<br>HH:MM:SS</td>
						   <td class="line">YYYY-MM-DD<br>HH:MM:SS</td>
						   <td class="line">YYYY-MM-DD<br>HH:MM:SS</td>
					   </tr>
					   <tr>
						   <td>18</td>
						   <td>1231234678</td>
						   <td>1231234678</td>
						   <td>a@m.com<br>(아노찡)</td>
						   <td>k@m.com<br>(스즈땽)</td>
						   <td>재키 인형 팔아요</td>
						   <td>실시간계좌이체</td>
						   <td>500.000</td>
						   <td>500</td>
						   <td>거래완료</td>
						   <td class="line">YYYY-MM-DD<br>HH:MM:SS</td>
						   <td class="line">YYYY-MM-DD<br>HH:MM:SS</td>
						   <td class="line">YYYY-MM-DD<br>HH:MM:SS</td>
					   </tr>
					   <tr>
						   <td>17</td>
						   <td>1231234678</td>
						   <td>1231234678</td>
						   <td>a@m.com<br>(아노찡)</td>
						   <td>k@m.com<br>(스즈땽)</td>
						   <td>나이키 후드 삼줄</td>
						   <td>무통장입금</td>
						   <td>500.000</td>
						   <td>500</td>
						   <td>거래완료</td>
						   <td class="line">YYYY-MM-DD<br>HH:MM:SS</td>
						   <td class="line">YYYY-MM-DD<br>HH:MM:SS</td>
						   <td class="line">YYYY-MM-DD<br>HH:MM:SS</td>
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