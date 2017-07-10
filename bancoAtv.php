<?php
include("conecta.php");
function buscaCertif($conexao) {
    $ativs = array();
    $query = "select a.nome as Aluno, at.Matricula as MatriculaA, at.id_Atv, at.descricao, at.grupo_Atv as grupo, at.CargaHor as CargaHoraria
    from atv_compl at JOIN aluno a on a.matricula = at.Matricula";
    $resultado = mysqli_query($conexao, $query);

    while($ativ = mysqli_fetch_assoc($resultado)) {
        array_push($ativs, $ativ);
    }

    return $ativs;

}
function buscaCertifAl($conexao,$matricula ) {
    //$matricula = $_SESSION['Aluno'];
    $ativs = array();
    $query = "select a.nome as Aluno, c.Matricula as MatriculaC, c.id_certif, c.data_emissao, c.horas_validadas, c.descricao
    from certificado c JOIN aluno a on a.Matricula = c.Matricula WHERE c.matricula = {$matricula}";
    $resultado = mysqli_query($conexao, $query);
    
    while($ativ = mysqli_fetch_assoc($resultado)) {
        array_push($ativs, $ativ);
    }

    return $ativs;

}
function buscaCertifAp($conexao) {
    $ativs = array();
    $query = "select a.nome as Aluno, c.Matricula as MatriculaC, c.id_certif, c.data_emissao, c.horas_validadas, c.descricao
    from certificado c JOIN aluno a on a.matricula = c.Matricula";
    $resultado = mysqli_query($conexao, $query);

    while($ativ = mysqli_fetch_assoc($resultado)) {
        array_push($ativs, $ativ);
    }

    return $ativs;

}
 ?>
