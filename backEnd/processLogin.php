<?php
include_once "conexao.php";
$db = new Conexao();
$cpf = $_POST['user'];
$senha = $_POST['senha'];

$result = $db->executar("SELECT * FROM usuarios WHERE cpf = '$cpf' AND senha = '$senha'", true);
if ($result->rowCount() > 0) {
    $result = $db->executar("SELECT id, tipo FROM usuarios WHERE cpf = '$cpf'");
    $idUser = $result[0][0];
    $tipo = $result[0][1];
    if ($tipo == 2) {
        header("Location: ../Usuarios/Professor/homeProfessor.php?id=$idUser");
        exit();
    } elseif ($tipo == 3) {
        header("Location: ../Usuarios/Aluno/homeAluno.php?id=$idUser");
        exit();
    }
} else {
    header("Location: ../Login/pagLogin.php?loginFailed");
    exit();
}
