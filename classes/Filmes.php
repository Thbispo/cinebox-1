<?php
class Filmes
{
    public $conexaoBanco;

    public function __construct()
    {

        $dsn = 'mysql:dbname=db_cinebox;host=127.0.0.1';
        $user = 'root';
        $password = '';
        $auxScript = '';


        $this->conexaoBanco = new PDO($dsn, $user, $password);
    }

    public function exibirlistaFilmes($limite = '')
    {


        $auxScript = '';

        if (!empty($limite)) {

            $auxScript = " ORDER BY RAND() LIMIT {$limite}";
        }




        $script = 'SELECT * FROM tb_filmes' . $auxScript;

        return  $this->conexaoBanco->query($script)->fetchAll();
    }

    public function exibirDetalhesFilmes()
    {
        $id = $_GET['id'];

        $script = "SELECT tb_generos.cor, tb_filmes.*, tb_filme_genero.*
        FROM tb_filme_genero
        INNER JOIN tb_filmes
        ON tb_filmes.id=tb_filme_genero.filme_id
        INNER JOIN tb_generos
        ON tb_generos.id=tb_filme_genero.genero_id
        WHERE tb_filme_genero.filme_id = {$id}";

        return $this->conexaoBanco->query($script)->fetch();
    }
}