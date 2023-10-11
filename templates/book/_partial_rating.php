<?php

use App\Entity\User;

/** @var  App\Entity\Rating $newRating */
?>
<div class="card">
    <div class="card-body p-4">


        <div class="row mb-3">
            <h2>Note des utilisateurs</h2>
            <div class="row align-items-center justify-content-center">
                <div class="rate col-6">
                    <?php for ($i = 5; $i >= 1; $i--) : ?>
                        <?php if ($i == $averageRate) : ?>
                            <input type="radio" id="avgstar<?php echo $i ?>" name="rate" value="<?php echo $i ?>" checked="checked" disabled>
                            <label for="avgstar<?php echo $i ?>" title="<?php echo $i ?> étoiles"><?php echo $i ?> étoiles</label>
                        <?php else : ?>
                            <input type="radio" id="avgstar<?php echo $i ?>" name="rate" value="<?php echo $i ?>" disabled>
                            <label for="avgstar<?php echo $i ?>" title="<?php echo $i ?> étoiles"><?php echo $i ?> étoiles</label>
                        <?php endif; ?>
                    <?php endfor; ?>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <h3>Noter ce livre</h3>

            <form method="POST">
                <div class="mb-3">
                    <div class="row">
                        <div class="col-4 py-2">
                            <label for="rate" class="form-label"><?php echo $rating ? "Modifier votre note" : "Attribuer votre note" ?></label>

                        </div>
                        <div class="col-8">
                            <div class="rate enabled">
                                <?php for ($i = 5; $i >= 1; $i--) : ?>
                                    <?php if ($i == $rating) : ?>
                                        <input type="radio" id="star<?php echo $i ?>" name="rate" value="<?php echo $i ?>" checked="checked">
                                        <label for="star<?php echo $i ?>" title="<?php echo $i ?> étoiles"><?php echo $i ?> étoiles</label>

                                    <?php else : ?>
                                        <input type="radio" id="star<?php echo $i ?>" name="rate" value="<?php echo $i ?>">
                                        <label for="star<?php echo $i ?>" title="<?php echo $i ?> étoiles"><?php echo $i ?> étoiles</label>
                                    <?php endif; ?>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <input type="hidden" name="book_id" value="<?php echo $newRating->getBookId() ?>">
                <input type="hidden" name="user_id" value="<?php echo $newRating->getUserId() ?>">

                <?php if ($newRating->getId()) : ?>
                    <input type="hidden" name="id" value="<?php echo $newRating->getId() ?>">
                <?php endif; ?>

                <div class="mb-3">
                    <input type="submit" name="saveRating" class="btn btn-primary form-control " value="Noter">
                </div>

            </form>
        </div>



    </div>
</div>