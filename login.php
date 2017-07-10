<?php
	require_once("banco-usuario.php");
	require_once("logica-usuario.php");
	$_tipo = $_POST['tipo'];
	$_matricula = $_POST['matricula'];
	$usuario = buscaUsuario($conexao, $_POST['matricula'], $_POST['senha'], $_tipo);
	if ($usuario == null) {
		$_SESSION["danger"] = "Você não se logou";
		//var_dump($usuario);
		header("Location: index.php?login=false");
	}
	else {
		logaUsuario($_tipo, $_matricula);
		if(	$_tipo == "aluno") {
		$_SESSION["success"] = "Você está logado como {$_tipo}";
		setcookie("matr", $_matricula );
		header("Location: index.php");
		}
		elseif ($_tipo== "professor") {
			$_SESSION['Professor'] = $_matricula;
			$_SESSION["success"] = "Você está logado como {$_tipo}";
			header("Location: index.php");
		}
	}
	die();
?>
