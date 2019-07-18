<?php session_start();
include_once("conexao.php");

unset($_SESSION['emailSession']);
unset($_SESSION['senhaSession']);
session_destroy();

header("Location:index.php");
?>