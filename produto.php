<?php
include_once("conexao.php");

$id=$_GET['id'];
if($id<=0){
    $id="?id=1";
    header("location:artigo.php".$id);
}

$comando="SELECT *FROM conteudo where id='$id'";
$sql=mysqli_query($conexao,$comando);
$resultado=mysqli_fetch_all($sql,MYSQLI_ASSOC);
foreach($resultado as $linha):
    $nome=$linha['nome'];
    $titulo=$linha['titulo'];
    $categoria=$linha['categoria'];
    $subcategoria=$linha['subcategoria'];
    $descricao=$linha['descricao'];
    $miniatura=$linha['miniatura'];
    $texto=$linha['texto'];
  
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
echo $texto;
?>
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