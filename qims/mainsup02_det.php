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
	   <div class="ms02_01 v02">
		   <h4>기본정보</h4>
		   <table class="tb01">
			   <tr>
				   <th>배너타입</th>
				   <td colspan="4">
					   <ul class="clear">
							<li>
								<label class="rdb">
									<input type="radio" name="rd1" checked="">
									<span></span>이미지
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd1">
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
				   </td>
			   </tr>
			   <tr>
				   <th>연결 URL</th>
				   <td colspan="4">
				   <input type="url" name="tb_url" value="https://goo.gl/123" placeholder="URL 입력" style="width:70%">
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
			<ul class="table_btn clear">
				<li><a href="#" onclick="return false">취소</a></li>
				<li><a href="#" onclick="return false">수정</a></li>
			</ul>
    	</div>
    </div>
    
<!--    footer연결-->
    <?php include "footer.php"; ?>
<!--    footer연결-->

</body>
</html>