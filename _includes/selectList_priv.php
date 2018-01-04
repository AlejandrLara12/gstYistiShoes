<?php 
  // require_once('./../db.php');

  $query = "SELECT `YSP_permisoId`,`YSU_permisoNombre` FROM `YistiShoes_Cat_Permisos`";
  $result = $conn->query($query);

  while($row = $result->fetch_assoc()) {
      echo "<option value=".$row["YSP_permisoId"].">". $row["YSU_permisoNombre"] ."</option>";
  }
?>