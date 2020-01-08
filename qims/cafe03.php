<!DOCTYPE html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
    <title>qdillion</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/int.js"></script>
    <script src="js/cafe.js"></script>
</head>
    <body>
   
<!--   gnb/snb연결-->
  	<?php include "gnb.php"; ?>
    <?php include "snb.php"; ?>
<!--   gnb/snb연결-->

  
   <div id="wrap">
   	   <h1>가입불가 회원</h1>
	   <ul class="title clear">
			<li></li>
			<li>가입불가 회원 &nbsp;<span>중고나라 카페에서 가입불가 처리된 회원들의 리스트를 확인할 수 있습니다</span></li>
		    <li style="float: right;"><input type="button" value="화면 가이드" style="width:120px;" class="btn03 op_wgd"></li>
		</ul>
	   <div class="cf01">
		   <table class="sc">
			   <tr>
				   <th>통합검색</th>
				   <td class="cd_img clear" style="width:30%;">
					   <select style="width:150px; background-position: 130px; margin-right:10px;">
						   <option>전체</option>
						   <option>카페 가입불가 처리일</option>
						   <option>앱 가입일</option>
					   </select>
					   <input type="text" name="sc_txt" value="" class="sc_cd01">
					   <input type="button" name="sc_btn" value="" class="datepicker n01">
					   ~
					   <input type="text" name="sc_txt" value="" class="sc_cd02">
					   <input type="button" name="sc_btn" value="" class="datepicker n02">
				   </td>
				   <th>앱 회원구분</th>
				   <td>
					   <select>
						   <option>전체</option>
						   <option>일반</option>
						   <option>블랙</option>
						   <option>정지</option>
						   <option>관리자삭제</option>
						   <option>탈퇴</option>
						   <option>휴면</option>
					   </select>
				   </td>
				   <th>앱 아이디</th>
				   <td>
					   <input type="text" value="">
				   </td>
				   <th>카페 아이디</th>
				   <td>
					   <input type="text" value="">
				   </td>
			   </tr>
		   </table>
		   <table class="sc v02">
			   <tr>
				   <th style="width:10%;">카페 가입불가 사유</th>
				   <td style="width:15%;">
					   <input type="text" value="">
				   </td>
				   <th style="width:10%;">카페 가입불가 처리자</th>
				   <td>
					   <input type="text" value="">
					   <input type="button" name="sc_btn" value="검색">
				   </td>
			   </tr>
		   </table>
		   <ul class="list_top clear">
			   <li>전체 53건,</li>
			   <li class="clear'">
				   <ul class="list_nm">
					   <li class="on">1</li>
				   </ul>
				   <p>/ 3 페이지</p>
			   </li>
			   <li><span>(YYYY-MM-DD ~ YYYY-MM-DD)</span></li>
			   <li>
				   <select>
					   <option>100개씩</option>
					   <option>200개씩</option>
					   <option>300개씩</option>
					   <option>400개씩</option>
					   <option>500개씩</option>
				   </select>
			   </li>
			   <li class="list_topbtn clear">
			   		<select style="width:110px;">
					   <option>회원구분변경</option>
					   <option>일반</option>
					   <option>블랙</option>
					   <option>정지</option>
					   <option>관리자삭제</option>
					   <option>탈퇴</option>
					   <option>휴면</option>
				   </select>
				   <a href="#" class="btn01 ap_pop" style="width:80px;">적용</a>
				   <a href="#" class="btn01" style="width:90px;">삭제적용</a>
				   <a href="#" class="btn01" style="width:110px;">엑셀 다운로드</a>
			   </li>
			</ul>
			   <ul class="list_view clear">
				   <li class="on">
					   <table class="list">
						   <tr>
							   <th>
							   	<label class="cb li">
									 <input type="checkbox" class="sc_cb all" value="">
									 <span></span>
					   			</label>
							   </th>
							   <th>NO.</th>
							   <th>앱 아이디</th>
							   <th>앱 닉네임</th>
							   <th class="img">앱 회원구분<img src="img/down02.png"></th>
							   <th>카페 아이디</th>
							   <th>카페 가입불가 사유</th>
							   <th>카페 가입불가 처리자</th>
							   <th class="img">카페 가입불가 처리일<img src="img/down02.png"></th>
							   <th class="img">앱 가입일<img src="img/down02.png"></th>
						   </tr>
						   <tr>
							   <td>
							   	<label class="cb li">
									 <input type="checkbox" class="sc_cb" value="">
									 <span></span>
					   			</label>
							   </td>
							   <td>53</td>
							   <td class="a">m@naver.com</td>
							   <td class="a">밍소</td>
							   <td>일반</td>
							   <td>ming1030</td>
							   <td>사기-신고,더치트/해킹의심</td>
							   <td>푸릇푸릇(hahaha)</td>
							   <td>YYYY-MM-DD HH:MM:SS</td>
							   <td>YYYY-MM-DD HH:MM:SS</td>
						   </tr>
						   <tr>
							   <td>
							   	<label class="cb li">
									 <input type="checkbox" class="sc_cb" value="">
									 <span></span>
					   			</label>
							   </td>
							   <td>52</td>
							   <td class="a">m@naver.com</td>
							   <td class="a">밍소</td>
							   <td>블랙</td>
							   <td>ming1030</td>
							   <td>등업이 라식/라섹 게시판 홍보</td>
							   <td>밍소(ming1030)</td>
							   <td>YYYY-MM-DD HH:MM:SS</td>
							   <td>-</td>
						   </tr>
						   <tr>
							   <td>
							   	<label class="cb li">
									 <input type="checkbox" class="sc_cb" value="">
									 <span></span>
					   			</label>
							   </td>
							   <td>51</td>
							   <td class="a">m@naver.com</td>
							   <td class="a">밍소</td>
							   <td>정지</td>
							   <td>ming1030</td>
							   <td>성인/도박 등 불법광고 및 스팸 활동</td>
							   <td>코알라(aiiffe)</td>
							   <td>YYYY-MM-DD HH:MM:SS</td>
							   <td>-</td>
						   </tr>
						   <tr>
							   <td>
							   	<label class="cb li">
									 <input type="checkbox" class="sc_cb" value="">
									 <span></span>
					   			</label>
							   </td>
							   <td>50</td>
							   <td class="a">m@naver.com</td>
							   <td class="a">밍소</td>
							   <td>관리자삭제</td>
							   <td>ming1030</td>
							   <td>사기-신고,더치트/해킹의심</td>
							   <td>푸릇푸릇(hahaha)</td>
							   <td>YYYY-MM-DD HH:MM:SS</td>
							   <td>-</td>
						   </tr>
						   <tr>
							   <td>
							   	<label class="cb li">
									 <input type="checkbox" class="sc_cb" value="">
									 <span></span>
					   			</label>
							   </td>
							   <td>49</td>
							   <td class="a">m@naver.com</td>
							   <td class="a">밍소</td>
							   <td>탈퇴</td>
							   <td>ming1030</td>
							   <td>등업이 라식/라섹 게시판 홍보</td>
							   <td>밍소(ming1030)</td>
							   <td>YYYY-MM-DD HH:MM:SS</td>
							   <td>-</td>
						   </tr>
						   <tr>
							   <td>
							   	<label class="cb li">
									 <input type="checkbox" class="sc_cb" value="">
									 <span></span>
					   			</label>
							   </td>
							   <td>48</td>
							   <td>-</td>
							   <td>-</td>
							   <td>-</td>
							   <td>ming1030</td>
							   <td>등업이 라식/라섹 게시판 홍보</td>
							   <td>밍소(ming1030)</td>
							   <td>YYYY-MM-DD HH:MM:SS</td>
							   <td>-</td>
						   </tr>
						   <tr>
							   <td>
							   	<label class="cb li">
									 <input type="checkbox" class="sc_cb" value="">
									 <span></span>
					   			</label>
							   </td>
							   <td>47</td>
							   <td>-</td>
							   <td>-</td>
							   <td>-</td>
							   <td>ming1030</td>
							   <td>등업이 라식/라섹 게시판 홍보</td>
							   <td>밍소(ming1030)</td>
							   <td>YYYY-MM-DD HH:MM:SS</td>
							   <td>-</td>
						   </tr>
					   </table>
				   </li>
		   		</ul>
		   <div class="btn_wrap clear">
			   <ul class="btn_left clear">
				   <li><img src="img/back02.png"></li>
				   <li><img src="img/back.png"></li>
			   </ul>
			   <ul class="btn clear">
				   <li class="on">1</li>
			   </ul>
			   <ul class="btn_right clear">
				   <li><img src="img/next.png"></li>
				   <li><img src="img/next02.png"></li>
			   </ul>
		   </div>
    	</div>
    </div>
    
<!--    footer연결-->
    <?php include "footer.php"; ?>
<!--    footer연결-->

</body>
</html>