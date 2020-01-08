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
   	   <h1>관리자 메뉴관리</h1>
	   <ul class="title clear">
			<li></li>
			<li>관리자 메뉴관리 &nbsp;<span>통합관리자 메뉴를 편집할 수 있습니다.</span></li>
	   </ul>
	   <div class="syt03">
<!-----------------------------------------------------탭-->
		   <ul class="tab_top clear">
			   <li class="tabtop_right"><input type="button" value="저장" class="btn01"></li>
		   </ul>
		   <div class="tb">
			   <ol>
				   <li>
					   <span>코드번호</span>
					   <span>항목명</span>
					   <span>사용설정</span>
				   </li>
				   <li>
					   <span>03000000</span>
					   <span>
						   <span class="d">1D</span>
						   <input type="text" value="결제/배송">
					   </span>
					   <span>
						   <select>
							   <option>사용</option>
							   <option>미사용</option>
						   </select>
					   </span>
					   <ol>
						   <li>
							   <span>03010000</span>
							   <span>
								   <span class="d">2D</span>
								   <input type="text" value="안전결제 관리">
							   </span>
							   <span>
								   <select>
									   <option>사용</option>
									   <option>미사용</option>
								   </select>
							   </span>
							   <ol>
								   <li>
									   <span>03010100</span>
									   <span>
										   <span class="d">3D</span>
										   <input type="text" value="리스트">
									   </span>
									   <span>
										   <select>
											   <option>사용</option>
											   <option>미사용</option>
										   </select>
									   </span>
								   </li>
								   <li>
									   <span>03010200</span>
									   <span>
										   <span class="d">3D</span>
										   <input type="text" value="정산관리">
									   </span>
									   <span>
										   <select>
											   <option>사용</option>
											   <option>미사용</option>
										   </select>
									   </span>
								   </li>
							   </ol>
						   </li>
						   <li>
							   <span>03020000</span>
							   <span>
								   <span class="d">2D</span>
								   <input type="text" value="즉시송금 관리">
							   </span>
							   <span>
								   <select>
									   <option>사용</option>
									   <option>미사용</option>
								   </select>
							   </span>
						   </li>
						   <li>
							   <span>03030000</span>
							   <span>
								   <span class="d">2D</span>
								   <input type="text" value="편의점택배 관리">
							   </span>
							   <span>
								   <select>
									   <option>사용</option>
									   <option>미사용</option>
								   </select>
							   </span>
							   <ol>
								   <li>
									   <span>03030100</span>
									   <span>
										   <span class="d">3D</span>
										   <input type="text" value="리스트">
									   </span>
									   <span>
										   <select>
											   <option>사용</option>
											   <option>미사용</option>
										   </select>
									   </span>
								   </li>
								   <li>
									   <span>03030200</span>
									   <span>
										   <span class="d">3D</span>
										   <input type="text" value="편의점택배 안내 콘텐츠">
									   </span>
									   <span>
										   <select>
											   <option>사용</option>
											   <option>미사용</option>
										   </select>
									   </span>
								   </li>
							   </ol>
						   </li>
					   </ol>
				   </li>
				   <li>
					   <span>04000000</span>
					   <span>
						   <span class="d">1D</span>
						   <input type="text" value="결제/배송">
					   </span>
					   <span>
						   <select>
							   <option>사용</option>
							   <option>미사용</option>
						   </select>
					   </span>
					   <ol>
						   <li>
							   <span>04010000</span>
							   <span>
								   <span class="d">2D</span>
								   <input type="text" value="이벤트">
							   </span>
							   <span>
								   <select>
									   <option>사용</option>
									   <option>미사용</option>
								   </select>
							   </span>
						   </li>
						   <li>
							   <span>04020000</span>
							   <span>
								   <span class="d">2D</span>
								   <input type="text" value="광고">
							   </span>
							   <span>
								   <select>
									   <option>사용</option>
									   <option>미사용</option>
								   </select>
							   </span>
							   <ol>
								   <li>
									   <span>04020100</span>
									   <span>
										   <span class="d">3D</span>
										   <input type="text" value="메인 프로모션">
									   </span>
									   <span>
										   <select>
											   <option>사용</option>
											   <option>미사용</option>
										   </select>
									   </span>
								   </li>
								   <li>
									   <span>04020200</span>
									   <span>
										   <span class="d">3D</span>
										   <input type="text" value="상품 등록완료 화면">
									   </span>
									   <span>
										   <select>
											   <option>사용</option>
											   <option>미사용</option>
										   </select>
									   </span>
								   </li>
								   <li>
									   <span>04020300</span>
									   <span>
										   <span class="d">3D</span>
										   <input type="text" value="마이 스토어 광고">
									   </span>
									   <span>
										   <select>
											   <option>사용</option>
											   <option>미사용</option>
										   </select>
									   </span>
									   <ol>
										   <li>
											   <span>04020301</span>
											   <span>
												   <span class="d">4D</span>
												   <input type="text" value="프리미엄 배너">
											   </span>
											   <span>
												   <select>
													   <option>사용</option>
													   <option>미사용</option>
												   </select>
											   </span>
										   </li>
										   <li>
											   <span>04020302</span>
											   <span>
												   <span class="d">4D</span>
												   <input type="text" value="상품리스트 띠배너">
											   </span>
											   <span>
												   <select>
													   <option>사용</option>
													   <option>미사용</option>
												   </select>
											   </span>
										   </li>
										   <li>
											   <span>04020303</span>
											   <span>
												   <span class="d">4D</span>
												   <input type="text" value="상품리스트 하단배너">
											   </span>
											   <span>
												   <select>
													   <option>사용</option>
													   <option>미사용</option>
												   </select>
											   </span>
										   </li>
									   </ol>
								   </li>
							   </ol>
						   </li>
					   </ol>
				   </li>
			   </ol>
		   </div>
    	</div>
    </div>
    
<!--    footer연결-->
    <?php include "footer.php"; ?>
<!--    footer연결-->

</body>
</html>