<?php 
  /* This file is exec from the view register */
  echo('<br>in required');
    if ( 
      isset(
        $_POST['userName'], 
        $_POST['userAcc'], 
        $_POST['userPass'],  
        $_POST['userPriv'], 
        $_POST['userEmbId'] 
      )
    ) { 
      //user constructor
        $userName   = $conn->escape_string($_POST['userName']);
        $userAcc    = $conn->escape_string($_POST['userAcc']);
        $userPriv   = $conn->escape_string($_POST['userPriv']);
        $userEmbId  = $conn->escape_string($_POST['userEmbId']);
        $userPass   = $conn->escape_string(password_hash($_POST['userPass'], PASSWORD_BCRYPT));
        $userHash   = $conn->escape_string( md5( rand(0,1000) ) );

        $query = "INSERT INTO `YistiShoes_Users` (`YSU_userAccount`, `YSU_userName`, `YSU_userEmbId`, `YSU_userPass`, `YSU_userHash`, `YSU_userPermiso`) VALUES ('$userAcc', '$userName', '$userEmbId', '$userPass', '$userHash', '$userPriv')";
        // echo '<br>'.$query;
        $conn->query($query) or die($conn->error());

    } else { 
      echo ('sth is not set');
    }
   
  
  print_r  ('Session: '); 
  print_r($_SESSION);
?>