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
			<li>메인 프로모션 배너등록</li>
		</ul>
	   <div class="ms02_02">
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
				   	<input type="text" name="tb_txt" value="" placeholder="40자까지 입력 가능" maxlength="40" style="width:90%">
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
				   <td colspan="4">
					<div class="file_wrap">
						<div class="upload-btn_wrap">
							<button type="button" title="찾아보기버튼">
								<span>첨부하기</span>
							</button>
							<input type="file" class="input_file" title="파일찾기">
						</div>
						<ul class="imgbox_ftxt">
							<li>
								<input type="text" class="upload_text" title="파일명" readonly="readonly">
							</li>
						</ul>
					</div>
				   </td>
			   </tr>
		   </table>
<!-------------------------------표2-->
		   <h4>
			   테마 조건설정 &nbsp;
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
						</ul>
				   </td>
			   </tr>
		   </table>
		   <table class="tb01 v02">
			   <tr>
				   <th>키워드 <span class="color">*</span></th>
				   <td><input type="text" name="tb_txt" value="" placeholder="띄어쓰기 없이 입력 (최대 20자)" maxlength="20" style="width:70%">
				   <input type="button" name="tb_btn" value="추가">
				   </td>
				   <th>추가된 키워드</th>
				   <td>설정된 키워드가 없습니다.</td>
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
<!-------------------------------표3-->
		   <h4>
			   설정조건
			   <div><input type="button" class="btn03" style="margin-top:-26px; width:100px;" value="조건 추가"></div>
		   </h4>
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
			<ul class="table_btn clear">
				<li><a href="#" onclick="return false">취소</a></li>
				<li class="al01"><a href="#" onclick="return false">등록</a></li>
			</ul>
    	</div>
    </div>
    
<!--    footer연결-->
    <?php include "footer.php"; ?>
<!--    footer연결-->

</body>
</html>