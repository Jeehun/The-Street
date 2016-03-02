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


  $query1 = "SELECT Store_Code, Store_Name, Store_Picture FROM univ_store WHERE Univ_Code = '$Univ_Code' and Category_01 = '먹거리'";
  $data1 = mysqli_query($dbc,$query1) or die('Error1-3 query실행');

  echo '<div class="container">';
  echo '<div class="row">';
  echo '<ul class="thumbnails">';
  while($result1 = mysqli_fetch_array($data1)){
    $query2 = "SELECT Store_Star, Store_Item_01, Store_Price_01, Store_Item_02, Store_Price_02 From store Where ".
    "Store_Code = ".$result1['Store_Code'];
    
    $data2 = mysqli_query($dbc,$query2) or die('Error1-4 쿼리 에러');
    $result2 = mysqli_fetch_array($data2 );
  ?>
    <li class="span3">
      <div class="thumbnail" >
        <a href="store.php?store=<?php echo $result1['Store_Name'].'&amp;univ='.$Univ_Name ?>">
        <img src="<?php echo IMAGE_PATH.$Univ_Name.'/'.$result1['Store_Picture'].'.png';?>" width="150" height="300" alt="이미지"
         class = "store_pic">
          <h4><?php echo trim($result1['Store_Name']); ?></h4>
        <p>
        <?php echo '평점 :'.trim($result2['Store_Star']).'<br/>';
        echo '메뉴1 :'.trim($result2['Store_Item_01']).'<br/>';
        echo '가격 :'.trim($result2['Store_Price_01']).'<br/>';
        echo '메뉴2 :'.trim($result2['Store_Item_02']).'<br/>';
        echo '가격 :'.trim($result2['Store_Price_02']).'<br/>';
        ?>
        </p>
        </a>
      </div>
    </li>
  <?php
  }
  echo '</ul>';
  echo '</div>';
  echo '</div>';
  mysqli_close($dbc);
 ?>






 <?php
 require_once('footer.php');
  ?>
