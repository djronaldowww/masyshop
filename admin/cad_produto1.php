<?php 
@session_start();
include_once("conexao.php");

if(!isset($_SESSION['login'])&& !isset($_SESSION['senha'])){
    header("Location:../login.php");
    exit;
}

?>
<br>
<form class="form" action="cadastro1.php" method="POST">
<div class="foto"></div>
<label>Cadastro produtos</label><br>
<label class="formlabel">Nome:</label>
<input class="fild" type="text" name="nome"><br>
<label class="formlabel">Titulo:</label>
<input class="fild"  tupe="text" name="titulo"><br>
<label class="formlabel">Categoria:</label>
<input class="fild"  type="text" name="categoria"><br>
<label class="formlabel">Subcategoria:</label>
<input class="fild"  type="text" name="subcategoria"><br>
<label class="formlabel">Descrição:</label>
<textarea name="descricao" classe="area"></textarea>
<label class="formlabel">Preço:</label>
<input class="fild"  type="text" name="preco"><br>
<input class="enviar" type="submit" name="enviar"><br>
</form>