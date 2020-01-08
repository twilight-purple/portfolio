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
   	   <h1>메인 버티컬서비스 배너관리</h1>
	   <ul class="title clear">
			<li></li>
			<li>메인 버티컬서비스 배너등록</li>
		</ul>
	   <div class="ms02_01">
		   <h4>기본정보</h4>
		   <table class="tb01">
			   <tr>
				   <th>서비스명</th>
				   <td width="40%">
				   	<input type="text" name="tb_txt" value="" placeholder="20자까지 입력 가능" maxlength="20" style="width:90%">
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
			   <tr>
				   <th>연결 URL</th>
				   <td colspan="4">
				   <input type="url" name="tb_url" value="" placeholder="URL 입력" style="width:70%">
				   </td>
			   </tr>
		   </table>
			<ul class="table_btn clear">
				<li><a href="#" onclick="return false">취소</a></li>
				<li><a href="#" onclick="return false">등록</a></li>
			</ul>
    	</div>
    </div>
    
<!--    footer연결-->
    <?php include "footer.php"; ?>
<!--    footer연결-->

</body>
</html>