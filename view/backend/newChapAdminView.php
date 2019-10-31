


 <?php ob_start(); ?>
    <h1 class="">Ecriture d'un nouveau chapitre</h1>
    <p class="col-12 m-auto pb-5">
        L'imagination vient en créant.
    </p>
<?php $myChapInfo1 = ob_get_clean(); ?>

<!-- --------------------------- -->

<?php ob_start(); ?>

	<div class="form-group">
        <label id="labelTitreChap" for="inputAddress">Titre du chapitre</label>
        <input type="text" class="form-control" id="inputTitreChap" placeholder="Le titre de votre chapitre...">
    </div>
    <div id="champDL" class="input-group mb-3">
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputfileDL">
            <label class="custom-file-label" for="inputfileDL" aria-describedby="inputGroupFileAddon02">Télécharger une image</label>
        </div>
    </div>

<?php $myChapInfo2 = ob_get_clean(); ?>

<!-- --------------------------- -->

<?php ob_start(); ?>

Il n'y a plus qu'à s'y mettre !

<?php $myChapContent = ob_get_clean(); ?>

<!-- --------------------------- -->

<?php require('templateNewChap.php'); ?>





