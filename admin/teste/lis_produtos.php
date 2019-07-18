<html>
<head>
<link rel="stylesheet" type="text/css" href="estilo.css">
<link rel="stylesheet" type="text/css" href="estilo1.css">
<link rel="stylesheet" type="text/css" href="menu.css">

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

<div class="informacoes">
</div>

<div class="centro">


<div id="topo"></div>
<p><?php include_once("produtoslistar.php"); ?></p>


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