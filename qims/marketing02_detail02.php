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
</head>
<body>
   
<!--   gnb/snb연결-->
  	<?php include "gnb.php"; ?>
    <?php include "snb.php"; ?>
<!--   gnb/snb연결-->

  
   <div id="wrap">
   	   <h1>메인 우리동네 광고관리</h1>
	   <ul class="title clear">
			<li></li>
			<li>메인 우리동네 광고상세</li>
		</ul>
	   <div class="mk02_01" style="position: relative;">
		   <ul class="tb01_top clear">
			   <li>기본정보</li>
			   <li style="float: right;"><input type="button" value="광고영역 미리보기" class="btn03" style="width:150px;"></li>
		   </ul>
		   <table class="tb01">
				<tr>
					<th>광고서비스</th>
					<td colspan="3">메인 우리동네 광고</td>
				</tr>
				<tr>
					<th>광고명 <span class="color">*</span></th>
					<td style="width:40%">
						<input type="text" name="tb_txt" value="메인 우리동네_주마 내부광고" placeholder="40자까지 입력 가능" maxlength="40" style="width:90%">
					</td>
					<th>광고주 <span class="color">*</span></th>
					<td>
						<ul class="number_check clear">
							<li>
								<label class="rdb">
									<input type="radio" name="rd1" checked="">
									<span></span>본사
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd1">
									<span></span>업체
								</label>
								<input type="text" name="tb_txt" value="" placeholder="업체명 입력" style="width:200px" class="on">
							</li>
						</ul>
					</td>
				</tr>
				<tr>
					<th>사용여부</th>
					<td colspan="3">
						<ul class="clear">
							<li>
								<label class="rdb">
									<input type="radio" name="rd2">
									<span></span>미사용
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd2" checked="">
									<span></span>사용
								</label>
							</li>
						</ul>
					</td>
			   </tr>
		   </table>
		   <ul class="tb01_top clear">
			   <li>노출기간 및 예산</li>
		   </ul>
			<table class="tb01 sc">
				<tr>
					<th>기간 <span class="color">*</span></th>
					<td class="cd_img clear cb_l pd10-20" colspan="3">
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
					   <label class="cb">
						 <input type="checkbox" class="sc_cb not02" value="">
						 <span></span>
						 <p>기한없음</p>
					   </label>
						<span class="data_btn clear">
						   <li>7일</li>
						   <li>15일</li>
						   <li>1개월</li>
						   <li>3개월</li>
						   <li>6개월</li>
						   <li>1년</li>
					   </span>
					</td>
				</tr>
				<tr>
					<th>요일 <span class="color">*</span></th>
					<td class="mk_datachecked">
						<label class="cb allcb">
							 <input type="checkbox" class="sc_cb" value="">
							 <span></span>
							 <p>매일</p>
						</label>
						<label class="cb">
							 <input type="checkbox" class="sc_cb" value="">
							 <span></span>
							 <p>월</p>
						</label>
						<label class="cb">
							 <input type="checkbox" class="sc_cb" value="">
							<span></span>
							<p>화</p>
						</label>
						<label class="cb">
							 <input type="checkbox" class="sc_cb" value="">
							<span></span>
							<p>수</p>
						</label>
						<label class="cb">
							 <input type="checkbox" class="sc_cb" value="">
							<span></span>
							<p>목</p>
						</label>
						<label class="cb">
							 <input type="checkbox" class="sc_cb" value="">
							<span></span>
							<p>금</p>
						</label>
						<label class="cb">
							 <input type="checkbox" class="sc_cb" value="">
							<span></span>
							<p>토</p>
						</label>
						<label class="cb">
							 <input type="checkbox" class="sc_cb" value="">
							<span></span>
							<p>일</p>
						</label>
					</td>
				</tr>
				<tr>
					<th>주기/빈도</th>
					<td class="pd10-20 tg_btn_wp">
						<span class="row row-main toggle-switch tg_btn01" style="display: inline-block; vertical-align: middle;">
							<div class="col-lg-12" style="display: inline-block; vertical-align: middle;">
								<div class="switch">
									<input id="cmn-toggle-1" class="cmn-toggle cmn-toggle-round" type="checkbox">
									<label for="cmn-toggle-1"></label>
									</div>

									<div class="switch">
									<input id="cmn-toggle-4" class="cmn-toggle cmn-toggle-round-flat" type="checkbox">
									<label for="cmn-toggle-4"></label>
									</div>

									<div class="switch">
									<input id="cmn-toggle-7" class="cmn-toggle cmn-toggle-yes-no" type="checkbox">
									<label for="cmn-toggle-7" data-on="Yes" data-off="No"></label>
								</div>
							</div>
							일일 노출주기
						</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<label class="cb mgl0"><input type="checkbox" class="sc_cb" value=""><span></span><p>00:00 ~ 06:00</p></label>
						<label class="cb"><input type="checkbox" class="sc_cb" value=""><span></span><p>06:00 ~ 12:00</p></label>
						<label class="cb"><input type="checkbox" class="sc_cb" value=""><span></span><p>12:00 ~ 18:00</p></label>
						<label class="cb"><input type="checkbox" class="sc_cb" value=""><span></span><p>18:00 ~ 24:00</p></label>
						&nbsp;&nbsp;<span class="color">* 노출기간 내 설정 주기에 랜덤하게 노출됩니다.</span><br/><br/>
						<span class="row row-main toggle-switch tg_btn02" style="display: inline-block; vertical-align: middle;">
							<div class="col-lg-13" style="display: inline-block; vertical-align: middle;">
								<div class="switch">
									<input id="cmn-toggle-2" class="cmn-toggle cmn-toggle-round" type="checkbox">
									<label for="cmn-toggle-2"></label>
									</div>

									<div class="switch">
									<input id="cmn-toggle-5" class="cmn-toggle cmn-toggle-round-flat" type="checkbox">
									<label for="cmn-toggle-5"></label>
									</div>

									<div class="switch">
									<input id="cmn-toggle-8" class="cmn-toggle cmn-toggle-yes-no" type="checkbox">
									<label for="cmn-toggle-8" data-on="Yes" data-off="No"></label>
								</div>
							</div>
							일일 노출 빈도수
						</span>&nbsp;&nbsp;&nbsp;
						 총 <input type="number" name="tb_txt" value="" placeholder="숫자 입력" style="width:100px"> 회
						&nbsp;&nbsp;<span class="color">* 노출기간 내 설정 빈도수 만큼 랜덤하게 노출되며, 노출수를 100% 보장하지 않습니다.</span><br/><br/>
					</td>
				</tr>
				<tr>
					<th>광고예산 <span class="color">*</span></th>
					<td class="pd10-20">
						<label class="rdb">
							<input type="radio" name="rd3" checked="">
							<span></span>예산차감
						</label>&nbsp;&nbsp;&nbsp;
						<span class="color">* 기간종료 또는 예산 소진 시 자동 종료됩니다.</span>

						<div class="qd-box-gray-pd10" style="background-color: #f7f7f7;">
							<p><span class="mgr10">금액</span> <input type="number" name="tb_txt" value="" placeholder="숫자 입력" style="width:150px"> 원</p>
							<p>
								<span class="mgr10">단가</span> 
								<label class="rdb">
									<input type="radio" name="rd4">
									<span></span>1회 노출단가
								</label>
								<input type="number" name="tb_txt" value="" placeholder="숫자 입력" style="width:150px"> 원
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<label class="rdb">
									<input type="radio" name="rd4">
									<span></span>1회 클릭단가
								</label>
								<input type="number" name="tb_txt" value="" placeholder="숫자 입력" style="width:150px"> 원
							</p>
						</div>

						<label class="rdb">
							<input type="radio" name="rd3">
							<span></span>미설정
						</label>&nbsp;&nbsp;&nbsp;
						<span class="color">* 본사 내부광고 또는 광고주와 별도 계약으로 협의된 금액이 있을 경우 단순 내부관리용 금액을 입력할 수 있습니다.</span>

						<div class="qd-box-gray-pd10" style="background-color: #f7f7f7;">
							<p><span class="mgr10">금액</span> <input type="number" name="tb_txt" value="" placeholder="숫자 입력" style="width:150px"> 원</p>
						</div>
					</td>
				</tr>
			</table>
		   <ul class="tb01_top clear">
			   <li>타겟설정</li>
		   </ul>
			<table class="tb01">
				<tr>
					<th>지역 <span class="color">*</span></th>
					<td class="nm">
						<ul class="clear">
							<li>
								<label class="rdb">
									<input type="radio" name="rd4">
									<span></span>미설정
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd4" checked="">
									<span></span>설정
								</label>
							</li>
							<li style="padding-top:14px;">
								<a class="qd-btn sml" href="#none">지역선택</a>
								<span class="color">* 해당 지역이 ‘우리동네’로 설정 되어있는 회원에게 노출됩니다. (필수)</span>
							</li>
						</ul>
				   		<ol class="upper-roman none_nm clear">
							<li>&nbsp;<b>KB우준타워</b> <a class="qd-btn sml mgl5" href="#none">삭제</a></li>
							<li>&nbsp;<b>애플타워</b> <a class="qd-btn sml mgl5" href="#none">삭제</a></li>
							<li>&nbsp;<b>강남구</b> <a class="qd-btn sml mgl5" href="#none">삭제</a></li>
						</ol>
					</td>
				</tr>
				<tr>
					<th>카테고리</th>
					<td class="nm">
						<ul class="clear">
							<li>
								<label class="rdb">
									<input type="radio" name="rd5" checked="">
									<span></span>미설정
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd5">
									<span></span>설정
								</label>
							</li>
							<li style="padding-top:14px;">
								<a class="qd-btn sml" href="#none">카테고리 선택</a>
								<span class="color">* 해당 카테고리가 ‘마이태그’로 설정 되어있는 회원에게 노출됩니다.</span>
							</li>
						</ul>
					</td>
				</tr>
				<tr>
					<th>키워드</th>
					<td class="nm">
						<ul class="clear mkrbbutton">
							<li>
								<label class="rdb">
									<input type="radio" name="rd6">
									<span></span>미설정
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd6" checked="">
									<span></span>설정
								</label>
							</li>
							<li style="padding-top:14px;">
								<input type="text" value="" placeholder="띄어쓰기 없이 입력 (최대 20자)" style="width:200px;" maxlength="20">
								<input type="button" value="추가" class="btn03" style="width:60px;">
								<span class="color">* 해당 카테고리가 ‘마이태그’로 설정 되어있는 회원에게 노출됩니다.</span>
							</li>
						</ul>
						<ol class="upper-roman none_nm clear">
							<li>&nbsp;<b>중고가전</b> <a class="qd-btn sml mgl5" href="#none">삭제</a></li>
						</ol>
					</td>
				</tr>
				<tr>
					<th>성별</th>
					<td>
						<ul class="clear">
							<li>
								<label class="rdb">
									<input type="radio" name="rd7" checked="">
									<span></span>전체
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd7">
									<span></span>여성
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd7">
									<span></span>남성
								</label>
							</li>
						</ul>
					</td>
				</tr>
				<tr>
					<th>연령대 <span class="color">*</span></th>
					<td class="mk_datachecked">
						<label class="cb allcb">
							 <input type="checkbox" class="sc_cb" value="">
							 <span></span>
							 <p>전 연령</p>
						</label>
						<label class="cb">
							 <input type="checkbox" class="sc_cb" value="">
							 <span></span>
							 <p>10대(0-19세)</p>
						</label>
						<label class="cb">
							 <input type="checkbox" class="sc_cb" value="">
							<span></span>
							<p>20대</p>
						</label>
						<label class="cb">
							 <input type="checkbox" class="sc_cb" value="">
							<span></span>
							<p>30대</p>
						</label>
						<label class="cb">
							 <input type="checkbox" class="sc_cb" value="">
							<span></span>
							<p>40대</p>
						</label>
						<label class="cb">
							 <input type="checkbox" class="sc_cb" value="">
							<span></span>
							<p>50대</p>
						</label>
						<label class="cb">
							 <input type="checkbox" class="sc_cb" value="">
							<span></span>
							<p>60대 이상</p>
						</label>
					</td>
				</tr>
				<tr>
					<th>회원등급 <span class="color">*</span></th>
					<td class="mk_datachecked">
						<label class="cb allcb">
							 <input type="checkbox" class="sc_cb" value="">
							 <span></span>
							 <p>전체회원</p>
						</label>
						<label class="cb">
							 <input type="checkbox" class="sc_cb" value="">
							 <span></span>
							<p><i class="ico-mb ornge">O</i> ORANGE</p>
						</label>
						<label class="cb">
							 <input type="checkbox" class="sc_cb" value="">
							 <span></span>
							<p><i class="ico-mb slvr">S</i> SILVER</p>
						</label>
						<label class="cb">
							 <input type="checkbox" class="sc_cb" value="">
							<span></span>
							<p><i class="ico-mb gold">G</i> GOLD</p>
						</label>
						<label class="cb">
							 <input type="checkbox" class="sc_cb" value="">
							<span></span>
							<p><i class="ico-mb vip">V</i> VIP</p>
						</label>
					</td>
				</tr>
				<tr>
					<th>기기 <span class="color">*</span></th>
					<td>
						<ul class="clear">
							<li>
								<label class="rdb">
									<input type="radio" name="rd8" checked="">
									<span></span>전체
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd8">
									<span></span>App
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd8">
									<span></span>Web
								</label>
							</li>
						</ul>
					</td>
				</tr>
				<tr>
					<th>운영체제</th>
					<td>
						<ul class="clear">
							<li>
								<label class="rdb">
									<input type="radio" name="rd9" checked="">
									<span></span>전체
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd9">
									<span></span>안드로이드
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd9">
									<span></span>iOS
								</label>
							</li>
						</ul>
					</td>
				</tr>
			</table>
		   <ul class="tb01_top clear">
			   <li>소재등록</li>
		   </ul>
			<table class="tb01">
				<tr>
					<th>이미지 <span class="color">*</span></th>
				    <td class="imgbox_wrap">
				   		<div class="file_wrap">
							<div class="upload-btn_wrap">
								<button type="button" title="찾아보기버튼">
									<span>첨부하기</span>
								</button>
								<input type="file" class="input_file" title="파일찾기">
							</div>
							<ul class="imgbox_ftxt">
								<li>
									<a href="#">
										<input type="text" class="upload_text" title="파일명" readonly="readonly">
									</a>
								</li>
							</ul>
				   		</div>
					    <div class="imgbox02">
							<ul class="clear">
								<li style="width:250px; height: 80px; line-height: 50px;">
									<p>img</p>
									<div class="ibtn btn01" style="top:50%;">삭제</div>
								</li>
							</ul>
					    </div>
					   <input type="button" value="이미지추가 +" class="btn03 img_more">
				    </td>
				</tr>
				<tr>
					<th>연결타입 <span class="color">*</span></th>
					<td class="pd10-20 nm">
						<ul class="clear">
							<li>
								<label class="rdb">
									<input type="radio" name="rd10" checked="">
									<span></span>스토어
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd10">
									<span></span>상품
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd10">
									<span></span>기획전
								</label>
							</li>
							<li>
								<label class="rdb">
									<input type="radio" name="rd10">
									<span></span>URL
								</label>
							</li>
						</ul>
						<a class="qd-btn" href="#none">스토어 선택</a>
						<a class="qd-btn" href="#none">상품 선택</a>
						<a class="qd-btn" href="#none">기획전 선택</a>
						<ol class="upper-roman none_nm clear" style="margin: 10px 0 5px 0;">
							<li style="list-style: none;">&nbsp;<b>(주)소보제화</b> <a class="qd-btn sml mgl5" href="#none">삭제</a></li>
						</ol>
					</td>
				</tr>
			</table>
		   <table class="tb01 last_th" style="margin-top:30px;">
			   <tr>
				   <th>노출수</th>
				   <td>20,510</td>
				   <th>노출회원수</th>
				   <td>18,212</td>
				   <th>클릭수</th>
				   <td>8,921</td>
				   <th>클릭회원수</th>
				   <td>18,212</td>
				   <th>등록일/등록자</th>
				   <td>2018-01-01 13:15<br>전혜윤 (서비스기획팀)</td>
				   <th>최근 수정일/수정자</th>
				   <td>2018-01-01 13:15<br>전혜윤 (서비스기획팀)</td>
			   </tr>
		   </table>
		   <div class="mk_posi">
			   <h5>
				   예상 타겟은<br><span>1,000</span> 명 미만입니다.
			   </h5>
		   </div>
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