<?php
  session_start();
  function logaUsuario($tipo, $matricula){
    if($tipo == "professor"){
      $_SESSION["professor_logado"] = $matricula;
    }
    elseif($tipo == "aluno"){
    $_SESSION["aluno_logado"] = $matricula;
    }
    else {
       ?><p>Erro</p><?php
    }
  }
  function alunoLogado() {
    return isset($_SESSION["aluno_logado"]);
    $_SESSION['alunoSu'] = "Aluno logado";
    Header("Location: index.php");
  }
  function professorLogado() {
    return isset($_SESSION["professor_logado"]);
    $_SESSION['professorSu'] = "Professor logado";
    Header("Location: index.php");
  }
  function ProfessorNaoLogado() {
    if (!professorLogado()) {
      $_SESSION["danger"] = "Você não está logado como professor";
      Header("Location: index.php");
      die();
    }
  }
  function AlunoNaoLogado() {
  if (!alunoLogado()) {
    $_SESSION["danger"] = "Você não está logado como aluno";
    Header("Location: index.php");
    die();
  }
}
  function logout() {
    session_destroy();
    session_start();
  }
 ?>
