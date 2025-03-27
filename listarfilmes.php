<?php

$titulo = "";
include './includes/header.php';
require './classes/Filmes.php';
require './classes/Generos.php';

$filmes = new Filmes();
$dadosFilmes = $filmes->exibirListaFilmes();

$bob = new Generos();
$dadosGeneros = $bob->consultarListaGeneros();

include './includes/filmes_filtro.php';
include './includes/footer.php';