<?php
include_once("conexao.php");
$enviar=$_POST['enviar'];
$nome=$_POST['nome'];
$titulo=$_POST['titulo'];
$descricao=$_POST['descricao'];
$categoria=$_POST['categoria'];
$subcategoria=$_POST['subcategoria'];
$estatus=$_POST['estatus'];
$foto_produto=$_FILES['foto']['name'];
$preco=$_POST['preco'];
$pagamento=$_POST['pagamento'];

if(isset($enviar)){
if(!empty($nome)||!empty($titulo)||!empty($foto)||!empty($preco)||!empty($pagamento)){
    echo "alguns campos precisam ser preenchidos!";
}else if(!empty($nome)&&!empty($titulo)&&!empty($foto)&&!empty($preco)&&!empty($pagamento)){
    echo "Preencha todos os campos!";
}else if(empty($nome)&&empty($titulo)&&empty($foto)&&empty($preco)&&empty($pagamento)){
    $query=mysqli_query($conexao,"INSERT INTO produtos (nome,titulo,descricao,categoria,subcategoria,estatus,foto_produto,preco,pagamento) VALUES ('$nome','$titulo','$descricao','$categoria','$subcategoria','$estatus','$foto_produto','$preco','$pagamento')");
    echo "cadastro realizado com sucesso!";
    header("Location:index.php");
}else{
    echo "Falha ao realizar o cadastro!";
}
}
?>