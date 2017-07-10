	<?php
		$titulo = 'Index';
		require_once("cabecalho.php");
		require_once("logica-usuario.php");
		require_once("mostraAlerta.php");
		mostraAlerta("success");
		mostraAlerta("success");
		mostraAlerta("danger");

	?>
	<h1>Bem vindo</h1>
	<?php if(professorLogado()):?>
	<p class="text-success"><?=mostraAlerta("success")?> </p>
	<a class="text-danger" href="logout.php">Deslogar</a>
	<?php elseif(alunoLogado()): ?>
		<p class="text-success"><?=mostraAlerta("success")?> </p>
		<a class="text-danger" href="logout.php">Deslogar</a>
	<?php else:	?>
	<form action="login.php" method="post">
		<table class="table table-striped table-bordered">
			<tr>
			<td><p>Matricula</p></td>
			<td><input type="text" class="form-control" name="matricula"></td>
			</tr>
			<tr>
			<td><p>Senha</p></td>
			<td><input type="password" class="form-control" name="senha"></td>
			</tr>
			<tr>
			<td>Tipo</td>
			<td>
				<SELECT class="form-control" name="tipo">
					<OPTION value="aluno">Aluno</OPTION>
					<OPTION value="professor">Professor</OPTION>
				</SELECT>
			</td>
			<tr>
				<td colspan="2"><button name="submit" class="btn btn-primary">Login</button></td>
			</tr>
		</table>
	</form>

		
	<?php
		endif;
		include ("rodape.php");
	?>
