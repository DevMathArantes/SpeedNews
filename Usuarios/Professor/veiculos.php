<?php
include_once "../../backEnd/conexao.php";
$db = new Conexao();
session_start();
$idUser = $_SESSION['idUser'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veículos</title>
    <link rel="stylesheet" href="../../index.css">
    <link rel="stylesheet" href="Professor.css">
</head>

<body>
    <a href="homeProfessor.php">Voltar</a><br><br><br>
    <form action="../../backEnd/professor/cadastrarCarros.php" method="POST">
        <input type="text" name="marca" placeholder="Marca" required>
        <input type="text" name="modelo" placeholder="Modelo" required>
        <input type="text" name="ano" placeholder="Ano" required>
        <input type="text" name="placa" placeholder="Placa" required>
        <input type="text" name="capacidade" placeholder="Capacidade de passageiros" required>
        <input id="cada" type="submit" value="Cadastrar">
    </form>
    <div class="cadastrados">
        <p id="titulos">
            <span>Marca</span>
            <span>Modelo</span>
            <span>Ano</span>
            <span>Placa</span>
            <span class="excluir">Editar</span>
            <span class="excluir">Excluir</span>
        </p>
        <p>
            <span>Velorian</span>
            <span>2000</span>
            <span>20202020</span>
            <span class="excluir">Editar</span>
            <span class="excluir">Excluir</span>
        </p>
        <p>
            <span>Cavalo</span>
            <span>Preto</span>
            <span>20202020</span>
            <span class="excluir">Editar</span>
            <span class="excluir">Excluir</span>
        </p>
        <p>
            <span>Fusca</span>
            <span>preto</span>
            <span>20202020</span>
            <span class="excluir">Editar</span>
            <span class="excluir">Excluir</span>
        </p>
    </div><br>
</body>

</html>