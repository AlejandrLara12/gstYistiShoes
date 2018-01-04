<?php
  /* Log out process, unsets and destroys session variables */
  session_start();
  echo  'Session: '; print_r($_SESSION);
  session_unset();
  session_destroy(); 
  echo  'Session clean: '; print_r($_SESSION);
  include_once('./temps/_init.php');
?>

  <div class="form">
    <h1>Thanks for stopping by</h1>
        
    <p><?= 'You have been logged out!'; ?></p>
    
    <a href="index.php"><button class="button button-block"/>Home</button></a>
    <a href="login.php"><button class="button button-block"/>Log in page</button></a>
  </div>

<?php include_once('./temps/_end.php'); ?>