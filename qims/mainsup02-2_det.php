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
   	   <h1>메인 프로모션 배너관리</h1>
	   <ul class="title clear">
			<li></li>
			<li>메인 프로모션 배너상세</li>
		</ul>
	   <div class="ms02_02 v02">
		   <h4>기본정보</h4>
		   <table class="tb01" style="margin-top:10px;">
			   <tr>
				   <th>배너타입</th>
				   <td colspan="4">
					   <ul class="clear">
							<li>
								<label class="rdb">
									<input type="radio" name="rd1">
									<span></span>이미지
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd1" checked="">
									<span></span>테마
								</label>
							</li>
						</ul>
				   </td>
			   </tr>
			   <tr>
				   <th>배너명</th>
				   <td width="40%">
				   	<input type="text" name="tb_txt" value="미개봉 새상품" placeholder="40자까지 입력 가능" maxlength="40" style="width:90%">
				   </td>
				   <th>노출기간</th>
				   <td class="cd_img clear" colspan="3">
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
			   </tr>
			   <tr>
				   <th>사용여부</th>
				   <td colspan="4">
					   <ul class="clear">
							<li>
								<label class="rdb">
									<input type="radio" name="rd2" checked="">
									<span></span>미사용
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd2">
									<span></span>사용
								</label>
							</li>
						</ul>
				   </td>
			   </tr>
			   <tr>
				   <th>기기</th>
				   <td width="40%">
					   <ul class="clear">
							<li>
								<label class="rdb">
									<input type="radio" name="rd3" checked="">
									<span></span>전체
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd3">
									<span></span>App
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd3">
									<span></span>Web
								</label>
							</li>
						</ul>
				   </td>
				   <th>운영체제</th>
				   <td>
					   <ul class="clear">
							<li>
								<label class="rdb">
									<input type="radio" name="rd4" checked="">
									<span></span>전체
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd4">
									<span></span>안드로이드
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd4">
									<span></span>iOS
								</label>
							</li>
						</ul>
				   </td>
			   </tr>
			   <tr>
				   <th>이미지</th>
				   <td class="imgbox_wrap" colspan="4">
				   		<div class="file_wrap">
							<div class="upload-btn_wrap">
								<button type="button" title="찾아보기버튼">
									<span>첨부하기</span>
								</button>
								<input type="file" class="input_file" title="파일찾기">
							</div>
							<ul class="imgbox_ftxt">
								<li>
									<a href="#">
										<input type="text" class="upload_text" title="파일명" readonly="readonly">
									</a>
								</li>
							</ul>
				   		</div>
					    <div class="imgbox02">
							<ul class="clear">
								<li>
									<p>img</p>
									<div class="ibtn btn01">삭제</div>
								</li>
							</ul>
					    </div>
					   <input type="button" value="이미지추가 +" class="btn03 img_more">
				   </td>
			   </tr>
		   </table>
		   <table class="tb03">
			   <tr>
				   <th>노출수</th>
				   <td>50,123</td>
				   <th>노출회원수</th>
				   <td>25,000</td>
				   <th>클릭수</th>
				   <td>20,510</td>
				   <th>클릭회원수</th>
				   <td>18,212</td>
				   <th>등록일/등록자</th>
				   <td>2018-01-01 13:15
				   <br>전혜윤(서비스기획팀)</td>
				   <th>최근 수정일/수정자</th>
				   <td>2018-01-01 13:15
				   <br>전혜윤(서비스기획팀)</td>
			   </tr>
		   </table>
<!-------------------------------표2-->
		   <h4>설정조건</h4>
		   <table class="tb01 tm_cd">
			   <tr>
				   <th rowspan="2">
					   <div class="ibtn_wp">
						   조건 1
						   <div class="btn02 ibtn02">삭제</div>
					   </div>
				   </th>
				   <td>
					   <ul class="clear">
						   <li>카테고리</li>
						   <li>출산/유아동/교육&#62;출산/임부용품&#62;신생아/영유아의류</li>
					   </ul>
					   <br>
					   <ul class="clear">
						   <li>키워드</li>
						   <li>
							   <span class="tm_rd">1</span> 우주복&nbsp;&nbsp;
							   <span class="tm_rd">2</span> 신생아
						   </li>
						</ul>
				   </td>
			   </tr>
			   <tr>
				   <td>
						<ul class="clear">
						   <li>조건 부합 상품수</li>
							<li>
							<span class="color">100,500</span>개
							<input type="button" value="상품수 갱신">
							</li>
						</ul>
				   </td>
			   </tr>
			</table>
			<table class="tb01 tm_cd">
			   <tr>
				   <th rowspan="2">
					   <div class="ibtn_wp">
						   조건 2
						   <div class="btn02 ibtn02">삭제</div>
					   </div>
				   </th>
				   <td>
					   <ul class="clear">
						   <li>카테고리</li>
						   <li>출산/유아동/교육&#62;출산/임부용품&#62;전체 (상세옵션 : 100,실크)</li>
					   </ul>
					   <br>
					   <ul class="clear">
						   <li>키워드</li>
						   <li>곰돌이</li>
						</ul>
					   <br>
					   <ul class="clear">
						   <li>상품상태</li>
						   <li>
							   <span class="tm_rd">1</span> 중고&nbsp;&nbsp;
							   <span class="tm_rd">2</span> 한정판&nbsp;&nbsp;
							   <span class="tm_rd">3</span> 풀박
						   </li>
						</ul>
						<br>
					   <ul class="clear">
						   <li>색상</li>
						   <li class="tm_color" style="background-color:#7dc77f;"></li>
					   </ul>
					   <br>
					   <ul class="clear">
						   <li>가격대</li>
						   <li>1,000 부터 ~ 제한없음</li>
					   </ul>
				   </td>
			   </tr>
			   <tr>
				   <td>
						<ul class="clear">
						   <li>조건 부합 상품수</li>
							<li>
							<span class="color">234,500</span>개
							<input type="button" value="상품수 갱신">
							</li>
						</ul>
				   </td>
			   </tr>
			</table>
			<table class="tb01 tm_cd">
			   <tr>
				   <th rowspan="2">
					   <div class="ibtn_wp">
						   조건 3
						   <div class="btn02 ibtn02">삭제</div>
					   </div>
				   </th>
				   <td>
					   <ul class="clear">
						   <li>카테고리</li>
						   <li>출산/유아동/교육&#62;출산/임부용품&#62;신생아/영유아의류 (상세옵션:L)</li>
					   </ul>
					   <br>
					   <ul class="clear">
						   <li>키워드</li>
						   <li>불가사리잠옷</li>
						</ul>
					   <br>
					   <ul class="clear">
						   <li>상품 상세조건</li>
						   <li>
							   <span class="tm_rd">1</span> 찜 수 10회 이상&nbsp;&nbsp;
							   <span class="tm_rd">2</span> 상품명+상세설명 내 [번개장터,헬마,판매업자,스토어팜] 단어 제외
						   </li>
						</ul>
						<br>
					   <ul class="clear">
						   <li>색상</li>
						   <li class="tm_color" style="background-color:#f8d74d;"></li>
					   </ul>
					   <br>
					   <ul class="clear">
						   <li>가격대</li>
						   <li>10,000 부터 ~ 200,000원 까지</li>
					   </ul>
				   </td>
			   </tr>
			   <tr>
				   <td>
						<ul class="clear">
						   <li>조건 부합 상품수</li>
							<li>
							<span class="color">234,500</span>개
							<input type="button" value="상품수 갱신">
							</li>
						</ul>
				   </td>
			   </tr>
			</table>
<!-------------------------------표3-->
		   <h4>
			   추가 테마 조건설정 &nbsp;
			   <span class="color">* 최소 1개 이상의 항목을 설정해야 합니다.</span>
			   <div><a herf="#" class="btn03 gd01" style="margin-top:-26px;">조건 설정 가이드</a></div>
		   </h4>
		   <table class="tb01" style="margin-top:10px">
			   <tr>
				   <th>카테고리</th>
				   <td>
						<ul class="clear tm_rb01">
							<li>
								<input type="radio" id="rd6" name="table_rd6" checked="">
								<label class="rb" for="rd6"><span></span>미사용</label>
							</li>
							<li>
								<input type="radio" id="rd7" name="table_rd6">
								<label class="rb" for="rd7"><span></span>카테고리 선택</label>
							</li>
							<input type="button" name="tb_btn" value="선택" class="tb_btn dim02" style="margin-top: 13px">
							<span class="bt_txt">출산/유아동/교육&#62;출산/임부용품&#62;전체 (상세필터:100,실크) <span class="btn02">삭제</span></span>
						</ul>
				   </td>
			   </tr>
		   </table>
		   <table class="tb01 v02">
			   <tr>
				   <th>키워드 <span class="color">*</span></th>
				   <td width="40%"><input type="text" name="tb_txt" value="" placeholder="띄어쓰기 없이 입력 (최대 20자)" maxlength="20" style="width:70%">
				   <input type="button" name="tb_btn" value="추가">
				   </td>
				   <th>추가된 키워드</th>
				   <td>
					   <ul>
						   <li>
						   	<span class="bt_txt">우주복<span class="btn02">삭제</span></span>
						   </li>
						   <li>
						   	<span class="bt_txt">불가사리잠옷<span class="btn02">삭제</span></span>
						   </li>
					   </ul>
				   </td>
			   </tr>
		   </table>
		   <table class="tb01 v02">
			   <tr>
				   <th>상품상태</th>
				   <td class="clear mi_wp clear">
						<ul class="clear rb_wp" style="margin-top:-5px;">
							<li>
								<input type="radio" id="rd8" name="table_rd7" checked="">
								<label class="rb" for="rd8"><span></span>미사용</label>
							</li>
							<li>
								<input type="radio" id="rd9" name="table_rd7">
								<label class="rb" for="rd9"><span></span>사용</label>
							</li>
						</ul>
					   <ul class="sst" style="margin-top:5px;">
							<select class="on gray">
								<option>선택</option>
							</select>
							<select>
								<option>선택</option>
								<option>미개봉</option>
								<option>거의새것</option>
								<option>중고</option>
							</select>
					    </ul>
						<ul class="cb_wp clear" style="margin-top:5px;">
							<li>
							   <label class="cb on ch01">
								 <input type="checkbox" class="sc_cb on" value="">
								 <span></span>
								 <p>한정판</p>
							   </label>
							</li>
							<li>
							   <label class="cb on">
								 <input type="checkbox" class="sc_cb on" value="">
								 <span></span>
								 <p>풀박</p>
							   </label>
							</li>
							<li>
							   <label class="cb on">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
								 <p>하자있음</p>
							   </label>
							</li>
						</ul>
				   </td>
			   </tr>
			   <tr>
				   <th>상품 상세조건</th>
				   <td class="tm_cb">
						<ul class="clear">
							<li class="clear">
							   <label class="cb li">
									 <input type="checkbox" class="sc_cb all" value="">
									 <span></span>
					   			</label>
								<p>영상첨부</p>
							</li>
							<li class="clear">
							   <label class="cb li">
									 <input type="checkbox" class="sc_cb all" value="">
									 <span></span>
					   			</label>
								<p>찜 수 <input type="number" value=""> 회 이상</p>
							</li>
							<li class="clear">
							   <label class="cb li">
									 <input type="checkbox" class="sc_cb all" value="">
									 <span></span>
					   			</label>
								<p>View 수 <input type="number" value=""> 회 이상</p>
							</li>
							<li class="clear">
							   <label class="cb li">
									 <input type="checkbox" class="sc_cb all" value="">
									 <span></span>
					   			</label>
								<p>상세설명 글자 수 <input type="number" value=""> 자 이상</p>
							</li>
							<li class="clear">
							   <label class="cb li">
									 <input type="checkbox" class="sc_cb all" value="">
									 <span></span>
					   			</label>
								<p>등록된 댓글 수 <input type="number" value=""> 개 이상</p>
							</li>
							<li class="clear">
							   <label class="cb li">
									 <input type="checkbox" class="sc_cb all" value="">
									 <span></span>
					   			</label>
								<p>상품명+상세설명 내 제외 단어 <input type="text" value="" placeholder="테마 추출 시 포함시키지 않을 단어를 띄어쓰기 없이 ','로 구분하여 입력해 주세요. (ex. 담배,술,번개장터 등)" style="width:1000px"></p>
							</li>
						</ul>
				   </td>
			   </tr>
			   <tr>
				   <th>색상</th>
				   <td>
					   <ul class="r_color clear">
						    <li>
								<input type="radio" id="rc1" name="rc1" checked="">
								<label class="rb" for="rc1"><span></span>미사용</label>
							</li>
							<li>
								<input type="radio" id="rc2" name="rc1">
								<label class="rb" for="rc2"><span></span><div class="cl"></div></label>
							</li>
							<li>
								<input type="radio" id="rc3" name="rc1">
								<label class="rb" for="rc3"><span></span><div class="cl"></div></label>
							</li>
							<li>
								<input type="radio" id="rc4" name="rc1">
								<label class="rb" for="rc4"><span></span><div class="cl"></div></label>
							</li>
							<li>
								<input type="radio" id="rc5" name="rc1">
								<label class="rb" for="rc5"><span></span><div class="cl"></div></label>
							</li>
							<li>
								<input type="radio" id="rc6" name="rc1">
								<label class="rb" for="rc6"><span></span><div class="cl"></div></label>
							</li>
							<li>
								<input type="radio" id="rc7" name="rc1">
								<label class="rb" for="rc7"><span></span><div class="cl"></div></label>
							</li>
							<li>
								<input type="radio" id="rc8" name="rc1">
								<label class="rb" for="rc8"><span></span><div class="cl"></div></label>
							</li>
							<li>
								<input type="radio" id="rc9" name="rc1">
								<label class="rb" for="rc9"><span></span><div class="cl"></div></label>
							</li>
							<li>
								<input type="radio" id="rc10" name="rc1">
								<label class="rb" for="rc10"><span></span><div class="cl"></div></label>
							</li>
							<li>
								<input type="radio" id="rc11" name="rc1">
								<label class="rb" for="rc11"><span></span><div class="cl"></div></label>
							</li>
							<li>
								<input type="radio" id="rc12" name="rc1">
								<label class="rb" for="rc12"><span></span><div class="cl"></div></label>
							</li>
							<li>
								<input type="radio" id="rc13" name="rc1">
								<label class="rb" for="rc13"><span></span><div class="cl"></div></label>
							</li>
							<li>
								<input type="radio" id="rc14" name="rc1">
								<label class="rb" for="rc14"><span></span><div class="cl"></div></label>
							</li>
					   </ul>
				   </td>
			   </tr>
			   <tr>
				   <th>가격대 <span class="color">*</span></th>
				   <td>
				   	<input type="text" value="" class="nm_not"> 원 ~ 
				   	<input type="text" value="" class="nm_not"> 원
				   	 <label class="cb">
						 <input type="checkbox" class="sc_cb not04" value="">
						 <span></span>
						 <p>제한없음</p>
				     </label>
				   </td>
			   </tr>
		   </table>
		   <h4>
			   <div><a herf="#" class="btn03" style="width:100px; margin-top:-20px;">조건 추가</a></div>
		   </h4>
		   <table class="tb03" style="margin-top:80px;">
			   <tr>
				   <th width="15%;">테마 소속 상품</th>
				   <td>
					   <b>315,423개</b>
					   <input type="button" value="상품수 갱신" style="width:100px; margin-left:20px;">
					   <input type="button" value="소속 상품보기" style="width:100px" class="ms_pdd">
				   </td>
			   </tr>
		   </table>
			<ul class="table_btn clear">
				<li><a href="#" onclick="return false">취소</a></li>
				<li class="al01"><a href="#" onclick="return false">수정</a></li>
			</ul>
    	</div>
    </div>
    
<!--    footer연결-->
    <?php include "footer.php"; ?>
<!--    footer연결-->

</body>
</html>