<html>
<head>
<title>cadastro de produtos</title>
</head>
<body>
<form name="cadastro de produtos" action="cad_produtos.php" method="POST" enctype="multipart/form-data">
<label >Nome *:</label><br>
<input type="text" name="nome"><br>
<label >Titulo *:</label><br>
<input type="text" name="titulo"><br>
<label >Descriçao:</label><br>
<input type="text" name="descricao"><br>
<label >Categoria:</label><br>
<input type="text" name="categoria"><br>
<label >Subcategoria:</label><br>
<input type="text" name="subcategoria"><br>
<label >Estatus:</label><br>
<input type="text" name="estatus"><br>
<label >Foto *:</label><br>
<input type="file" name="foto"><br>
<label >Preco *:</label><br>
<input type="text" name="preco"><br>
<label >Pagamento *:</label><br>
<input type="text" name="pagamento"><br><br>
<input type="submit" name="enviar" value="Enviar">

</form>
</body>
</html>