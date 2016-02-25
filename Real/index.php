<?php
  // 세션 시작
  require_once('startsession.php');

  //디비 연결
  require_once('appvars.php');
  require_once('connectvars.php');


  // 헤더페이지 삽입하기
  $page_title = '그 거리 뭐 있소?';
  require_once('header.php');

?>

<body>

<img src="..." class="img-rounded">
     <div class="container-fluid" style="position: relative; height:480px; top:200px;">
       <div class="row-fluid">
         <div class="span3" id="food">
           <a href="#" class="thumbnail" id="food">
             <img src="images/먹거리.png" alt="" onclick="fn_street_cate01('food');">
           </a>
           </div>
        <div class="span3">
           <a href="#" class="thumbnail">
             <img src="images/놀거리.png" alt="" onclick="fn_street_cate01('play');">
           </a>
        </div>
       <div class="span3">
           <a href="#" class="thumbnail">
             <img src="images/살거리.png" alt="" onclick="fn_street_cate01('buy');">
           </a>
       </div>
       <div class="span3">
           <a href="#" class="thumbnail">
             <img src="images/통거리.png" alt="" onclick="fn_street_cate01('do');">
           </a>
		    </div>
      </div>
    </div>
<?php
require_once('footer.php');
?>
