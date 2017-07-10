<?php

require_once("banco-certificado.php");
require_once("logica-usuario.php");
AlunoNaoLogado();
$descricao = $_POST['descricao'];
$cargaHor = $_POST['carga_hor'];
$grupo = $_POST['grupo'];
$matricula = $_POST['matricula'];
if (insereCertif($conexao, $descricao, $cargaHor, $grupo, $matricula)){
  $_SESSION["success"] = "Certificado cadastrado com sucesso";
  Header("Location: Cadastra.php");
}
else {
  $_SESSION['danger'] = "Certificado não cadastrado";
  Header("Location: Cadastra.php");
}







 ?>
