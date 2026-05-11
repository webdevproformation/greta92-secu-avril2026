<div class="container">
    <h1><?=  h($data["article"]->getTitre())  ?></h1>
    <img src="<?=  h($data["article"]->getUrlImg())  ?>" alt="" class="img-fluid">
    <div>
        <?=  h($data["article"]->getContenu())  ?>
    </div>
</div>