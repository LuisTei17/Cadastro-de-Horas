<?php
  $titulo = "Área Aluno";
  include("cabecalho.php");
  include("logica-usuario.php");
  include("banco-usuario.php");
  AlunoNaoLogado();
  $matricula = $_COOKIE['matr'];
  $horas = horas($conexao, $matricula);
  foreach($horas as $hora):
    $total += $hora['horas'];

  endforeach;
 ?>
<h1>Bem vindo</h1>
<a href="Cadastra.php">Cadastrar certificado</a>
<a href="lista-certificados.php">Ver certificados</a>
<p>Horas até agora:
  <?php
  echo $total;
  ?></p>







<?php
  include("rodape.php");
 ?>
