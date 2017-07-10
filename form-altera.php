<?php
  $titulo = "Fomulário de alteração";
  include("cabecalho.php");
  include("logica-usuario.php");
  include("conecta.php");
  ProfessorNaoLogado();
  $id = $_POST['id'];
  $descricao = $_POST['Descricao'];
  $cargaHor = $_POST['CargaHoraria'];
  $grupo = $_POST['grupo'];
  $matricula = $_POST['Matricula'];
  $nome = $_POST['nome']

 ?>
 <form action="altera.php" method="post">
   <table class="table table-striped table-bordered">
     <input type="hidden" name="id" value="<?=$id?>">
     <tr>
       <td>Nome</td>
       <td><input type="text" class="form-control" name="nome" value="<?=$nome?>"></td>
     </tr>
     <tr>
       <td>Matricula</td>
       <td><input type="text" class="form-control" name="Matricula" value="<?= $matricula?>"></td>
    </tr>
     <tr>
       <td>Descrição</td>
       <td><textarea class="form-control" name="descricao" value="<?= $descricao?>"><?=$descricao?></textarea></td>
     </tr>
     <tr>
       <td>Carga horária</td>
       <td><input type="number" class="form-control" name="CargaHoraria" value="<?= $cargaHor?>"></td>
     </tr>
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
       <td><button class="btn btn-primary">Alterar</td>
     </tr>
   </table>
 </form>
