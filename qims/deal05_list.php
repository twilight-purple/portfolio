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
			$(".snb_wrap .snb>li:nth-child(5)>.snb_sub").addClass("view");
			$(".snb_wrap .snb>li:nth-child(5)>ul>li:nth-child(1)").addClass("on");
			$(".snb_wrap .snb>li:nth-child(5)>span").addClass("on");
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
   	   <h1>편의점 택배관리</h1>
	   <ul class="title clear">
			<li></li>
			<li>
				편의점 택배 &nbsp;<span>편의점 택배 이용내역 및 택배 서비스 이용 회원의 정보를 조회할 수 있습니다.</span>
			</li>
		</ul>
	   <div class="dl05">
		   <table class="sc">
			   <tr>
				   <th>통합검색</th>
				   <td class="cd_img clear" style="width:50%">
				   <select>
					   <option>전체</option>
					   <option>예약일</option>
					   <option>취소일</option>
				   </select>
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
				   <th>처리상태</th>
				   <td>
					   <select>
						   <option>전체</option>
						   <option>예약중</option>
						   <option>예약취소</option>
						   <option>접수완료</option>
						   <option>배송중</option>
						   <option>배송완료</option>
					   </select>
				   </td>
				   <th>배송신청방식</th>
				   <td>
					   <select>
						   <option>전체</option>
						   <option>일반</option>
						   <option>안전결제</option>
					   </select>
				   </td>
			   </tr>
		   </table>
		   <table class="sc v02">
			   <tr>
				   <th>택배신청번호</th>
				   <td><input type="text" name="sc_txt" value=""></td>
				   <th>아이디/닉네임</th>
				   <td><input type="text" name="sc_txt" value=""></td>
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
									<span></span>판매자만 보기
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd1">
									<span></span>구매자만 보기
								</label>
							</li>
						</ul>
				   </td>
				   <th>예약번호</th>
				   <td><input type="text" name="sc_txt" value="" style="width:80px;"></td>
				   <th>운송장번호</th>
				   <td><input type="text" name="sc_txt" value="" style="width:80px;">
				   <input type="button" name="sc_btn" value="검색"></td>
			   </tr>
		   </table>
		   <ul class="tb_top_wp clear">
			   <li>
				   <ul class="tb_top">
					   <li>택배신청 현황 <span>(2018-01-01 ~ 2018-01-01)</span></li>
				   </ul>
				   <table class="tb02">
					   <tr>
						   <th class="color">총 이용건수</th>
						   <th>예약중</th>
						   <th>접수완료</th>
						   <th>배송중</th>
						   <th>배송완료</th>
						   <th>예약취소</th>
					   </tr>
					   <tr>
						   <td class="color">776건</td>
						   <td>100건</td>
						   <td>436건</td>
						   <td>155건</td>
						   <td>133건</td>
						   <td>48건</td>
					   </tr>
				   </table>
			   </li>
			   <li>
				   <ul class="tb_top">
					   <li>택배신청 현황 <span>(2018-01-01 ~ 2018-01-01)</span></li>
				   </ul>
				   <table class="tb02">
					   <tr>
						   <th>일반</th>
						   <th>안전결제</th>
					   </tr>
					   <tr>
						   <td>300</td>
						   <td>298</td>
					   </tr>
				   </table>
				   <div class="color tb_top_p">* 일반 = 즉시송금, 개인계좌이체</div>
			   </li>
		   </ul>
		   <ul class="list_top clear">
			   <li>전체 766건,</li>
			   <li class="clear'">
				   <ul class="list_nm">
					   <li class="on">1</li>
				   </ul>
				   <p>/ 8 페이지</p>
			   </li>
			   <li><span>(2018-01-01 ~ 2018-01-01)</span></li>
			   <li>
				   <select>
					   <option>100개씩</option>
					   <option>200개씩</option>
					   <option>300개씩</option>
					   <option>400개씩</option>
					   <option>500개씩</option>
				   </select>
			   </li>
		   </ul>
		   <ul class="list_view clear">
			   <li class="on">
				   <table class="list">
					   <tr>
						   <th style="width:4%">NO.</th>
						   <th class="img">택배신청번호<img src="img/down02.png"></th>
						   <th>판매자정보</th>
						   <th>구매자정보</th>
						   <th>예약번호</th>
						   <th>운송장번호</th>
						   <th class="img">처리상태<img src="img/down02.png"></th>
						   <th>배송비 가격</th>
						   <th>배송비 여부</th>
						   <th>상품명</th>
						   <th>배송신청방식</th>
						   <th class="img">예약일<img src="img/down02.png"></th>
						   <th class="img">취소일<img src="img/down02.png"></th>
					   </tr>
					   <tr>
						   <td>776</td>
						   <td class="a">1231234678</td>
						   <td class="a">m@joongna.com<br>(밍소)</td>
						   <td class="a color">k@joongna.com<br>(김소)</td>
						   <td class="ud">903355830374</td>
						   <td>-</td>
						   <td>예약중</td>
						   <td>4,300</td>
						   <td>선불</td>
						   <td class="a">코알라 인형 팔아 팝니다 팔아요 팔아팝니다</td>
						   <td>일반</td>
						   <td class="line">YYYY-MM-DD HH:MM:SS</td>
						   <td class="line">YYYY-MM-DD<br>HH:MM:SS</td>
					   </tr>
					   <tr>
						   <td>775</td>
						   <td class="a">1231234678</td>
						   <td class="a">m@joongna.com<br>(밍소)</td>
						   <td class="a color">k@joongna.com<br>(김소)</td>
						   <td class="ud">903355830374</td>
						   <td>-</td>
						   <td>예약취소</td>
						   <td>2,800</td>
						   <td>착불</td>
						   <td class="a">노트북 팔아요</td>
						   <td>일반</td>
						   <td class="line">YYYY-MM-DD HH:MM:SS</td>
						   <td>-</td>
					   </tr>
					   <tr>
						   <td>774</td>
						   <td class="a">1231234678</td>
						   <td class="a">m@joongna.com<br>(밍소)</td>
						   <td class="a color">k@joongna.com<br>(김소)</td>
						   <td class="ud">903355830374</td>
						   <td class="a">6177040553</td>
						   <td>예약중</td>
						   <td>4,300</td>
						   <td>선불</td>
						   <td class="a">코알라 인형 팔아 팝니다 팔아요 팔아팝니다</td>
						   <td>일반</td>
						   <td class="line">YYYY-MM-DD HH:MM:SS</td>
						   <td class="line">YYYY-MM-DD<br>HH:MM:SS</td>
					   </tr>
					   <tr>
						   <td>20</td>
						   <td class="a">1231234678</td>
						   <td class="a color">k@joongna.com<br>(김소)</td>
						   <td class="a">m@joongna.com<br>(밍소)</td>
						   <td class="ud">903355830374</td>
						   <td class="a">6177040553</td>
						   <td>예약중</td>
						   <td>4,300</td>
						   <td>선불</td>
						   <td class="a">코알라 인형 팔아 팝니다 팔아요 팔아팝니다</td>
						   <td>일반</td>
						   <td class="line">YYYY-MM-DD HH:MM:SS</td>
						   <td>-</td>
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