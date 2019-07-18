<?php
session_start();
include_once("conexao.php");

$comando="SELECT *FROM conteudo where id='1'";
$sql=mysqli_query($conexao,$comando);
$resultado=mysqli_fetch_all($sql,MYSQLI_ASSOC);

?>

<?php
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

<center>
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