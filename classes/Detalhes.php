<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes dos Filmes</title>
    <link rel="stylesheet" href="detalhes.css">
</head>
<body>
    <section id="detalhe">
        <?php
        // Array de filmes (exemplo)
        $filmes = [
            [
                'titulo' => 'Nome do Filme 1',
                'poster' => 'poster1.jpg',
                'avaliacao' => '⭐ 4.8',
                'generos' => ['Aventura', 'Fantasia'],
                'preco' => 'R$ 30,00',
                'descricao' => 'Descrição do filme 1.'
            ],
            [
                'titulo' => 'Nome do Filme 2',
                'poster' => 'poster2.jpg',
                'avaliacao' => '⭐ 4.5',
                'generos' => ['Drama', 'Ficção'],
                'preco' => 'R$ 25,00',
                'descricao' => 'Descrição do filme 2.'
            ],
            // Adicione mais filmes aqui...
            // Exemplo para 24 filmes
        ];

        foreach ($filmes as $filme) {
            echo '<div class="detalhe-produto">';
            echo '<img src="' . $filme['poster'] . '" alt="Pôster do Filme" class="foto">';
            echo '<h1 class="titulo-filme">' . $filme['titulo'] . '</h1>';
            echo '<span class="avaliacao">' . $filme['avaliacao'] . '</span>';
            echo '<div class="genero">';
            foreach ($filme['generos'] as $genero) {
                echo '<span style="background-color: #ff5733;">' . $genero . '</span>'; // Você pode mudar a cor conforme necessário
            }
            echo '</div>';
            echo '<div class="preco">' . $filme['preco'] . '</div>';
            echo '<div class="versao-filme">';
            echo '<button>2D</button>';
            echo '<button>3D</button>';
            echo '<button>IMAX</button>';
            echo '</div>';
            echo '<div class="sobre-filme">';
            echo '<h4>Sobre o Filme</h4>';
            echo '<p>' . $filme['descricao'] . '</p>';
            echo '</div>';
            echo '<form>';
            echo '<button type="submit">Comprar Ingresso</button>';
            echo '</form>';
            echo '</div>'; // Fecha detalhe-produto
        }
        ?>
    </section>
</body>
</html>