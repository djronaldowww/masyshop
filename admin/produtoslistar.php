<?php
@session_start();
include_once("conexao.php");

?>

<html>
<head>
<title>masyshop</title>
<meta charset="utf-8">


</head>
<body>
<h1>Listar</h1>
<div class="crud">
<a href="add_produto.php" class="adicionar">Adicionar</a>
</div>
<br><hr><br>
<?php 
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}

$pagina_atual=filter_input(INPUT_GET,'pagina',FILTER_SANITIZE_NUMBER_INT);

$pagina=(!empty($pagina_atual)) ? $pagina_atual : 1;
$limite=2;
$inicio=($limite*$pagina)-$limite;

$sql=mysqli_query($conexao,"SELECT* FROM produtos ORDER BY id desc LIMIT $inicio, $limite");
while($linha=mysqli_fetch_array($sql)){
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
<div class="paginacao">
    <table>
        <tr><td><img src="imagens/<?php echo $foto_produto; ?>" width="120px" heigth="120px"><br></td>
        <td>
<?php echo $id; ?>-<?php echo $titulo; ?><br>
   
        <?php echo $descricao; ?><br><br>
        <div class="crud">&nbsp;&nbsp;
        <a href="produto.php?id=<?php echo $id;?>" class="visualiza">Visualizar</a>
        <a href="edd_produto.php?id=<?php echo $id;?>" class="editar">Editar</a>
        <a href="ex_produto.php?id=<?php echo $id;?>" class="excluir">Excluir</a>
        </div>
</td></tr></table>
    <br><hr><br>
</div>
<?php } ?>

<div class="img">
<img src="imagens/header15.jpg"  width="470" height="60">
</div>
<div class="paginas">

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
</div>
</body>
</html>