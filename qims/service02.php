<!DOCTYPE html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
    <title>qdillion</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script src="js/jquery-ui.min.js"></script>
	<script src="js/int.js"></script>
    <script src="js/service.js"></script>
	<script>
//		snb바꾸기
		$(document).ready(function(){
			$(".snb_wrap .snb>li:nth-child(3)>.snb_sub").addClass("view");
			$(".snb_wrap .snb>li:nth-child(3)>ul>li:nth-child(2)").addClass("on");
			$(".snb_wrap .snb>li:nth-child(3)>span").addClass("on");
		});
//		snb바꾸기
	</script>
</head>
<body>
   
<!--   gnb/snb연결-->
  	<?php include "gnb.php"; ?>
    <?php include "snb.php"; ?>
<!--   gnb/snb연결-->

  
   <div id="wrap">
<!--   타이틀-->
   	   <h1>스토어랭킹 관리</h1>
	   <ul class="title clear">
			<li></li>
			<li>
				스토어랭킹 기준 관리 &nbsp;<span>앱의 실시간 스토어 랭킹에 반영되는 점수를 수정/적용할 수 있습니다.</span>
			</li>
		</ul>
<!--   타이틀-->
	   <div class="sv02">
<!-------------------------표1-->
		   <h4>스토어랭킹 기준항목</h4>
		   <div class="svtop clear">
			   <li>총 5건</li>
			   <li class="svtop_right">
				   <input type="button" value="수정적용" style="width:80px;">
			   </li>
		   </div>
		   <table class="tb02 v02">
		  	 	<colgroup>
					<col width="5%"/>
					<col width="20%"/>
					<col width="8%"/>
					<col />
					<col />
					<col />
					<col width="40%"/>
				</colgroup>
			   <tr>
				   <th>NO.</th>
				   <th>항목명</th>
				   <th>항목점수</th>
				   <th>항목적용</th>
				   <th>최근수정자</th>
				   <th>수정일시</th>
				   <th>메모</th>
			   </tr>
			   <tr class="list01">
				   <td>1</td>
				   <td><input type="text" name="sv_txt" value="스토어 방문 수(1시간 1계정)"></td>
				   <td><input type="number" name="sv_txt" value="1"></td>
				   <td>
					   <label class="cb">
						 <input type="checkbox" class="sc_cb" value="" checked="">
						 <span></span>
						 <p>적용</p>
					   </label>
				   </td>
				   <td>김보배 (서비스기획팀)</td>
				   <td>YYYY-MM-DD HH:MM:SS</td>
				   <td><input type="text" name="sv_txt" value="" placeholder="변경사항에 대한 메모를 입력해주세요."></td>
			   </tr>
			   <tr class="list01">
				   <td>2</td>
				   <td><input type="text" name="sv_txt" value="상품등록 수"></td>
				   <td><input type="number" name="sv_txt" value="2"></td>
				   <td>
					   <label class="cb">
						 <input type="checkbox" class="sc_cb" value="" checked="">
						 <span></span>
						 <p>적용</p>
					   </label>
				   </td>
				   <td>김보배 (서비스기획팀)</td>
				   <td>YYYY-MM-DD HH:MM:SS</td>
				   <td><input type="text" name="sv_txt" value="" placeholder="변경사항에 대한 메모를 입력해주세요."></td>
			   </tr>
			   <tr class="list01">
				   <td>3</td>
				   <td><input type="text" name="sv_txt" value="팔로워 수"></td>
				   <td><input type="number" name="sv_txt" value="1"></td>
				   <td>
					   <label class="cb">
						 <input type="checkbox" class="sc_cb" value="" checked="">
						 <span></span>
						 <p>적용</p>
					   </label>
				   </td>
				   <td>김보배 (서비스기획팀)</td>
				   <td>YYYY-MM-DD HH:MM:SS</td>
				   <td><input type="text" name="sv_txt" value="" placeholder="변경사항에 대한 메모를 입력해주세요."></td>
			   </tr>
			   <tr class="list01">
				   <td>4</td>
				   <td><input type="text" name="sv_txt" value="판매완료 수"></td>
				   <td><input type="number" name="sv_txt" value="3"></td>
				   <td>
					   <label class="cb">
						 <input type="checkbox" class="sc_cb" value="" checked="">
						 <span></span>
						 <p>적용</p>
					   </label>
				   </td>
				   <td>김보배 (서비스기획팀)</td>
				   <td>YYYY-MM-DD HH:MM:SS</td>
				   <td><input type="text" name="sv_txt" value="점수 5점에서 3점으로 변경" placeholder="변경사항에 대한 메모를 입력해주세요."></td>
			   </tr>
			   <tr class="list01">
				   <td>5</td>
				   <td><input type="text" name="sv_txt" value="후기평가평균"></td>
				   <td><input type="number" name="sv_txt" value="2"></td>
				   <td>
					   <label class="cb">
						 <input type="checkbox" class="sc_cb" value="" checked="">
						 <span></span>
						 <p>적용</p>
					   </label>
				   </td>
				   <td>김보배 (서비스기획팀)</td>
				   <td>YYYY-MM-DD HH:MM:SS</td>
				   <td><input type="text" name="sv_txt" value="1시간동안 집계된 평균점수의 배수로 점수 부여" placeholder="변경사항에 대한 메모를 입력해주세요."></td>
			   </tr>
		   </table>
<!-------------------------표3-->
		   <h4>스토어랭킹 반영주기</h4>
		   <div class="svtop clear">
			   <li class="svtop_right" style="margin-top:-30px;">
				   <input type="button" value="수정적용" style="width:80px;">
			   </li>
		   </div>
		   <table class="tb02 v03">
		  		<colgroup>
					<col />
					<col />
					<col />
					<col width="40%"/>
				</colgroup>
			   <tr>
				   <th>반영주기</th>
				   <th>최근수정자</th>
				   <th>수정일시</th>
				   <th>메모</th>
			   </tr>
			   <tr>
				   <td>
					   <select>
					   <option>30분</option>
					   <option selected="">1시간</option>
					   <option>3시간</option>
					   <option>12시간</option>
					   <option>1일</option>
					   <option>2일</option>
					   <option>3일</option>
					   <option>4일</option>
					   <option>5일</option>
					   <option>6일</option>
					   <option>7일</option>
					   </select>&nbsp;&nbsp;동안 누적된 총 점수를 집계하여,
					   &nbsp;&nbsp;<select>
					   <option>30분</option>
					   <option selected="">1시간</option>
					   <option>3시간</option>
					   <option>12시간</option>
					   <option>1일</option>
					   <option>2일</option>
					   <option>3일</option>
					   <option>4일</option>
					   <option>5일</option>
					   <option>6일</option>
					   <option>7일</option>
					   </select>&nbsp;&nbsp;마다 반영
				   </td>
				   <td>김보배 (서비스기획팀)</td>
				   <td>YYYY-MM-DD HH:MM:SS</td>
				   <td><input type="text" name="sv_txt" value="" placeholder="변경사항에 대한 메모를 입력해주세요."></td>
			   </tr>
		   </table>
<!-------------------------표4-->
   			<h4>스토어랭킹 참고사항</h4>
		   <div class="svtop clear">
			   <li class="svtop_right" style="margin-top:-30px;">
				   <input type="button" value="수정적용" style="width:80px;">
			   </li>
		   </div>
		   <div class="tb02 v04">
		   	<textarea name="list02_txt" value=" " placeholder="숨김사유를 입력해주세요.">- APP에서 총 50위까지 랭킹을 표기하며 50위까지 표기 불가 시, 50위까지 표기 가능한 이전의 랭킹이 적용됩니다.&#10;- 스토어의 점수가 동일한 경우 먼저 점수를 달성한 순으로 정렬됩니다.&#10;- 항목점수는 1점 단위로 작성할 수 있습니다.</textarea>
		   </div>
	   </div>
    </div>
    
<!--    footer연결-->
    <?php include "footer.php"; ?>
<!--    footer연결-->

</body>
</html>