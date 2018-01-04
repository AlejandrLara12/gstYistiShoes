<?php
  /* Displays all error messages */
  session_start();
  require_once('./temps/_init.php');
  echo  'Session: '; print_r($_SESSION);
?>
  <div class="container  col-sm-8 col-md-8 col-lg-5 pt-5">
    <div class="card w-100 p-3 mt-5">
      <div class="card-body">
        <h4 class="card-title">Error</h4>
        <div class="alert alert-<?='danger'?>" role="alert">
          <?php 
            if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ){ 
              echo $_SESSION['message'];
            } else {
              echo 'No se econtraron errores';
              header( "location: ./index.php" );
            }
          ?>
        </div>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <small id="emailHelp" class="form-text text-muted pb-3">We'll never share your info with anyone else.</small>
        <a class="btn  btn-outline-primary" href="index.php" role="button">Inicio</a>
        <a class="btn btn-primary" href="login.php" role="button">Iniciar sesión</a>

        <!-- <button type="button" class="btn btn-outline-primary">Primary</button>
        <button type="button" class="btn btn-outline-secondary">Secondary</button>
        <button type="button" class="btn btn-outline-success">Success</button>
        <button type="button" class="btn btn-outline-danger">Danger</button>
        <button type="button" class="btn btn-outline-warning">Warning</button>
        <button type="button" class="btn btn-outline-info">Info</button>
        <button type="button" class="btn btn-outline-light">Light</button>
        <button type="button" class="btn btn-outline-dark">Dark</button> -->
      </div>
    </div>


      <!-- <h1>Error</h1>
      <p>
        <?php 
          if( isset($_SESSION['message']) AND !empty($_SESSION['message']) AND $_SESSION['message'] != "Page not found" ){ 
            echo $_SESSION['message'];    
          } else {
            header( "location: index.php" );
          }
        ?>
      </p>     
      <a href="index.php"><button class="button button-block"/>Home</button></a>
      <a href="login.php"><button class="button button-block"/>Log in page</button></a> -->
  </div>
  <?php require_once($basedir.'/temps/_end.php'); ?>
