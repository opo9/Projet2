<?php require_once _TEMPLATEPATH_ . '\header.php'; ?>

<h1><?= $pageTitle; ?></h1>

<?php foreach ($errors as $error) : ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $error ?>
    </div>
<?php endforeach ?>
<form method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="title" class="form-label">Titre</label>
        <input type="text" class="form-control " id="title" name="title" value="<?php echo $book->getTitle() ?>">

    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3"><?php echo $book->getDescription() ?></textarea>
    </div>

    <!-- Attention, cette liste doit être récupérer avec une requête-->
    <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <select name="type_id" id="type" class="form-select">
            <?php foreach ($types as $type) : ?>
                <option value="<?php echo htmlspecialchars($type->getId()) ?>"><?php echo htmlspecialchars($type->getName()) ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <!-- Attention, cette liste doit être récupérer avec une requête-->
    <div class="mb-3">
        <label for="author" class="form-label">Auteur</label>
        <select name="author_id" id="author" class="form-select">
            <?php foreach ($authors as $author) : ?>
                <option value="<?php echo htmlspecialchars($author->getId()) ?>"><?php echo htmlspecialchars($author->getDisplayName()) ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <input type="hidden" name="image" value="">
    <div class="mb-3">
        <label for="file" class="form-label">Image</label>
        <input type="file" name="file" id="file" class="form-control ">
    </div>

    <input type="submit" name="saveBook" class="btn btn-primary" value="Enregistrer">

</form>


<?php require_once _TEMPLATEPATH_ . '\footer.php'; ?>