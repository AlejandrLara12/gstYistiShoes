<?php
    $dbhost = "188.121.44.189";
    $port   = "3306";
    $dbuser = "YistiShoesUsr";
    $dbpass = "YistiShoesUsr968574";
    $dbname = "YistiShoesDB";

    // Conexión con la base de datos
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    // echo("$dbhost:$port");
    if(!$conn){
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        die();
        // exit;
    } else {
        // echo "Conexion exitosa <br>";
        // echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
        // echo "Host information: " . mysqli_get_host_info($conn) . PHP_EOL;
    }

    // mysqli_close($conn);  
?>