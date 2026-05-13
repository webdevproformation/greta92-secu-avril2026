<div class="container">

    <h1 class="my-2">Ajouter une nouvelle recette</h1>

    <form method="POST">
        <div class="mb-3">
            <label for="nom">nom</label>
            <input type="text" id="nom" class="form-control" name="nom">
        </div>
        <div class="mb-3">
            <label for="imgPath">photo</label>
            <input type="text" id="imgPath" class="form-control" name="imgPath">
        </div>
        <div class="mb-3">
            <label for="description">description</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-success">
        </div>
    </form>

</div>