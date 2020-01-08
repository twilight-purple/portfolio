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
<!--   타이틀-->
   	   <h1>앱 카테고리 관리</h1>
	   <ul class="title clear">
			<li></li>
			<li>
				카테고리 관리 &nbsp;<span>카테고리 등록/수정/삭제 및 관리기능</span>
			</li>
		</ul>
<!--   타이틀-->
	   <div class="sv03">
<!-------------------------카테고리 추가-->
		   <table class="sc clear">
			   <tr>
				   <th>2Depth 카테고리 추가</th>
				   <td>
					<input type="text" name="sc_txt" value="">
					<input type="button" name="sc_btn" value="등록">
				   </td>
			   </tr>
		   </table>
<!--------------------------------표1-->
		   <ul class="svtop clear">
			   <li>
			   	  <label class="cb sv03">
					 <input type="checkbox" class="sc_cb tbshowch" value="">
					 <span></span>
					 <p>카페연동 카테고리 설정 추가하기 (3depth 카테고리 없는 경우만 선택)</p>
				   </label>
			   </li>
			   <li class="svtop_right">
				   <input type="button" value="순서적용" style="width:80px;">
				   <input type="button" value="수정적용" style="width:80px;">
			   </li>
		   </ul>
		   <table class="list tbshowwp">
			   <tr>
				   <th style="width:10%">NO.</th>
				   <th>수입명품 &#62; 2 Depth 카테고리명</th>
				   <th>상품등록 권한</th>
				   <th>카테고리 옵션(최대 3개)</th>
			   </tr>
			   <tr style="padding:0px; margin:0px;">
				   <td>1</td>
				   <td class="svtleft">
					   <p class="a">여성신발</p>
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
				   <td class="fsv">
					   <ul class="clear">
						   <li>사이즈(신발), 소재</li>
						   <li><input type="button" name="list_btn" value="설정"></li>
					   </ul>
				   </td>
			   </tr>
			   <tr>
				   <td>2</td>
				   <td class="svtleft">
					   <p class="a">남성신발</p>
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
				   <td class="fsv">
					   <ul class="clear">
						   <li>3depth 개별설정</li>
						   <li><input type="button" name="list_btn" value="설정"></li>
					   </ul>
				   </td>
			   </tr>
			   <tr>
				   <td>3</td>
				   <td class="svtleft">
					   <p class="a">가방/핸드백</p>
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
				   <td class="fsv">
					   <ul class="clear">
						   <li>소재</li>
						   <li><input type="button" name="list_btn" value="설정"></li>
					   </ul>
				   </td>
			   </tr>
			   <tr>
				   <td>4</td>
				   <td class="svtleft">
					   <p class="a">지갑/벨트</p>
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
				   <td class="fsv">
					   <ul class="clear">
						   <li>옵션없음</li>
						   <li><input type="button" name="list_btn" value="설정"></li>
					   </ul>
				   </td>
			   </tr>
			   <tr>
				   <td>5</td>
				   <td class="svtleft">
					   <p class="a">악세서리</p>
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
				   <td class="fsv">
					   <ul class="clear">
						   <li>옵션없음</li>
						   <li><input type="button" name="list_btn" value="설정"></li>
					   </ul>
				   </td>
			   </tr>
			    <tr>
				   <td>6</td>
				   <td class="svtleft">
					   <p class="a">여성의류</p>
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
				   <td class="fsv">
					   <ul class="clear">
						   <li>소재</li>
						   <li><input type="button" name="list_btn" value="설정"></li>
					   </ul>
				   </td>
			   </tr>
			   <tr>
				   <td>7</td>
				   <td class="svtleft">
					   <p class="a">남성의류</p>
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
				   <td class="fsv">
					   <ul class="clear">
						   <li>소재</li>
						   <li><input type="button" name="list_btn" value="설정"></li>
					   </ul>
				   </td>
			   </tr>
		   </table>
	   </div>
    </div>
    
<!--    footer연결-->
    <?php include "footer.php"; ?>
<!--    footer연결-->

</body>
</html>