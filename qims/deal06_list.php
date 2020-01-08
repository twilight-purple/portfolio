<!DOCTYPE html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
    <title>qdillion</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/int.js"></script>
    <script src="js/deal.js"></script>
	<script>
//		snb바꾸기
	$(document).ready(function(){
		$(".snb_wrap .snb>li:nth-child(5)>.snb_sub").addClass("view");
		$(".snb_wrap .snb>li:nth-child(5)>ul>li:nth-child(2)").addClass("on");
		$(".snb_wrap .snb>li:nth-child(5)>span").addClass("on");
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
   	   <h1>편의점 택배 관리</h1>
	   <ul class="title clear">
			<li></li>
			<li>
				편의점 택배 안내 콘텐츠 &nbsp;<span>편의점 택배 이용 방법 안내 콘텐츠를 등록할 수 있습니다</span>
			</li>
		</ul>
	   <div class="dl06">
		   <ul class="list_top clear">
			   <li>전체 3건,</li>
			   <li class="clear">
				   <ul class="list_nm">
					   <li class="on">1</li>
				   </ul>
				   <p>/ 1 페이지</p>
			   </li>
			   <li><span>(2018-07-01 ~ 2018-09-05)</span></li>
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
				   <a href="#" class="btn01 d_yy" style="width:80px;">등록</a>
			   </li>
		   </ul>
		   <ul class="list_view clear">
			   <li class="on">
				   <table class="list">
					   <tr>
						   <th>NO.</th>
						   <th>운영체제</th>
						   <th>콘텐츠 이미지</th>
						   <th>등록일</th>
						   <th>노출</th>
					   </tr>
					   <tr>
						   <td>3</td>
						   <td>전체</td>
						   <td class="imgbox_wp" width="25%">
							   <p>첨부파일 : <a href="#">delivery_imst_20170929100439</a></p>
						   <div class="imgbox">img</div>
						   </td>
						   <td>2016-12-25</td>
						   <td class="a color">노출하기</td>
					   </tr>
					   <tr>
						   <td>2</td>
						   <td>전체</td>
						   <td class="imgbox_wp" width="25%">
							   <p>첨부파일 : <a href="#">delivery_imst_20170929100439</a></p>
						   <div class="imgbox">img</div>
						   </td>
						   <td>2016-12-25</td>
						   <td>노출중</td>
					   </tr>
					   <tr>
						   <td>1</td>
						   <td>전체</td>
						   <td class="imgbox_wp" width="25%">
							   <p>첨부파일 : <a href="#">delivery_imst_20170929100439</a></p>
						   <div class="imgbox">img</div>
						   </td>
						   <td>2016-12-25</td>
						   <td class="a color">노출하기</td>
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