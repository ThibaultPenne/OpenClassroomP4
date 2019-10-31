

<?php ob_start(); ?>

    <div id="chapitre1" class="col-xs-12 col-lg-10">
        <h6>L'histoire n'attend  plus que vous !</h6>
    </div>

<?php $my_chapitre = ob_get_clean(); ?>

<!-- --------------------------- -->

<?php ob_start(); ?>

    <div id="noComment" class="col-12">
        <h6>Pas de chapitres, pas de commentaires.</h6>
    </div>

<?php $my_commentaires = ob_get_clean(); ?>



<?php require('templateChap.php'); ?>





