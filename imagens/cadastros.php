<?php
include_once("../conexao.php");
$nome = $_POST['nome'];
$nome_imagem = $_FILES['arquivo']['name'];
$cadastrar = $_POST['cadastrar'];
echo $nome."<br>";
echo $nome_imagem."<br>";
echo $cadastrar;

$query="INSERT INTO arquivo (nome,imagem) VALUES('$nome','$nome_imagem')";
$sql=@mysqli_query($conexao,$query);
$ultimo_id=mysqli_insert_id($conexao);
echo "<h1>$ultimo_id</h1>";

$_UP['pasta']="imagem/0/";

mkdir($_UP['pasta'],777);

if(move_uploaded_file($_FILES['arquivo']['tmp_name'],$_UP['pasta'].$nome_imagem)){
    echo "Imagem salva com sucesso!";
}else{
    echo "nao foi posivel fazer o upload!";
}

?>
<html>
<form name="upload" action="cadastros.php" method="POST" enctype="multipart/form-data">
nome:
<input type="text" name="nome"><br>
imagem:
<input type="file" name="arquivo"><br>
<input type="submit" name="cadastrar">

</form>
</html>