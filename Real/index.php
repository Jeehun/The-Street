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
  <!-- 네이버 지도 키 값 -->
  <script type="text/javascript" src="http://openapi.map.naver.com/openapi/v2/maps.js?clientId=<?=$clientId?>"></script>
  <!-- 지도 출력 -->
  <div id='map_map' style="position:relative; left:0; top:0;"></div>

  <script type="text/javascript">
  var oPoint = new nhn.api.map.LatLng( 37.49236, 127.0307201);
  nhn.api.map.setDefaultPoint('LatLng');
  oMap = new nhn.api.map.Map('map_map' ,{
    point : oPoint,
    zoom : 10,
    enableWheelZoom : true,
    enableDragPan : true,
    enableDblClickZoom : false,
    mapMode : 0,
    activateTrafficMap : false,
    activateBicycleMap : false,
    minMaxLevel : [ 1, 14 ],
    size : new nhn.api.map.Size(500,500)
  });
  var sIcon = new nhn.api.map.Icon("/img/map_icon.png", new nhn.api.map.Size(40,40) );
  var oMarker1 = new nhn.api.map.Marker(sIcon , {
   point: new nhn.api.map.LatLng( 37.49236, 127.0307201)
  });
  oMap.addOverlay(oMarker1);
  </script>
  [출처] [Naverapi]네이버 지도 api 신버전 |작성자 수호아빠<!-- 네이버 지도 키 값 -->
<script type="text/javascript" src="http://openapi.map.naver.com/openapi/v2/maps.js?clientId=<?=$clientId?>"></script>
<!-- 지도 출력 -->
<div id='map_map' style="position:relative; left:0; top:0;"></div>

<script type="text/javascript">
var oPoint = new nhn.api.map.LatLng( 37.49236, 127.0307201);
nhn.api.map.setDefaultPoint('LatLng');
oMap = new nhn.api.map.Map('map_map' ,{
  point : oPoint,
  zoom : 10,
  enableWheelZoom : true,
  enableDragPan : true,
  enableDblClickZoom : false,
  mapMode : 0,
  activateTrafficMap : false,
  activateBicycleMap : false,
  minMaxLevel : [ 1, 14 ],
  size : new nhn.api.map.Size(500,500)
});
var sIcon = new nhn.api.map.Icon("/img/map_icon.png", new nhn.api.map.Size(40,40) );
var oMarker1 = new nhn.api.map.Marker(sIcon , {
 point: new nhn.api.map.LatLng( 37.49236, 127.0307201)
});
oMap.addOverlay(oMarker1);
</script>

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
