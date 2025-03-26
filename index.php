<?php
require './classes/Filmes.php';

$titulo = 'Cinebox - Inicio';
include './includes/header.php';
include './includes/banner.php';


$filmes = new Filmes();
$dadosFilmes = $filmes ->exibirListaFilmes();




include './includes/filmes_lista.php';

include './includes/footer.php';
