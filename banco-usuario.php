<?php
require_once("conecta.php");
function buscaUsuario($conexao, $matricula, $senha, $tipo) {
    $senhaMd5 = md5($senha);
    $matricula = mysqli_real_escape_string($conexao, $matricula);
    $query = "select * from {$tipo} where matricula={$matricula} and senha='{$senhaMd5}'";
    $resultado = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}
function horas($conexao, $matricula) {
    $horass = array();
    $query = "select horas_validadas as horas FROM certificado WHERE matricula = {$matricula}";
    $resultado = mysqli_query($conexao, $query);
    while($hora = mysqli_fetch_assoc($resultado)){
      array_push($horass, $hora);
    }
  

    return $horass;

}

?>
