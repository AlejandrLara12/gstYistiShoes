<?php 
  /* Main page with two forms: sign up and log in */
  session_start();
  /* Database connection settings */
  $host = '188.121.44.189';
  $user = 'YistiShoesUsr';
  $pass = 'YistiShoesUsr968574';
  $db = 'YistiShoesDB';

  $conn = new mysqli($host,$user,$pass,$db);

  if(!$conn){
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    die($conn->error);
  }
  ?>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- title -->
      <title>Login</title>
      
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    </head>
    <body>
  <?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['btnLogin'])) { //user logging in
            // Escape email to protect against SQL injections
            $userAcc = $conn->escape_string($_POST['userAcc']);
            $result = $conn->query("SELECT YSU_userAccount,YSU_userPass,YSU_userName,YSU_userEmbId,YSU_userHash,YSU_userPermiso,YSU_userPictureUrl,YSU_active FROM YistiShoes_Users WHERE YSU_userAccount='$userAcc'");

            if ( $result->num_rows == 0 ){ // User doesn't exist
                $_SESSION['message'] = "Cuenta de usuario no existe";
                $_SESSION['errorMessageColor'] = "danger";
                header("location: ./error.php");
            }
            else { // User exists
                $user = $result->fetch_assoc();
                if ( password_verify($_POST['userPass'], $user['YSU_userPass']) ) {
                    
                    $_SESSION['userAcc']        = $user['YSU_userAccount'];
                    $_SESSION['userName']       = $user['YSU_userName'];
                    $_SESSION['userEmbPointer'] = $user['YSU_userEmbId'];
                    $_SESSION['userHash']       = $user['YSU_userHash'];
                    $_SESSION['userPermiso']    = $user['YSU_userPermiso'];
                    $_SESSION['userPictureUrl'] = $user['YSU_userPictureUrl'];
                    $_SESSION['userActive']     = $user['YSU_active'];
                    
                    // This is how we'll know the user is logged in
                    $_SESSION['userLoggedIn'] = true;
                    echo 'Loged in';
                    header("location: ./profile.php");
                }
                else {
                    $_SESSION['message'] = "Constraseña incorrecta, intente de nuevo";
                    $_SESSION['errorMessageColor'] = "warning";
                    echo 'Wrong passwd';
                    header("location: ./error.php");
                }
            }
            
        } 
    }
    echo  'Session: '; print_r($_SESSION);
  ?>



  <div class="container  col-sm-8 col-md-6 col-lg-4 pt-5">
    <form class="form-signin" action="login.php" method="post" autocomplete="off">
      <h1 class="form-signin-heading">YistiShoes</h1>
      <div class="form-group">
        <label for="exampleInputEmail1">Cuenta de Usuario</label>
        <input type="text" required class="form-control" name="userAcc" aria-describedby="usernameHelp" placeholder="">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Contraseña</label>
        <input type="password" required class="form-control" name="userPass" placeholder="">
      </div>
      <button type="submit" class="btn btn-primary" name="btnLogin">Iniciar sesión</button>
    </form>
  </div>
    
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  </body>
</html>