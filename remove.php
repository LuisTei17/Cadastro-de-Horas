<?php
	require_once ("cabecalho.php");
	require_once("logica-usuario.php");
	include("banco-certificado.php");
	$id = $_POST['id'];

	if(remover($conexao, $id)){
		$_SESSION['success'] = "removido com sucesso";
		Header("Location: listaPendCertif.php");
	}
	else {
		$_SESSION['danger'] = "não removido";
		Header("Location: listaPendCertif.php");
	}



?>
