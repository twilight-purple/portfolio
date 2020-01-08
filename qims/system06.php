<!DOCTYPE html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
    <title>qdillion</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/int.js"></script>
    <script src="js/system.js"></script>
</head>
    <body>
   
<!--   gnb/snb연결-->
  	<?php include "gnb.php"; ?>
    <?php include "snb.php"; ?>
<!--   gnb/snb연결-->

  
   <div id="wrap">
   	   <h1>부서 및 권한 관리</h1>
	   <ul class="title clear">
			<li></li>
			<li>부서 및 권한 관리 &nbsp;<span>부서, 권한 등급을 추가/삭제/변경할 수 있습니다.</span></li>
		</ul>
	   <div class="syt06">
		   <ul class="list_top clear">
			   <li class="list_topbtn clear">
				   <a href="#" class="btn01" style="width:80px;">추가</a>
				   <a href="#" class="btn01" style="width:80px;">저장</a>
			   </li>
		   </ul>
		   <ul class="list_view clear">
			   <li class="on">
				   <table class="list">
					   <tr>
						   <th style="width:5%;">NO.</th>
						   <th>항목명</th>
						   <th>등급 권한 설정</th>
						   <th>삭제</th>
					   </tr>
					   <tr>
						   <td>14</td>
						   <td><input type="text" value="큐딜리온"></td>
						   <td><input type="button" value="설정"></td>
						   <td><input type="button" value="- 삭제"></td>
					   </tr>
					   <tr>
						   <td>13</td>
						   <td><input type="text" value="서버개발팀"></td>
						   <td><input type="button" value="설정"></td>
						   <td><input type="button" value="- 삭제"></td>
					   </tr>
					   <tr>
						   <td>12</td>
						   <td><input type="text" value="클라이언트개발팀"></td>
						   <td><input type="button" value="설정"></td>
						   <td><input type="button" value="- 삭제"></td>
					   </tr>
					   <tr>
						   <td>11</td>
						   <td><input type="text" value="오토팀"></td>
						   <td><input type="button" value="설정"></td>
						   <td><input type="button" value="- 삭제"></td>
					   </tr>
					   <tr>
						   <td>10</td>
						   <td><input type="text" value="신규사업팀"></td>
						   <td><input type="button" value="설정"></td>
						   <td><input type="button" value="- 삭제"></td>
					   </tr>
					   <tr>
						   <td>9</td>
						   <td><input type="text" value="광고사업팀"></td>
						   <td><input type="button" value="설정"></td>
						   <td><input type="button" value="- 삭제"></td>
					   </tr>
					   <tr>
						   <td>8</td>
						   <td><input type="text" value="디자인팀"></td>
						   <td><input type="button" value="설정"></td>
						   <td><input type="button" value="- 삭제"></td>
					   </tr>
					   <tr>
						   <td>7</td>
						   <td><input type="text" value="서비스기획팀"></td>
						   <td><input type="button" value="설정"></td>
						   <td><input type="button" value="- 삭제"></td>
					   </tr>
					   <tr>
						   <td>6</td>
						   <td><input type="text" value="재택팀"></td>
						   <td><input type="button" value="설정"></td>
						   <td><input type="button" value="- 삭제"></td>
					   </tr>
					   <tr>
						   <td>5</td>
						   <td><input type="text" value="재무회계팀"></td>
						   <td><input type="button" value="설정"></td>
						   <td><input type="button" value="- 삭제"></td>
					   </tr>
					   <tr>
						   <td>4</td>
						   <td><input type="text" value="인사총무팀"></td>
						   <td><input type="button" value="설정"></td>
						   <td><input type="button" value="- 삭제"></td>
					   </tr>
					   <tr>
						   <td>3</td>
						   <td><input type="text" value="홍보팀"></td>
						   <td><input type="button" value="설정"></td>
						   <td><input type="button" value="- 삭제"></td>
					   </tr>
					   <tr>
						   <td>2</td>
						   <td><input type="text" value="상품발팀"></td>
						   <td><input type="button" value="설정"></td>
						   <td><input type="button" value="- 삭제"></td>
					   </tr>
					   <tr>
						   <td>1</td>
						   <td><input type="text" value=""></td>
						   <td></td>
						   <td></td>
					   </tr>
				   </table>
			   </li>
			</ul>
    	</div>
    </div>
    
<!--    footer연결-->
    <?php include "footer.php"; ?>
<!--    footer연결-->

</body>
</html>