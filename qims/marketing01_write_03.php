<!DOCTYPE html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
    <title>qdillion</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/int.js"></script>
    <script src="js/marketing.js"></script>
	<script>
//		snb바꾸기
		$(document).ready(function(){
			$(".snb_wrap .snb>li:nth-child(2)>.snb_sub").addClass("view");
			$(".snb_wrap .snb>li:nth-child(2)>ul>li:nth-child(1)").addClass("on");
			$(".snb_wrap .snb>li:nth-child(2)>span").addClass("on");
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
   	   <h1>이벤트 등록</h1>
	   <ul class="title clear">
			<li></li>
			<li>이벤트 등록</li>
		</ul>
	   <div class="mk01_01">
	   	   <ul class="tb01_top clear">
			   <li>기본정보 <span class="color">* 사기, 정지, 블랙, 휴면, 탈퇴 회원은 이벤트에 응모할 수 없습니다.</span></li>
		   </ul>
		   <table class="tb01" style="margin-top:10px;">
				<tr>
					<th>이벤트타입</th>
					<td colspan="7">
				   		<ul class="clear">
							<li>
								<label class="rdb">
									<input type="radio" name="rd1">
									<span></span>댓글참여형
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd1">
									<span></span>응모형
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd1" checked="">
									<span></span>바로당첨형
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd1">
									<span></span>선착순형
								</label>
							</li>
						</ul>
					</td>
				</tr>
				<tr>
					<th>이벤트제목</th>
					<td colspan="3">
						<input type="text" name="tb_txt" value="" placeholder="40자까지 입력 가능" maxlength="40" style="width:90%">
					</td>
					<th>노출기간</th>
					<td class="cd_img clear cb_l" style="width:43%;" colspan="3">
						<input type="text" name="sc_txt" value="" class="sc_cd01  mgl0" style="margin-left:25px">
						<input type="button" name="sc_btn" value="" class="datepicker n01">
						<select class="wdth50 mgl10">
							<option>00</option><option>01</option><option>02</option><option>03</option><option>04</option><option>05</option><option>06</option><option>07</option><option>08</option><option>09</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option>
						</select>&nbsp;:&nbsp;
						<select class="wdth50">
							<option>00</option><option>01</option><option>02</option><option>03</option><option>04</option><option>05</option><option>06</option><option>07</option><option>08</option><option>09</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option><option>32</option><option>33</option><option>34</option><option>35</option><option>36</option><option>37</option><option>38</option><option>39</option><option>40</option><option>41</option><option>42</option><option>43</option><option>44</option><option>45</option><option>46</option><option>47</option><option>48</option><option>49</option><option>50</option><option>51</option><option>52</option><option>53</option><option>54</option><option>55</option><option>56</option><option>57</option><option>58</option><option>59</option><option>60</option>
						</select>&nbsp; ~ &nbsp;

						<input type="text" name="sc_txt" value="" class="sc_cd02">
						<input type="button" name="sc_btn" value="" class="datepicker n02">
						<select class="wdth50 mgl10">
							<option>00</option><option>01</option><option>02</option><option>03</option><option>04</option><option>05</option><option>06</option><option>07</option><option>08</option><option>09</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option>
						</select>&nbsp;:&nbsp;
						<select class="wdth50">
							<option>00</option><option>01</option><option>02</option><option>03</option><option>04</option><option>05</option><option>06</option><option>07</option><option>08</option><option>09</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option><option>32</option><option>33</option><option>34</option><option>35</option><option>36</option><option>37</option><option>38</option><option>39</option><option>40</option><option>41</option><option>42</option><option>43</option><option>44</option><option>45</option><option>46</option><option>47</option><option>48</option><option>49</option><option>50</option><option>51</option><option>52</option><option>53</option><option>54</option><option>55</option><option>56</option><option>57</option><option>58</option><option>59</option><option>60</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>사용여부</th>
					<td>
						<ul class="clear rb_none">
							<li>
								<label class="rdb">
									<input type="radio" name="rd2" checked="">
									<span></span>미사용
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd2">
									<span></span>사용
								</label>
							</li>
						</ul>
					</td>
					<th>노출여부</th>
					<td>
						<ul class="clear rb_none2">
							<li>
								<label class="rdb">
									<input type="radio" name="rd3" checked="">
									<span></span>미노출
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd3" class="on">
									<span></span>노출
								</label>
							</li>
						</ul>
					</td>
					<th>기기</th>
					<td>
						<ul class="clear">
							<li>
								<label class="rdb">
									<input type="radio" name="rd4" checked="">
									<span></span>전체
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd4">
									<span></span>App
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd4">
									<span></span>Web
								</label>
							</li>
						</ul>
					</td>
					<th>운영체제</th>
					<td>
						<ul class="clear">
							<li>
								<label class="rdb">
									<input type="radio" name="rd5" checked="">
									<span></span>전체
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd5">
									<span></span>안드로이드
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd5">
									<span></span>iOS
								</label>
							</li>
						</ul>
					</td>
				</tr>
		   </table>
		   <ul class="tb01_top clear">
			   <li>소재/댓글 설정</li>
		   </ul>
		   <table class="tb01" style="margin-top:10px;">
				<tr>
					<th>배너이미지</th>
					<td>
				   		<div class="file_wrap">
							<div class="upload-btn_wrap">
								<button type="button" title="찾아보기버튼">
									<span>첨부하기</span>
								</button>
								<input type="file" class="input_file" title="파일찾기">
							</div>
							<ul class="imgbox_ftxt">
								<li>
									<input type="text" class="upload_text" title="파일명" readonly="readonly">
								</li>
							</ul>
				   		</div>
					</td>
					<th>버튼이미지</th>
					<td style="width:45%;">
						<ul class="clear apply">
							<li>
								<label class="rdb">
									<input type="radio" name="rd7" checked="">
									<span></span>기본
								</label>
								<div class="applybox">참여하기</div>
							</li>
							<li class="clear">
								<label class="rdb">
									<input type="radio" name="rd7">
									<span></span>변경
								</label>
								<div class="file_wrap" style="margin-left:10px;">
									<div class="upload-btn_wrap">
										<button type="button" title="찾아보기버튼">
											<span>첨부하기</span>
										</button>
										<input type="file" class="input_file" title="파일찾기">
									</div>
									<ul class="imgbox_ftxt">
										<li>
											<input type="text" class="upload_text" title="파일명" readonly="readonly">
										</li>
									</ul>
								</div>
							</li>
						</ul>
					</td>
				</tr>
				<tr>
					<th>상세설명</th>
					<td class="pd10-20" colspan="3">
					   <div class="imgbox wdth95p hegt150" style="line-height: 150px;">에디터 영역</div>
					</td>
				</tr>
				<tr>
					<th>댓글</th>
					<td colspan="3">
						<ul class="clear">
							<li>
								<label class="rdb">
									<input type="radio" name="rd6" checked="">
									<span></span>미사용
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd6">
									<span></span>사용
								</label>
							</li>
						</ul>
					</td>
				</tr>
		   </table>
		   <ul class="tb01_top clear">
			   <li>참여타입 설정</li>
		   </ul>
		   <table class="tb01">
			   <tr>
				   <th>참여타입</th>
				   <td>
				   		<ul class="clear">
							<li>
								<label class="rdb">
									<input type="radio" name="rd8" checked="">
									<span></span>노출기간 내 하루 1회씩 참여
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd8">
									<span></span>노출기간 동안 1회만 참여
								</label>
							</li>
							<li>
								<label class="cb mgt10">
									 <input type="checkbox" class="sc_cb" value="" checked="">
									 <span></span>
									 <p>중복당첨 제외</p>
								</label>
							</li>
						</ul>
				   </td>
			   </tr>
		   </table>
	   	   <ul class="tb01_top clear">
			   <li>경품지급 설정 <span class="color">* 진행중인 이벤트는 경품지급 설정을 변경할 수 없으며, 포인트는 자동 지급됩니다.</span></li>
		   </ul>
		   <table class="tb01">
			   <tr>
				   <th>항목 설정</th>
					<td class="pd10-20">
						<p class="mgb5">
							경품 &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="tb_txt" value="" placeholder="지급 경품명 입력" style="width:200px">
							&nbsp;&nbsp;
							<input type="text" name="tb_txt" value="" placeholder="숫자입력" style="width:80px"> 명&nbsp;&nbsp;
							 <a class="qd-btn" href="#none">추가</a>
						</p>
						<p>
							포인트 &nbsp;<input type="text" name="tb_txt" value="" placeholder="숫자 입력" style="width:160px"> 포인트&nbsp;&nbsp;
							<input type="text" name="tb_txt" value="" placeholder="숫자입력" style="width:80px"> 명&nbsp;&nbsp;
							 <a class="qd-btn" href="#none">추가</a>
						</p>
					</td>
			   </tr>
			   <tr>
				   <th>설정 지급항목</th>
				   <td class="nm">
				   		<ol class="upper-roman none_nm clear">
							<li>&nbsp;<b>10</b>포인트 / <b>5</b>명 <a class="qd-btn sml mgl5" href="#none">삭제</a></li>
							<li>&nbsp;<b>스타벅스 기프티콘</b> / <b>10</b>명 <a class="qd-btn sml mgl5" href="#none">삭제</a></li>
							<li>&nbsp;<b>빙그레 바나나우유</b> / <b>20</b>명 <a class="qd-btn sml mgl5" href="#none">삭제</a></li>
							<li>&nbsp;<b>20</b>포인트 / <b>30</b>명 <a class="qd-btn sml mgl5" href="#none">삭제</a></li>
						</ol>
				   </td>
			   </tr>
		   </table>
		   <ul class="tb01_top clear">
			   <li>당첨결과 팝업화면 설정</li>
		   </ul>
		   <table class="tb01">
			   <tr>
				   <th>당첨 시 팝업이미지</th>
				   <td>
				   	<ul class="clear apply02">
							<li class="clear">
								<label class="rdb">
									<input type="radio" name="rd9" checked="">
									<span></span>기본
								</label>
								<div class="imgbox" style="margin-top:5px; width:120px;">image</div>
							</li>
							<li class="clear">
								<label class="rdb">
									<input type="radio" name="rd9">
									<span></span>변경
								</label>
								<div class="file_wrap">
									<div class="upload-btn_wrap">
										<button type="button" title="찾아보기버튼">
											<span>첨부하기</span>
										</button>
										<input type="file" class="input_file" title="파일찾기">
									</div>
									<input type="text" class="upload_text" title="파일명" readonly="readonly">
								</div>
							</li>
						</ul>
				   </td>
				   <th>당첨 시 팝업메시지</th>
				   <td class="pd10-20">
						<input type="text" name="tb_txt" value="당첨을 축하합니다!" placeholder="" style="width:500px">
					</td>
			   </tr>
		   </table>
			<ul class="table_btn clear">
				<li class="list_pt"><a href="#" onclick="return false">목록</a></li>
				<li><a href="#" onclick="return false">미리보기</a></li>
				<li class="enr_pt"><a href="#" onclick="return false">등록</a></li>
			</ul>
    	</div>
    </div>
    
<!--    footer연결-->
    <?php include "footer.php"; ?>
<!--    footer연결-->

</body>
</html>