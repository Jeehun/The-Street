<!DOCTYPE html>
<html lang="kor" >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="대학가/거리/시장의 상권 정보 제공 및 소상공인 무료 모두 홈페이지 제작/관리/교육 싸이트 '그 거리 뭐 있소'">
  <meta name="viewport" content="widht=deveice-width,initial-scale=0.6">
  <title> 그 거리 뭐 있소? </title>
  <link rel="stylesheet" type="text/css" href="style.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

    <script type="text/javascript">
             var tmp1, tmp2;
             function Univ_Choice(e){
              if(e.options[e.selectedIndex].value) {
                tmp1 = e.options[e.selectedIndex].text;
                tmp2 = e.options[e.selectedIndex].value;
                alert(tmp1);
              }else{
                temp1 ='가천대학교';
              }
             }
    </script>
    <script type="text/javascript">

      function fn_street_cate01(e){
        console.log(e);
        var loc = e+'.php';
        location.href = loc+'?tmp1='+tmp1;

    }

    </script>

</head>


<body >
  <header>
    <div id="header">
        <div class="container-fluid">
          <div class="row-fluid">
                <div class="span1"><img src="..." class="img-rounded"/></div>
                <div class="span1 offset7">
                  <?php
                  if(isset($_SESSION['user_name'])){
                    echo $_SESSION['user_name'].'님';
                  }else{
                    echo '<a href="login.php">로그인</a></div>';
                  }?>
                <div class="span1"><a href="signup.php">회원가입</div>
                <div class="span1">사장님 페이지</div>
            </div>
        </div>
    </div>
    <section class="tp-area" >
       <div class="row-fluid">
         <h1><a href="index.php" class="ir-el">그거리뭐있소</a></h1>
       </div>
       <div class="row-fluid">
         <div class="span2">
           <select class="select_univ" onchange="Univ_Choice(this);">
             <?php
               require_once('connectvars.php');
               $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
               $query = "SELECT Univ_Name FROM univ ORDER BY Univ_Name ASC";
               $data= mysqli_query($dbc, $query);
               while($result = mysqli_fetch_array($data)){
                 echo '<option>'.$result['Univ_Name'].'</option><br/>';
               }
               mysqli_close($dbc);
               ?>
            </select>
            </div>
            <div class="span3">
            <div class="input-append">
              <input class="span10" id="appendedInputButton" placeholder="상호명검색" type="text">
              <button class="btn" type="button">Go!</button>
            </div>
          </div>
          </div>



    </section>
  </header>
