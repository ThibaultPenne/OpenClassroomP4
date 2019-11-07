
<!-- ---- Titre de la page ---- -->
<?php $title = 'Page d erreur'; ?>


<!-- ---- La Navbar : Titre ---- -->
<?php ob_start(); ?>

    <a id="navTitre" class="navbar-brand" href="#">
        Une erreur est survenue !
    </a>  

<?php $menu_navbar_titre = ob_get_clean(); ?>


<!-- ---- La Navbar : Acceuil / Chapitres / Contact ---- -->
<?php ob_start(); ?>

    <li class="nav-item active">
        <a class="nav-link" href="index.php">Accueil</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?='index.php?action=Chapitres'?>">Chapitres</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?='index.php?action=Contact'?>">Contact</a>
    </li>

<?php $menu_navbar = ob_get_clean(); ?>


<!-- ---- La Navbar : Admin ---- -->
<?php ob_start(); ?>

    <input id="connexionBtn" type="button" class="btn mb-2" name="valider" value="Se connecter" onclick="window.location.href='<?='index.php?action=Admin'?>'" />

<?php $menu_navbar_admin = ob_get_clean(); ?>



<!-- ------------------------ Début de $content ------------------------------ --> 

<?php ob_start(); ?>

    <section id="bio">
        <div id="bioContenair" class="container">
            <p id="errorText"><?= $errorMsg ?></p>
        </div>
    </section>
    
<?php $content = ob_get_clean(); ?>

<!-- ------------------------ Fin de $content ------------------------------ --> 



<?php require('template.php'); ?>





