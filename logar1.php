<?php
include_once('conexao.php');
$email=$_POST['email'];
$senha=$_POST['senha'];

$query=$conexao->query("SELECT *FROM arquivo WHERE email='$email' AND senha='$senha'");
$row=mysqli_num_rows($query);

if($row!=0){
    session_start();
    $_SESSION['email']=$email;
    $_SESSION['senha']=$senha;
    header("Location: cadastrar.php");
}else{
    header("Location: index.php");
}

?>