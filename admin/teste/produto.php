<?php
include_once("conexao.php");

$id=$_GET['id'];

$comando="SELECT *FROM conteudo where id='$id'";
$sql=mysqli_query($conexao,$comando);
$resultado=mysqli_fetch_all($sql,MYSQLI_ASSOC);
foreach($resultado as $linha):
    $link=$linha['link'];
    $titulo=$linha['titulo'];
    $categoria=$linha['categoria'];
    $subcategoria=$linha['subcategoria'];
    $descricao=$linha['descricao'];
    $miniatura=$linha['miniatura'];
    $texto=$linha['texto'];
  
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style1.css">

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
<div class="crud">
        <a href="produto.php?id=<?php echo $id;?>" class="adicionar">Adicionar</a>
        </div>
<div class="subretitulo">
<?php
echo $titulo."<br>";
?>
</div>
<?php
echo $descricao."<br>";
?>
<img src="imagens/<?php echo $miniatura; ?>" width="150px" heigth="100px"><br>
<?php
echo $texto."<br>";
?>
<div class="crud">
        <a href="produto.php?id=<?php echo $id;?>" class="visualiza">Visualizar</a>
        <a href="ex_produto.php?id=<?php echo $id;?>" class="excluir">Excluir</a>
        </div>
<?php endforeach?>
</div>
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