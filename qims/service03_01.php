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
   	   <h1>앱 카테고리 관리</h1>
	   <ul class="title clear">
			<li></li>
			<li>
				카테고리 관리 &nbsp;<span>카테고리 등록/수정/삭제 및 관리기능</span>
			</li>
		</ul>
	   <div class="sv03">
<!-------------------------카테고리 추가-->
		   <table class="sc clear">
			   <tr>
				   <th>1Depth 카테고리 추가</th>
				   <td>
					<input type="text" name="sc_txt" value="">
					<input type="button" name="sc_btn" value="등록">
				   </td>
			   </tr>
		   </table>
<!--------------------------------표1-->
		   <ul class="svtop clear">
			   <li class="svtop_right">
				   <input type="button" value="순서적용" style="width:80px;">
				   <input type="button" value="수정적용" style="width:80px;">
			   </li>
		   </ul>
		   <table class="list">
			   <tr>
				   <th style="width:10%">NO.</th>
				   <th>1 Depth 카테고리명</th>
				   <th>상품등록 권한</th>
			   </tr>
			   <tr>
				   <td>1</td>
				   <td>
					   <p class="a">수입명품</p>
					   <ul class="cg_btn clear">
						   <li class="cgbt01">카테고리 링크복사</li>
						   <li class="cgbt02">수정</li>
						   <li class="cgbt03">미사용</li>
					   </ul>
				   </td>
				   <td class="qus">
					   <ul>
						   <li>전체</li>
						   <li>
							   <label class="cb all">
								 <input type="checkbox" class="sc_cb al03" value="">
								 <span></span>
								 <p>전체 </p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>ORANGE </p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>SILVER </p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>GOLD </p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>VIP </p>
							   </label>
						   </li>
						   <li>
							   <div class="btn03">선택완료</div>
						   </li>
					   </ul>
				   </td>
			   </tr>
			   <tr>
				   <td>2</td>
				   <td>
					   <p class="a">패션의류</p>
					   <ul class="cg_btn clear">
						   <li class="cgbt01">카테고리 링크복사</li>
						   <li class="cgbt02">수정</li>
						   <li class="cgbt03">미사용</li>
					   </ul>
				   </td>
				   <td class="qus">
					   <ul>
						   <li>전체</li>
						   <li>
							   <label class="cb all">
								 <input type="checkbox" class="sc_cb al03" value="">
								 <span></span>
								   <p>전체 </p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>ORANGE </p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>SILVER </p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>GOLD </p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>VIP </p>
							   </label>
						   </li>
						   <li>
							   <div class="btn03">선택완료</div>
						   </li>
					   </ul>
				   </td>
			   </tr>
			   <tr>
				   <td>3</td>
				   <td>
					   <p class="a">패션잡화</p>
					   <ul class="cg_btn clear">
						   <li class="cgbt01">카테고리 링크복사</li>
						   <li class="cgbt02">수정</li>
						   <li class="cgbt03">미사용</li>
					   </ul>
				   </td>
				   <td class="qus">
					   <ul>
						   <li>전체</li>
						   <li>
							   <label class="cb all">
								 <input type="checkbox" class="sc_cb al03" value="">
								 <span></span>
								 <p>전체 </p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>ORANGE </p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>SILVER </p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>GOLD </p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>VIP </p>
							   </label>
						   </li>
						   <li>
							   <div class="btn03">선택완료</div>
						   </li>
					   </ul>
				   </td>
			   </tr>
			   <tr>
				   <td>4</td>
				   <td>
					   <p class="a">화장품/미용</p>
					   <ul class="cg_btn clear">
						   <li class="cgbt01">카테고리 링크복사</li>
						   <li class="cgbt02">수정</li>
						   <li class="cgbt03">미사용</li>
					   </ul>
				   </td>
				   <td class="qus">
					   <ul>
						   <li>전체</li>
						   <li>
							   <label class="cb all">
								 <input type="checkbox" class="sc_cb al03" value="">
								 <span></span>
								 <p>전체 </p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>ORANGE </p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>SILVER </p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>GOLD </p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>VIP </p>
							   </label>
						   </li>
						   <li>
							   <div class="btn03">선택완료</div>
						   </li>
					   </ul>
				   </td>
			   </tr>
			   <tr>
				   <td>5</td>
				   <td>
					   <p class="a">출산/유아동/교육</p>
					   <ul class="cg_btn clear">
						   <li class="cgbt01">카테고리 링크복사</li>
						   <li class="cgbt02">수정</li>
						   <li class="cgbt03">미사용</li>
					   </ul>
				   </td>
				   <td class="qus">
					   <ul>
						   <li>전체</li>
						   <li>
							   <label class="cb all">
								 <input type="checkbox" class="sc_cb al03" value="">
								 <span></span>
								 <p>전체 </p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>ORANGE </p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>SILVER </p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>GOLD </p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>VIP </p>
							   </label>
						   </li>
						   <li>
							   <div class="btn03">선택완료</div>
						   </li>
					   </ul>
				   </td>
			   </tr>
			    <tr>
				   <td>6</td>
				   <td class="y">
					   <p class="a">모바일</p>
					   <ul class="cg_btn clear">
						   <li class="cgbt01">카테고리 링크복사</li>
						   <li class="cgbt04">사용</li>
					   </ul>
				   </td>
				   <td class="qus y">
					   <ul>
						   <li>전체</li>
						   <li>
							   <label class="cb all">
								 <input type="checkbox" class="sc_cb al03" value="">
								 <span></span>
								 <p>전체 </p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>ORANGE </p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>SILVER </p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>GOLD </p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>VIP </p>
							   </label>
						   </li>
						   <li>
							   <div class="btn03">선택완료</div>
						   </li>
					   </ul>
				   </td>
			   </tr>
			   <tr>
				   <td>7</td>
				   <td>
					   <p class="a">컴퓨터/노트북/주변기기</p>
					   <ul class="cg_btn clear">
						   <li class="cgbt01">카테고리 링크복사</li>
						   <li class="cgbt02">수정</li>
						   <li class="cgbt03">미사용</li>
					   </ul>
					   <ul class="cg_btn clear">
						   <li class="cgbt05">적용</li>
						   <li class="cgbt06">취소</li>
					   </ul>
				   </td>
				   <td class="qus">
					   <ul>
						   <li>전체</li>
						   <li>
							   <label class="cb all">
								 <input type="checkbox" class="sc_cb al03" value="">
								 <span></span>
								 <p>전체 </p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>ORANGE </p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>SILVER </p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>GOLD </p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>VIP </p>
							   </label>
						   </li>
						   <li>
							   <div class="btn03">선택완료</div>
						   </li>
					   </ul>
				   </td>
			   </tr>
			   <tr>
				   <td>8</td>
				   <td class="cgb_txt">
					   <input type="text" name="list_txt" value="카메라/캠코더/촬영기기" style="width:80%;">
					   <ul class="cg_btn clear">
						   <li class="cgbt05">적용</li>
						   <li class="cgbt06">취소</li>
					   </ul>
				   </td>
				   <td class="qus">
					   <ul>
						   <li>전체</li>
						   <li>
							   <label class="cb all">
								 <input type="checkbox" class="sc_cb al03" value="">
								 <span></span>
								 <p>전체 </p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>ORANGE </p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>SILVER </p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>GOLD </p>
							   </label>
						   </li>
						   <li>
							   <label class="cb">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>VIP </p>
							   </label>
						   </li>
						   <li>
							   <div class="btn03">선택완료</div>
						   </li>
					   </ul>
				   </td>
			   </tr>
		   </table>
<!--------------------------------표2-->
		   <table class="tb02">
			   <tr>
				   <th style="width:5%">NO.</th>
				   <th>수정항목</th>
				   <th>관리자</th>
				   <th>수정일시</th>
			   </tr>
			   <tr>
				   <td>1</td>
				   <td>1depth 카테고리(수입명품) 미사용 처리
				   <br>3depth 카테고리(뽀로로) 추가</td>
				   <td>김보배(서비스기획팀)</td>
				   <td>2016-12-25 00:23:56</td>
			   </tr>
			   <tr>
				   <td>2</td>
				   <td>3depth 카테고리(에어조던) 추가</td>
				   <td>김보배(서비스기획팀)</td>
				   <td>2016-12-25 00:23:56</td>
			   </tr>
			   <tr>
				   <td>3</td>
				   <td>수입명품&#62;남성신발&#62;스니커즈 : 3depth 카테고리면 변경(스니커즈 &#62; 캐쥬얼화)</td>
				   <td>김보배(서비스기획팀)</td>
				   <td>2016-12-25 00:23:56</td>
			   </tr>
		   </table>
	   </div>
    </div>
    
<!--    footer연결-->
    <?php include "footer.php"; ?>
<!--    footer연결-->

</body>
</html>