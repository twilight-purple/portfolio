<!DOCTYPE html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
    <title>qdillion</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/int.js"></script>
    <script src="js/contents.js"></script>
</head>
<body>
   
<!--   gnb/snb연결-->
  	<?php include "gnb.php"; ?>
    <?php include "snb.php"; ?>
<!--   gnb/snb연결-->

   <div id="wrap">
   	   <h1>스플래시</h1>
	   <ul class="title clear">
			<li></li>
			<li>스플래시 &nbsp;<span>스플래시가 등록된 리스트를 확인하고 관리할 수 있습니다.</span></li>
		</ul>
	   <div class="ct v01">
		   <table class="sc">
				<colgroup>
					<col width="10%"/>
					<col width="30%"/>
					<col width="5%"/>
					<col width="10%"/>
					<col width="5%"/>
					<col />
					<col width="5%"/>
					<col width="10%"/>
				</colgroup>
			   <tr>
				   <th>노출기간</th>
				   <td class="cd_img clear">
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
			   <tr>
				   <th>스플래시 제목</th>
				   <td colspan="5">
					   <input type="text" value="" style="width:35%">
					   <input type="button" value="검색">
				   </td>
			   </tr>
		   </table>
		   <ul class="list_top clear">
			   <li>전체 60건,</li>
			   <li class="clear'">
				   <ul class="list_nm">
					   <li class="on">1</li>
				   </ul>
				   <p>/ 3 페이지</p>
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
				   <a href="#" class="ct_lk01 btn01" style="width:170px;">스플래시 영역 미리보기</a>
				   <a href="#" class="btn01">등록</a>
			   </li>
		   </ul>
		   <ul class="list_view clear">
			   <li class="on">
				   <table class="list">
					   <tr>
						   <th>NO.</th>
						   <th>운영체제</th>
						   <th>이미지</th>
						   <th>스플래시 제목</th>
						   <th>노출기간</th>
						   <th class="img">사용여부<img src="img/down02.png"></th>
						   <th class="img v02">
						   		등록일
						   		<img src="img/down02.png">
						   		<img src="img/down01.png">
						   </th>
					   </tr>
					   <tr class="y">
						   <td>##</td>
						   <td>전체</td>
						   <td class="imgbox_wp"><div class="imgbox">img</div></td>
						   <td>1월 스플래시</td>
						   <td>YYYY-MM-DD ~ YYYY-MM-DD</td>
						   <td>Y</td>
						   <td>YYYY-MM-DD HH:MM</td>
					   </tr>
					   <tr>
						   <td>##</td>
						   <td>iOS</td>
						   <td class="imgbox_wp"><div class="imgbox">img</div></td>
						   <td>2월 스플래시</td>
						   <td>YYYY-MM-DD ~ YYYY-MM-DD</td>
						   <td>N</td>
						   <td>YYYY-MM-DD HH:MM</td>
					   </tr>
					   <tr>
						   <td>##</td>
						   <td>안드로이드</td>
						   <td class="imgbox_wp"><div class="imgbox">img</div></td>
						   <td>3월 스플래시</td>
						   <td>YYYY-MM-DD ~ YYYY-MM-DD</td>
						   <td>N</td>
						   <td>YYYY-MM-DD HH:MM</td>
					   </tr>
					   <tr>
						   <td>##</td>
						   <td>전체</td>
						   <td class="imgbox_wp"><div class="imgbox">img</div></td>
						   <td>4월 스플래시</td>
						   <td>YYYY-MM-DD ~ YYYY-MM-DD</td>
						   <td>N</td>
						   <td>YYYY-MM-DD HH:MM</td>
					   </tr>
					   <tr class="y">
						   <td>##</td>
						   <td>안드로이드</td>
						   <td class="imgbox_wp"><div class="imgbox">img</div></td>
						   <td>5월 스플래시</td>
						   <td>YYYY-MM-DD ~ YYYY-MM-DD</td>
						   <td>Y</td>
						   <td>YYYY-MM-DD HH:MM</td>
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