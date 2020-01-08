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
			<li>이용안내 상세 &nbsp;<span>이미 등록된 중고나라 이용안내의 기본정보 조회 및 수정을 할 수 있습니다.</span></li>
		    <li style="float: right;"><input type="button" value="이용안내 링크복사" style="width:160px;" class="btn03"></li>
		</ul>
	   <div class="sc02_01">
		   <table class="tb01">
			   <tr>
				   <th>1depth 카테고리 명 <span class="color">*</span></th>
				   <td colspan="5">
					   <select style="width:120px;">
						   <option>선택</option>
						   <option selected="">운영정책</option>
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
				   <td colspan="5"><input type="text" name="tb_txt" value="거래금지상품" placeholder="10자까지 입력 가능" maxlength="10" style="width:60%"></td>
			   </tr>
			   <tr>
				   <th>조회수</th>
				   <td style="width:20%;">1,234</td>
				   <th>등록일/등록자</th>
				   <td>2016-12-25 00:23<br>민소연(서비스기획팀)</td>
				   <th>최근 수정일/수정자</th>
				   <td>2016-12-25 00:23<br>민소연(서비스기획팀)</td>
			   </tr>
			   <tr>
				   <th>내용 이미지 <span class="color">*</span></th>
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
			   <tr>
				   <th>연결 URL</th>
				   <td colspan="5">
					   <input type="text" value="https://www.joongna.com" style="width:60%;">
					   <span class="color">* 연결할 URL이 있을 경우에만 입력해 주세요.</span>
				   </td>
			   </tr>
			   <tr>
				   <th>사용여부 <span class="color">*</span></th>
				   <td colspan="5">
					   <ul class="clear">
							<li>
								<label class="rdb">
									<input type="radio" name="rd1">
									<span></span>미사용
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd1" checked="">
									<span></span>사용
								</label>
							</li>
						</ul>
				   </td>
			   </tr>
		   </table>
			<ul class="table_btn clear">
				<li class="revise_list_pt"><a href="#" onclick="return false">목록</a></li>
				<li class="revise_pt"><a href="#" onclick="return false">수정</a></li>
			</ul>
    	</div>
    </div>
    
<!--    footer연결-->
    <?php include "footer.php"; ?>
<!--    footer연결-->

</body>
</html>