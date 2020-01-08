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
   	   <h1>키워드 그룹 관리</h1>
	   <ul class="title clear">
			<li></li>
			<li>키워드 그룹 관리 &nbsp;<span>조건을 설정하여 회원의 그룹을 등록하고, 등록한 그룹을 관리할 수 있습니다</span></li>
		</ul>
	   <div class="sv09">
		   <table class="sc" width="100%">
		   		<colgroup>
					<col width="8%"/>
					<col width="20%"/>
					<col width="8%"/>
					<col width="15%"/>
					<col width="8%"/>
					<col />
				</colgroup>
			   <tr>
				   <th>그룹 생성일</th>
				   <td class="cd_img clear" width="20%">
					   <input type="text" name="sc_txt" value="" class="sc_cd01">
					   <input type="button" name="sc_btn" value="" class="datepicker n01">
					   ~
					   <input type="text" name="sc_txt" value="" class="sc_cd02">
					   <input type="button" name="sc_btn" value="" class="datepicker n02">
				   </td>
				   <th>키워드 그룹명</th>
				   <td>
					   <input type="text" nmae="sc_txt" value="">
				   </td>
				   <th>설정 키워드</th>
				   <td>
					   <input type="text" nmae="sc_txt" value="">
					   <input type="button" name="sc_btn" value="검색">
				   </td>
			   </tr>
		   </table>
		   <ul class="list_top clear">
			   <li>전체 121건,</li>
			   <li class="clear'">
				   <ul class="list_nm">
					   <li class="on">1</li>
				   </ul>
				   <p>/ 3 페이지</p>
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
			   <li class="list_topbtn clear">
				   <a href="#" class="btn01 ap_pop" style="width:80px;">적용</a>
				   <a href="#" class="btn01" style="width:110px;">엑셀 다운로드</a>
				   <a href="#" class="btn01" style="width:80px;">추가</a>
			   </li>
		   </ul>
		   <ul class="list_view clear">
			   <li class="on">
				   <table class="list">
				   <colgroup>
					<col />
					<col />
					<col width="40%"/>
					<col />
					<col />
					</colgroup>
					   <tr>
						   <th>NO.</th>
						   <th>키워드 그룹명</th>
						   <th>설정 키워드</th>
						   <th>부합하는 회원</th>
						   <th>그룹 생성일</th>
					   </tr>
					   <tr>
						   <td>121</td>
						   <td><input type="text" name="list_txt" value=""></td>
						   <td>-</td>
						   <td>-</td>
						   <td>YYYY-MM-DD HH:MM:SS</td>
					   </tr>
					   <tr>
						   <td>120</td>
						   <td><input type="text" name="list_txt" value="유아용품"></td>
						   <td>카시트, 기저귀, 분유</td>
						   <td>2,125</td>
						   <td>YYYY-MM-DD HH:MM:SS</td>
					   </tr>
					   <tr>
						   <td>119</td>
						   <td><input type="text" name="list_txt" value="화장품"></td>
						   <td>아이라인, 볼터치, 립스틱</td>
						   <td>5,214</td>
						   <td>YYYY-MM-DD HH:MM:SS</td>
					   </tr>
					   <tr>
						   <td>118</td>
						   <td><input type="text" name="list_txt" value="가전제품"></td>
						   <td>냉장고, 커피머신, 토스트기, 커피포트</td>
						   <td>1,258</td>
						   <td>YYYY-MM-DD HH:MM:SS</td>
					   </tr>
					   <tr>
						   <td>117</td>
						   <td><input type="text" name="list_txt" value="전자기기"></td>
						   <td>컴퓨터, 세탁기</td>
						   <td>2,125</td>
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