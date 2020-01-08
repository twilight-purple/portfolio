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
			<li>이용약관 등록 &nbsp;<span>중고나라 이용약관, 위치정보 이용약관, 전자금융거래, 개인정보 취급방침을 등록할 수 있습니다.</span></li>
		</ul>
	   <div class="sc03_01">
		   <table class="tb01">
			   <tr>
				   <th>약관타입 <span class="color">*</span></th>
				   <td>
					   <select style="width:150px; background-position: 130px">
						   <option>선택</option>
						   <option>중고나라 이용약관</option>
						   <option>전자금융거래</option>
						   <option>위치정보 이용약관</option>
						   <option>개인정보 취급방침</option>
					   </select>
				   </td>
				   <th>버전 <span class="color">*</span></th>
				   <td>V. <input type="number" value=""></td>
			   </tr>
			   <tr>
				   <th>내용 <span class="color">*</span></th>
				   <td colspan="3">
					   <div class="imgbox">에디터 영역</div>
				   </td>
			   </tr>
			   <tr>
				   <th>적용일 <span class="color">*</span></th>
				   <td class="cd_img clear" colspan="3">
					   <input type="text" value="" class="sc_cd02">
					   <input type="button" value="" class="datepicker n02">
					   <label class="cb">
						 <input type="checkbox" class="sc_cb not" value="">
						 <span></span>
						 <p>즉시적용</p>
					   </label>
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