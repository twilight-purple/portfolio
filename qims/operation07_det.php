<!DOCTYPE html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
    <title>qdillion</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/int.js"></script>
    <script src="js/operation.js"></script>
</head>
<body>
   
<!--   gnb/snb연결-->
  	<?php include "gnb.php"; ?>
    <?php include "snb.php"; ?>
<!--   gnb/snb연결-->

  
   <div id="wrap">
   	   <h1>앱 공지사항</h1>
	   <ul class="title clear">
			<li></li>
			<li>앱 공지사항 상세 &nbsp;<span>공지사항의 기본정보 조회 및 수정을 할 수 있습니다.</span></li>
	   		<li style="float: right;"><input type="button" value="앱 공지사항 링크 복사" style="width:150px; margin-left:5px" class="btn03"></li>
	   		<li style="float: right;"><input type="button" value="말머리 가이드" style="width:120px;" class="btn02 gud"></li>
		</ul>
	   <div class="op07_01 v02">
		   <table class="tb01">
			   <tr>
				   <th>기기 <span class="color">*</span></th>
				   <td style="width:40%;">
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
				   <th>운영체제 <span class="color">*</span></th>
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
			   <tr>
				   <th>말머리 <span class="color">*</span></th>
				   <td>
					   <select>
						   <option>선택</option>
						   <option selected="">공지사항</option>
						   <option>주의</option>
						   <option>뉴스</option>
					   </select>
				   </td>
				   <th>조회수</th>
				   <td>1,548</td>
			   </tr>
			   <tr>
				   <th>등록일/등록자</th>
				   <td>2016-12-25 00:23<br>민소연(서비스기획팀)</td>
				   <th>최근 수정일/수정자</th>
				   <td>2016-12-25 00:23<br>민소연(서비스기획팀)</td>
			   </tr>
			   <tr>
				   <th>제목 <span class="color">*</span></th>
				   <td colspan="3"><input type="text" name="tb_txt" value="안전결제 서비스 제공사 변경 안내" placeholder="50자까지 입력 가능" maxlength="50" style="width:98%"></td>
			   </tr>
			   <tr>
				   <th>내용</th>
				   <td colspan="3">
					   <div class="imgbox">에디터 영역</div>
				   </td>
			   </tr>
			   <tr>
				   <th>노출기간 <span class="color">*</span></th>
				   <td class="rdbbox">
				  	 	<ul class="clear">
							<li>
								<label class="rdb">
									<input type="radio" name="rd3" checked="">
									<span></span>기한없음
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd3">
									<span></span>기한적용
								</label>
							</li>
						</ul>
					 	<ul class="cd_img02 clear">
						   <input type="text" name="sc_txt" value="" class="sc_cd01">
						   <input type="button" name="sc_btn" value="" class="datepicker n01">
						   ~
						   <input type="text" name="sc_txt" value="" class="sc_cd02">
						   <input type="button" name="sc_btn" value="" class="datepicker n02">
					   </ul>
				   </td>
				   <th>사용여부 <span class="color">*</span></th>
				   <td>
				  	 	<ul class="clear">
							<li>
								<label class="rdb">
									<input type="radio" name="rd4" checked="">
									<span></span>미사용
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd4">
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