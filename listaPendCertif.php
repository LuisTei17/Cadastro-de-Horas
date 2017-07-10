<?php
  $titulo = "Certificados pendentes";
  include("cabecalho.php");
  include("bancoAtv.php");
  include("logica-usuario.php");
  include("mostraAlerta.php");
  ProfessorNaoLogado();
  $resultado = mysqli_query($conexao,"SELECT * FROM atv_compl");
  $certifs = buscaCertif($conexao);
  mostraAlerta("success");
  mostraAlerta("danger");
 ?>
 <table class="table table-striped table-bordered">
       <th>Id</th>
       <th>Nome</th>
       <th>Matricula</th>
       <th>Descrição</th>
       <th>Horas</th>
       <th>Grupo</th>
       <th colspan="3">Ações</th>

  </thead>
<?php
 foreach($certifs as $certif) :
?>
 <tr>
   <td><?= $certif['id_Atv']?></td>
   <td><?= $certif['Aluno'] ?></td>
   <td><?= $certif['MatriculaA']?></td>
   <td><?= substr($certif['descricao'], 0, 40) ?></td>
   <td><?= $certif['CargaHoraria'] ?></td>
   <td><?= $certif['grupo'] ?></td>

   <td>
     <form action="Aprova.php" method="POST">
       <input type="hidden" name="id" value="<?=$certif['id_Atv']?>">
       <input type="hidden" name="CargaHoraria" value="<?=$certif['CargaHoraria']?>">
       <input type="hidden" name="Matricula" value="<?=$certif['MatriculaA']?>">
       <input type="hidden" name="Descricao" value="<?=$certif['descricao']?>">
       <button class="btn btn-success">Aprova</button>
     </form>
   </td>
   <td>
    <form action="form-altera.php" method="POST">

      <input type="hidden" name="id" value="<?=$certif['id_Atv']?>">
      <input type="hidden" name="nome" value="<?=$certif['Aluno']?>">
      <input type="hidden" name="CargaHoraria" value="<?=$certif['CargaHoraria']?>">
      <input type="hidden" name="Matricula" value="<?=$certif['MatriculaA']?>">
      <input type="hidden" name="Descricao" value="<?=$certif['descricao']?>">
      <input type="hidden" name="grupo" value="<?=$certif['grupo']?>">
      <button class="btn btn-primary">Altera</button>
    </form>
   </td>
   <td>
     <form action="remove.php" method="POST">
       <input type="hidden" name="id" value="<?=$certif['id_Atv']?>">
       <button class="btn btn-danger">Remover</button>
     </form>
   </td>

 </tr>

<?php
 endforeach
?>
   </table>
<?php

 include("rodape.php");
?>
