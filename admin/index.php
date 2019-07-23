<?php
session_start();
include_once("conexao.php");

if(!isset($_SESSION['login'])&& !isset($_SESSION['senha'])){
    header("Location:login.php");
    exit;
}

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo 'style.css'; ?>">

<title>loja virtual</title>
</head>
<body>
<div class=container>
<?php include_once("header.php");?>
<div class="nav">
<div class="menu">
<?php include_once("menu.php"); ?>
</div>
</div>

<div class="conteudo">
<div class="centro">
<center>
<div id="topo"></div>

<p><?php include_once("conteudo.php"); ?></p>
</center>

</div>
</div>

<div class="rodape" >
<center>
<div id="subir">
	<a href="#topo" class="subir" id="subir">Topo</a>
</div>
<h2>Aqui adiciona informaçoes adicionais!</h2><br>
esse site foi produzido por masyshop.
</center>
</div>
</div>
</body>
</html>