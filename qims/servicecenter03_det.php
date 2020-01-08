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
   	   <h1>이용약관</h1>
	   <ul class="title clear">
			<li></li>
			<li>이용약관 상세 &nbsp;<span>중고나라 이용약관, 위치정보 이용약관, 전자금융거래, 개인정보 취급방침의 기본정보 조회 및 수정을 할 수 있습니다.</span></li>
		    <li style="float: right;"><input type="button" value="이용약관 링크복사" style="width:160px;" class="btn03"></li>
		</ul>
	   <div class="sc03_01 v02">
		   <table class="tb01">
			   <tr>
				   <th>약관타입 <span class="color">*</span></th>
				   <td>
					   <select style="width:150px; background-position: 130px">
						   <option>선택</option>
						   <option selected="">중고나라 이용약관</option>
						   <option>전자금융거래</option>
						   <option>위치정보 이용약관</option>
						   <option>개인정보 취급방침</option>
					   </select>
				   </td>
				   <th>버전 <span class="color">*</span></th>
				   <td>V. <input type="number" value="2.1"></td>
			   </tr>
			   <tr>
				   <th>적용일</th>
				   <td>2017-12-20</td>
				   <th>사용여부</th>
				   <td>Y</td>
			   </tr>
			   <tr>
				   <th>등록일/등록자</th>
				   <td>2016-12-25 00:23<br>민소연(서비스기획팀)</td>
				   <th>최근 수정일/수정자</th>
				   <td>
					   <p>2016-12-25 00:23<br>민소연(서비스기획팀)</p><input type="button" class="btn02 ie_btn" value="수정이력" style="top:25px;">
				   </td>
			   </tr>
			   <tr>
				   <th>내용 <span class="color">*</span></th>
				   <td colspan="3">
					   <div class="imgbox">에디터 영역</div>
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