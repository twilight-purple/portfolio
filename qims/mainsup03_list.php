<!DOCTYPE html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
    <title>qdillion</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script src="js/jquery-ui.min.js"></script>
	<script src="js/int.js"></script>
    <script src="js/mainsup.js"></script>
</head>
    <body>
   
<!--   gnb/snb연결-->
  	<?php include "gnb.php"; ?>
    <?php include "snb.php"; ?>
<!--   gnb/snb연결-->

  
   <div id="wrap">
<!--   타이틀-->
   	   <h1>메인 버티컬서비스 배너관리</h1>
	   <ul class="title clear">
			<li></li>
			<li>
				메인 버티컬서비스 배너관리 &nbsp;<span>메인 중앙 버티컬 배너를 등록 및 수정할 수 있습니다</span>
			</li>
		</ul>
<!--   타이틀-->
	   <div class="ms02">
		   <div class="sc_view">
		   <div class="sc_wrap">
		   <table class="sc">
			   <tr>
				   <th>노출기간</th>
				   <td class="cd_img clear" style="width:27%;">
					   <input type="text" value="" class="sc_cd01">
					   <input type="button" value="" class="datepicker n01">
					   ~
					   <input type="text" value="" class="sc_cd02">
					   <input type="button" value="" class="datepicker n02">
					   <label class="cb">
						 <input type="checkbox" class="sc_cb not" value="">
						 <span></span>
						 <p>기한없음</p>
					   </label>
				   </td>
				   <th>기기</th>
				   <td>
					   <select>
						   <option>전체</option>
						   <option>App</option>
						   <option>Web</option>
					   </select>
				   </td>
				   <th>운영체제</th>
				   <td>
					   <select>
						   <option>전체</option>
						   <option>안드로이드</option>
						   <option>iOS</option>
					   </select>
				   </td>
				   <th>사용여부</th>
				   <td>
					   <select>
						   <option>전체</option>
						   <option>Y</option>
						   <option>N</option>
					   </select>
				   </td>
			   </tr>
		   </table>
		   <table class="sc v02">
			   <tr>
				   <th>통합검색</th>
				   <td>
					   <select>
						   <option>전체</option>
						   <option>배너명</option>
						   <option>등록자</option>
						   <option>최근수정자</option>
					   </select>
					   <input type="text" name="sc_txt" value="" style="width:30%;">
					   <input type="button" name="sc_btn" value="검색">
				   </td>
			   </tr>
		   </table>
		   <table class="sc v02">
			   <colgroup>
					<col />
					<col width="15%"/>
					<col />
					<col />
				</colgroup>
				<tr>
				   <th>클릭수</th>
				   <td>
				   	<input type="number" name="sc_nm" value="">
				   	~
				   	<input type="number" name="sc_nm" value="">
				   </td>
				   <th>클릭회원수</th>
				   <td>
				   	<input type="number" name="sc_nm" value="">
				   	~
				   	<input type="number" name="sc_nm" value="">
				   	<input type="button" name="sc_btn" value="상세검색">
				   </td>
			   </tr>
		   </table>
		   </div>
		   	   <div class="scbox">
				   <ul class="scbox_line clear">
					   <li>|</li>
					   <li>|</li>
					   <li>|</li>
					   <li>|</li>
					   <li>|</li>
					   <li>|</li>
					   <li>|</li>
				   </ul>
			   </div>
		   </div>
		   <ul class="list_top clear">
			   <li>전체 11,200,121건,</li>
			   <li class="clear'">
				   <ul class="list_nm">
					   <li class="on">1</li>
				   </ul>
				   <p>/ 112,001 페이지</p>
			   </li>
			   <li><span>(2018-07-02 00:00 ~ 2018-07-15 15:00)</span></li>
			   <li>
				   <select>
					   <option>20개씩</option>
					   <option>40개씩</option>
					   <option>60개씩</option>
					   <option>80개씩</option>
					   <option>100개씩</option>
				   </select>
			   </li>
			   <li class="list_topbtn clear">
				   <a href="#" class="btn01 ap_pop02" style="width:80px;">순서적용</a>
				   <a href="#" class="btn01" style="width:110px">엑셀 다운로드</a>
				   <a href="#" class="btn01" style="width:80px">등록</a>
			   </li>
		   </ul>
		   <ul class="list_view clear">
			   <li class="on">
				   <table class="list">
					   <tr>
						   <th>NO.</th>
						   <th>기기</th>
						   <th>운영체제</th>
						   <th style="width:5%">이미지</th>
						   <th>배너명</th>
						   <th>노출기간</th>
						   <th class="img">노출수<img src="img/down02.png"></th>
						   <th class="img">노출회원수<img src="img/down02.png"></th>
						   <th class="img">클릭수<img src="img/down02.png"></th>
						   <th class="img">클릭회원수<img src="img/down02.png"></th>
						   <th class="img">사용여부<img src="img/down02.png"></th>
						   <th class="img">등록일<img src="img/down02.png"></th>
						   <th>등록자</th>
					   </tr>
					   <tr class="show">
						   <td>100</td>
						   <td>전체</td>
						   <td>전체</td>
						   <td class="imgbox_wp"><div class="imgbox">img</div></td>
						   <td>비밀의공구 새해 복 많이 상품 많이</td>
						   <td>2018-01-25 ~ 2018-01-25</td>
						   <td>20,000</td>
						   <td>15,000</td>
						   <td>520</td>
						   <td>275</td>
						   <td>Y</td>
						   <td>2018-02-03 11:30</td>
						   <td>전혜윤(서비스기획팀)</td>
					   </tr>
					   <tr class="show">
						   <td>99</td>
						   <td>App</td>
						   <td>안드로이드</td>
						   <td class="imgbox_wp"><div class="imgbox">img</div></td>
						   <td>만원의 행복</td>
						   <td>2018-01-25 ~ 2018-01-25</td>
						   <td>20,000</td>
						   <td>15,000</td>
						   <td>520</td>
						   <td>275</td>
						   <td>Y</td>
						   <td>2018-02-03 11:30</td>
						   <td>유보람(서비스기획팀)</td>
					   </tr>
					   <tr class="show">
						   <td>98</td>
						   <td>App</td>
						   <td>iOS</td>
						   <td class="imgbox_wp"><div class="imgbox">img</div></td>
						   <td>미개봉 새상품</td>
						   <td>2018-01-25 ~ 2018-01-25</td>
						   <td>20,000</td>
						   <td>15,000</td>
						   <td>520</td>
						   <td>275</td>
						   <td>Y</td>
						   <td>2018-02-03 11:30</td>
						   <td>유보람(서비스기획팀)</td>
					   </tr>
					   <tr class="show">
						   <td>97</td>
						   <td>전체</td>
						   <td>전체</td>
						   <td class="imgbox_wp"><div class="imgbox">img</div></td>
						   <td>비밀의공구 새해 복 많이 상품 많이</td>
						   <td>2018-01-25 ~ 2018-01-25</td>
						   <td>20,000</td>
						   <td>15,000</td>
						   <td>520</td>
						   <td>275</td>
						   <td>Y</td>
						   <td>2018-02-03 11:30</td>
						   <td>전혜윤(서비스기획팀)</td>
					   </tr>
					   <tr>
						   <td>96</td>
						   <td>전체</td>
						   <td>전체</td>
						   <td class="imgbox_wp"><div class="imgbox">img</div></td>
						   <td>비밀의공구 새해 복 많이 상품 많이</td>
						   <td>2018-01-25 ~ 2018-01-25</td>
						   <td>20,000</td>
						   <td>15,000</td>
						   <td>520</td>
						   <td>275</td>
						   <td>N</td>
						   <td>2018-02-03 11:30</td>
						   <td>전혜윤(서비스기획팀)</td>
					   </tr>
					   <tr>
						   <td>95</td>
						   <td>App</td>
						   <td>iOS</td>
						   <td class="imgbox_wp"><div class="imgbox">img</div></td>
						   <td>미개봉 새상품</td>
						   <td>2018-01-25 ~ 2018-01-25</td>
						   <td>20,000</td>
						   <td>15,000</td>
						   <td>520</td>
						   <td>275</td>
						   <td>N</td>
						   <td>2018-02-03 11:30</td>
						   <td>유보람(서비스기획팀)</td>
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