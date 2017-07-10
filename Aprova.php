<?php
  include("banco-certificado.php");
  include("logica-usuario.php");
  ProfessorNaoLogado();
  $CargaHor = $_POST['CargaHoraria'];
  $Matricula = $_POST['Matricula'];
  $Descricao = $_POST['Descricao'];
  $id = $_POST['id_Atv'];
  if(aprovaCert($conexao, $CargaHor, $Matricula, $Descricao, $id)){
    remover($conexao,$id);
    $_SESSION['success'] = "Certificado aprovado";
    Header("Location: listaPendCertif.php");

  }
  else {
    $_SESSION['danger'] = "Certificado não aprovado";
    //Header("Location: listaPendCertif.php");
  }
 ?>
