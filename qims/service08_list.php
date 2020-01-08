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
	<script>
//		snb바꾸기
		$(document).ready(function(){
			$(".snb_wrap .snb>li:nth-child(7)>.snb_sub").addClass("view");
			$(".snb_wrap .snb>li:nth-child(7)>ul>li:nth-child(2)").addClass("on");
			$(".snb_wrap .snb>li:nth-child(7)>span").addClass("on");
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
   	   <h1>마이태그 관리</h1>
	   <ul class="title clear">
			<li></li>
			<li>마이태그 카테고리 &nbsp;<span>마이태그 카테고리별 회원수 및 클릭수를 조회할 수 있고, 예상 광고비를 계산할 수 있습니다</span></li>
		</ul>
	   <div class="sv08">
		   <table class="sc" width="100%">
		   		<colgroup>
					<col width="5%"/>
					<col />
					<col width="9%"/>
					<col width="10%"/>
					<col width="9%"/>
					<col width="10%"/>
					<col width="9%"/>
					<col width="20%"/>
				</colgroup>
			   <tr>
				   <th>기간</th>
				   <td class="cd_img clear" style="width:20%;">
					   <input type="text" value="" class="sc_cd01">
					   <input type="button" value="" class="datepicker n01">
					   ~
					   <input type="text" value="" class="sc_cd02">
					   <input type="button" value="" class="datepicker n02">
				   </td>
				   <th>1Depth 카테고리</th>
				   <td>
					   <select>
						   <option>전체</option>
					   </select>
				   </td>
				   <th>2Depth 카테고리</th>
				   <td>
					   <select>
						   <option>전체</option>
					   </select>
				   </td>
				   <th>3Depth 카테고리</th>
				   <td>
					   <select>
						   <option>전체</option>
					   </select>
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
			   <li><span>(2018-01-01 ~ 2018-01-31)</span></li>
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
				   <a href="#" class="btn01" style="width:110px;">엑셀 다운로드</a>
			   </li>
		   </ul>
		   <ul class="list_view clear">
			   <li class="on">
				   <table class="list">
				   <colgroup>
					<col width="5%"/>
					<col width="25%"/>
					<col width="25%"/>
					<col width="25%"/>
					<col />
					<col />
					</colgroup>
					   <tr>
						   <th>NO.</th>
						   <th>1Depth 카테고리</th>
						   <th>2Depth 카테고리</th>
						   <th>3Depth 카테고리</th>
						   <th class="img">일평균 클릭수<img src="img/down02.png"></th>
						   <th class="img">일평균 클릭회원수<img src="img/down02.png"></th>
					   </tr>
					   <tr>
						   <td>1</td>
						   <td>수입명품 (123,215)</td>
						   <td>지갑/벨트 (123,215)</td>
						   <td>명함지갑/키지갑 (500)</td>
						   <td>316</td>
						   <td>400</td>
					   </tr>
					   <tr>
						   <td>2</td>
						   <td>패션의류 (123,215)</td>
						   <td>남성의류 (123,215)</td>
						   <td>셔츠/남방 (500)</td>
						   <td>279</td>
						   <td>156</td>
					   </tr>
					   <tr>
						   <td>3</td>
						   <td>수입명품 (123,215)</td>
						   <td>지갑/벨트 (123,215)</td>
						   <td>명함지갑/키지갑 (500)</td>
						   <td>316</td>
						   <td>400</td>
					   </tr>
					   <tr>
						   <td>4</td>
						   <td>수입명품 (123,215)</td>
						   <td>지갑/벨트 (123,215)</td>
						   <td>명함지갑/키지갑 (500)</td>
						   <td>316</td>
						   <td>400</td>
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