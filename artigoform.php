<?php 
@session_start();
include_once("conexao.php");

if(!isset($_SESSION['login'])&& !isset($_SESSION['senha'])){
    header("Location:../login.php");
    exit;
}

?>

<html>
<head>
<title>masyshop</title>
<meta charset="utf-8">

</head>
<body>
<h1>Listar artigos</h1><br><hr><br>
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
$descricao=$linha['descricao'];
$miniatura=$linha['miniatura'];

?>
<div class="paginacao">
    <table><tr>
        <td><img src="imagens/<?php echo $miniatura; ?>" width="150px" heigh="100px"></td>
        <td><?php echo $id; ?>
        <?php echo $titulo; ?><br>
        <div class="link">
        <a href="artigo.php?id=<?php echo $linha['id'];?>"><?php echo $linha['titulo'];?></a><br>
        </div>
        <?php echo $descricao; ?><br>
        </td>
    </tr></table><br><hr><br>
</div>
<?php } ?>

<div class="img">
<img src="imagens/header15.jpg"  width="470" height="60">
</div><br>
<div class="paginas">

<?php

$query="SELECT COUNT(id) AS num_result FROM conteudo";
$sql=mysqli_query($conexao,$query);
$linha=mysqli_fetch_array($sql);

$quantidade_pg=ceil($linha['num_result']/$limite);
$max_links=3;
echo "<a href=\"artigos.php?id=1\">primeira</a>";

for($pag_anterior=$pagina-$max_links; $pag_anterior<=$pagina-1; $pag_anterior++){
if($pag_anterior>=1){
    echo "<a href=\"artigos.php?pagina=$pag_anterior\">$pag_anterior</a>";
}}

echo $pagina;

for($pag_posterior=$pagina+1;$pag_posterior<=$pagina+$max_links;$pag_posterior++){
    if($pag_posterior<=$quantidade_pg){
        echo "<a href=\"artigos.php?pagina=$pag_posterior\">$pag_posterior</a>";
    }
}

echo "<a href=\"artigos.php?pagina=$quantidade_pg\">ultima</a>";
?>
</div>
</body>
</html>