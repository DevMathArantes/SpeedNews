<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aluno</title>
    <link rel="stylesheet" href="../../index.css">
    <link rel="stylesheet" href="aluno.css">
</head>
<body>
    <div class="topHome">
        <h1>Olá, seja bem vindo</h1>
    </div><br><br>
    <a href="../../Login/pagLogin.php">Voltar</a><br>
        <h2>Agendar horário</h2>
        <form>
            <select name="" id="">
                <option value="">Selecione um veículo</option>
                <option value="">Camaro</option>
                <option value="">Cavalo</option>
            </select>
            <input type="date">
            <input id="btn" type="submit" value="Procurar">
        </form>
    <div class="cadastrados">
        <p id="titulos">
            <span>Data</span>
            <span>Horário</span>
            <span>Veículo</span>
            <span class="excluir"></span>
        </p>
        <p>
            <span>01/01/2001</span>
            <span>10:20</span>
            <span>Camaro</span>
            <span class="excluir">Desmarcar</span>
        </p>
        <p>
            <span>01/01/2001</span>
            <span>10:20</span>
            <span>Camaro</span>
            <span class="excluir">Desmarcar</span>
        </p>
        <p>
            <span>01/01/2001</span>
            <span>10:20</span>
            <span>Camaro</span>
            <span class="excluir">Desmarcar</span>
        </p>
    </div>
    <br>
</body>
</html>
