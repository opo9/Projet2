<?php

use App\Entity\Author;
use App\Entity\User;

require_once _TEMPLATEPATH_ . '\header.php';
?>

<?php foreach ($errors as $error) : ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $error ?>
    </div>
<?php endforeach ?>

<?php foreach ($authors as $author) : ?>
    <div class="row align-items-start g-5 py-5 my-5 bg-body-tertiary">
        <?php echo $author->getLastName() ?>
        <?php echo $author->getFirstName() ?>
        <?php echo $author->getDisplayName() ?>
        <a href="/index.php?controller=author&action=delete&id=<?php echo $author->getId() ?>">Remove</a>
        <a href="/index.php?controller=author&action=show&id=<?php echo $author->getId() ?>">see</a>
        <a href="/index.php?controller=author&action=edit&id=<?php echo $author->getId() ?>">edit</a>
    </div>
<?php endforeach ?>


<?php require_once _TEMPLATEPATH_ . '\footer.php'; ?>