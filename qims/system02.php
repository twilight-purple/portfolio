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
   	   <h1>관리자 접근 권한</h1>
	   <ul class="title clear">
			<li></li>
			<li>관리자 접근 권한 &nbsp;<span>접근 권한을 관리하는 페이지입니다.</span></li>
		</ul>
	   <div class="syt02">
		   <table class="sc">
			   <tr>
				   <th>부서</th>
				   <td style="width:15%;">
					   <select style="width:170px; background-position: 150px;">
						   <option>부서 선택</option>
						   <option>C-Level</option>
						   <option>더블퀘스천</option>
						   <option>개발실</option>
						   <option>서버개발팀</option>
						   <option>클라이언트 개발팀</option>
						   <option>데브옵스 파트</option>
						   <option>신규사업실</option>
						   <option>오토팀</option>
						   <option>신규사업팀</option>
						   <option>광고사업팀</option>
						   <option>기획운영실</option>
						   <option>디자인팀</option>
						   <option>서비스기획팀</option>
						   <option>보안파트</option>
						   <option>경영지원실</option>
						   <option>재무회계팀</option>
						   <option>인사총무팀</option>
						   <option>홍보팀</option>
						   <option>상품개발팀</option>
					   </select>
				   </td>
				   <th>권한 등급</th>
				   <td>
					   <select style="width:170px; background-position: 150px;">
						   <option>LEVEL 선택</option>
						   <option>LEVEL0 (시스템관리)</option>
						   <option>LEVEL1 (사원급)</option>
						   <option>LEVEL2 (선임급)</option>
						   <option>LEVEL3 (책임&파트장급)</option>
						   <option>LEVEL4 (팀장급)</option>
						   <option>LEVEL5 (임원급)</option>
					   </select>
					   <input type="button" value="검색">
				   </td>
			   </tr>
		   </table>
<!-----------------------------------------------------탭-->
		   <ul class="tab_top clear">
			   <li>*LEVEL0 (시스템관리)&nbsp;&nbsp;*LELVER1 (사원급)&nbsp;&nbsp;*LEVER2 (선임급)&nbsp;&nbsp;*LEVEL3 (책임&파트장급)&nbsp;&nbsp;*LEVEL4 (팀장급)&nbsp;&nbsp;*LEVEL5 (임원급)</li>
			   <li class="tabtop_right"><input type="button" value="저장" class="btn01"></li>
		   </ul>
		   <div class="tab_wp">
			   <h4>항목명</h4>
			   <ol class="tab">
<!-----------------------------------------------------01-->
				   <li>
					   <div class="clear">
						   <div class="tab_l">
								<label class="cb">
									 <input type="checkbox" class="sc_cb" value="">
									 <span></span>
								</label>
						   </div>
						   <p class="tab_r">1D&nbsp;&nbsp;&nbsp;<b>결제/배송</b></p>
					   </div>
					   <ol>
						   <li>
								<div class="clear img">
								   <div class="tab_l">
										<label class="cb">
											 <input type="checkbox" class="sc_cb" value="">
											 <span></span>
										</label>
								   </div>
								   <p class="tab_r">2D&nbsp;&nbsp;&nbsp;안전결제 관리<img src="img/down02.png"></p>
							   </div>
							   <ol>
								   <li>
								   		<div class="clear">
										   <div class="tab_l">
												<label class="cb">
													 <input type="checkbox" class="sc_cb" value="">
													 <span></span>
												</label>
										   </div>
										   <p class="tab_r">3D&nbsp;&nbsp;&nbsp;리스트</p>
									   </div>
								   </li>
								   <li>
								   		<div class="clear">
										   <div class="tab_l">
												<label class="cb">
													 <input type="checkbox" class="sc_cb" value="">
													 <span></span>
												</label>
										   </div>
										   <p class="tab_r">3D&nbsp;&nbsp;&nbsp;정산관리</p>
									   </div>
								   </li>
							   </ol>
						   </li>
						   <li>
						   		<div class="clear">
								   <div class="tab_l">
										<label class="cb">
											 <input type="checkbox" class="sc_cb" value="">
											 <span></span>
										</label>
								   </div>
								   <p class="tab_r">2D&nbsp;&nbsp;&nbsp;즉시송금 관리</p>
							   </div>
						   </li>
						   <li>
								<div class="clear img">
								   <div class="tab_l">
										<label class="cb">
											 <input type="checkbox" class="sc_cb" value="">
											 <span></span>
										</label>
								   </div>
								   <p class="tab_r">2D&nbsp;&nbsp;&nbsp;편의점택배 관리<img src="img/down02.png"></p>
							   </div>
							   <ol>
								   <li>
								   		<div class="clear">
										   <div class="tab_l">
												<label class="cb">
													 <input type="checkbox" class="sc_cb" value="">
													 <span></span>
												</label>
										   </div>
										   <p class="tab_r">3D&nbsp;&nbsp;&nbsp;리스트</p>
									   </div>
								   </li>
								   <li>
								   		<div class="clear">
										   <div class="tab_l">
												<label class="cb">
													 <input type="checkbox" class="sc_cb" value="">
													 <span></span>
												</label>
										   </div>
										   <p class="tab_r">3D&nbsp;&nbsp;&nbsp;편의점택배 안내 콘텐츠</p>
									   </div>
								   </li>
							   </ol>
						   </li>
					   </ol>
				   </li>
<!-----------------------------------------------------02-->
				   <li>
					   <div class="clear">
						   <div class="tab_l">
								<label class="cb">
									 <input type="checkbox" class="sc_cb" value="">
									 <span></span>
								</label>
						   </div>
						   <p class="tab_r">1D&nbsp;&nbsp;&nbsp;<b>마케팅</b></p>
					   </div>
					   <ol>
					   	   <li>
						   	   <div class="clear">
								   <div class="tab_l">
										<label class="cb">
											 <input type="checkbox" class="sc_cb" value="">
											 <span></span>
										</label>
								   </div>
								   <p class="tab_r">2D&nbsp;&nbsp;&nbsp;이벤트</p>
							   </div>
						   </li>
						   <li>
								<div class="clear img">
								   <div class="tab_l">
										<label class="cb">
											 <input type="checkbox" class="sc_cb" value="">
											 <span></span>
										</label>
								   </div>
								   <p class="tab_r">2D&nbsp;&nbsp;&nbsp;광고<img src="img/down02.png"></p>
							   </div>
							   <ol>
								   <li>
								   		<div class="clear">
										   <div class="tab_l">
												<label class="cb">
													 <input type="checkbox" class="sc_cb" value="">
													 <span></span>
												</label>
										   </div>
										   <p class="tab_r">3D&nbsp;&nbsp;&nbsp;메인 프로모션</p>
									   </div>
								   </li>
								   <li>
								   		<div class="clear">
										   <div class="tab_l">
												<label class="cb">
													 <input type="checkbox" class="sc_cb" value="">
													 <span></span>
												</label>
										   </div>
										   <p class="tab_r">3D&nbsp;&nbsp;&nbsp;상품 등록완료 화면</p>
									   </div>
								   </li>
								   <li>
								   		<div class="clear img">
										   <div class="tab_l">
												<label class="cb">
													 <input type="checkbox" class="sc_cb" value="">
													 <span></span>
												</label>
										   </div>
										   <p class="tab_r">3D&nbsp;&nbsp;&nbsp;마이 스토어 광고<img src="img/down02.png"></p>
									   </div>
									   <ol>
										   <li>
										   		<div class="clear">
												   <div class="tab_l">
														<label class="cb">
															 <input type="checkbox" class="sc_cb" value="">
															 <span></span>
														</label>
												   </div>
												   <p class="tab_r">4D&nbsp;&nbsp;&nbsp;프리미엄 배너</p>
											   </div>
										   </li>
										   <li>
										   		<div class="clear">
												   <div class="tab_l">
														<label class="cb">
															 <input type="checkbox" class="sc_cb" value="">
															 <span></span>
														</label>
												   </div>
												   <p class="tab_r">4D&nbsp;&nbsp;&nbsp;상품리스트 띠배너</p>
											   </div>
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