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

<div class="listar_conteudo">
<div class="crud">
        <a href="produto.php?id=<?php echo $id;?>" class="adicionar">Adicionar</a><br><br>
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
echo $texto."<br><br>";
?>
<div class="crud">
        <a href="produto.php?id=<?php echo $id;?>" class="visualiza">Visualizar</a>
        <a href="ex_produto.php?id=<?php echo $id;?>" class="excluir">Excluir</a>
        </div>
<?php endforeach?>
</div>
