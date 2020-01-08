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
	<script>
//		snb바꾸기
		$(document).ready(function(){
			$(".snb_wrap .snb>li:nth-child(2)>.snb_sub").addClass("view");
			$(".snb_wrap .snb>li:nth-child(2)>ul>li:nth-child(1)").addClass("on");
			$(".snb_wrap .snb>li:nth-child(2)>span").addClass("on");
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
   	   <h1>이벤트 관리</h1>
	   <ul class="title clear">
			<li></li>
			<li>
				이벤트 관리 &nbsp;<span>이벤트를 등록, 수정할 수 있고 당첨자 발표를 할 수 있습니다.</span>
			</li>
		</ul>
	   <div class="mk01">
		   <div class="sc_view">
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
					   </td>
					</tr>
				   <tr>
					   <th>이벤트타입</th>
					   <td>
						   <select>
							   <option>전체</option>
							   <option>댓글참여형</option>
							   <option>응모형</option>
							   <option>바로당첨형</option>
							   <option>선착순형</option>
						   </select>
						   <span style="margin-right:10px; margin-left:20px;">이벤트상태</span>
						   <label class="cb">
								 <input type="checkbox" class="sc_cb all02" value="">
								 <span></span>
								 <p>전체</p>
							</label>
							<label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>예약중</p>
							</label>
							<label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>진행중</p>
							</label>
							<label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>추출하기(종료)</p>
							</label>
							<label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>추출완료(발표 전)</p>
							</label>
							<label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>발표완료</p>
							</label>
					   </td>
				   </tr>
			   </table>
			   <table class="sc v02">
				   <tr>
					   <th>사용여부</th>
					   <td>
						   <select>
							   <option>전체</option>
							   <option>Y</option>
							   <option>N</option>
						   </select>
					   </td>
					   <th>노출여부</th>
					   <td>
						   <select>
							   <option>전체</option>
							   <option>Y</option>
							   <option>N</option>
						   </select>
					   </td>
					   <th>댓글여부</th>
					   <td>
						   <select>
							   <option>전체</option>
							   <option>Y</option>
							   <option>N</option>
						   </select>
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
					   <th>검색</th>
					   <td>
					   	<input type="text" value="">
					   	<input type="button" value="검색">
					   </td>
				   </tr>
				</table>
		   </div>
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
				   <a href="#" class="btn01 ap_pop02" style="width:90px;">순서적용</a>
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
						   <th>이벤트타입</th>
						   <th>배너이미지</th>
						   <th>이벤트제목</th>
						   <th class="img">시작일<img src="img/down02.png"></th>
						   <th class="img">종료일<img src="img/down02.png"></th>
						   <th class="img">조회수<img src="img/down02.png"></th>
						   <th class="img">조회회원수<img src="img/down02.png"></th>
						   <th class="img">응모수<img src="img/down02.png"></th>
						   <th class="img">댓글<img src="img/down02.png"></th>
						   <th class="img">사용여부<img src="img/down02.png"></th>
						   <th class="img">노출여부<img src="img/down02.png"></th>
						   <th>이벤트상태</th>
						   <th class="img">등록일<img src="img/down02.png"></th>
					   </tr>
					   <tr class="y">
						   <td>100</td>
						   <td>전체</td>
						   <td>전체</td>
						   <td>댓글참여형</td>
						   <td class="imgbox_wp"><div class="imgbox">img</div></td>
						   <td class="a color">비밀의공구</td>
						   <td>2018-01-25</td>
						   <td>-</td>
						   <td>152</td>
						   <td>275</td>
						   <td>5</td>
						   <td class="a color">5</td>
						   <td>Y</td>
						   <td>Y</td>
						   <td>진행중</td>
						   <td class="line">YYYY-MM-DD<br>HH:MM:SS</td>
					   </tr>
					   <tr class="y">
						   <td>100</td>
						   <td>전체</td>
						   <td>전체</td>
						   <td>댓글참여형</td>
						   <td class="imgbox_wp"><div class="imgbox">img</div></td>
						   <td class="a color">비밀의공구</td>
						   <td>2018-01-25</td>
						   <td>-</td>
						   <td>152</td>
						   <td>275</td>
						   <td>5</td>
						   <td class="a color">5</td>
						   <td>Y</td>
						   <td>Y</td>
						   <td class="a color">추출하기(종료)</td>
						   <td class="line">YYYY-MM-DD<br>HH:MM:SS</td>
					   </tr>
					   <tr class="y">
						   <td>100</td>
						   <td>전체</td>
						   <td>전체</td>
						   <td>댓글참여형</td>
						   <td class="imgbox_wp"><div class="imgbox">img</div></td>
						   <td class="a color">비밀의공구</td>
						   <td>2018-01-25</td>
						   <td>-</td>
						   <td>152</td>
						   <td>275</td>
						   <td>5</td>
						   <td class="a color">5</td>
						   <td>Y</td>
						   <td>Y</td>
						   <td>예약중</td>
						   <td class="line">YYYY-MM-DD<br>HH:MM:SS</td>
					   </tr>
					   <tr>
						   <td>100</td>
						   <td>전체</td>
						   <td>전체</td>
						   <td>댓글참여형</td>
						   <td class="imgbox_wp"><div class="imgbox">img</div></td>
						   <td class="a color">비밀의공구</td>
						   <td>2018-01-25</td>
						   <td>-</td>
						   <td>152</td>
						   <td>275</td>
						   <td>5</td>
						   <td class="a color">5</td>
						   <td>Y</td>
						   <td>N</td>
						   <td class="a color">추출완료</td>
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