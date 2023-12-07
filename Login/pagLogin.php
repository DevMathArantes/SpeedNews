<?php
    include_once "../backEnd/conexao.php";
    $db = new Conexao();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="../index.css">
    <script src="../backEnd/script.js"></script>
</head>

<body>
    <div id="apresentarLogin">
        <img id="roda" src="../Imagens/icoRoda.png" alt="icone roda">
        <h1>Speed news</h1>
        <h5><img src="../Imagens/icoBandeira.png" alt="icone bandeira"> Auto escola <img src="../Imagens/icoBandeira.png" alt="icone bandeira"></h5>
    </div>
    <div id="login">
        <h2>S N</h2>
        <form action="../backEnd/processLogin.php" method="POST" name="formLogin">
            <input type="text" id="cpfLog" name="User" placeholder="CPF" oninput="maskCPF('cpfLog')" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <input class="btn" type="submit" value="Login">
            <span onclick="trocar(login,cadastro)">Cadastre-se</span>
        </form>
    </div>
    <div style="display: none;" id="cadastro">
        <h2>S N</h2>
        <form action="../backEnd/processCadastro.php" method="POST" name="formCadastro" onsubmit="return validateForm()" novalidate>
            <input type="text" name="nome" placeholder="Nome">
            <input type="text" id="cpfCad" name="cpf" placeholder="CPF" oninput="maskCPF('cpfCad')">
            <input type="date" name="dtNasc" placeholder="Data de nascimento">
            <input type="text" name="endereco" placeholder="Endereço">
            <input type="text" id="telefone" name="telefone" placeholder="Telefone" oninput="maskTelefone(this)" maxlength="14" minlength="14">
            <input type="password" name="senha" placeholder="Crie uma senha">
            <select name="tipo" id="">
                <option value="">Selecione um usuário</option>
                <?php
                $result = $db->executar("SELECT id, tipoNome FROM tipos");
                foreach ($result as $tipos) {
                    $idTipo = $tipos['id'];
                    $nomeTipo = $tipos['tipoNome'];
                    echo "<option value='$idTipo'>$nomeTipo</option>";
                }
                ?>
            </select>
            <input class="btn" type="submit" value="Cadastrar">
            <span onclick="trocar(cadastro,login)">Voltar</span>
        </form>
    </div>
    <script src="../index.js"></script>
</body>

</html>