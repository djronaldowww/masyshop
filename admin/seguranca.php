<?php session_start();
include_once("conexao.php");

if(!isset($_SESSION['login'])&& !isset($_SESSION['senha'])){
    header("Location:../login.php");
    exit;
}

echo "ola mundo";

?>

Ola essa pagina é restrinta.

<a href="sair.php">Sair</a>