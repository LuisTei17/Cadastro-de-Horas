<?php
  require_once("logica-usuario.php");
  logout();
  $_SESSION["success"] = "Você foi deslogado";
  Header("Location: index.php");
  die();
 ?>
