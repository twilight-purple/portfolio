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
   	   <h1>FAQ</h1>
	   <ul class="title clear">
			<li></li>
			<li>FAQ 상세 &nbsp;<span>등록된 FAQ를 수정할 수 있습니다.</span></li>
		    <li style="float: right;"><input type="button" value="FAQ 링크복사" style="width:130px;" class="btn03"></li>
		</ul>
	   <div class="sc01 v02">
		   <table class="tb01">
			   <tr>
				   <th>카테고리 <span class="color">*</span></th>
				   <td>
					   <select>
						   <option>선택</option>
						   <option selected="">회원</option>
						   <option>스토어</option>
						   <option>서비스</option>
						   <option>주문/결제</option>
						   <option>취소/반품</option>
						   <option>배송</option>
						   <option>포인트</option>
						   <option>카페</option>
						   <option>비밀의 공구</option>
						   <option>이벤트/광고문의</option>
						   <option>기타</option>
					   </select>
					   <label class="cb">
						 <input type="checkbox" class="sc_cb ron" value="" checked="">
						 <span></span>
						 <p>TOP10 노출</p>
					   </label>
				   </td>
				   <th>TOP10 노출기간</th>
				   <td class="cd_img02 clear" colspan="3">
					   <input type="text" name="sc_txt" value="2016.12.23" class="sc_cd01">
					   <input type="button" name="sc_btn" value="" class="datepicker n01">
					   ~
					   <input type="text" name="sc_txt" value="2016.01.23" class="sc_cd02">
					   <input type="button" name="sc_btn" value="" class="datepicker n02">
				   </td>
			   </tr>
			   <tr>
				   <th>조회수</th>
				   <td>1,123</td>
				   <th>등록일/등록자</th>
				   <td class="line">2016-12-25 00:23<br>민소연(서비스기획팀)</td>
				   <th>최근 수정일/수정자</th>
				   <td class="line">2016-12-25 00:23<br>민소연(서비스기획팀)</td>
			   </tr>
			   <tr>
				   <th>질문 <span class="color">*</span></th>
				   <td colspan="5">
				   	<input type="text" value="전화번호가 만료되었어요." placeholder="50자까지 입력가능" maxlength="50" style="width:80%;">
				   </td>
			   </tr>
			   <tr>
				   <th>답변내용 <span class="color">*</span></th>
				   <td colspan="5">
				   	<div class="imgbox">
				   		에디터 영역
				   	</div>
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