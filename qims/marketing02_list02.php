<!DOCTYPE html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
    <title>qdillion</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/int.js"></script>
    <script src="js/marketing.js"></script>
</head>
<body>
   
<!--   gnb/snb연결-->
  	<?php include "gnb.php"; ?>
    <?php include "snb.php"; ?>
<!--   gnb/snb연결-->

  
   <div id="wrap">
   	   <h1>메인 우리동네 광고관리</h1>
	   <ul class="title clear">
			<li></li>
			<li>
				메인 우리동네 광고관리 &nbsp;<span>메인 우리동네 광고를 등록 및 관리할 수 있습니다. 해당 지역을 '우리동네'로 설정한 회원에게 노출됩니다. (등록 시 지역선택 필수)</span>
			</li>
		</ul>
	   <div class="mk02 v02">
			   <table class="sc">
				   <tr>
					   <th>기간</th>
					   <td class="cd_img clear">
						   <select>
							   <option>전체</option>
							   <option>시작일</option>
							   <option>종료일</option>
							   <option>등록일</option>
						   </select>
						   <input type="text" name="sc_txt" value="" class="sc_cd01">
						   <input type="button" name="sc_btn" value="" class="datepicker n01">
						   ~
						   <input type="text" name="sc_txt" value="" class="sc_cd02">
						   <input type="button" name="sc_btn" value="" class="datepicker n02">
							<label class="cb"><input type="checkbox" class="sc_cb not" value=""><span></span><p>기한없음</p></label>
					   </td>
					   <th>기기</th>
					   <td>
						   <select>
							   <option>전체</option>
							   <option>APP</option>
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
					</tr>
					<tr>
						<th>지역</th>
						<td>
							<select style="width:120px;">
								<option>시/도 전체</option>
							</select>
							<select style="width:120px;" class="on">
								<option>시/군/구 전체</option>
							</select>
							<select style="width:120px;" class="on">
								<option>읍/면/동 전체</option>
							</select>
							<select style="width:120px;" class="on">
								<option>랜드마크 전체</option>
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
					   <th>검색</th>
						<td colspan="7">
						   <input type="text" name="sc_txt" placeholder="광고명, 광고주, 스토어명 입력 " value="" style="width:300px">
						   <input type="button" name="sc_btn" value="검색">
					   </td>
				   </tr>
			   </table>
			   <ul class="list_top clear">
			   	   <li>총 11,200,121건,</li>
				   <li class="clear'">
					   <ul class="list_nm">
						   <li class="on">1</li>
					   </ul>
					   <p>/ 112,001 페이지</p>
				   </li>
				   <li><span>(YYYY-MM-DD ~ YYYY-MM-DD)</span></li>
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
					   <a href="#" class="btn01" style="width:130px;">광고영역 미리보기</a>
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
							   <th>이미지</th>
							   <th>광고명</th>
							   <th>광고주</th>
							   <th class="img">광고예산<img src="img/down02.png"></th>
							   <th class="img">시작일<img src="img/down02.png"></th>
							   <th class="img">종료일<img src="img/down02.png"></th>
							   <th class="img">노출수<img src="img/down02.png"></th>
							   <th class="img">노출회원수<img src="img/down02.png"></th>
							   <th class="img">클릭수<img src="img/down02.png"></th>
							   <th class="img">클릭회원수<img src="img/down02.png"></th>
							   <th>지역</th>
							   <th>연결타입</th>
							   <th class="img">사용여부<img src="img/down02.png"></th>
							   <th>성과확인</th>
							   <th class="img">등록일<img src="img/down02.png"></th>
						   </tr>
						   <tr class="y">
							   <td>###</td>
							   <td>전체</td>
							   <td>전체</td>
							   <td class="imgbox_wp"><div class="imgbox">img</div></td>
							   <td class="a color">비밀의공구</td>
							   <td>본사</td>
							   <td class="tal">0</td>
							   <td>2018-01-25</td>
							   <td>-</td>
							   <td>22,987</td>
							   <td>10,000</td>
							   <td>152</td>
							   <td>275</td>
							   <td class="line">
								   <ol>
									   <li>해운대구</li>
									   <li>서면롯데타워</li>
								   </ol>
							   </td>
							   <td>URL</td>
							   <td>Y</td>
							   <td class="a color">성과확인</td>
							   <td class="line">YYYY-MM-DD<br>HH:MM:SS</td>
						   </tr>
						   <tr class="y">
							   <td>###</td>
							   <td>App</td>
							   <td>안드로이드</td>
							   <td class="imgbox_wp"><div class="imgbox">img</div></td>
							   <td class="a color">ABC 마트 설 맞이 세일</td>
							   <td>본사</td>
							   <td class="tal">500,000</td>
							   <td>2018-01-25</td>
							   <td>2018-01-25</td>
							   <td>22,987</td>
							   <td>10,000</td>
							   <td>152</td>
							   <td>275</td>
							   <td class="line">
								   <ol>
									   <li>해운대구</li>
									   <li>서면롯데타워</li>
								   </ol>
							   </td>
							   <td>URL</td>
							   <td>Y</td>
							   <td class="a color">성과확인</td>
							   <td class="line">YYYY-MM-DD<br>HH:MM:SS</td>
						   </tr>
						   <tr class="gray">
							   <td>###</td>
							   <td>전체</td>
							   <td>전체</td>
							   <td class="imgbox_wp"><div class="imgbox">img</div></td>
							   <td class="a color">비밀의공구</td>
							   <td>본사</td>
							   <td class="tal">0</td>
							   <td>2018-01-25</td>
							   <td>-</td>
							   <td>22,987</td>
							   <td>10,000</td>
							   <td>152</td>
							   <td>275</td>
							   <td class="line">
								   <ol>
									   <li>해운대구</li>
									   <li>서면롯데타워</li>
								   </ol>
							   </td>
							   <td>URL</td>
							   <td>N</td>
							   <td class="a color">성과확인</td>
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