<!DOCTYPE html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
    <title>qdillion</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/int.js"></script>
    <script src="js/mainsup.js"></script>
</head>
<body>
   
<!--   gnb/snb연결-->
  	<?php include "gnb.php"; ?>
    <?php include "snb.php"; ?>
<!--   gnb/snb연결-->

  
   <div id="wrap">
   	   <h1>팝업설정</h1>
	   <ul class="title clear">
			<li></li>
			<li>팝업 등록 &nbsp;<span>앱 메인에 노출되는 팝업을 등록할 수 있습니다</span></li>
		</ul>
	   <div class="ms01_01">
		   <table class="tb01">
			   <tr>
				   <th>기기 <span class="color">*</span></th>
				   <td width="30%">
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
				   <th>팝업타입 <span class="color">*</span></th>
				   <td colspan="3">
					   <ul class="clear">
							<li>
								<label class="rdb">
									<input type="radio" name="rd3" checked="">
									<span></span>이벤트
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd3">
									<span></span>공지사항
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd3">
									<span></span>외부링크
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd3">
									<span></span>접근제한
								</label>
							</li>
						</ul>
				   </td>
			   </tr>
			   <tr>
				   <th>연결 URL <span class="color">*</span></th>
				   <td colspan="3">
				   <input type="url" value="" style="width:70%;">
					   <span class="color fl_txtm">* 연결할 URL이 있을 경우에만 입력해주세요.</span>
				   </td>
			   </tr>
			   <tr>
				   <th>제목 <span class="color">*</span></th>
				   <td class="tb_txt01" colspan="3"><input type="text" value="" placeholder="50자까지 입력 가능" maxlength="50" style="width:70%"></td>
			   </tr>
			   <tr>
				   <th>팝업 이미지 <span class="color">*</span></th>
				   <td colspan="3">
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
			   </tr>
			   <tr>
				   <th rowspan="2">노출기간</th>
				   <td class="cd_img02 clear" colspan="3">
				   		기간 <span class="color">*</span>
					   <input type="text" value="" class="sc_cd01" style="margin-left:25px;">
					   <input type="button" value="" class="datepicker n01">
					   ~
					   <input type="text" value="" class="sc_cd02">
					   <input type="button" value="" class="datepicker n02">
				   </td>
			   </tr>
			   <tr>
				   <td class="data" style="border-left:1px solid #ededed" colspan="3">
						특정 시간&nbsp;
						<select>
							<option>00</option><option>01</option><option>02</option><option>03</option><option>04</option><option>05</option><option>06</option><option>07</option><option>08</option><option>09</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option>
						</select>&nbsp;시&nbsp;
						<select>
							<option>00</option><option>01</option><option>02</option><option>03</option><option>04</option><option>05</option><option>06</option><option>07</option><option>08</option><option>09</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option><option>32</option><option>33</option><option>34</option><option>35</option><option>36</option><option>37</option><option>38</option><option>39</option><option>40</option><option>41</option><option>42</option><option>43</option><option>44</option><option>45</option><option>46</option><option>47</option><option>48</option><option>49</option><option>50</option><option>51</option><option>52</option><option>53</option><option>54</option><option>55</option><option>56</option><option>57</option><option>58</option><option>59</option><option>60</option>
						</select>&nbsp;분 ~ &nbsp;
						<select>
							<option>00</option><option>01</option><option>02</option><option>03</option><option>04</option><option>05</option><option>06</option><option>07</option><option>08</option><option>09</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option>
						</select>&nbsp;시&nbsp;
						<select>
							<option>00</option><option>01</option><option>02</option><option>03</option><option>04</option><option>05</option><option>06</option><option>07</option><option>08</option><option>09</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option><option>32</option><option>33</option><option>34</option><option>35</option><option>36</option><option>37</option><option>38</option><option>39</option><option>40</option><option>41</option><option>42</option><option>43</option><option>44</option><option>45</option><option>46</option><option>47</option><option>48</option><option>49</option><option>50</option><option>51</option><option>52</option><option>53</option><option>54</option><option>55</option><option>56</option><option>57</option><option>58</option><option>59</option><option>60</option>
						</select>&nbsp;분
				   </td>
			   </tr>
			   <tr>
				   <th>사용여부 <span class="color">*</span></th>
				   <td colspan="3">
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