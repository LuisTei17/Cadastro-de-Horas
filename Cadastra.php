<?php
  include("banco-certificado.php");
  $titulo = "Formulário de cadastro";
  include("cabecalho.php");
  include("mostraAlerta.php");
  require_once("logica-usuario.php");
  AlunoNaoLogado();
  mostraAlerta('success');
  mostraAlerta('danger')
 ?>
 <h1>Cadastro de certificado</h1>
<form action="adiciona-certificado.php" method="post">
  <table class="table table-striped table-bordered">
    <tr>
      <td>Matricula</td>
      <td><input type="text" class="form-control" name="matricula"></td>
    <tr>
      <td>Descrição</td>
      <td><textarea class="form-control" name="descricao"></textarea></td>
    </tr>
    <tr>
      <td>Carga horária</td>
      <td><input type="number" class="form-control" name="carga_hor"></td>
    <tr>
      <td>Grupo</td>
      <td>
        <SELECT class="form-control" name="grupo">
          <OPTION value="um">Um</OPTION>
          <OPTION value="dois">Dois</OPTION>
          <OPTION value="tres">Tres</OPTION>
          <OPTION value="quatro">Quatro</OPTION>
        </SELECT>
      </td>
    </tr>
    <tr>
      <td><button class="btn btn-primary">Cadastrar</td>
    </tr>
  </table>
</form>
 <?php include("rodape.php") ?>
