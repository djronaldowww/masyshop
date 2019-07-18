<?php
session_start();
include_once("conexao.php");
@$id=$_GET['id'];
if($id<=0){
    $id="?id=1";
    header("location:usuario.php".$id);
}

$comando="SELECT *FROM usuarios where id='$id'";
$sql=mysqli_query($conexao,$comando);
$resultado=mysqli_fetch_all($sql,MYSQLI_ASSOC);

?>

<?php
foreach($resultado as $linha):
    $id=$linha['id'];
    $nome=$linha['nome'];
    $email=$linha['email'];
    $senha=$linha['senha'];
    $nivel=$linha['niveis_acesso_id'];
    $created=$linha['created'];
    $modified=$linha['modified'];
    $avatar=$linha['avatar'];
    $lembrete=$linha['lembrete'];
  
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
echo $nome."<br>";
?>
</div>
<?php
echo $id."<br>";
echo $email."<br>";
echo $senha."<br>";
echo $created."<br>";
echo $modified."<br>";
?>
<img src="imagens/<?php echo $avatar; ?>" width="150px" heigth="100px"><br>
<?php
echo $lembrete;
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