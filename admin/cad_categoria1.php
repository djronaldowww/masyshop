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
<label>Cadastro categoria</label><br>
<label class="formlabel">Nome:</label>
<input class="fild" type="text" name="nome"><br>
<label class="formlabel">Titulo:</label>
<input class="fild"  tupe="text" name="titulo"><br>
<label class="formlabel">Categoria pai:</label>
<input class="fild"  type="text" name="cat_pai"><br>
<label class="formlabel">Descrição:</label>
<textarea name="descricao" classe="area"></textarea>
<input class="enviar" type="submit" name="enviar"><br>

</form>