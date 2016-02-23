<?php
  // 세션 시작
  require_once('startsession.php');

  // 헤더페이지 삽입하기
  $page_title = '그 거리 뭐 있소?';
  require_once('header.php');

  //디비 연결
  require_once('appvars.php');
  require_once('connectvars.php');


  ?>
  <body style="overflow: hidden; height: 100%;">

      <div id="header">
        <div class="header_wrap">
        <ul class="gnb">
          <li class="menu1"><a href="#" class="sp" title="우리소개" onclick="clickcr(this,'gnb.look','','',event)">
            <span class="blind"><img src="images/무아지경 소개.png" width="140" height="50"/></span></a>
          <li class="menu2"><a href="#" class="sp" title="App사용방법" onclick="clickcr(this,'gnb.start','','',event)">
            <span class="blind">App사용방법</span></a>
          <li class="menu3"><a href="#" class="sp" title="영상"  onclick="clickcr(this,'gnb.inform','','',event)">
            <span class="blind">영상</span></a>
        </ul>

        <ul class="gnb_wrap">
        <li><a href="#" onclick="openLayer('gnb-mem');return false;" >로그인</a> <em>|</em></li>
        <li><a href="#" >회원가입</a> <em>|</em></li>
        <li><a href="#" >고객센터</a></li>
        </ul>
      </div>
      <div class="">
        <fieldset class="header-loc">
				<legend class="sr-only">위치설정</legend>
				<div class="set-loc" onclick="toggleLayer('dong-srch','drop-down');return false;">
				<em>내위치 :</em>
				<span class="addr text-ellipsis" id="locText">서울 송파구 석촌동</span> <!-- 선택된 위치 노출 -->
				<span class="drop-down fold visibleicon">위치설정</span>

        <fieldset class="header-search cate-srch">
			  <legend class="sr-only">검색</legend>
			  <!-- 키워드 검색 필드 : S -->
			  <div class="input-group srch">
				<input type="text" class="form-control" id="sch_kwd" style="ime-mode:inactive" onkeypress="evtKeyPress(event)" placeholder="업소명을 검색해주세요">
				<span class="input-group-btn">
					<button type="button" class="btn" onclick="fn_sch_kwd(); return false;">검색</button>
				</span>
			</div><!--/.srch -->
			</fieldset>
			</div>

			<!-- 현재위치 검색 : S -->
			<div class="dong-srch visible" style="display: block;">
				<fieldset>
					<p class="noti">현재 설정된 주소가 맞지 않으신가요?<br>동명을 검색해서 다시 설정해주세요.</p>
					<input type="search" class="form-control" id="sch_addr" onkeyup="evtKeyUp(event)" onkeypress="evtKeyPress(event)" placeholder="동명을 입력하세요">
					<button type="button" onclick="fn_schAddr();">찾기</button>
				</fieldset>
				<!-- 결과 : S -->
				<div id="addrlist" class="small"></div>
				<div class="set-current-loc">
					<button type="button" class="btn btn-block btn-set-loc" onclick="fn_current_loc_set(); fn_send_ga('Location', 'Auto_Set','');return false;"><em>-</em>현재위치 자동검색</button>
				</div>
			</div> <!--/.dong-srch -->
			</fieldset>
      </div>
    </div>


         <div class="tp-area" >
            <div class="logo">
              <span class="align_center">
              <img src="images/Logo_01.png" alt="로고 이미지" width="300" height="200" />
            </div>
         </div>

         <div class="cont masonry" style="position: relative; height: 550px; width: 960px;">
           <div class="boxm col1 masonry-brick" onclick="fn_sch_kw('먹거리');" style="position: absolute; top: 60px; left: 240px;">
 				<div class="food street">

 					<div class="default"><img src="images/먹거리.png" alt="먹거리" /></div>
 				</div>
 			</div>
      <div class="boxm col1 masonry-brick" onclick="fn_sch_kw('놀거리');" style="position: absolute; top: 60px; left: 480px;">
				<div class="play street">

					<div class="default"><img src="images/놀거리.png" alt="놀거리" /></div>
				</div>
			</div>
      <div class="boxm col1 masonry-brick" onclick="fn_sch_kw('살거리');" style="position: absolute; top: 60px; left: 720px;">
				<div class="cutter pizza">

					<div class="default"><img src="images/살거리.png" alt="살거리" /></div>
				</div>
			</div>
      <div class="boxm col1 masonry-brick" onclick="fn_sch_kw('통거리');" style="position: absolute; top: 60px; left: 960px;">
				<div class="cutter korean">

					<div class="default"><img src="images/통거리.png" alt="통거리" /></div>
				</div>
			</div>
         	</div>


<?php
require_once('footer.php');
?>
