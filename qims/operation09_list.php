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
   	   <h1>SMS 발송</h1>
	   <ul class="title clear">
			<li></li>
			<li>SMS 발송 &nbsp;<span>회원에게 문자를 보낼 수 있습니다.</span></li>
		</ul>
	   <div class="op v09">
		   <table class="sc">
			   <tr>
				   <th>발송(예약)일시</th>
				   <td class="cd_img clear">
					   <input type="text" name="sc_txt" value="2017.10.01" class="sc_cd01">
					   <input type="button" name="sc_btn" value="" class="datepicker n01">
					   ~
					   <input type="text" name="sc_txt" value="2018.01.01" class="sc_cd02">
					   <input type="button" name="sc_btn" value="" class="datepicker n02">
				   </td>
			   </tr>
			   <tr>
				   <th>통합검색</th>
				   <td>
					   <select>
						   <option>전체</option>
						   <option>제목</option>
						   <option>내용</option>
					   </select>
					   <input type="text" value="" style="width:50%;">
					   <input type="button" value="검색">
				   </td>
			   </tr>
		   </table>
		   <ul class="list_top clear">
			   <li>총 220건,</li>
			   <li class="clear'">
				   <ul class="list_nm">
					   <li class="on">1</li>
				   </ul>
				   <p>/ 11 페이지</p>
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
				   <a href="#" class="btn01 send" style="width:100px;">SMS 발송</a>
			   </li>
		   </ul>
		   <ul class="list_view clear">
			   <li class="on">
				   <table class="list">
					   <tr>
						   <th>NO.</th>
						   <th>내용</th>
						   <th>등록자</th>
						   <th class="img">발송(예약)일시<img src="img/down02.png"></th>
						   <th>발송 인원<br>(명)</th>
						   <th>발송번호</th>
					   </tr>
					   <tr>
						   <td>###</td>
						   <td>편의점 택배비 200원 할인 이벤트</td>
						   <td>허길행</td>
						   <td>2018-01-11 17:00</td>
						   <td>250</td>
						   <td>02-1234-5678</td>
					   </tr>
					   <tr>
						   <td>###</td>
						   <td>아이폰 X를 무료로 드립니다.</td>
						   <td>허길행</td>
						   <td>2018-01-11 17:00</td>
						   <td>250</td>
						   <td>02-1234-5678</td>
					   </tr>
					   <tr>
						   <td>###</td>
						   <td>점검중입니다. 죄송합니다.</td>
						   <td>허길행</td>
						   <td>2018-01-11 17:00</td>
						   <td>250</td>
						   <td>02-1234-5678</td>
					   </tr>
					   <tr>
						   <td>###</td>
						   <td>점검중입니다. 죄송합니다.</td>
						   <td>허길행</td>
						   <td>2018-01-11 17:00</td>
						   <td>250</td>
						   <td>02-1234-5678</td>
					   </tr>
					   <tr>
						   <td>###</td>
						   <td>편의점 택배비 200원 할인 이벤트</td>
						   <td>허길행</td>
						   <td>2018-01-11 17:00</td>
						   <td>250</td>
						   <td>02-1234-5678</td>
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