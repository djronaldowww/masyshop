<?php
include_once('conexao.php');
$email=$_POST['email'];
$senha=$_POST['senha'];

$query=mysqli_query($conexao,"SELECT *FROM arquivo WHERE email='$email' and senha='$senha'");
$row=mysqli_num_rows($query);

if($row!=0){
    session_start();
    $_SESSION['email']=$email;
    $_SESSION['senha']=$senha;
    header("Location: index.php");
}else{
    
    header("Location: login.php");
}

?>
