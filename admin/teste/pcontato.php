<?php
include_once("conexao.php");
$nome=addslashes($_POST['nome']);
$email=addslashes($_POST['email']);
$mensagem=addslashes($_POST['mensagem']);
$enviar=addslashes($_POST['enviar']);


if(isset($email)&&!empty($email)){
    $to="djronaldo@gmail.com";
    $objetivo="contato-masyshop!";
    $conteudo="Nome:.$nome.<br>"."Email:$email<br>"."Menssagem:$mensagem.";
    $header="Para djronaldo@gmail.com<br>"."Replay-to:".$email."<br>"."X-Mailer:PHP/".phpversion();

    if(mail($to,$objetivo,$conteudo,$header)){
        echo "Menssagem enviada com sucesso!";
    }else{
        echo"Falha ao enviar a menssagem";
    }
}

?>