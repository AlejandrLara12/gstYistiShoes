<?php
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
  } else {
    // echo "Conexion exitosa <br>";
    // echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
    // echo "Host information: " . mysqli_get_host_info($conn) . PHP_EOL;
  }
?>