<?php 
  // require_once('./../db.php');

  $query = "SELECT `YSE_embId`,`YSE_embName` FROM `YistiShoes_Embajadores` WHERE `YSE_embActive` = '1'";
  $result = $conn->query($query);

  while($row = $result->fetch_assoc()) {
      echo "<option value=".$row["YSE_embId"].">". $row["YSE_embName"] ."</option>";
  }
?>