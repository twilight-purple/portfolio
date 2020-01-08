<!DOCTYPE html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
    <title>qdillion</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/int.js"></script>
    <script src="js/operation.js"></script>
</head>
    <body>
   
<!--   gnb/snb연결-->
  	<?php include "gnb.php"; ?>
    <?php include "snb.php"; ?>
<!--   gnb/snb연결-->

  
   <div id="wrap">
   	   <h1>앱 공지사항</h1>
	   <ul class="title clear">
			<li></li>
			<li>앱 공지사항 &nbsp;<span>앱에 노출되는 공지사항을 관리할 수 있습니다.</span></li>
		</ul>
	   <div class="op v07">
		   <table class="sc">
			   <tr>
				   <th>등록일</th>
				   <td class="cd_img clear" width="27%">
					   <input type="text" name="sc_txt" value="" class="sc_cd01">
					   <input type="button" name="sc_btn" value="" class="datepicker n01">
					   ~
					   <input type="text" name="sc_txt" value="" class="sc_cd02">
					   <input type="button" name="sc_btn" value="" class="datepicker n02">
					   <label class="cb">
						 <input type="checkbox" class="sc_cb not02" value="">
						 <span></span>
						 <p>전체</p>
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
				   <th>말머리</th>
				   <td>
					   <select>
						   <option>전체</option>
						   <option>공지</option>
						   <option>주의</option>
						   <option>뉴스</option>
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
				   <th>제목+이름</th>
				   <td>
					   <input type="text" name="sc_txt" value="" style="width:35%">
					   <input type="button" name="sc_btn" value="검색">
				   </td>
			   </tr>
		   </table>
		   <ul class="list_top clear">
			   <li>총 121건,</li>
			   <li class="clear'">
				   <ul class="list_nm">
					   <li class="on">1</li>
				   </ul>
				   <p>/ 7 페이지</p>
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
					   <a href="#" class="btn01" style="width:120px;">필독적용/해제</a>
					   <a href="#" class="btn01" style="width:80px;">등록</a>
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
						   <th>기기</th>
						   <th>운영체제</th>
						   <th>말머리</th>
						   <th>제목</th>
						   <th>내용</th>
						   <th class="img">조회수<img src="img/down02.png"></th>
						   <th class="img">사용여부<img src="img/down02.png"></th>
						   <th class="img">등록일<img src="img/down02.png"></th>
					   </tr>
					   <tr class="show">
						   <td>
							<label class="cb li">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
							</label>
						   </td>
						   <td>121</td>
						   <td>전체</td>
						   <td>전체</td>
						   <td>공지</td>
						   <td class="a">신종 사기수법을 조심하세요</td>
						   <td class="a">공지사항의 일부를 리스트에서 보여줌</td>
						   <td>1,255</td>
						   <td>Y</td>
						   <td>YYYY-MM-DD HH:MM:SS</td>
					   </tr>
					   <tr>
						   <td>
							<label class="cb li">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
							</label>
						   </td>
						   <td>120</td>
						   <td>App</td>
						   <td>안드로이드</td>
						   <td>필독</td>
						   <td class="a">이전에 작성한 게시글 내용 복사하기 기능</td>
						   <td class="a">공지사항의 일부를 리스트에서 보여줌</td>
						   <td>1,255</td>
						   <td>Y</td>
						   <td>YYYY-MM-DD HH:MM:SS</td>
					   </tr>
					   <tr>
						   <td>
							<label class="cb li">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
							</label>
						   </td>
						   <td>119</td>
						   <td>App</td>
						   <td>iOS</td>
						   <td>주의</td>
						   <td class="a">12/12(화) 서비스 정상화 완료 공지</td>
						   <td class="a">공지사항의 일부를 리스트에서 보여줌</td>
						   <td>1,255</td>
						   <td>Y</td>
						   <td>YYYY-MM-DD HH:MM:SS</td>
					   </tr>
					   <tr>
						   <td>
							<label class="cb li">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
							</label>
						   </td>
						   <td>118</td>
						   <td>App</td>
						   <td>전체</td>
						   <td>뉴스</td>
						   <td class="a">해킹을 이용한 신종 사기수법을 조심하세요</td>
						   <td class="a">공지사항의 일부를 리스트에서 보여줌</td>
						   <td>1,255</td>
						   <td>N</td>
						   <td>YYYY-MM-DD HH:MM:SS</td>
					   </tr>
					   <tr>
						   <td>
							<label class="cb li">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
							</label>
						   </td>
						   <td>117</td>
						   <td>App</td>
						   <td>전체</td>
						   <td>뉴스</td>
						   <td class="a">이전에 작성한 게시글 내용 복사하기 기능</td>
						   <td class="a">공지사항의 일부를 리스트에서 보여줌</td>
						   <td>1,255</td>
						   <td>N</td>
						   <td>YYYY-MM-DD HH:MM:SS</td>
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