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

  

<img src="..." class="img-polaroid">
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
