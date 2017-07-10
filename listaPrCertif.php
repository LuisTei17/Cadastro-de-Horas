<?php
  $titulo = "Certificados aprovados";
  include("cabecalho.php");
  include("bancoAtv.php");
  include("logica-usuario.php");
  include("mostraAlerta.php");
  ProfessorNaoLogado();
  $resultado = mysqli_query($conexao,"SELECT * FROM Certificado");
  $certifs = buscaCertifAp($conexao);
  mostraAlerta("success");
  mostraAlerta("danger");
 ?>
 <table class="table table-striped table-bordered">
       <th>Id</th>
       <th>Nome</th>
       <th>Matricula</th>
       <th>Descrição</th>
       <th>Data Emissao</th>
       <th>Horas validadas</th>
<?php
 foreach($certifs as $certif) :
?>
 <tr>
   <td><?= $certif['id_certif']?></td>
   <td><?= $certif['Aluno']?></td>
   <td><?= $certif['MatriculaC']?></td>
   <td><?= substr($certif['descricao'], 0, 40)?></td>
   <td><?= $certif['data_emissao']?></td>
   <td><?= $certif['horas_validadas']?></td>
 </tr>

<?php
 endforeach
?>
   </table>
<?php

 include("rodape.php");
?>
