<?php
require './classes/Filmes.php';

$titilo = 'Cinebox - Inicio';
include './includes/header.php';
include './includes/banner.php';


$filmes = new Filmes();
$dados = $filmes -> LFBanco();

echo $dados;

include './includes/filmes_lista.php';

include './includes/footer.php';
