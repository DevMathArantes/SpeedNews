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
            <span class="excluir"></span>
        </p>
        <?php
        $result = $db->executar("SELECT c.id, c.marca, c.modelo, c.ano, c.placa FROM carros AS c JOIN log_instrutores_carros AS lic ON c.id = lic.carro_id WHERE lic.Instrutor_id = '$idUser'", true);
        foreach ($result as $i) {
        ?>
            <p>
                <span><?= $i['marca']; ?></span>
                <span><?= $i['modelo']; ?></span>
                <span><?= $i['placa']; ?></span>
                <span><?= $i['ano']; ?></span>
                <a href="../../backEnd/professor/removerCarro.php?idCarro=<?=$i['id'];?>"><span class="excluir">Excluir</span></a>
            </p>
        <?php
        }
        ?>
    </div><br>
</body>

</html>