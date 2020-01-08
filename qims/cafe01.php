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
   	   <h1>카페 등업관리</h1>
	   <ul class="title clear">
			<li></li>
			<li>카페 등업관리 &nbsp;<span>중고나라 카페에서 등업한 회원들의 리스트를 확인할 수 있습니다</span></li>
		    <li style="float: right;"><input type="button" value="화면 가이드" style="width:120px;" class="btn03 op_wgd"></li>
		</ul>
	   <div class="cf01">
		   <table class="sc">
			   <tr>
				   <th>통합검색</th>
				   <td class="cd_img clear" style="width:30%;">
					   <select style="width:130px; background-position: 110px; margin-right:10px;">
						   <option>전체</option>
						   <option>카페 등업 처리일</option>
						   <option>카페 등업 신청일</option>
					   </select>
					   <input type="text" name="sc_txt" value="" class="sc_cd01">
					   <input type="button" name="sc_btn" value="" class="datepicker n01">
					   ~
					   <input type="text" name="sc_txt" value="" class="sc_cd02">
					   <input type="button" name="sc_btn" value="" class="datepicker n02">
				   </td>
				   <th>앱 아이디</th>
				   <td>
					   <input type="text" value="">
				   </td>
				   <th>앱 닉네임</th>
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
				   <th style="width:10%;">카페 등업 처리결과</th>
				   <td style="width:10%;">
					   <select>
						   <option>전체</option>
						   <option>처리대기</option>
						   <option>열심회원</option>
						   <option>성실회원</option>
						   <option>등업실패</option>
					   </select>
				   </td>
				   <th style="width:10%;">카페 등업 실패사유</th>
				   <td>
					   <select style="width:200px; background-position: 180px;">
						   <option>전체</option>
						   <option>이미 열심회원 입니다.</option>
						   <option>이미 성실회원 입니다.</option>
						   <option>아직 열심회원이 아닙니다.</option>
						   <option>성실회원 이상 등급입니다.</option>
						   <option>아이디가 없습니다.</option>
					   </select>
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
				   <a href="#" class="btn01" style="width:90px;">삭제적용</a>
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
						   <th>카페 아이디</th>
						   <th class="img">카페 등업 처리결과<img src="img/down02.png"></th>
						   <th class="img">카페 등업 처리일<img src="img/down02.png"></th>
						   <th class="img">카페 등업 신청일<img src="img/down02.png"></th>
						   <th class="img">앱 가입일<img src="img/down02.png"></th>
						   <th>카페 등업 실패사유</th>
					   </tr>
					   <tr>
						   <td>
							<label class="cb li">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
							</label>
						   </td>
						   <td>53</td>
						   <td class="a">m222@naver.com</td>
						   <td class="a">밍소</td>
						   <td>ming1030</td>
						   <td>처리대기</td>
						   <td>YYYY-MM-DD HH:MM:SS</td>
						   <td>YYYY-MM-DD HH:MM:SS</td>
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
						   <td>52</td>
						   <td class="a">m222@naver.com</td>
						   <td class="a">밍소</td>
						   <td>ming1030</td>
						   <td>처리대기</td>
						   <td>YYYY-MM-DD HH:MM:SS</td>
						   <td>YYYY-MM-DD HH:MM:SS</td>
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
						   <td class="a">m222@naver.com</td>
						   <td class="a">밍소</td>
						   <td>ming1030</td>
						   <td>등업실패</td>
						   <td>YYYY-MM-DD HH:MM:SS</td>
						   <td>YYYY-MM-DD HH:MM:SS</td>
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
						   <td class="a">m222@naver.com</td>
						   <td class="a">밍소</td>
						   <td>ming1030</td>
						   <td>등업실패</td>
						   <td>YYYY-MM-DD HH:MM:SS</td>
						   <td>YYYY-MM-DD HH:MM:SS</td>
						   <td>YYYY-MM-DD HH:MM:SS</td>
						   <td>성실회원 이상 등급 입니다.</td>
					   </tr>
					   <tr>
						   <td>
							<label class="cb li">
								 <input type="checkbox" class="sc_cb" value="">
								 <span></span>
							</label>
						   </td>
						   <td>49</td>
						   <td class="a">m222@naver.com</td>
						   <td class="a">밍소</td>
						   <td>ming1030</td>
						   <td>열심회원</td>
						   <td>YYYY-MM-DD HH:MM:SS</td>
						   <td>YYYY-MM-DD HH:MM:SS</td>
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