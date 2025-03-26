<?php

$titulo = "";
include './includes/header.php';
require './classes/Filmes.php';

$filmes = new Filmes();
$dadosFilmes = $filmes->exibirListaFilmes();


include './includes/filmes_lista.php';
include './includes/footer.php';