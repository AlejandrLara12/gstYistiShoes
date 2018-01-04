<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Log in</title>
</head>
<body>
<?php
  session_start(); 
  if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $username = $_GET['username'];
    $pass = $_GET['pass'];
  }
?>
  <?php
    session_start();
    if(isset($_GET['btnLogin'])){
      require('./php/conn.php');
      $username = $_GET['username'];
      $pass = $_GET['pass'];
      // "SELECT * FROM `testUser`  WHERE username='".$username."' AND pass='".$pass."'";
      $query = "SELECT * FROM `testUser`  WHERE username='".$username."' AND pass='".$pass."'";
      // echo $query;
      $result = mysqli_query($conn, $query);
      echo $result;
      // mysql_num_rows($result) ==
      // mysql_num_fields($result) == 1
      if( mysql_num_rows($result) == 1){
        echo 'Loaded account Successfully';
        $_SESSION['username'] = $username;
        // header('location: welcome.php');
      } else {
        echo 'Invalid account or password';
      }
      mysqli_query($conn, $query);
    }
  ?>

  <form>
    <input type="text"      name="username" id="username"   placeholder="username">
    <input type="password"  name="pass"     id="pass"       placeholder="password">
    <input type="submit"    name="btnLogin" id="btnLogin"   value="login">
  </form>

  <script src="./js/jquery.js"></script>
  <script src="./js/main.js"></script>
  <script>
    $(document).ready(function() {
     $("#myForm").submit(function(event){
        event.preventDefault();
        var username = $("#signup-username").val();
        var pwd = $("#signup-pwd").val();
        $(".form-message").load("includes/user-signup.inc.php",{
            username: username,
            pwd: pwd
        });
      });
    });
  </script>
</body>
</html>