<?php
  session_start();
  include "datos.php";
  $user = loginUser($_POST["dni"], $_POST["pass"]);




  if (sizeOf($user) == 0) {
    //header("location: login.php");
  }else {
    $_SESSION["user"] = $user['nombre'];
    $_SESSION["idUser"] = $user['id_user'];
    //header("location: ../index.php");
  }
?>
