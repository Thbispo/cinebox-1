<div class="col-lg-<?= isset($qntd) ? $qntd : 3 ?> col-md-6 col-sm-12">
    <a href="Detalhes.php?id=<?= $value['id'] ?>" style="text-decoration: none; color: black;">
        <figure>
            <img src="./assets/IMG/poster/<?= $value['poster'] ?>" alt="poster <?= $value['nome'] ?>" class="foto-produto">

            <figcaption>
                <h4><?= $value['nome'] ?></h4>
                <span class="preco"><?= $value['valor_ingresso'] ?></span>
                <p class="descrição"><?= $value['descricao'] ?></p>
            </figcaption>

            <span class="genero">
                <?php foreach ($generosFilmes as $value2) { ?>
                    <label style="background-color:#<?= $value2['cor'] ?>; color: white;">
                        <?= $value2['nome'] ?>
                    </label>
                <?php } ?>
                <label style="background-color: #070373; color: white;">Fantasia</label>
                <label style="background-color: #580259; color: white;">Drama</label>
                <label style="background-color: #D966Ba; color: white;">Ficção</label>
            </span>
        </figure>
    </a>
</div>
