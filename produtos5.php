<?php
include_once("conexao.php");

$id=$_GET['id'];
if($id<=1){
    $id="?id=1";
    header("Location:produto.php?id=1");
}

$comando="SELECT *FROM produtos where id='$id'";
$sql=mysqli_query($conexao,$comando);
$resultado=mysqli_fetch_all($sql,MYSQLI_ASSOC);
foreach($resultado as $linha):
    $id=$linha['id'];
    $nome=$linha['nome'];
    $titulo=$linha['titulo'];
    $categoria=$linha['categoria'];
    $subcategoria=$linha['subcategoria'];
    $descricao=$linha['descricao'];
    $estatus=$linha['estatus'];
    $foto_produto=$linha['foto_produto'];
    $preco=$linha['preco'];
    $pagamento=$linha['pagamento'];
  
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">

<title>loja virtual</title>
</head>
<body>
<div class=container>
<div class="header">
<div class="titulo">
masy shop
</div>
<div class="subtitulo">
seja bem vindo a nossa loja.
</div>
</div>

<div class="nav">
<div class="menu">
<?php include_once("menu.php"); ?>
</div>
</div>

<div class="conteudo">
<div class="centro">
<center>
<div id="topo"></div>
<div class="listar_conteudo">
<?php
echo $titulo."<br>";

echo $descricao."<br>";
?>
<img src="imagens/<?php echo $foto_produto; ?>" width="300px" heigth="300px"><br>
<?php

echo "R$".$preco.",00<br>";
echo $pagamento."<br><br>";
?>
</div>
<?php endforeach?>
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