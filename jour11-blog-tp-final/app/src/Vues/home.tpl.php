<div class="container">
    <h1 class="display-4"><?= h($data["h1"]) ?></h1>
    <section class="row">
        <?php foreach ( $data["articles"] as $key => $value ) : ?>
        <div class="col-4">
            <article class="card mb-3 position-relative">
                <h2 class="card-header h6">
                        <a href="<?= $router->generate("article" , ["id" => $value->getId()]) ?>" class="article-link link-dark text-decoration-none">
                            <?= h($value->getTitre()) ?>
                        </a>
                    </h2>
                    <img src="<?= h($value->getUrlImg()) ?>" alt="<?= h($value->getTitre()) ?>" class="img-card"  loading="lazy">
                    
                    
                <div class="card-body">
                    <p><?= h($value->lireLaSuite()) ?></p>
                </div>
                <div class="card-footer text-end">
                    <a href="<?= $router->generate("article" , ["id" => $value->getId()]) ?>" class="btn btn-primary">lire la suite</a>
                </div>
            </article>
        </div>
        <?php endforeach ?>
       
    </section>
</div>
   