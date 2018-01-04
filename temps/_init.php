<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- admin -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>SB Admin - Start Bootstrap Template</title>
      <!-- Bootstrap core CSS-->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom fonts for this template-->
      <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <!-- Page level plugin CSS-->
      <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
      <!-- Custom styles for this template-->
      <link href="css/sb-admin.css" rel="stylesheet">
    <!-- /admin -->


    <!-- title -->
    <?php 
      $_SERVER['BASEDIR'] = '/yistiShoes';
      $basedir = $_SERVER['DOCUMENT_ROOT'].$_SERVER['BASEDIR'];  // base directory

      include_once($basedir.'/temps/title.php');
    ?>
    <title> <?php echo $title; ?> </title>
    
    <!-- Bootstrap CSS -->
    <?php include_once($basedir.'/css/css.html'); ?>
  </head>
  <body>
  <?php 
    // echo 'init: '.$_SERVER['DOCUMENT_ROOT'];
    // echo '<br>login: '.$_SERVER['DOCUMENT_ROOT'];
    // echo '<br>dirname'.dirname(__FILE__);
    // echo '<br>uri: '.$_SERVER['REQUEST_URI'];
    // echo '<br>server'.$_SERVER['BASEDIR'];
    // echo '<br>uri changed: '.$_SERVER['REQUEST_URI'];
    // echo '<br>gblDir'.$GLOBALS['gblDir'];
    // echo '<br>basedir: '.$basedir;
  ?>