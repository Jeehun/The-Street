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
<script type="text/javascript">

  function fn_street_cate01(e){
    console.log(e);
    var loc = '../prac03/'+e+'.php';
    window.open(loc,'_self');
}

</script>
<img src="..." class="img-rounded">
     <div class="container-fluid" style="position: relative; height: 550px; top:200px;">
       <div class="row-fluid">
         <div class="span3">
           <a href="#" class="thumbnail" id=>
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
             <img src="images/살거리.png" alt="" onclick="fn_street_cate01('살거리');">
           </a>
       </div>
       <div class="span3">
           <a href="#" class="thumbnail">
             <img src="images/통거리.png" alt="" onclick="fn_street_cate01('할거리');">
           </a>
		    </div>
      </div>
    </div>
<?php
require_once('footer.php');
?>
