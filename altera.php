<?php
  include("banco-certificado.php");
  include("logica-usuario.php");
  ProfessorNaoLogado();
  $id = $_POST['id'];
  $descricao = $_POST['descricao'];
  $cargaHor = $_POST['CargaHoraria'];
  $grupo = $_POST['grupo'];
  $matricula = $_POST['Matricula'];
  if(alterar($conexao, $id, $descricao, $cargaHor, $grupo, $matricula)) {
    $_SESSION['success'] = "Certificado alterado com sucesso";
    Header("Location: listaPendCertif.php");
  }else {
    $_SESSION['danger'] = "Certificado não alterado";
    Header("Location: listaPendCertif.php");
  }
 ?>
