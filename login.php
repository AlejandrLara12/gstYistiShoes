<?php 
  /* Main page with two forms: sign up and log in */
  session_start();
  require_once('db.php');
  require_once('./temps/_init.php');
  echo '<br>basedir: '.$basedir;
?>
  <?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['btnLogin'])) { //user logging in
            // Escape email to protect against SQL injections
            $userAcc = $conn->escape_string($_POST['userAcc']);
            $result = $conn->query("SELECT YSU_userAccount,YSU_userPass,YSU_userName,YSU_userEmbId,YSU_userHash,YSU_userPermiso,YSU_userPictureUrl,YSU_active FROM YistiShoes_Users WHERE YSU_userAccount='$userAcc'");

            if ( $result->num_rows == 0 ){ // User doesn't exist
                $_SESSION['message'] = "Cuenta de usuario no existe";
                $_SESSION['errorMessageColor'] = "danger";
                header('location: '.$basedir.'/error.php');
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
                    header('location: '.$basedir.'/profile.php');
                }
                else {
                    $_SESSION['message'] = "Constraseña incorrecta, intente de nuevo";
                    $_SESSION['errorMessageColor'] = "warning";
                    echo 'Wrong passwd';
                    header('location: '.$basedir.'/error.php');
                }
            }
            
        } 
      }
      echo  'Session: '; print_r($_SESSION);
    ?>



  <!-- html -->
  <div class="container  col-sm-8 col-md-6 col-lg-4 pt-5">
    <form class="form-signin" action="login.php" method="post" autocomplete="off">
      <h1 class="form-signin-heading">YistiShoes</h1>
      <div class="form-group">
        <label for="exampleInputEmail1">Cuenta de Usuario</label>
        <input type="text" required class="form-control" name="userAcc" aria-describedby="usernameHelp" placeholder="">
        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your info with anyone else.</small> -->
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Contraseña</label>
        <input type="password" required class="form-control" name="userPass" placeholder="">
      </div>
      <!-- <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input">
          Check me out
        </label>
      </div> -->
      <button type="submit" class="btn btn-primary" name="btnLogin">Iniciar sesión</button>
    </form>
  </div>
    
<?php require_once($basedir.'/temps/_end.php'); ?>