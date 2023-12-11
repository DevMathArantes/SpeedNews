<?php
//Pode resceber um get "redirect" para uma url personalizada após deslogar, se omitido padrão é a tela de login.
function destroySession()
{
    unset($_SESSION); //remove todas as variáveis da sessão
    session_destroy(); // destroi a sessão
}
function logout()
{
    //Sair do usuario (deslogar)
    destroySession();
}
logout();
if (!isset($_GET["redirect"]) || $_GET["redirect"] == "")
    header("Location: ../Login/pagLogin.php");
else
    header("Location: " . $_GET["redirect"]);
