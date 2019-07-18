<?php
include_once("conexao.php");

$query=mysqli_query("SELECT *FROM produtos ORDER BY id DESC");
$sql=mysqli_query($conexao,$query);
while($linha=mysqli_fetch_array($sql)==true){
    $nome=$linha['nome'];
    $titulo=$linha['titulo'];
    $descricao=$linha['descricao'];
    $categoria=$linha['categoria'];
    $subcategoria=$linha['subcategoria'];
    $estatus=$linha['estatus'];
    $foto_produto=$linha['foto_produto'];
    $preco=$linha['preco'];
    $pagamento=$linha['pagamento'];

    echo $nome;
    echo $titulo;
    echo $descricao;
    echo $categoria;
    echo $subcategoria;
    echo $estatus;
    echo $foto_produto;
    echo $preco;
    echo $pagamento;
}

?>