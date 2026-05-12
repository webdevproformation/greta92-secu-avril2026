<div class="container">
    <h1>Nos dernières recettes</h1>

    <section class="row">
        <?php foreach($data as $recette) : ?>
            <div class="col-4">
                <article class="card">
                    <h2><?= $recette["nom"] ?></h2>
                    <img src="<?= $recette["img"]  ?>" alt="">
                    <p><?=  $recette["description"] ?></p>
                </article>
            </div>
        <?php endforeach ?>
    </section>

</div>