<?php
include_once("conexao.php");

$comando="SELECT *FROM configuracao where id='1'";
$sql=mysqli_query($conexao,$comando);
$resultado=mysqli_fetch_all($sql,MYSQLI_ASSOC);

?>

<?php
foreach($resultado as $linha):
    $id=$linha['id'];
    $tema=$linha['tema'];
    $header=$linha['header'];
    $menu=$linha['menu'];
    $slide=$linha['slide'];
    $conteudo=$linha['conteudo'];
    $vitrine=$linha['vitrine'];
	$titulo=$linha['titulo'];
	$subtitulo=$linha['subtitulo'];
  
?>
<?php endforeach?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo $tema; ?>">

<title>loja virtual</title>
</head>
<body>
<div class=container>
<?php include_once($header);?>
<div class="nav">
<div class="menu">
<?php include_once($menu); ?>
</div>
</div>

<div class="conteudo">
<div class="centro">
<center>
<div id="topo"></div>
<h1>Formulario de contato</h1>
<form action="pcontato.php" method="POST">
Nome:<br>
<input class="fild" type="text" name="nome"><br>
Email:<br>
<input class="fild" type="text" name="email"><br>
Menssagem:<br>
<textarea name="mensagem" rows="20" width="50px"></textarea><br>
<input class="enviar" type="submit" name="enviar">
</form>
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