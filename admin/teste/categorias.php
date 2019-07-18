<?php
session_start();
include_once("conexao.php");

echo "<h1>paginação completa!</h1>";
?>

<html>
<head>
<title>masyshop</title>
<meta charset="utf-8">
</head>
<body>
<h1>Listar</h1>
<?php 
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}

$pagina_atual=filter_input(INPUT_GET,'pagina',FILTER_SANITIZE_NUMBER_INT);

$pagina=(!empty($pagina_atual)) ? $pagina_atual : 1;
$limite=2;
$inicio=($limite*$pagina)-$limite;

$sql=mysqli_query($conexao,"SELECT* FROM conteudo ORDER BY id desc LIMIT $inicio, $limite");
while($linha=mysqli_fetch_array($sql)){
$id=$linha['id'];    
$titulo=$linha['titulo'];
$conteudo=$linha['texto'];

?>
<div class="listar_conteudo">
<?php
echo $id."<br>";
echo $titulo."<br>";
echo $conteudo."<hr>";
?>

<?php } ?>

<div class="conteiner">
<img src="imagens/image1 (1).jpg"  width="470" height="60">
</div>

<?php

$query="SELECT COUNT(id) AS num_result FROM conteudo";
$sql=mysqli_query($conexao,$query);
$linha=mysqli_fetch_array($sql);

$quantidade_pg=ceil($linha['num_result']/$limite);
$max_links=3;
echo "<a href=\"produtos.php?pagina=1\">primeira</a>";

for($pag_anterior=$pagina-$max_links; $pag_anterior<=$pagina-1; $pag_anterior++){
if($pag_anterior>=1){
    echo "<a href=\"produtos.php?pagina=$pag_anterior\">$pag_anterior</a>";
}}

echo $pagina;

for($pag_posterior=$pagina+1;$pag_posterior<=$pagina+$max_links;$pag_posterior++){
    if($pag_posterior<=$quantidade_pg){
        echo "<a href=\"produtos.php?pagina=$pag_posterior\">$pag_posterior</a>";
    }
}

echo "<a href=\"produtos.php?pagina=$quantidade_pg\">ultima</a>";
?>
</body>
</html>