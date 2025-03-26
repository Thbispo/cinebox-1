<div class="col col-3">
    <figure>

        <img src="./assets/IMG/poster/<?= $value['poster']?>" alt="poster avatar-o-caminho-da-agua"
            class="foto-produto">

        <figcaption>

            <h4><?=$value['nome']?></h4>
            <span class="preco"><?=$value['valor_ingresso']?></span>

            <p class="descrição"><?= $value['descricao']?></p>
                
            </p>

        </figcaption>

        <span class="genero">
            <label style="background-color: #070373; color: white;">Fantasia</label>
            <label style="background-color: #580259; color: white;">Drama</label>
            <label style="background-color: #D966Ba; color: white;">Musica</label>
        </span>

    </figure>
</div>