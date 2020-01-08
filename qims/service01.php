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
</head>
<body>
   
<!--   gnb/snb연결-->
  	<?php include "gnb.php"; ?>
    <?php include "snb.php"; ?>
<!--   gnb/snb연결-->

  
   <div id="wrap">
<!--   타이틀-->
   	   <h1>등급정보/기준 관리</h1>
	   <ul class="title clear">
			<li></li>
			<li>
				등급정보/기준 관리 &nbsp;<span>스토어 등급정보와 등급기준을 수정/적용할 수 있습니다.</span>
			</li>
		</ul>
<!--   타이틀-->
	   <div class="sv01">
<!-------------------------표1-->
	  	   <h4>스토어 등급 정보관리</h4>
		   <div class="svtop clear">
			   <li>총 4건</li>
			   <li class="svtop_right">
			   <input type="button" value="등급추가" style="width:80px;">
			   <input type="button" value="순서적용" style="width:80px;">
			   <input type="button" value="수정적용" style="width:80px;">
			   </li>
		   </div>
		   <table class="tb02 filet_w">
		  	 	<colgroup>
					<col width="5%"/>
					<col width="8%"/>
					<col width="20%"/>
					<col width="5%"/>
					<col />
					<col />
					<col />
					<col width="35%"/>
				</colgroup>
			   <tr>
				   <th>NO.</th>
				   <th>등급명</th>
				   <th>등급배지</th>
				   <th>등급점수</th>
				   <th>정보/기준 적용 시작일</th>
				   <th>최근수정자</th>
				   <th>수정일시</th>
				   <th>메모</th>
			   </tr>
			   <tr>
				   <td>1</td>
				   <td><input type="text" name="sv_txt" value="ORANGE"></td>
				   <td class="file_td clear" style="padding-left:5px;">
					   <div class="file_wrap">
							<div class="upload-btn_wrap">
								<button type="button" title="찾아보기버튼">
									<span>첨부하기</span>
								</button>
								<input type="file" class="input_file" title="파일찾기">
							</div>
						   <a href="#">
							<input type="text" class="upload_text" title="파일명"></a>
				   		</div>
					   <div class="imgbox">img</div>
				   </td>
				   <td><input type="text" value="0" class="number" style="width:50px;"></td>
				   <td class="cd_img02 clear">
					   <input type="text" value="2016.12.23" class="sc_cd01" style="width:70px;">
					   <input type="button" value="" class="datepicker n01">
				   </td>
				   <td>김보배 (서비스기획팀)</td>
				   <td>YYYY-MM-DD HH:MM:SS</td>
				   <td><input type="text" name="sv_txt" value="" placeholder="변경사항에 대한 메모를 입력해주세요."></td>
			   </tr>
			   <tr>
				   <td>2</td>
				   <td><input type="text" name="sv_txt" value="SILVER"></td>
				   <td class="file_td clear" style="padding-left:5px;">
					   <div class="file_wrap">
							<div class="upload-btn_wrap">
								<button type="button" title="찾아보기버튼">
									<span>첨부하기</span>
								</button>
								<input type="file" class="input_file" title="파일찾기">
							</div>
						   <a href="#">
							<input type="text" class="upload_text" title="파일명"></a>
				   		</div>
					   <div class="imgbox">img</div>
				   </td>
				   <td><input type="text" value="500" class="number" style="width:50px;"></td>
				   <td class="cd_img02 clear">
					   <input type="text" value="2016.12.23" class="sc_cd01" style="width:70px;">
					   <input type="button" value="" class="datepicker n01">
				   </td>
				   <td>김보배 (서비스기획팀)</td>
				   <td>YYYY-MM-DD HH:MM:SS</td>
				   <td><input type="text" name="sv_txt" value="" placeholder="변경사항에 대한 메모를 입력해주세요."></td>
			   </tr>
			   <tr>
				   <td>3</td>
				   <td><input type="text" name="sv_txt" value="GOLD"></td>
				   <td class="file_td clear" style="padding-left:5px;">
					   <div class="file_wrap">
							<div class="upload-btn_wrap">
								<button type="button" title="찾아보기버튼">
									<span>첨부하기</span>
								</button>
								<input type="file" class="input_file" title="파일찾기">
							</div>
						   <a href="#">
							<input type="text" class="upload_text" title="파일명"></a>
				   		</div>
					   <div class="imgbox">img</div>
				   </td>
				   <td><input type="text" value="1,500" class="number" style="width:50px;"></td>
				   <td class="cd_img02 clear">
					   <input type="text" value="2016.12.23" class="sc_cd01" style="width:70px;">
					   <input type="button" value="" class="datepicker n01">
				   </td>
				   <td>김보배 (서비스기획팀)</td>
				   <td>YYYY-MM-DD HH:MM:SS</td>
				   <td><input type="text" name="sv_txt" value="등급명 변경" placeholder="변경사항에 대한 메모를 입력해주세요."></td>
			   </tr>
			   <tr>
				   <td>4</td>
				   <td><input type="text" name="sv_txt" value="VIP"></td>
				   <td class="file_td clear" style="padding-left:5px;">
					   <div class="file_wrap">
							<div class="upload-btn_wrap">
								<button type="button" title="찾아보기버튼">
									<span>첨부하기</span>
								</button>
								<input type="file" class="input_file" title="파일찾기">
							</div>
						   <a href="#">
							<input type="text" class="upload_text" title="파일명"></a>
				   		</div>
					   <div class="imgbox">img</div>
				   </td>
				   <td><input type="text" value="3,000" class="number" style="width:50px;"></td>
				   <td class="cd_img02 clear">
					   <input type="text" value="2016.12.23" class="sc_cd01" style="width:70px;">
					   <input type="button" value="" class="datepicker n01">
				   </td>
				   <td>김보배 (서비스기획팀)</td>
				   <td>YYYY-MM-DD HH:MM:SS</td>
				   <td><input type="text" name="sv_txt" value="" placeholder="변경사항에 대한 메모를 입력해주세요."></td>
			   </tr>
		   </table>
<!-------------------------표2-->
		   <h4>등급 기준관리</h4>
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
				   <td><input type="text" name="sv_txt" value="스토어일방문 수(1일 1계정)"></td>
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
				   <td><input type="text" name="sv_txt" value="상품등록"></td>
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
				   <td><input type="text" name="sv_txt" value="1일 최대 6점까지만 반영, 재등록 포함안함" placeholder="변경사항에 대한 메모를 입력해주세요."></td>
			   </tr>
			   <tr class="list01">
				   <td>3</td>
				   <td><input type="text" name="sv_txt" value="판매완료"></td>
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
				   <td>4</td>
				   <td><input type="text" name="sv_txt" value="상품구매"></td>
				   <td><input type="number" name="sv_txt" value="4"></td>
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
				   <td>5</td>
				   <td><input type="text" name="sv_txt" value="후기작성"></td>
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
		   </table>
<!-------------------------표3-->
		   <h4>등급 반영주기</h4>
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
					   최근&nbsp;&nbsp;<select>
					   <option>1개월</option>
					   <option selected="">3개월</option>
					   <option>6개월</option>
					   <option>9개월</option>
					   <option>12개월</option>
					   </select>&nbsp;&nbsp;동안 누적된 총 점수를 집계하여,
					   &nbsp;&nbsp;<select>
					   <option>1개월</option>
					   <option selected="">3개월</option>
					   <option>6개월</option>
					   <option>9개월</option>
					   <option>12개월</option>
					   </select>&nbsp;&nbsp;반영
				   </td>
				   <td>김보배 (서비스기획팀)</td>
				   <td>YYYY-MM-DD HH:MM:SS</td>
				   <td><input type="text" name="sv_txt" value="" placeholder="변경사항에 대한 메모를 입력해주세요."></td>
			   </tr>
		   </table>
<!-------------------------표4-->
   			<h4>스토어등급 기준 참고사항</h4>
		   <div class="svtop clear">
			   <li class="svtop_right" style="margin-top:-30px;">
				   <input type="button" value="수정적용" style="width:80px;">
			   </li>
		   </div>
		   <div class="tb02 v04">
		   	<textarea name="list02_txt" value=" " placeholder="숨김사유를 입력해주세요.">- 스토어 등급 점수는 적용된 반영주기를 확인하여 점수를 입력해주세요.(ex. 3개월 누적된 총 점수일 경우 등급점수는 3개월의 총 점수 입력)&#10;- 스토어 등급 항목 점수는 1회 기준으로 작성하며 1점 단위로 작성할 수 있습니다.</textarea>
		   </div>
	   </div>
    </div>
    
<!--    footer연결-->
    <?php include "footer.php"; ?>
<!--    footer연결-->

</body>
</html>