<html>
<head>
<title>cadastro</title>
</head>
<body>
<form name="cadastrar"action="val_produto.php" method="POST">
nome:<br>
<input type="text" name="nome"><br>
descriçao:<br>
        <textarea id="txtArtigo" name="txtArtigo"></textarea><br>
        <script src="../includes/ckeditor/ckeditor.js"></script>
        <script>
                CKEDITOR.replace( 'txtArtigo' );
        </script>
detalhes:<br>
<input type="text" name="destalhes"><br>
categoria:<br>
<input type="text" name="categoria"><br>
Pagamento:<br>
<textarea placeholder="insira um botao de pagamento:"></textarea><br>
preço:<br>
<input type="text" name="preco"><br>
<input type="submit" name="enviar">
</form>
</body>
</html>