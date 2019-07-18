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
<label>Cadastro Artigo</label><br>
<label class="formlabel">Nome:</label><br>
<input class="fild" type="text" name="nome"><br>
<label class="formlabel">Titulo:</label><br>
<input class="fild"  tupe="text" name="titulo"><br>
<label class="formlabel">Descrição:</label><br>
<input class="fild"  type="text" name="descricao"><br>
<label class="formlabel">Texto:</label><br><br>
<div id="dvCentro">
            <textarea id="txtArtigo" name="txtArtigo"></textarea>
        </div>
        <script src="includes/ckeditor/ckeditor.js"></script>
        <script>
                CKEDITOR.replace( 'txtArtigo' );
        </script><br>
<input class="enviar" type="submit" name="enviar"><br>
</form>