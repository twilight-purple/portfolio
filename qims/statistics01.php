<!DOCTYPE html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
    <title>qdillion</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/int.js"></script>
    <script src="js/statistics.js"></script>
</head>
    <body>
   
<!--   gnb/snb연결-->
  	<?php include "gnb.php"; ?>
    <?php include "snb.php"; ?>
<!--   gnb/snb연결-->

  
   <div id="wrap">
   	   <h1>종합통계</h1>
	   <ul class="title clear">
			<li></li>
			<li>종합통계</li>
		</ul>
	   <div class="stt01">
<!-------------------------------검색영역-->
		   <table class="sc">
			   <tr>
				   <th>기간</th>
				   <td>
					   <select>
						   <option>2012년</option>
						   <option>2013년</option>
						   <option>2014년</option>
						   <option>2015년</option>
						   <option>2016년</option>
						   <option>2017년</option>
						   <option selected="">2018년</option>
					   </select>
					   <select>
						   <option>1월</option>
						   <option>2월</option>
						   <option>3월</option>
						   <option selected="">4월</option>
						   <option>5월</option>
						   <option>6월</option>
						   <option>7월</option>
						   <option>8월</option>
						   <option>9월</option>
						   <option>10월</option>
						   <option>11월</option>
						   <option>12월</option>
					   </select>
					   <input type="button" value="검색">
				   </td>
			   </tr>
		   </table>
<!-------------------------------탭영역-->
		   <div class="tab">
<!-------------------------------탭버튼영역-->
			   <div class="tab_btn clear">
				   <ul class="clear">
					   <li class="on">
						   <h2>신규회원</h2>
						   <h3>000,000명</h3>
						   <h4 class="purp">누적 000,000,000</h4>
					   </li>
					   <li>
						   <h2>앱 다운로드</h2>
						   <h3>000,000명</h3>
						   <h4 class="purp">누적 000,000,000</h4>
					   </li>
					   <li>
						   <h2>방문자</h2>
						   <h3>00,000명</h3>
						   <h4 class="purp">횟수 000,000,000회</h4>
					   </li>
					   <li>
						   <h2>재방문 주기</h2>
						   <h3>0.0일</h3>
						   <h4 class="purp">평균 4분 30초 이용</h4>
					   </li>
				   </ul>
				   <ul class="clear">
					   <li>
						   <h2>상품등록</h2>
						   <h3>00,000건</h3>
						   <h4 class="red">전월대비 0% 증가</h4>
					   </li>
					   <li>
						   <h2>상품거래</h2>
						   <h3>0,000건</h3>
						   <h4 class="purp">000,000,000원</h4>
					   </li>
					   <li>
						   <h2>택배이용</h2>
						   <h3>000건</h3>
						   <h4 class="blue">전월대비 0% 감소</h4>
					   </li>
					   <li>
						   <h2>광고매출</h2>
						   <h3>0,000건</h3>
						   <h4 class="purp">000,000,000원</h4>
					   </li>
				   </ul>
				   <ul class="clear">
					   <li>
						   <h2>안전결제</h2>
						   <h3>0,000건</h3>
						   <h4 class="purp">000,000,000원</h4>
					   </li>
					   <li>
						   <h2>즉시송금</h2>
						   <h3>0,000건</h3>
						   <h4 class="purp">000,000,000원</h4>
					   </li>
					   <li>
						   <h2>신고접수</h2>
						   <h3>00,000건</h3>
						   <h4 class="purp">자동처리 1,680건</h4>
					   </li>
					   <li>
						   <h2>1:1문의접수</h2>
						   <h3>00,000건</h3>
						   <h4 class="purp">답변율 00%</h4>
					   </li>
				   </ul>
			   </div>
<!-------------------------------탭내용 영역-->
			   <h5>※ 상단의 요약 정보를 클릭하면, 이번달 일별 그래프추이를 아래에서 확인하실 수 있습니다.</h5>
			   <ul class="tab_tb">
<!-------------------------------탭1-->
				   <li class="on">
					   <ul class="ttb_title clear">
						   <li>신규회원</li>
						   <li>(YYYY-MM-DD ~ YYYY-MM-DD)</li>
						   <li>
							   <ul class="clear">
								   <li><span style="background-color: #f36430;"></span>신규회원</li>
								   <li><span></span>누적회원</li>
							   </ul>
						   </li>
					   </ul>
					   <table class="tb_wp">
						   <tr>
							   <td>수<br>치</td>
							   <td></td>
							   <td class="chart">
							   	각 항목에 따른 정보를<br>
								   개별 확인할 수 있는 <span class="or">라인 그래프</span> 사용<br>
								   <span class="small">(정보표시 우측 참고)</span>
								   <div class="mh_r"></div>
								   <div class="mh_line"></div>
								   <div class="mh_box">
									   <h4>4월 7일 (화)</h4>
									   <div>
										   <ul class="clear">
											   <li><span style="background-color:#f36430;"></span>신규회원</li>
											   <li>000명</li>
										   </ul>
										   <ul class="clear">
											   <li><span></span>누적회원</li>
											   <li>00,000,000명</li>
										   </ul>
									   </div>
								   </div>
							   </td>
						   </tr>
						   <tr></tr>
						   <tr>
							   <td colspan="2"></td>
							   <td>해당 월의 일자</td>
						   </tr>
					   </table>
				   </li>
<!-------------------------------탭2-->
				   <li>
					   <ul class="ttb_title clear">
						   <li>앱다운로드</li>
						   <li>(YYYY-MM-DD ~ YYYY-MM-DD)</li>
					   </ul>
					   <table class="tb_wp">
						   <tr>
							   <td>수<br>치</td>
							   <td></td>
							   <td class="chart">
							   	각 항목에 따른 정보를<br>
								   개별 확인할 수 있는 <span class="or">라인 그래프</span> 사용<br>
								   <span class="small">(정보표시 우측 참고)</span>
								   <div class="mh_r"></div>
								   <div class="mh_line"></div>
								   <div class="mh_box" style="top:128px; width:200px; right:130px;">
									   <h4>4월 7일 (화)</h4>
									   <div class="mh_txt">00,000,000</div>
								   </div>
							   </td>
						   </tr>
						   <tr></tr>
						   <tr>
							   <td colspan="2"></td>
							   <td>해당 월의 일자</td>
						   </tr>
					   </table>
				   </li>
<!-------------------------------탭3-->
				   <li>
					   <ul class="ttb_title clear">
						   <li>상품등록</li>
						   <li>(YYYY-MM-DD ~ YYYY-MM-DD)</li>
					   </ul>
					   <table class="tb_wp">
						   <tr>
							   <td>수<br>치</td>
							   <td></td>
							   <td class="chart">
							   	각 항목에 따른 정보를<br>
								   개별 확인할 수 있는 <span class="or">라인 그래프</span> 사용<br>
								   <span class="small">(정보표시 우측 참고)</span>
								   <div class="mh_r"></div>
								   <div class="mh_line"></div>
								   <div class="mh_box" style="top:128px; width:200px; right:130px;">
									   <h4>4월 7일 (화)</h4>
									   <div class="mh_txt">00,000건</div>
								   </div>
							   </td>
						   </tr>
						   <tr></tr>
						   <tr>
							   <td colspan="2"></td>
							   <td>해당 월의 일자</td>
						   </tr>
					   </table>
				   </li>
<!-------------------------------탭4-->
				   <li>
					   <ul class="ttb_title clear">
						   <li>상품거래</li>
						   <li>(YYYY-MM-DD ~ YYYY-MM-DD)</li>
						   <li>
							   <ul class="clear">
								   <li><span style="background-color: #94deff;"></span>직거래</li>
								   <li><span style="background-color: #b3adc9;"></span>택배거래</li>
								   <li><span style="background-color: #ffca94;"></span>타서비스거래</li>
								   <li><span style="background-color: #518bc4;"></span>기타거래</li>
							   </ul>
						   </li>
					   </ul>
					   <table class="tb_wp">
						   <tr>
							   <td>수<br>치</td>
							   <td></td>
							   <td class="chart">
							   	각 항목에 따른 합계의 정보를<br>
								   한번에 확인할 수 있는 <span class="or">분할 막대 그래프</span> 사용<br>
								   <span class="small">(정보표시 우측 참고)</span>
								   <div class="mh_r" style="top:50px;"></div>
								   <div class="mh_line" style="top:54px; right:348px; transform: rotate(135deg);"></div>
								   <div class="mh_box" style="top:96px; right:81px;">
									   <h4>
									   	4월 7일 (화)<br>
										   <b>000건(100%)</b>
									   </h4>
									   <div>
										   <ul class="clear">
											   <li><span style="background-color:#94deff;"></span>직거래</li>
											   <li>00건(00%)</li>
										   </ul>
										   <ul class="clear">
											   <li><span style="background-color:#b3adc9;"></span>택배거래</li>
											   <li>00건(00%)</li>
										   </ul>
										   <ul class="clear">
											   <li><span style="background-color:#ffca94;"></span>타서비스거래</li>
											   <li>00건(00%)</li>
										   </ul>
										   <ul class="clear">
											   <li><span style="background-color:#518bc4;"></span>기타거래</li>
											   <li>00건(00%)</li>
										   </ul>
									   </div>
								   </div>
							   </td>
						   </tr>
						   <tr></tr>
						   <tr>
							   <td colspan="2"></td>
							   <td>해당 월의 일자</td>
						   </tr>
					   </table>
				   </li>
<!-------------------------------탭5-->
				   <li>
					   <ul class="ttb_title clear">
						   <li>안전결제</li>
						   <li>(YYYY-MM-DD ~ YYYY-MM-DD)</li>
						   <li>
							   <ul class="clear">
								   <li><span style="background-color: #94deff;"></span>신용카드</li>
								   <li><span style="background-color: #b3adc9;"></span>실시간 계좌이체</li>
								   <li><span style="background-color: #ffca94;"></span>무통장입금</li>
							   </ul>
						   </li>
					   </ul>
					   <table class="tb_wp">
						   <tr>
							   <td>수<br>치</td>
							   <td></td>
							   <td class="chart">
							   	각 항목에 따른 합계의 정보를<br>
								   한번에 확인할 수 있는 <span class="or">분할 막대 그래프</span> 사용<br>
								   <span class="small">(정보표시 우측 참고)</span>
								   <div class="mh_r" style="top:50px;"></div>
								   <div class="mh_line" style="top:54px; right:348px; transform: rotate(135deg);"></div>
								   <div class="mh_box" style="top:96px; right:81px;">
									   <h4>
									   	4월 7일 (화)<br>
										   <b>000건(100%)</b>
									   </h4>
									   <div>
										   <ul class="clear">
											   <li><span style="background-color:#94deff;"></span>신용카드</li>
											   <li>00건(00%)</li>
										   </ul>
										   <ul class="clear">
											   <li><span style="background-color:#b3adc9;"></span>실시간계좌이체</li>
											   <li>00건(00%)</li>
										   </ul>
										   <ul class="clear">
											   <li><span style="background-color:#ffca94;"></span>무통장입금</li>
											   <li>00건(00%)</li>
										   </ul>
									   </div>
								   </div>
							   </td>
						   </tr>
						   <tr></tr>
						   <tr>
							   <td colspan="2"></td>
							   <td>해당 월의 일자</td>
						   </tr>
					   </table>
				   </li>
<!-------------------------------탭6-->
				   <li>
					   <ul class="ttb_title clear">
						   <li>즉시송금</li>
						   <li>(YYYY-MM-DD ~ YYYY-MM-DD)</li>
						   <li>
							   <ul class="clear">
								   <li><span style="background-color: #94deff;"></span>페이코</li>
								   <li><span style="background-color: #b3adc9;"></span>카카오페이</li>
							   </ul>
						   </li>
					   </ul>
					   <table class="tb_wp">
						   <tr>
							   <td>수<br>치</td>
							   <td></td>
							   <td class="chart">
							   	각 항목에 따른 합계의 정보를<br>
								   한번에 확인할 수 있는 <span class="or">분할 막대 그래프</span> 사용<br>
								   <span class="small">(정보표시 우측 참고)</span>
								   <div class="mh_r" style="top:50px;"></div>
								   <div class="mh_line" style="top:54px; right:348px; transform: rotate(135deg);"></div>
								   <div class="mh_box" style="top:96px; right:81px;">
									   <h4>
									   	4월 7일 (화)<br>
										   <b>000건(100%)</b>
									   </h4>
									   <div>
										   <ul class="clear">
											   <li><span style="background-color:#94deff;"></span>페이코</li>
											   <li>00건(00%)</li>
										   </ul>
										   <ul class="clear">
											   <li><span style="background-color:#b3adc9;"></span>카카오페이</li>
											   <li>00건(00%)</li>
										   </ul>
									   </div>
								   </div>
							   </td>
						   </tr>
						   <tr></tr>
						   <tr>
							   <td colspan="2"></td>
							   <td>해당 월의 일자</td>
						   </tr>
					   </table>
				   </li>
<!-------------------------------탭7-->
				   <li>
					   <ul class="ttb_title clear">
						   <li>방문자</li>
						   <li>(YYYY-MM-DD ~ YYYY-MM-DD)</li>
					   </ul>
					   <table class="tb_wp">
						   <tr>
							   <td>수<br>치</td>
							   <td></td>
							   <td class="chart">
							   	각 항목에 따른 정보를<br>
								   개별 확인할 수 있는 <span class="or">라인 그래프</span> 사용<br>
								   <span class="small">(정보표시 우측 참고)</span>
								   <div class="mh_r"></div>
								   <div class="mh_line"></div>
								   <div class="mh_box" style="top:106px; width:200px; right:130px;">
									   <h4>4월 7일 (화)</h4>
									   <div class="mh_txt">00,000명<br><span style="font-weight: normal; font-size: 14px">(000.000.000회)</span></div>
								   </div>
							   </td>
						   </tr>
						   <tr></tr>
						   <tr>
							   <td colspan="2"></td>
							   <td>해당 월의 일자</td>
						   </tr>
					   </table>
				   </li>
<!-------------------------------탭8-->
				   <li>
					   <ul class="ttb_title clear">
						   <li>재방문 주기</li>
						   <li>(YYYY-MM-DD ~ YYYY-MM-DD)</li>
					   </ul>
					   <table class="tb_wp">
						   <tr>
							   <td>일<br>수</td>
							   <td></td>
							   <td class="chart v02" colspan="2">
								   <ul class="gr_line">
									   <li></li>
									   <li></li>
									   <li></li>
									   <li></li>
								   </ul>
								   <div class="mh02" style="left:274px">
								   	   <div class="mh02_text">
										   <b style="font-size: 15px;">0.0일</b><br>
										   (평균 4분 30초 이용)
									   </div>
									   <div class="mh02_nemo" style="background-color: #7ec6d3; height: 255px;"></div>
									   <div class="mh02_line"></div>
								   </div>
								   <div class="mh02" style="left:980px">
								   	   <div class="mh02_text">
										   <b style="font-size: 15px;">0.0일</b><br>
										   (평균 4분 30초 이용)
									   </div>
									   <div class="mh02_nemo" style="background-color: #ffd694; height: 320px;"></div>
									   <div class="mh02_line"></div>
								   </div>
							   </td>
						   </tr>
						   <tr></tr>
						   <tr>
							   <td colspan="2"></td>
							   <td style="width:50%;">전월</td>
							   <td style="background-image: url(img/stripe_color02.png); font-weight: bold; width:50%">해당월</td>
						   </tr>
					   </table>
				   </li>
<!-------------------------------탭9-->
				   <li>
					   <ul class="ttb_title clear">
						   <li>택배이용</li>
						   <li>(YYYY-MM-DD ~ YYYY-MM-DD)</li>
					   </ul>
					   <table class="tb_wp">
						   <tr>
							   <td>수<br>치</td>
							   <td></td>
							   <td class="chart">
							   	각 항목에 따른 정보를<br>
								   개별 확인할 수 있는 <span class="or">라인 그래프</span> 사용<br>
								   <span class="small">(정보표시 우측 참고)</span>
								   <div class="mh_r"></div>
								   <div class="mh_line"></div>
								   <div class="mh_box" style="top:128px; width:200px; right:130px;">
									   <h4>4월 7일 (화)</h4>
									   <div class="mh_txt">000,000건</div>
								   </div>
							   </td>
						   </tr>
						   <tr></tr>
						   <tr>
							   <td colspan="2"></td>
							   <td>해당 월의 일자</td>
						   </tr>
					   </table>
				   </li>
<!-------------------------------탭10-->
				   <li>
					   <ul class="ttb_title clear">
						   <li>광고매출</li>
						   <li>(YYYY-MM-DD ~ YYYY-MM-DD)</li>
					   </ul>
					   <table class="tb_wp">
						   <tr>
							   <td>수<br>치</td>
							   <td></td>
							   <td class="chart">
							   	각 항목에 따른 정보를<br>
								   개별 확인할 수 있는 <span class="or">라인 그래프</span> 사용<br>
								   <span class="small">(정보표시 우측 참고)</span>
								   <div class="mh_r"></div>
								   <div class="mh_line"></div>
								   <div class="mh_box" style="top:106px; width:200px; right:130px;">
									   <h4>4월 7일 (화)</h4>
									   <div class="mh_txt">00,000건<br><span style="font-weight: normal; font-size: 14px">(000.000.000원)</span></div>
								   </div>
							   </td>
						   </tr>
						   <tr></tr>
						   <tr>
							   <td colspan="2"></td>
							   <td>해당 월의 일자</td>
						   </tr>
					   </table>
				   </li>
<!-------------------------------탭11-->
				   <li>
					   <ul class="ttb_title clear">
						   <li>신고접수</li>
						   <li>(YYYY-MM-DD ~ YYYY-MM-DD)</li>
					   </ul>
					   <table class="tb_wp">
						   <tr>
							   <td>수<br>치</td>
							   <td></td>
							   <td class="chart">
							   	각 항목에 따른 정보를<br>
								   개별 확인할 수 있는 <span class="or">라인 그래프</span> 사용<br>
								   <span class="small">(정보표시 우측 참고)</span>
								   <div class="mh_r"></div>
								   <div class="mh_line"></div>
								   <div class="mh_box" style="top:106px; width:200px; right:130px;">
									   <h4>4월 7일 (화)</h4>
									   <div class="mh_txt">00,000건<br><span style="font-weight: normal; font-size: 14px">(자동처리 00.000건)</span></div>
								   </div>
							   </td>
						   </tr>
						   <tr></tr>
						   <tr>
							   <td colspan="2"></td>
							   <td>해당 월의 일자</td>
						   </tr>
					   </table>
				   </li>
<!-------------------------------탭12-->
				   <li>
					   <ul class="ttb_title clear">
						   <li>1:1문의접수</li>
						   <li>(YYYY-MM-DD ~ YYYY-MM-DD)</li>
					   </ul>
					   <table class="tb_wp">
						   <tr>
							   <td>수<br>치</td>
							   <td></td>
							   <td class="chart">
							   	각 항목에 따른 정보를<br>
								   개별 확인할 수 있는 <span class="or">라인 그래프</span> 사용<br>
								   <span class="small">(정보표시 우측 참고)</span>
								   <div class="mh_r"></div>
								   <div class="mh_line"></div>
								   <div class="mh_box" style="top:128px; width:200px; right:130px;">
									   <h4>4월 7일 (화)</h4>
									   <div class="mh_txt">00,000,000건</div>
								   </div>
							   </td>
						   </tr>
						   <tr></tr>
						   <tr>
							   <td colspan="2"></td>
							   <td>해당 월의 일자</td>
						   </tr>
					   </table>
				   </li>
			   </ul>
		   </div>
    	</div>
    </div>
    
<!--    footer연결-->
    <?php include "footer.php"; ?>
<!--    footer연결-->

</body>
</html>