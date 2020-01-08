<!DOCTYPE html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
    <title>qdillion</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/int.js"></script>
    <script src="js/system.js"></script>
</head>
<body>
   
<!--   gnb/snb연결-->
  	<?php include "gnb.php"; ?>
    <?php include "snb.php"; ?>
<!--   gnb/snb연결-->

  
   <div id="wrap">
   	   <h1>사원 관리</h1>
	   <ul class="title clear">
			<li></li>
			<li>사원 관리 &nbsp;<span>등록된 관리자 계정을 관리할 수 있습니다.</span></li>
		</ul>
	   <div class="syt01">
		   <table class="sc">
			   <tr>
				   <th>등록일</th>
				   <td class="cd_img clear" style="width:27%;">
					   <input type="text" value="" class="sc_cd01">
					   <input type="button" value="" class="datepicker n01">
					   ~
					   <input type="text" value="" class="sc_cd02">
					   <input type="button" value="" class="datepicker n02">
					   <label class="cb">
						 <input type="checkbox" class="sc_cb not02" value="">
						 <span></span>
						 <p>전체</p>
					   </label>
				   </td>
				   <th>Level</th>
				   <td>
					   <select>
						   <option>전체</option>
						   <option>Level 1</option>
						   <option>Level 2</option>
						   <option>Level 3</option>
						   <option>Level 4</option>
						   <option>Level 5</option>
					   </select>
				   </td>
			   </tr>
			   <tr>
			   	   <th>통합검색</th>
				   <td colspan="3">
				   	<select>
						<option>전체</option>
						<option>이름</option>
						<option>아이디</option>
						<option>부서</option>
				   	</select>
				   	<input type="text" value="" style="width:70%;">
				   	<input type="button" value="검색">
				   </td>
			   </tr>
		   </table>
		   <ul class="list_top clear">
			   <li>총 59건,</li>
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
				   <a href="#" class="btn01" style="width:100px;">사원 등록</a>
			   </li>
		   </ul>
		   <ul class="list_view clear">
			   <li class="on">
				   <table class="list">
					   <tr>
						   <th>NO.</th>
						   <th>이름</th>
						   <th>아이디(이메일)</th>
						   <th>부서</th>
						   <th class="img">Level<img src="img/down02.png"></th>
						   <th class="img">등록일<img src="img/down02.png"></th>
					   </tr>
					   <tr>
						   <td>59</td>
						   <td>허길행</td>
						   <td>basdor@qdillion.com</td>
						   <td>서비스기획팀</td>
						   <td>LEVEL2 (선임급)</td>
						   <td>2016-12-25 00:23:56</td>
					   </tr>
					   <tr>
						   <td>58</td>
						   <td>허길행</td>
						   <td>basdor@qdillion.com</td>
						   <td>서비스기획팀</td>
						   <td>LEVEL2 (선임급)</td>
						   <td>2016-12-25 00:23:56</td>
					   </tr>
					   <tr>
						   <td>57</td>
						   <td>허길행</td>
						   <td>basdor@qdillion.com</td>
						   <td>서비스기획팀</td>
						   <td>LEVEL2 (선임급)</td>
						   <td>2016-12-25 00:23:56</td>
					   </tr>
					   <tr>
						   <td>56</td>
						   <td>허길행</td>
						   <td>basdor@qdillion.com</td>
						   <td>서비스기획팀</td>
						   <td>LEVEL2 (선임급)</td>
						   <td>2016-12-25 00:23:56</td>
					   </tr>
					   <tr>
						   <td>55</td>
						   <td>허길행</td>
						   <td>basdor@qdillion.com</td>
						   <td>서비스기획팀</td>
						   <td>LEVEL2 (선임급)</td>
						   <td>2016-12-25 00:23:56</td>
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