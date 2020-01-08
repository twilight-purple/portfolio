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
   	   <h1>메인 프로모션 배너관리</h1>
	   <ul class="title clear">
			<li></li>
			<li>
				메인 프로모션 배너관리 &nbsp;<span>메인 상단 프로모션 배너를 등록 및 수정할 수 있습니다</span>
			</li>
		</ul>
	   <div class="ms02">
		   <div class="sc_view">
		   <div class="sc_wrap">
		   <table class="sc">
			   <tr>
				   <th>노출기간</th>
				   <td class="cd_img clear" width="27%">
					   <input type="text" name="sc_txt" value="" class="sc_cd01">
					   <input type="button" name="sc_btn" value="" class="datepicker n01">
					   ~
					   <input type="text" name="sc_txt" value="" class="sc_cd02">
					   <input type="button" name="sc_btn" value="" class="datepicker n02">
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
				   <th>배너타입</th>
				   <td>
					   <select>
						   <option>전체</option>
						   <option>이미지</option>
						   <option>테마</option>
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
			   <li>총 11,200,121건,</li>
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
				   <a href="#" class="btn01" style="width:110px;">엑셀 다운로드</a>
				   <a href="#" class="btn01" style="width:80px;">등록</a>
			   </li>
		   </ul>
		   <ul class="list_view clear">
			   <li class="on">
				   <table class="list">
					   <tr>
						   <th>NO.</th>
						   <th>기기</th>
						   <th>운영체제</th>
						   <th>배너타입</th>
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
						   <td>이미지</td>
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
					   <tr class="theme show">
						   <td>99</td>
						   <td>App</td>
						   <td>안드로이드</td>
						   <td>테마</td>
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
					   <tr class="theme show">
						   <td>98</td>
						   <td>App</td>
						   <td>iOS</td>
						   <td>테마</td>
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
						   <td>100</td>
						   <td>전체</td>
						   <td>전체</td>
						   <td>이미지</td>
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
						   <td>100</td>
						   <td>전체</td>
						   <td>전체</td>
						   <td>이미지</td>
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
					   <tr class="theme">
						   <td>98</td>
						   <td>App</td>
						   <td>iOS</td>
						   <td>테마</td>
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
		   <div class="tm_wp">
			   <div class="top">테마 설정조건 보기</div>
			   <div class="pw_div">
			   <h4>설정조건</h4>
				   <table class="tb01">
					   <tr>
						   <th rowspan="2" style="width:10%;">조건1</th>
						   <td>
							   <ul class="clear">
								   <li>카테고리</li>
								   <li>출산/유아동/교육&#62;출산/임부용품&#62;신생아/영유아의류</li>
							   </ul>
							   <br>
							   <ul class="clear">
								   <li>키워드</li>
								   <li>
									   <span class="tm_rd">1</span> 우주복&nbsp;&nbsp;
									   <span class="tm_rd">2</span> 신생아
								   </li>
							   	</ul>
						   </td>
					   </tr>
					   <tr>
						   <td>
						   	 	<ul class="clear">
								   <li>조건 부합 상품수</li>
									<li><span class="color">100,500</span>개</li>
							   	</ul>
						   </td>
					   </tr>
			   		</table>
				   <table class="tb01">
					   <tr>
						   <th rowspan="2" style="width:10%;">조건2</th>
						   <td>
							   <ul class="clear">
								   <li>카테고리</li>
								   <li>출산/유아동/교육&#62;출산/임부용품&#62;전체 (상세옵션 : 100, 실크)</li>
							   </ul>
							   <br>
							   <ul class="clear">
								   <li>키워드</li>
								   <li>곰돌이</li>
							   	</ul>
							   <br>
							   <ul class="clear">
								   <li>상품상태</li>
								   <li>
									   <span class="tm_rd">1</span> 중고&nbsp;&nbsp;
									   <span class="tm_rd">2</span> 한정판&nbsp;&nbsp;
									   <span class="tm_rd">3</span> 풀박
								   </li>
							   	</ul>
							   	<br>
							   <ul class="clear">
								   <li>색상</li>
								   <li class="tm_color"></li>
							   </ul>
							   <br>
							   <ul class="clear">
								   <li>가격대</li>
								   <li>1,000원부터 ~ 제한없음</li>
							   </ul>
						   </td>
					   </tr>
					   <tr>
						   <td>
						   	 	<ul class="clear">
								   <li>조건 부합 상품수</li>
									<li><span class="color">234,500</span>개</li>
							   	</ul>
						   </td>
					   </tr>
			   		</table>
			   </div>
		   </div>
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