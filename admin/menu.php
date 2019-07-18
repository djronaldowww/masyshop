<?php 
@session_start();
include_once("conexao.php");

if(!isset($_SESSION['login'])&& !isset($_SESSION['senha'])){
    header("Location:../login.php");
    exit;
}

?>
<ul>
<li><a href="../index.php">Inicio</a></li>
<li><a href="#">Adicionar</a>
<ul>
<li><a href="cad_artigo.php">Artigos</a></li>
<li><a href="cad_categoria.php">Categorias</a></li>
<li><a href="cad_produto.php">Produtos</a></li>

<li><a href="cadastro.php">usuarios</a></li>
</ul>
</li>
<li><a href="#.php">Loja</a>
<ul>
<li><a href="contato.php">Contato</a></li>
<li><a href="produtos.php">Produtos</a></li>
<li><a href="#">Minhas compras</a>
<ul>
<li><a href="finalizadas.php">Finalizadas</a></li>
<li><a href="pendentes.php">Pendentes</a></li>
</ul>
</li>
<li><a href="#">Configurações</a>
<ul>
<li><a href="index.php">Aparencia</a></li>
<li><a href="index.php">Menu</a></li>
<li><a href="index.php">header</a></li>
</ul>
</li>
<li><a href="download.php">Download</a></li>
<li><a href="downloadvip.php">Download vip</a></li>
<li><a href="carrinho.php">carrinho</a></li>
</ul>
</li>

<li><a href="#">Visualizar</a>
<ul>
<li><a href="artigos.php">Artigos</a></li>
<li><a href="categorias.php">Categorias</a></li>
<li><a href="produtos.php">Produtos</a></li>

<li><a href="usuarios.php">Usuarios</a></li>
</ul>
</li>
<li><a href="#">Midias</a>
<ul>
<li><a href="imagens.php">Imagens</a></li>
<li><a href="videos.php">Videos</a></li>
<li><a href="pdf.php">pdf</a></li>
<li><a href="zip.php">zip</a></li>
</ul>
</li>
</ul>