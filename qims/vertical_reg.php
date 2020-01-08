<!DOCTYPE html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
    <title>qdillion</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/int.js"></script>
    <script src="js/vertical.js"></script>
</head>
<body>
   
<!--   gnb/snb연결-->
  	<?php include "gnb.php"; ?>
    <?php include "snb.php"; ?>
<!--   gnb/snb연결-->

  
   <div id="wrap">
   	   <h1>비밀의공구</h1>
	   <ul class="title clear">
			<li></li>
			<li>비밀의공구 등록</li>
		</ul>
	   <div class="vt01">
		   <table class="tb01">
			   <tr>
				   <th>오픈상태 <span class="color">*</span></th>
				   <td colspan="9">
					   <ul class="clear">
							<li>
								<label class="rdb">
									<input type="radio" name="rd1" checked="">
									<span></span>오픈
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd1">
									<span></span>마감
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd1">
									<span></span>오픈예약
								</label>
							</li>
						</ul>
				   </td>
			   </tr>
			   <tr>
				   <th>제목(상품명)</th>
				   <td colspan="9"><input type="text" value="" placeholder="40자까지 입력가능" maxlength="40" style="width:70%;"></td>
			   </tr>
			   <tr class="vtcheck">
				   <th>오픈기간 <span class="color">*</span></th>
				   <td class="cd_img clear" colspan="9">
					   <input type="text" name="sc_txt" value="" class="sc_cd01 on">
					   <input type="button" name="sc_btn" value="" class="datepicker n01">
					   <select class="on" style="width:50px; background-position: 30px;">
						   <option>00</option><option>01</option><option>02</option><option>03</option><option>04</option><option>05</option><option>06</option><option>07</option><option>08</option><option>09</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option>
					   </select>
					   <select class="on" style="width:50px; background-position: 30px;">
						   <option>00</option><option>01</option><option>02</option><option>03</option><option>04</option><option>05</option><option>06</option><option>07</option><option>08</option><option>09</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option><option>32</option><option>33</option><option>34</option><option>35</option><option>36</option><option>37</option><option>38</option><option>39</option><option>40</option><option>41</option><option>42</option><option>43</option><option>44</option><option>45</option><option>46</option><option>47</option><option>48</option><option>49</option><option>50</option><option>51</option><option>52</option><option>53</option><option>54</option><option>55</option><option>56</option><option>57</option><option>58</option><option>59</option><option>60</option>
					   </select>
					   ~
					   <input type="text" name="sc_txt" value="" class="sc_cd02">
					   <input type="button" name="sc_btn" value="" class="datepicker n02">
					   <select style="width:50px; background-position: 30px;">
						   <option>00</option><option>01</option><option>02</option><option>03</option><option>04</option><option>05</option><option>06</option><option>07</option><option>08</option><option>09</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option>
					   </select>
					   <select style="width:50px; background-position: 30px;">
						   <option>00</option><option>01</option><option>02</option><option>03</option><option>04</option><option>05</option><option>06</option><option>07</option><option>08</option><option>09</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option><option>32</option><option>33</option><option>34</option><option>35</option><option>36</option><option>37</option><option>38</option><option>39</option><option>40</option><option>41</option><option>42</option><option>43</option><option>44</option><option>45</option><option>46</option><option>47</option><option>48</option><option>49</option><option>50</option><option>51</option><option>52</option><option>53</option><option>54</option><option>55</option><option>56</option><option>57</option><option>58</option><option>59</option><option>60</option>
					   </select>
					   <label class="cb">
						 <input type="checkbox" class="sc_cb not" value="">
						 <span></span>
						 <p>기한없음</p>
					   </label>
					   <span class="color" style="margin-left:30px;">* 기한없음 체크 시 상품마감 수동처리</span>
				   </td>
			   </tr>
			   <tr class="vtrdb">
				   <th>게시상태</th>
				   <td class="cd_img02 clear" colspan="9">
					   <ul class="clear">
							<li>
								<label class="rdb">
									<input type="radio" name="rd2" checked="">
									<span></span>미노출
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd2">
									<span></span>노출
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd2" class="vtrdbh">
									<span></span>노출예약
								</label>
							</li>
						</ul>
					   <div>
					   	   <input type="text" name="sc_txt" value="" class="sc_cd03 on">
						   <input type="button" name="sc_btn" value="" class="datepicker n03">
						   <select style="width:50px; background-position: 30px;" class="on">
							   <option>00</option><option>01</option><option>02</option><option>03</option><option>04</option><option>05</option><option>06</option><option>07</option><option>08</option><option>09</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option>
						   </select>
						   <select style="width:50px; background-position: 30px;" class="on">
							   <option>00</option><option>01</option><option>02</option><option>03</option><option>04</option><option>05</option><option>06</option><option>07</option><option>08</option><option>09</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option><option>32</option><option>33</option><option>34</option><option>35</option><option>36</option><option>37</option><option>38</option><option>39</option><option>40</option><option>41</option><option>42</option><option>43</option><option>44</option><option>45</option><option>46</option><option>47</option><option>48</option><option>49</option><option>50</option><option>51</option><option>52</option><option>53</option><option>54</option><option>55</option><option>56</option><option>57</option><option>58</option><option>59</option><option>60</option>
						   </select>
					   </div>
				   </td>
			   </tr>
			   <tr>
				   <th>배너이미지 <span class="color">*</span></th>
				   <td class="imgbox_wrap" colspan="9">
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
							<span class="color fl_txtm">* 1장만 등록 가능합니다.</span>
				   		</div>
				   </td>
			   </tr>
			   <tr>
				   <th>영상</th>
				   <td colspan="9">
					   <div style="margin:10px 0;"><input type="url" value="" placeholder="네이버TV 영상URL" style="width:70%;"></div>
					   <div>
						   <span class="color">
						   	* 네이버 TV 영상 URL만 가능합니다.<br><br>
						   	&lt; 입력방법 &gt;<br>
						   	1) 네이버 TV 공유버튼 클릭<br>
						   	2) 코드 &gt; URL 복사 iframe src="[복사할 URL(따옴표 안 URL전부)]"<br>
						   	3) 단축URL로 변환(goo.gl, bit.ly..등)<br>
						   	4) URL의 도메인을 http -&gt; https로 수정<br><br>
						   </span>
					   </div>
				   </td>
			   </tr>
			   <tr>
				   <th>본문이미지</th>
				   <td class="imgbox_wrap" colspan="9">
				   		<div class="file_wrap">
							<div class="upload-btn_wrap">
								<button type="button" title="찾아보기버튼">
									<span>첨부하기</span>
								</button>
								<input type="file" class="input_file" title="파일찾기" multiple="">
							</div>
							<ul class="imgbox_ftxt">
								<li>
									<input type="text" class="upload_text" title="파일명" readonly="readonly">
								</li>
							</ul>
							<span class="color fl_txtm">* 5장 까지 등록 가능하며, 첨부한 순서대로 등록됩니다.</span>
				   		</div>
				   </td>
			   </tr>
			   <tr>
				   <th>본문상세설명</th>
				   <td class="textarea_wp" colspan="9">
				   	<textarea name="list02_txt" value="" placeholder="1000자까지 입력가능" maxlength="1000" style="width:907px; height: 100px;"></textarea>
				   </td>
			   </tr>
			   <tr class="vttxt">
				   <th>구매버튼 연결<br>URL</th>
				   <td colspan="9">
					   <ul class="clear" style="float: left;">
							<li>
								<label class="rdb">
									<input type="radio" name="rd3" checked="">
									<span></span>미사용
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd3" class="bttxth">
									<span></span>사용
								</label>
							</li>
						</ul>
				   	<input type="url" value="" placeholder="고도몰 상품 상세페이지 URL, 밴드 URL 등" style="width:70%; float: left; margin-top:13px;" class="on">
				   </td>
			   </tr>
			   <tr>
				   <th>댓글</th>
				   <td colspan="9">
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
				<li><a href="#" onclick="return false">취소</a></li>
				<li class="revise_pt"><a href="#" onclick="return false">수정</a></li>
			</ul>
    	</div>
    </div>
    
<!--    footer연결-->
    <?php include "footer.php"; ?>
<!--    footer연결-->

</body>
</html>