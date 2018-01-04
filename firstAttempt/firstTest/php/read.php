<?php
  require_once('./conn.php');
    $verb = $_SERVER['REQUEST_METHOD'];

    if($verb == 'GET') {
      // form query
      $query = "SELECT * FROM PruebaDB";
      
      // connect and make it happen 
      mysqli_query($conn, $query);
      $result = mysqli_query($conn, $query);
      
      $json_array = array();
      while($row = mysqli_fetch_assoc($result)){
        $json_array[] = $row;
        echo "<p>".$row[PRB_Nombres].' '.$row[PRB_Paterno]."</p>";
        // print_r($row);
      }
      #echo '<pre>';  print_r(json_encode($json_array));  echo '</pre>';
      // echo json_encode($json_array);
      
      // end conn
      mysqli_close($conn);
        //   mysql_close();

      // feet back
      // echo '<p>'.$query.'</p>';
      
    } else if ($verb == 'POST') {
        echo 'In POST';
    } else if ($verb == 'PUT') {
        echo 'In PUT';
    } else if ($verb == 'DELETE') {
        echo 'In DELETE';
    }

?>
