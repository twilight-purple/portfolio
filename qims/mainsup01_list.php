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
   	   <h1>팝업설정</h1>
	   <ul class="title clear">
			<li></li>
		   <li>팝업설정 &nbsp;<span>앱 메인에 노출되는 팝업을 등록하고, 관리할 수 있습니다.</span></li>
		</ul>
	   <div class="ms01">
		   <table class="sc">
			   <tr>
				   <th>노출기간</th>
				   <td class="cd_img clear cb_l">
					   <input type="text" name="sc_txt" value="" class="sc_cd01">
					   <input type="button" name="sc_btn" value="" class="datepicker n01">
					   ~
					   <input type="text" name="sc_txt" value="" class="sc_cd02">
					   <input type="button" name="sc_btn" value="" class="datepicker n02">
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
				   <th>팝업타입</th>
				   <td>
					   <select>
						   <option>전체</option>
						   <option>이벤트</option>
						   <option>공지사항</option>
						   <option>외부링크</option>
						   <option>접근제한</option>
					   </select>
				   </td>
				   <th>제목</th>
				   <td>
					   <input type="text" name="sc_txt" value="">
					   <input type="button" name="sc_btn" value="검색">
				   </td>
			   </tr>
		   </table>
		   <ul class="list_top clear">
			   <li>전체 23건,</li>
			   <li class="clear'">
				   <ul class="list_nm">
					   <li class="on">1</li>
				   </ul>
				   <p>/ 2 페이지</p>
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
				   <ul>
					   <li class="btn01"><a href="#" onclick="return false">등록</a></li>
				   </ul>
			   </li>
		   </ul>
		   <ul class="list_view clear">
			   <li class="on">
				   <table class="list">
				   <colgroup>
						<col />
						<col />
						<col />
						<col />
						<col width="15%"/>
						<col />
						<col />
					</colgroup>
					   <tr>
						   <th>NO.</th>
						   <th>기기</th>
						   <th>운영체제</th>
						   <th>팝업타입</th>
						   <th>이미지</th>
						   <th>제목</th>
						   <th class="img">노출기간<img src="img/down02.png"></th>
						   <th class="img">조회수<img src="img/down02.png"></th>
						   <th>사용여부</th>
					   </tr>
					   <tr>
						   <td>23</td>
						   <td>전체</td>
						   <td>전체</td>
						   <td>공지사항</td>
						   <td class="imgbox_wp"><div class="imgbox" >img</div></td>
						   <td class="a">이니시스 서비스 종료</td>
						   <td>YYYY-MM-DD HH:MM ~ YYYY-MM-DD HH:MM</td>  
						   <td>125</td>
						   <td>Y</td>
					   </tr>
					   <tr>
						   <td>22</td>
						   <td>App</td>
						   <td>전체</td>
						   <td>접근제한</td>
						   <td class="imgbox_wp"><div class="imgbox" >img</div></td>
						   <td class="a">시스템 점검으로 인한 접근 제한</td>
						   <td>YYYY-MM-DD HH:MM ~ YYYY-MM-DD HH:MM</td>  
						   <td>122</td>
						   <td>N</td>
					   </tr>
					   <tr>
						   <td>21</td>
						   <td>web</td>
						   <td>전체</td>
						   <td>접근제한</td>
						   <td class="imgbox_wp"><div class="imgbox" >img</div></td>
						   <td class="a">시스템 점검으로 인한 접근 제한</td>
						   <td>YYYY-MM-DD HH:MM ~ YYYY-MM-DD HH:MM</td>  
						   <td>125</td>
						   <td>N</td>
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