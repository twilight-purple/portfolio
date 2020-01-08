<!DOCTYPE html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
    <title>qdillion</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/int.js"></script>
    <script src="js/servicecenter.js"></script>
</head>
<body>
   
<!--   gnb/snb연결-->
  	<?php include "gnb.php"; ?>
    <?php include "snb.php"; ?>
<!--   gnb/snb연결-->

  
   <div id="wrap">
   	   <h1>중고나라 이용안내</h1>
	   <ul class="title clear">
			<li></li>
			<li>이용안내 등록 &nbsp;<span>중고나라 이용안내 등록할 수 있습니다.</span></li>
		</ul>
	   <div class="sc02_01">
		   <table class="tb01">
			   <tr>
				   <th style="width:15%;">1depth 카테고리 명 <span class="color">*</span></th>
				   <td>
					   <select style="width:120px;">
						   <option>선택</option>
						   <option>운영정책</option>
						   <option>스토어</option>
						   <option>서비스기능</option>
						   <option>구매절차</option>
						   <option>반품절차</option>
						   <option>사기예방</option>
					   </select>
					   <input type="button" value="미리보기">
				   </td>
			   </tr>
			   <tr>
				   <th>이용안내 타이틀 <span class="color">*</span></th>
				   <td><input type="text" name="tb_txt" value="" placeholder="10자까지 입력 가능" maxlength="10" style="width:60%"></td>
			   </tr>
			   <tr>
				   <th>내용 이미지 <span class="color">*</span></th>
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
			   <tr>
				   <th>연결 URL</th>
				   <td>
					   <input type="text" value="" style="width:60%;">
					   <span class="color">* 연결할 URL이 있을 경우에만 입력해 주세요.</span>
				   </td>
			   </tr>
			   <tr>
				   <th>사용여부 <span class="color">*</span></th>
				   <td>
					   <ul class="clear">
							<li>
								<label class="rdb">
									<input type="radio" name="rd1" checked="">
									<span></span>미사용
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd1">
									<span></span>사용
								</label>
							</li>
						</ul>
				   </td>
			   </tr>
		   </table>
			<ul class="table_btn clear">
				<li class="list_pt"><a href="#" onclick="return false">목록</a></li>
				<li class="enr_pt"><a href="#" onclick="return false">등록</a></li>
			</ul>
    	</div>
    </div>
    
<!--    footer연결-->
    <?php include "footer.php"; ?>
<!--    footer연결-->

</body>
</html>