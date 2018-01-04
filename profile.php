<?php 
  /* Displays user information and some useful messages */
  session_start();
  include_once('./temps/_init.php');

  // Check if user is logged in using the session variable
  if ( $_SESSION['userLoggedIn'] != 1 ) {
    $_SESSION['message'] = "You must log in before viewing your profile page!";
    $_SESSION['errorMessageColor'] = "info";
    header("location: ./error.php");    
  }
  else {
      // Makes it easier to read
      $userAcc         = $_SESSION['userAcc'];
      $userName        = $_SESSION['userName'];
      $userEmbPointer  = $_SESSION['userEmbPointer'];
      $userHash        = $_SESSION['userHash'];
      $userPermiso     = $_SESSION['userPermiso'];
      $userPictureUrl  = $_SESSION['userPictureUrl'];
      $userActive      = $_SESSION['userActive'];
  }

  echo  'Session: '; print_r($_SESSION);
?>

  <div class="container form">
          <h1>Welcome</h1>
          <p>
            <?php 
              // Display message about account verification link only once
              if ( isset($_SESSION['message']) && $_SESSION['message'] != "Page not found" ) {
                  echo $_SESSION['message'];
                  // Don't annoy the user with more messages upon page refresh
                  unset( $_SESSION['message'] );
              }
            ?>
          </p>
          
          <?php 
            if ( $_SESSION['userLoggedIn'] == true ) { 
              echo "
                <h2>$userName pointing at $userEmbPointer</h2>
                <p>Permiso: $userPermiso</p>
                <a href='logout.php'><button class='button button-block' name='logout'/>Cerrar sesión</button></a>
              ";
            } else {
                echo '<a href="login.php"><button class="button button-block" name="logout"/>Iniciar sesión</button></a>';
            }
          ?>
            
          

    </div>
<?php include_once('./temps/_end.php'); ?>    
