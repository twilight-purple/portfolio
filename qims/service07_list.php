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
			$(".snb_wrap .snb>li:nth-child(7)>ul>li:nth-child(1)").addClass("on");
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
			<li>마이태그 키워드 &nbsp;<span>마이태그 키워드별 설정현황 및 일 평균 노출 현황을 확인할 수 있습니다.</span></li>
		</ul>
	   <div class="sv07">
		   <table class="sc" width="100%">
			   <tr>
				   <th>기간</th>
				   <td class="cd_img clear" style="width:23%;">
					   <input type="text" value="" class="sc_cd01">
					   <input type="button" value="" class="datepicker n01">
					   ~
					   <input type="text" value="" class="sc_cd02">
					   <input type="button" value="" class="datepicker n02">
				   </td>
				   <th>키워드 그룹</th>
				   <td width="10%">
					   <select>
						   <option>전체</option>
					   </select>
				   </td>
				   <th>키워드</th>
				   <td>
					   <input type="text" value="">
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
					<col />
					<col width="18%"/>
					<col width="30%"/>
					<col />
					<col />
					<col />
					</colgroup>
					   <tr>
						   <th>NO.</th>
						   <th>키워드 그룹</th>
						   <th>키워드</th>
						   <th class="img">설정한 회원<img src="img/down02.png"></th>
						   <th class="img">일평균 클릭수<img src="img/down02.png"></th>
						   <th class="img">일평균 클릭회원수<img src="img/down02.png"></th>
					   </tr>
					   <tr>
						   <td>1</td>
						   <td class="sltd">
							   <select>
								   <option>선택</option>
							   </select>
						   </td>
						   <td>나이키</td>
						   <td>400</td>
						   <td>500</td>
						   <td>316</td>
					   </tr>
					   <tr>
						   <td>2</td>
						   <td class="sltd">
							   <select>
								   <option>스포츠</option>
							   </select>
						   </td>
						   <td>조던</td>
						   <td>400</td>
						   <td>500</td>
						   <td>316</td>
					   </tr>
					   <tr>
						   <td>3</td>
						   <td class="sltd">
							   <select>
								   <option>잡화</option>
							   </select>
						   </td>
						   <td>가방</td>
						   <td>400</td>
						   <td>500</td>
						   <td>316</td>
					   </tr>
					   <tr>
						   <td>4</td>
						   <td class="sltd">
							   <select>
								   <option>유아용품</option>
							   </select>
						   </td>
						   <td>카시트</td>
						   <td>400</td>
						   <td>500</td>
						   <td>316</td>
					   </tr>
					   <tr>
						   <td>5</td>
						   <td class="sltd">
							   <select>
								   <option>화장품</option>
							   </select>
						   </td>
						   <td>아이오페</td>
						   <td>400</td>
						   <td>500</td>
						   <td>316</td>
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