<?php
@session_start();
include_once("conexao.php");

$comando="SELECT *FROM configuracao where id='1'";
$sql=mysqli_query($conexao,$comando);
$resultado=mysqli_fetch_all($sql,MYSQLI_ASSOC);

?>

<?php
foreach($resultado as $linha):
    $titulo=$linha['titulo'];
    $subtitulo=$linha['subtitulo'];
    $menu=$linha['menu'];
    $conteudo=$linha['conteudo'];
    $vitrine=$linha['vitrine'];
    $avatar=$linha['avatar'];
    $admtema=$linha['admtema'];
    $tema=$linha['tema'];
  
?>
<div class="header">

<div class="titulo">
<?php echo $titulo; ?>
</div>
<div class="subtitulo">
<?php echo $subtitulo; ?>
</div>
</div>
<?php endforeach?>