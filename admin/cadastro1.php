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
<label>Cadastro</label><br>
<label class="formlabel">Nome:</label>
<input class="fild" type="text" name="nome"><br>
<label class="formlabel">Email:</label>
<input class="fild"  tupe="text" name="email"><br>
<label class="formlabel">Repetir email:</label>
<input class="fild"  tupe="text" name="remail"><br>
<label class="formlabel">Senha:</label>
<input class="fild"  type="senha" name="senha"><br>
<label class="formlabel">Repetir senha:</label>
<input class="fild"  type="text" name="rsenha"><br>
<input class="enviar" type="submit" name="enviar"><br>
<div class="cadastrar">
    <a href="login.php">Logar</a>
</div>
</form>