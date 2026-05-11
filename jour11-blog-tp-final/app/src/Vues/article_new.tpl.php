<div class="container">
    <h1><?= h($data["h1"]) ?></h1>
    <?php if(!empty($data["erreur"])) :?>
        <div class="alert alert-danger">
            <?php foreach($data["erreur"] as $key => $value) : ?>
                <div><?= h($value) ?></div>
            <?php endforeach ?>
        </div>
    <?php endif ?>
    <form method="post" enctype="multipart/form-data">
        <?= csrfField() ?>
        <div class="mb-3">
            <label for="titre">titre *</label>
            <input type="text" name="titre" class="form-control" id="titre" value="<?= h($data["article"]->getTitre()) ?>">
        </div>
        <div class="mb-3">
            <label for="contenu">contenu *</label>
            <textarea name="contenu" id="contenu" cols="30" rows="10" class="form-control"><?= h($data["article"]->getContenu()) ?></textarea>
        </div>
        <div class="mb-3">
            <label for="img">image</label>
            <input type="file" name="img" class="form-control" id="img" accept="image/jpeg,image/png,image/gif,image/webp">
        </div>
        <div class="text-end">
            <input type="submit" class="btn btn-primary" value="créer nouvel article">
        </div>
    </form>
</div>