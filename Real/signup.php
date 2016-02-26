<?php
  // Insert the page header
  $page_title = 'Sign Up';
  require_once('header.php');

  require_once('appvars.php');
  require_once('connectvars.php');

  // Connect to the database
  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

  if (isset($_POST['submit'])) {
    // Grab the profile data from the POST
    $user_id = mysqli_real_escape_string($dbc, trim($_POST['user_id']));
    $password1 = mysqli_real_escape_string($dbc, trim($_POST['password1']));
    $password2 = mysqli_real_escape_string($dbc, trim($_POST['password2']));
    $user_name = mysqli_real_escape_string($dbc, trim($_POST['user_name']));
    $user_email = mysqli_real_escape_string($dbc, trim($_POST['user_email']));
    $user_phone = mysqli_real_escape_string($dbc, trim($_POST['user_phone']));

    if (!empty($user_id) && !empty($password1) && !empty($password2) && ($password1 == $password2)
    && !empty($user_name) && !empty($user_email) && !empty($user_phone)) {
      // Make sure someone isn't already registered using this username
      $query = "SELECT * FROM user_info WHERE user_id = '$user_id'";
      $data = mysqli_query($dbc, $query);
      if (mysqli_num_rows($data) == 0) {
        // The username is unique, so insert the data into the database
        $query = "INSERT INTO user_info (user_id, user_pw, user_name, user_phone, user_email, signup_date)
        VALUES ('$user_id', SHA('$password1'),'$user_name','$user_phone','$user_email', NOW())";
        mysqli_query($dbc, $query);

        // Confirm success with the user
        echo '<p>Your new account has been successfully created. You\'re now ready to <a href="login.php">
          로그인 화면가기</a>.</p>';

        mysqli_close($dbc);
        exit();
      }
      else {
        // An account already exists for this username, so display an error message
        echo '<p class="error">An account already exists for this username. Please use a different address.</p>';
        $username = "";
      }
    }
    else {
      echo '<p class="error">You must enter all of the sign-up data, including the desired password twice.</p>';
    }
  }

  mysqli_close($dbc);
?>

  <p>Please enter your username and desired password to sign up to Mismatch.</p>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <fieldset>
      <legend>Registration Info</legend>
      <label for="user_id">아이디:</label>
      <input type="text" id="user_id" name="user_id" value="<?php if (!empty($username)) echo $username; ?>" /><br />
      <label for="password1">비밀번호:</label>
      <input type="password" id="password1" name="password1" /><br />
      <label for="password2">비밀번호(확인) (retype):</label>
      <input type="password" id="password2" name="password2" /><br />
      <label for="user_name">이름</label>
      <input type="text" name="user_name"  placeholder="박지훈">
      <label for="user_phone">전화번호</label>
      <input type="text" name="user_phone" placeholder="010-1234-5678">
      <label for="user_email">이메일</label>
      <input type="email" name="user_email" placeholder="abcd@naver.com">
    </fieldset>
    <input type="submit" value="가입하기" name="submit" />
  </form>

<?php
  // Insert the page footer
  require_once('footer.php');
?>
