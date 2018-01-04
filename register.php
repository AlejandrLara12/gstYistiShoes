<?php 
  /* Main page with two forms: sign up and log in */
  session_start();
  require_once('db.php');
  require_once('./temps/_init.php');

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo 'method post';
      if (isset($_POST['btnAddUser'])) { //user logging in
        echo 'required register';
        require_once('_controller/register.php');
      }
  } echo 'not in post method';
?>

<!-- 

  name

  account
  pass

  embId
  permiso


 -->

<div class="container pt-5">
  <form action="register.php" method="post" autocomplete="off">
    <h1 class="form-signin-heading pb-3">Agregar nuevo usuario</h1>

    <!-- nombre -->
    <div class="form-group row">
      <label for="regNombre" class="col-sm-2 col-form-label text-lg-right text-md-right text-sm-right">Nombre</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="regIdNombre" placeholder="Nombre de usuario para mostrar" name="userName">
      </div>
    </div>

    <!-- userAccount -->
    <div class="form-group row">
      <label for="regAccount" class="col-sm-2 col-form-label text-lg-right text-md-right text-sm-right">Cuenta</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="regIdAccount" placeholder="Cuenta" name="userAcc">
      </div>
    </div>

    <!-- pass -->
    <div class="form-group row">
      <label for="regPass" class="col-sm-2 col-form-label text-lg-right text-md-right text-sm-right">Contraseña</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="regIdPass" placeholder="Password" name="userPass">
      </div>
    </div>

    <?php
            // $query = "SELECT `YSE_embId`,`YSE_embName` FROM `YistiShoes_Embajadores` WHERE `YSE_embActive` = '1'";
            // $result = $conn->query($query);

            // if ($result->num_rows > 0) {
            //     // output data of each row
            //     while($row = $result->fetch_assoc()) {
            //         echo "id: " . $row["YSE_embId"]. " - Emb: " . $row["YSE_embName"] . "<br>";
            //     }
            // } else {
            //     echo "0 results";
            // }
    ?>

    <!-- emb id pointer -->
    <div class="form-group row">
      <label for="regPermiso" class="col-sm-2 col-form-label text-lg-right text-md-right text-sm-right">Embajador</label>
      <div class="col-sm-10">
        <select id="inputState" class="form-control" name="userEmbId">
          <!-- <option value="0" selected>Embajador</option> -->
          <?php
            require_once('./_includes/selectList_emb.php')
          ?>
        </select>
      </div>
    </div>

    <!-- level privilages -->
    <div class="form-group row">
      <label for="regPrivilages" class="col-sm-2 col-form-label text-lg-right text-md-right text-sm-right">Permisos</label>
      <div class="col-sm-10">
        <select id="regIdPrivilages" class="form-control" name="userPriv">
          <option selected>Privilegios</option>
          <?php
            require_once('./_includes/selectList_priv.php')
          ?>
        </select>
      </div>
    </div>

    <!-- register account -->
    <div class="form-group row">
      <div class="col-sm-10 d-lg-flex d-md-flex d-sm-flex justify-content-around">
        <button type="submit"  class="btn mt-3 btn-outline-danger">Cancelar</button>
        <button type="submit" name="btnAddUser" class="btn mt-3 btn-primary">Agregar Usuario</button>
      </div>
    </div>


  </form>
</div>

<?php 
  require_once($basedir.'/temps/_end.php'); 
?>