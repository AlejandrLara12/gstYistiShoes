<?php
  $page = $_SERVER['PHP_SELF'];
  $baseDir = $_SERVER['BASEDIR'];
  // echo $page;
  switch ($page){
    case $baseDir.'/index.php':
      $title = 'YistiShoes';
      break;
    
    case $baseDir.'/login.php':
      $title = 'Log in';
      break;

    case $baseDir.'/admin.php':
      $title = 'Admin YistiShoes';
      break;

    case $baseDir.'/error.php':
      $title = 'Error YistiShoes';
      break;

    case $baseDir.'/test.php':
      $title = 'Test Page';
      break;

    case $baseDir.'/title.php':
      $title = 'Title Page';
      break;

    case $baseDir.'/starterTemplate.php':
      $title = 'Temp Page';
      break;

    default:
      $title = 'YistiShoes';
      // session_start();
      // $_SESSION['message'] = 'Page not found';
      // header('location: ./error.php');
      break;
  }
?>