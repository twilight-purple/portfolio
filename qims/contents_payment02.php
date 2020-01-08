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
   	   <h1>안전결제 이용안내</h1>
	   <ul class="title clear">
			<li></li>
			<li>안전결제 이용안내 등록 &nbsp;<span>안전결제 이용안내 등록 시 운영체제, 사용여부, 노출기간 설정, 이미지를 첨부하여 등록할 수 있습니다.</span></li>
		</ul>
	   <div class="ct">
		   <table class="tb01">
				<colgroup>
					<col width="15%"/>
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
			   </tr>
			   <tr class="must">
				   <th>안전결제 이용안내 제목 <span class="color">*</span></th>
				   <td><input type="text" value="" placeholder="50자까지 입력 가능" maxlength="50" style="width:70%"></td>
			   </tr>
			   <tr class="must">
				   <th>안전결제 이용안내 이미지 <span class="color">*</span></th>
				   <td>
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
			   <tr class="must">
				   <th>노출기간 <span class="color">*</span></th>
				   <td class="cd_img clear">
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
				   <td>
					   <ul class="clear">
							<li>
								<label class="rdb">
									<input type="radio" name="rd3" checked="">
									<span></span>미사용
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd3">
									<span></span>사용
								</label>
							</li>
						</ul>
				   </td>
			   </tr>
		   </table>
			<ul class="table_btn clear">
				<li class="list_pt"><a href="#" onclick="return false">목록</a></li>
				<li><a href="#" onclick="return false">미리보기</a></li>
				<li class="enr_pt"><a href="#" onclick="return false">등록</a></li>
			</ul>
    	</div>
    </div>
    
<!--    footer연결-->
    <?php include "footer.php"; ?>
<!--    footer연결-->

</body>
</html>