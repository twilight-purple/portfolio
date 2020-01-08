<!DOCTYPE html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
    <title>qdillion</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/int.js"></script>
    <script src="js/service.js"></script>
</head>
<body>
   
<!--   gnb/snb연결-->
  	<?php include "gnb.php"; ?>
    <?php include "snb.php"; ?>
<!--   gnb/snb연결-->

  
   <div id="wrap">
   	   <h1>포인트 통합관리</h1>
	   <ul class="title clear">
			<li></li>
			<li>포인트 통합관리 &nbsp;<span>포인트 내역을 조회할 수 있습니다.</span></li>
		</ul>
	   <div class="sv10">
		   <div class="tb_top">
			   <div class="tb_topdata">
				   <select>
					   <option>1월</option>
					   <option selected="">2월</option>
					   <option>3월</option>
					   <option>4월</option>
					   <option>5월</option>
					   <option>6월</option>
					   <option>7월</option>
					   <option>8월</option>
					   <option>9월</option>
					   <option>10월</option>
					   <option>11월</option>
					   <option>12월</option>
				   </select>
			   </div>
			   <ul class="clear">
				   <li>
					   <h4>지급 포인트 현황 <span>(2월 한달 기준)</span></h4>
					   <table class="tb01">
						   <tr>
							   <th>지급 사유 총 건수</th>
							   <td>11건</td>
						   </tr>
						   <tr>
							   <th>지급 포인트 총 합계</th>
							   <td>240,000P <span>(전달 대비 2.5% 증가)</span></td>
						   </tr>
					   </table>
					   <table class="list">
						   <tr>
							   <th>NO.</th>
							   <th>타입</th>
							   <th>지급 사유</th>
							   <th>포인트 금액</th>
						   </tr>
						   <tr>
							   <td>11</td>
							   <td>수동</td>
							   <td>친구초대 성공 축하포인트</td>
							   <td class="svtl">123,000 P</td>
						   </tr>
						   <tr>
							   <td>10</td>
							   <td>수동</td>
							   <td>이벤트</td>
							   <td class="svtl">111,000 P</td>
						   </tr>
						   <tr>
							   <td>9</td>
							   <td>자동</td>
							   <td>친구초대 성공 축하 포인트</td>
							   <td class="svtl">101,000 P</td>
						   </tr>
						   <tr>
							   <td>8</td>
							   <td>자동</td>
							   <td>신규가입 축하 포인트</td>
							   <td class="svtl">91,000 P</td>
						   </tr>
						   <tr>
							   <td>7</td>
							   <td>자동</td>
							   <td>첫 상품 등록 축하 포인트</td>
							   <td class="svtl">51,080 P</td>
						   </tr>
						   <tr>
							   <td>6</td>
							   <td>자동</td>
							   <td>팔로워 달성 축하 포인트</td>
							   <td class="svtl">31,000 P</td>
						   </tr>
					   </table>
				   </li>
				   <li>
					   <h4>차감 포인트 현황 <span>(2월 한달 기준)</span></h4>
					   <table class="tb01">
						   <tr>
							   <th>차감 사유 총 건수</th>
							   <td>항목수 12건</td>
						   </tr>
						   <tr>
							   <th>차감 포인트 총 합계</th>
							   <td>240,000P <span>(전달대비 2.7% 감소)</span></td>
						   </tr>
					   </table>
					   <table class="list">
						   <tr>
							   <th>NO.</th>
							   <th>타입</th>
							   <th>차감 사유</th>
							   <th>포인트 금액</th>
						   </tr>
						   <tr>
							   <td>4</td>
							   <td>수동</td>
							   <td>HOT 스토어 광고 구입</td>
							   <td class="svtl">123,000 P</td>
						   </tr>
						   <tr>
							   <td>3</td>
							   <td>수동</td>
							   <td>알림 리스트 광고 구입</td>
							   <td class="svtl">111,000 P</td>
						   </tr>
						   <tr>
							   <td>2</td>
							   <td>자동</td>
							   <td>소멸</td>
							   <td class="svtl">101,000 P</td>
						   </tr>
						   <tr>
							   <td>1</td>
							   <td>자동</td>
							   <td>재등록 기능 구입</td>
							   <td class="svtl">91,000 P</td>
						   </tr>
					   </table>
				   </li>
			   </ul>
		   </div>
		   <table class="sc">
			   <tr>
				   <th>적립/차감일</th>
				   <td class="cd_img clear" width="27%">
					   <input type="text" value="" class="sc_cd01">
					   <input type="button" value="" class="datepicker n01">
					   ~
					   <input type="text" value="" class="sc_cd02">
					   <input type="button" value="" class="datepicker n02">
					   <label class="cb">
						 <input type="checkbox" class="sc_cb not02" value="">
						 <span></span>
						 <p>전체</p>
					   </label>
				   </td>
				   <th>처리타입</th>
				   <td>
					   <select>
						   <option>전체</option>
						   <option>적립</option>
						   <option>사용</option>
						   <option>차감</option>
						   <option>소멸</option>
					   </select>
				   </td>
				   <th>사유</th>
				   <td><input type="text" name="sc_txt" value=""></td>
				   <th>아이디</th>
				   <td><input type="text" name="sc_txt" value=""></td>
				   <th>닉네임/이름</th>
				   <td><input type="text" name="sc_txt" value=""></td>
			   </tr>
			   <tr>
				   <th>처리자</th>
				   <td><input type="text" name="sc_txt" value=""></td>
				   <th>보유포인트</th>
				   <td colspan="7">
				   	<input type="number" name="sc_nm" value="">
				   	~
				   	<input type="number" name="sc_nm" value="">
				   	<input type="button" name="sc_btn" value="검색">
				   </td>
			   </tr>
		   </table>
		   <ul class="list_top clear">
			   <li>전체 185건,</li>
			   <li class="clear'">
				   <ul class="list_nm">
					   <li class="on">1</li>
				   </ul>
				   <p>/ 4 페이지</p>
			   </li>
			   <li><span>(YYYY-MM-DD ~ YYYY-MM-DD)</span></li>
			   <li>
				   <select>
					   <option>50개씩</option>
					   <option>100개씩</option>
					   <option>150개씩</option>
					   <option>200개씩</option>
					   <option>250개씩</option>
				   </select>
			   </li>
		   </ul>
		   <ul class="list_view clear">
			   <li class="on">
				   <table class="list">
					   <tr>
						   <th style="width:5%">NO.</th>
						   <th class="img">처리타입<img src="img/down02.png"></th>
						   <th class="img">처리 포인트 금액<img src="img/down02.png"></th>
						   <th>사유</th>
						   <th>아이디</th>
						   <th>닉네임(이름)</th>
						   <th class="img">적립/차감일<img src="img/down02.png"></th>
						   <th>처리자</th>
						   <th class="img">보유 포인트<img src="img/down02.png"></th>
						   <th>비고</th>
					   </tr>
					   <tr>
						   <td>185</td>
						   <td>적립</td>
						   <td class="svtl">1,000 P</td>
						   <td>팔로워 달성 축하 포인트</td>
						   <td class="a">minso@joongna.com</td>
						   <td class="a">미밍(민소연)</td>
						   <td>2016-12-25 00:23:56</td>
						   <td>자동</td>
						   <td class="svtl">1,589 P</td>
						   <td>-</td>
					   </tr>
					   <tr>
						   <td>185</td>
						   <td>적립</td>
						   <td class="svtl">10 P</td>
						   <td>깜짝선물</td>
						   <td class="a">minso@joongna.com</td>
						   <td class="a">미밍(민소연)</td>
						   <td>2016-12-25 00:23:56</td>
						   <td>민소연 (서비스기획팀)</td>
						   <td class="svtl">598 P</td>
						   <td>문의로 아이디어 제출함</td>
					   </tr>
					   <tr>
						   <td>185</td>
						   <td>적립</td>
						   <td class="svtl">1,000 P</td>
						   <td>팔로워 달성 축하 포인트</td>
						   <td class="a">minso@joongna.com</td>
						   <td class="a">미밍(민소연)</td>
						   <td>2016-12-25 00:23:56</td>
						   <td>자동</td>
						   <td class="svtl">1,589 P</td>
						   <td>-</td>
					   </tr>
					   <tr>
						   <td>185</td>
						   <td>적립</td>
						   <td class="svtl">10 P</td>
						   <td>깜짝선물</td>
						   <td class="a">minso@joongna.com</td>
						   <td class="a">미밍(민소연)</td>
						   <td>2016-12-25 00:23:56</td>
						   <td>민소연 (서비스기획팀)</td>
						   <td class="svtl">598 P</td>
						   <td>문의로 아이디어 제출함</td>
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