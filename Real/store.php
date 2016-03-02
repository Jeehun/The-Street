<?php
  require_once('header.php');
  require_once('connectvars.php');
  require_once('appvars.php');

  $Store_Name=trim($_GET['store']);
  $Univ_Name= trim($_GET['univ']);
  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
  or die('DB 연결 Error1-1');


  $query = "SELECT Store_Picture FROM univ_store WHERE Store_Name = '$Store_Name'";
  $data = mysqli_query($dbc, $query) or die('Error1-2 query실행');
  $result = mysqli_fetch_array($data);
  ?>
  <ul class="thumbnails">
    <li class="span6">
      <div class="thumbnail">
        <img src="<?php echo IMAGE_PATH.$Univ_Name.'/'.$result['Store_Picture'].'.png';?>"  alt="사진자리">
  <?php
    $query = "SELECT * FROM store WHERE Store_Name = '$Store_Name'";
    $data = mysqli_query($dbc,$query) or die('Error1-3');
    $result2 = mysqli_fetch_array($data);

    echo '<h3>'.$result2['Store_Name'].'</h3><br/>';
    echo '<p>'.$result2['Store_Desc'].'</p><br/>';
    echo '<p>'.$result2['Store_Addr'].'</p><br/>';
    echo '</div>';
    echo '</li>';
    echo '</ul>';
   ?>

<div class="container-fluid">


  <div class="row-fluid">
  <div class="span3">
    <div class="thumbnail">
      <img src="<?php echo IMAGE_PATH.$Univ_Name.'/'.$result2['Store_Building_Picture_01'].'.png';?>" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
    <div class="span3">
    <div class="thumbnail">
      <img src="<?php echo IMAGE_PATH.$Univ_Name.'/'.$result2['Store_Building_Picture_02'].'.png';?>" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>

  </div>

    <div class="span3">
    <div class="thumbnail">
      <img src="<?php echo IMAGE_PATH.$Univ_Name.'/'.$result2['Store_Building_Picture_03'].'.png';?>" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>

  <div class="span3">
    <div class="thumbnail">
      <img src="<?php echo IMAGE_PATH.$Univ_Name.'/'.$result2['Store_Building_Picture_04'].'.png';?>" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>

</div>
</div>


<div class="row">
<div class="col-sm-6 col-md-4">
  <div class="thumbnail">
    <img src="<?php echo IMAGE_PATH.$Univ_Name.'/'.$result2['Store_Item_Picture_01'].'.png';?>" alt="...">
    <div class="caption">
      <h3><?php echo $result2['Store_Item_01']; ?></h3>
      <p>...</p>
      <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
    </div>
  </div>
</div>

<div class="col-sm-6 col-md-4">
  <div class="thumbnail">
    <img src="<?php echo IMAGE_PATH.$Univ_Name.'/'.$result2['Store_Item_Picture_02'].'.png';?>" alt="...">
    <div class="caption">
      <h3><?php echo $result2['Store_Item_02']; ?></h3>
      <p>...</p>
      <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
    </div>
  </div>
</div>



  <div class="thumbnail">
    <img src="<?php echo IMAGE_PATH.$Univ_Name.'/'.$result2['Store_Item_Picture_03'].'.png';?>" alt="...">
    <div class="caption">
      <h3><?php echo $result2['Store_Item_03']; ?></h3>
      <p>...</p>
      <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
    </div>
  </div>
</div>


<div class="col-sm-6 col-md-4">
  <div class="thumbnail">
    <img src="<?php echo IMAGE_PATH.$Univ_Name.'/'.$result2['Store_Item_Picture_04'].'.png';?>" alt="...">
    <div class="caption">
      <h3><?php echo $result2['Store_Item_04'] ; ?></h3>
      <p>...</p>
      <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
    </div>
  </div>
</div>
</div>


<?php
  require_once('footer.php');
 ?>
