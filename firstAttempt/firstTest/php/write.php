<?php
  require_once('./conn.php');
    $verb = $_SERVER['REQUEST_METHOD'];

    if($verb == 'GET') {
        if( isset($_GET['personName']) ) {

            // url's values
            $personName = $_GET['personName'];
            $personLastname = $_GET['personLastname'];

            // form query
            $query = "INSERT INTO PruebaDB (`PRB_Nombres`, `PRB_Paterno`) VALUES ('$personName', '$personLastname')";
            
            // connect and make it happen 
            mysqli_query($conn, $query);
            
            // feet back
            echo '<p>'.$query.'</p>';
            echo '<p>hello: '.$personName.' '.$personLastname.'</p>';
            
        } else {
            die("Error: requiered, 'personName', 'personLastname'  not given');
        }
        // end conn
        mysqli_close($conn);

    } else if($verb == 'POST') {
        echo 'In POST';
    } else if($verb == 'PUT') {
        echo 'In PUT';
    } else if($verb == 'DELETE') {
        echo 'In DELETE';
    }

?>