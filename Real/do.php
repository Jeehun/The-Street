<?php
  require_once('header.php');
  require_once('connectvars.php');
  require_once('appvars.php');

  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
  or die('DB 연결 Error1-1');
  $Univ_Name = trim($_GET['tmp1']);

  $query = "SELECT Univ_Code FROM univ WHERE Univ_Name = '$Univ_Name'";
  $data = mysqli_query($dbc, $query) or die('Error1-2 query실행');

  while($result = mysqli_fetch_array($data)){

  $Univ_Code = trim($result['Univ_Code']);
  }


  $query = "SELECT Store_Name, Store_Picture FROM univ_store WHERE Univ_Code = '$Univ_Code' and Category_01 = '통거리'";
  $data = mysqli_query($dbc,$query) or die('Error1-3 query실행');

  echo '<div class="container">';
  echo '<ul class="thumbnails">';
  while($result2 = mysqli_fetch_array($data)){
  ?>
    <li class="span3">
      <div class="thumbnail">
        <img src="<?php echo IMAGE_PATH.$Univ_Name.'/'.$result2['Store_Picture'].'.png';?>" width="150" height="300" alt="이미지"
         class = "store_pic">
        <h4><?php echo trim($result2['Store_Name']); ?></h4>
        <p>Thumbnail caption...</p>
      </div>
    </li>
  <?php
  }
  echo '</ul>';
  echo '</div>';
  mysqli_close($dbc);
 ?>






 <?php
 require_once('footer.php');
  ?>
