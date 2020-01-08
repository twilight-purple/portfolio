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
   	   <h1>스플래시</h1>
	   <ul class="title clear">
			<li></li>
			<li>스플래시 상세 &nbsp;<span>스플래시 상세를 확인하고 수정할 수 있습니다.</span></li>
		</ul>
	   <div class="ct">
		   <table class="tb01">
				<colgroup>
					<col width="13%"/>
					<col width="25%"/>
					<col width="10%"/>
					<col width="15%"/>
					<col width="10%"/>
					<col width="15%"/>
				</colgroup>
			   <tr>
				   <th>운영체제</th>
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
									<span></span>안드로이드
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd1">
									<span></span>iOS
								</label>
							</li>
						</ul>
				   </td>
				   <th>등록일</th>
				   <td>YYYY-MM-DD HH:MM</td>
				   <th>등록자</th>
				   <td>유보람(서비스기획팀)</td>
			   </tr>
			   <tr class="must">
				   <th>스플래시 제목 <span class="color">*</span></th>
				   <td colspan="5">
				   	<input type="text" value="1월 스플래시" placeholder="50자까지 입력 가능" maxlength="50" style="width:60%">
				   </td>
			   </tr>
			   <tr class="must">
				   <th>스플래시 이미지 <span class="color">*</span></th>
				   <td class="imgbox_wrap" colspan="5">
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
									<input type="radio" name="rd2">
									<span></span>미사용
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd2" checked="">
									<span></span>사용
								</label>
							</li>
						</ul>
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