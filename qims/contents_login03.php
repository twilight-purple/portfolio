<!DOCTYPE html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
    <title>qdillion</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/int.js"></script>
    <script src="js/contents.js"></script>
</head>
<body>
   
<!--   gnb/snb연결-->
  	<?php include "gnb.php"; ?>
    <?php include "snb.php"; ?>
<!--   gnb/snb연결-->

  
   <div id="wrap">
   	   <h1>로그인 서비스 소개</h1>
	   <ul class="title clear">
			<li></li>
			<li>로그인 서비스 소개 상세 &nbsp;<span>로그인 서비스 소개 상세를 확인하고 수정할 수 있습니다.</span></li>
		</ul>
	   <div class="ct">
		   <table class="tb01">
				<colgroup>
					<col width="15%"/>
					<col width="40%"/>
					<col width="10%"/>
					<col />
				</colgroup>
			   <tr>
				   <th>기기</th>
				   <td>
					   <ul class="clear">
							<li>
								<label class="rdb">
									<input type="radio" name="rd1" checked="">
									<span></span>전체
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd1">
									<span></span>App
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd1">
									<span></span>Web
								</label>
							</li>
						</ul>
				   </td>
				   <th>등록일</th>
				   <td>2017-12-31 12:40</td>
			   </tr>
			   <tr>
				   <th>운영체제</th>
				   <td>
					   <ul class="clear">
							<li>
								<label class="rdb">
									<input type="radio" name="rd2" checked="">
									<span></span>전체
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd2">
									<span></span>안드로이드
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd2">
									<span></span>iOS
								</label>
							</li>
						</ul>
				   </td>
				   <th>등록자</th>
				   <td>유보람(서비스기획팀)</td>
			   </tr>
			   <tr class="must">
				   <th>로그인 서비스 소개 제목 <span class="color">*</span></th>
				   <td colspan="5">
				   		<input type="text" value="로그인 서비스 소개" placeholder="50자까지 입력 가능" maxlength="50" style="width:70%">
				   </td>
			   </tr>
			   <tr class="must">
				   <th>로그인 서비스 소개 이미지 <span class="color">*</span></th>
				   <td class="imgbox_wrap" colspan="5">
				   		<div class="file_wrap">
							<div class="upload-btn_wrap">
								<button type="button" title="찾아보기버튼">
									<span>첨부하기</span>
								</button>
								<input type="file" class="input_file" title="파일찾기" multiple="">
							</div>
							<ul class="imgbox_ftxt">
								<li>
									<a href="#">
										<input type="text" class="upload_text" title="파일명" readonly="readonly">
									</a>
								</li>
								<li>
									<a href="#">
										<input type="text" class="upload_text" title="파일명" readonly="readonly">
									</a>
								</li>
								<li>
									<a href="#">
										<input type="text" class="upload_text" title="파일명" readonly="readonly">
									</a>
								</li>
								<li>
									<a href="#">
										<input type="text" class="upload_text" title="파일명" readonly="readonly">
									</a>
								</li>
							</ul>
							<span class="color fl_txtm">* 첨부된 순서대로 등록됩니다.</span>
				   		</div>
					    <div class="imgbox02">
							<ul class="clear">
								<li>
									<p>img</p>
									<div class="ibtn btn01">삭제</div>
								</li>
								<li>
									<p>img</p>
									<div class="ibtn btn01">삭제</div>
								</li>
								<li>
									<p>img</p>
									<div class="ibtn btn01">삭제</div>
								</li>
								<li>
									<p>img</p>
									<div class="ibtn btn01">삭제</div>
								</li>
							</ul>
					    </div>
					   <input type="button" value="이미지추가 +" class="btn03 img_more">
				   </td>
			   </tr>
			   <tr class="must">
				   <th>노출기간 <span class="color">*</span></th>
				   <td class="cd_img clear" colspan="5">
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
				   <td colspan="5">
					   <ul class="clear">
							<li>
								<label class="rdb">
									<input type="radio" name="rd3">
									<span></span>미사용
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd3" checked="">
									<span></span>사용
								</label>
							</li>
						</ul>
				   </td>
			   </tr>
			   <tr>
				   <th>소개 콘텐츠 제목</th>
				   <td colspan="5">
				   	<input type="text" value="안전한 중고거래는 중고나라에서" maxlength="50" style="width:900px">
				   	<span class="color fl_txtm">* 이미지에 노출됩니다.</span>
				   </td>
			   </tr>
			   <tr>
				   <th>소개 콘텐츠 상세설명</th>
				   <td class="textarea_wp" colspan="5">
				   	<textarea value="" placeholder="" maxlength="200" style="width:907px">거래 전 판매회원의 사기이력을 조회할 수 있고&#10;거래 중 문제가 발생하면 결제금액을 돌려받을 수 있는 안전결제 서비스를 제공하고 있습니다.</textarea>
					   <span class="color fl_txtm">* 이미지에 노출됩니다.</span>
				   </td>
			   </tr>
		   </table>
			<ul class="table_btn clear">
				<li class="revise_list_pt"><a href="#" onclick="return false">목록</a></li>
				<li><a href="#" onclick="return false">미리보기</a></li>
				<li class="revise_pt"><a href="#" onclick="return false">수정</a></li>
			</ul>
    	</div>
    </div>
    
<!--    footer연결-->
    <?php include "footer.php"; ?>
<!--    footer연결-->

</body>
</html>