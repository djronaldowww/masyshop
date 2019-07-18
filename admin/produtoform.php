<?php
@session_start();
include_once("conexao.php");

if(!isset($_SESSION['login'])&& !isset($_SESSION['senha'])){
    header("Location:../login.php");
    exit;
}


$id=$_GET['id'];

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

<div class="listar_conteudo">
<div class="crud">
        <a href="add_produto.php?id=<?php echo $id;?>" class="adicionar">Adicionar</a>
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
        <a href="edd_produto.php?id=<?php echo $id;?>" class="editar">Editar</a>
        <a href="ex_produto.php?id=<?php echo $id;?>" class="excluir">Excluir</a>
        </div>
<?php endforeach?>
</div>
