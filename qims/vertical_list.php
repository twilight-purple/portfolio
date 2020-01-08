<!DOCTYPE html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
    <title>qdillion</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/int.js"></script>
    <script src="js/vertical.js"></script>
</head>
    <body>
   
<!--   gnb/snb연결-->
  	<?php include "gnb.php"; ?>
    <?php include "snb.php"; ?>
<!--   gnb/snb연결-->

  
   <div id="wrap">
   	   <h1>비밀의공구</h1>
	   <ul class="title clear">
			<li></li>
			<li>비밀의공구 &nbsp;<span>중고나라 앱 내 비밀의공구 컨텐츠를 등록 및 수정할 수 있습니다</span></li>
		</ul>
	   <div class="vt01">
		   <table class="sc">
			   <tr>
				   <th>기간</th>
				   <td class="cd_img clear" style="width:30%;">
					   <select style="margin-right:10px;">
						   <option>등록일</option>
						   <option>수정일</option>
						   <option>시작일</option>
						   <option>마감일</option>
					   </select>
					   <input type="text" name="sc_txt" value="" class="sc_cd01">
					   <input type="button" name="sc_btn" value="" class="datepicker n01">
					   ~
					   <input type="text" name="sc_txt" value="" class="sc_cd02">
					   <input type="button" name="sc_btn" value="" class="datepicker n02">
				   </td>
				   <th>오픈상태</th>
				   <td style="width:10%;">
					   <select>
						   <option>전체</option>
						   <option>Y</option>
						   <option>N</option>
					   </select>
				   </td>
				   <th>게시상태</th>
				   <td>
					   <select>
						   <option>전체</option>
						   <option>Y</option>
						   <option>N</option>
					   </select>
				   </td>
			   </tr>
			   <tr>
				   <th>통합검색</th>
				   <td colspan="5">
					   <select style="width:120px; margin-right:10px;">
						   <option>전체</option>
						   <option>제목(상품명)</option>
						   <option>본문상세설명</option>
					   </select>
					   <input type="text" value="" style="width:350px;">
					   <input type="button" value="검색">
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
			   <li><span>(2018-07-02 00:00 ~ 2018-09-05 19:22)</span></li>
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
				   <a href="#" class="btn01" style="width:70px;">오픈</a>
				   <a href="#" class="btn01" style="width:70px;">마감</a>
				   <a href="#" class="btn01" style="width:70px;">노출</a>
				   <a href="#" class="btn01" style="width:80px;">미노출</a>
				   <a href="#" class="btn01" style="width:90px;">선택삭제</a>
				   <a href="#" class="btn01" style="width:110px;">엑셀 다운로드</a>
				   <a href="#" class="btn01" style="width:70px;">등록</a>
			   </li>
		   </ul>
			   <ul class="list_view clear">
				   <li class="on">
					   <table class="list">
						   <tr>
							   <th>
							   	<label class="cb li">
									 <input type="checkbox" class="sc_cb all" value="">
									 <span></span>
					   			</label>
							   </th>
							   <th>NO.</th>
							   <th>배너이미지</th>
							   <th>제목(상품명)</th>
							   <th class="img">시작일<img src="img/down02.png"></th>
							   <th class="img">마감일<img src="img/down02.png"></th>
							   <th class="img">조회수<img src="img/down02.png"></th>
							   <th class="img">구매버튼클릭수<img src="img/down02.png"></th>
							   <th class="img">댓글<img src="img/down02.png"></th>
							   <th class="img">오픈상태<img src="img/down02.png"></th>
							   <th class="img">게시상태<img src="img/down02.png"></th>
							   <th class="img">등록일<img src="img/down02.png"></th>
							   <th class="img">수정일<img src="img/down02.png"></th>
						   </tr>
						   <tr>
							   <td>
							   	<label class="cb li">
									 <input type="checkbox" class="sc_cb" value="">
									 <span></span>
					   			</label>
							   </td>
							   <td>100</td>
							   <td class="imgbox_wp"><div class="imgbox">img</div></td>
							   <td class="a line">[공구마감] 상아제약 홍삼정 리얼타임</td>
							   <td class="line">2018-01-25 16:00:00</td>
							   <td class="line">2018-01-30 18:00:00</td>
							   <td>73</td>
							   <td>70</td>
							   <td class="a">2</td>
							   <td>마감</td>
							   <td>미노출</td>
							   <td class="line">2018-02-03 11:30</td>
							   <td class="line">2018-02-03 11:30</td>
						   </tr>
						   <tr>
							   <td>
							   	<label class="cb li">
									 <input type="checkbox" class="sc_cb" value="">
									 <span></span>
					   			</label>
							   </td>
							   <td>99</td>
							   <td class="imgbox_wp"><div class="imgbox">img</div></td>
							   <td class="a line">[공구마감] 상아제약 홍삼정 리얼타임</td>
							   <td class="line">2018-01-25 16:00:00</td>
							   <td class="line">2018-01-30 18:00:00</td>
							   <td>84</td>
							   <td>80</td>
							   <td class="a">3</td>
							   <td>마감</td>
							   <td>미노출</td>
							   <td class="line">2018-02-03 11:30</td>
							   <td class="line">2018-02-03 11:30</td>
						   </tr>
						   <tr>
							   <td>
							   	<label class="cb li">
									 <input type="checkbox" class="sc_cb" value="">
									 <span></span>
					   			</label>
							   </td>
							   <td>98</td>
							   <td class="imgbox_wp"><div class="imgbox">img</div></td>
							   <td class="a line">[공구중] 스피너 3개 SET (색상 랜덤 발송)</td>
							   <td class="line">2018-01-25 16:00:00</td>
							   <td class="line">2018-01-30 18:00:00</td>
							   <td>1,244</td>
							   <td>80</td>
							   <td class="a">15</td>
							   <td class="color">오픈</td>
							   <td class="color">노출</td>
							   <td class="line">2018-02-03 11:30</td>
							   <td class="line">2018-02-03 11:30</td>
						   </tr>
						   <tr>
							   <td>
							   	<label class="cb li">
									 <input type="checkbox" class="sc_cb" value="">
									 <span></span>
					   			</label>
							   </td>
							   <td>97</td>
							   <td class="imgbox_wp"><div class="imgbox">img</div></td>
							   <td class="a line">[공구마감] 상아제약 홍삼정 리얼타임</td>
							   <td class="line">2018-01-25 16:00:00</td>
							   <td class="line">2018-01-30 18:00:00</td>
							   <td>611</td>
							   <td>80</td>
							   <td class="a">30</td>
							   <td>마감</td>
							   <td>미노출</td>
							   <td class="line">2018-02-03 11:30</td>
							   <td class="line">2018-02-03 11:30</td>
						   </tr>
						   <tr>
							   <td>
							   	<label class="cb li">
									 <input type="checkbox" class="sc_cb" value="">
									 <span></span>
					   			</label>
							   </td>
							   <td>96</td>
							   <td class="imgbox_wp"><div class="imgbox">img</div></td>
							   <td class="a line">[공구중] 상아제약 홍삼정 리얼타임</td>
							   <td class="line">2018-01-25 16:00:00</td>
							   <td class="line">2018-01-30 18:00:00</td>
							   <td>65</td>
							   <td>80</td>
							   <td class="a">31</td>
							   <td class="color">오픈</td>
							   <td>미노출</td>
							   <td class="line">2018-02-03 11:30</td>
							   <td class="line">2018-02-03 11:30</td>
						   </tr>
						   <tr>
							   <td>
							   	<label class="cb li">
									 <input type="checkbox" class="sc_cb" value="">
									 <span></span>
					   			</label>
							   </td>
							   <td>96</td>
							   <td class="imgbox_wp"><div class="imgbox">img</div></td>
							   <td class="a line">[공구마감] 상아제약 홍삼정 리얼타임</td>
							   <td class="line">2018-01-25 16:00:00</td>
							   <td class="line">2018-01-30 18:00:00</td>
							   <td>65</td>
							   <td>80</td>
							   <td class="a">11</td>
							   <td>마감</td>
							   <td class="color">노출</td>
							   <td class="line">2018-02-03 11:30</td>
							   <td class="line">2018-02-03 11:30</td>
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