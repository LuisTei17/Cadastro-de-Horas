<?php
require_once("conecta.php");


function insereCertif($conexao, $descricao, $cargaHor, $grupo, $matricula) {

  $query = "INSERT INTO atv_compl (descricao, grupo_Atv, CargaHor, matricula) VALUES ('{$descricao}', '{$grupo}', {$cargaHor}, {$matricula})";
  $resultado = mysqli_query($conexao, $query);
  echo $query;
  return $resultado;
}
function aprovaCert($conexao, $CargaHor, $Matricula, $Descricao) {
  $query = "INSERT INTO certificado (data_emissao, horas_validadas, matricula, descricao) VALUES (NOW(), {$CargaHor}, {$Matricula}, '{$Descricao}')";
  $aprovado = mysqli_query($conexao, $query);
  echo $query;
  return $aprovado;
}
function remover($conexao, $id) {
  $query = "DELETE FROM atv_compl WHERE id_Atv = {$id}";
  $removido = mysqli_query($conexao, $query);
  echo $query;
  return $removido;
}
function alterar($conexao, $id, $descricao, $cargaHor, $grupo, $matricula) {
  $query = "update atv_compl set descricao = '{$descricao}', CargaHor = {$cargaHor}, grupo_Atv = '{$grupo}', Matricula='{$matricula}' WHERE id_Atv = {$id}";
  $alterado = mysqli_query($conexao, $query);
  echo $query;
  return $alterado;
  }
 ?>
