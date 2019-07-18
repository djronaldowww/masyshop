<?php session_start();
include_once("conexao.php");

$email=$_POST['email'];
$senha=$_POST['senha'];

$query=mysqli_query($conexao,"SELECT *FROM usuarios where email='$email' AND senha='$senha'");
$logar=mysqli_num_rows($query);

if($logar>=1){
    $_SESSION['emailSession']=$email;
    $_SESSION['senhaSession']=$senha;

    echo "<meta http-equiv=refresh content='0; URL=admin.php';>";
}else{
    if($logar==0){
        echo "<meta http-equiv=refresh content='s; URL=login.php';>";
    }
}

?>