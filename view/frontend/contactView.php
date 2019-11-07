
<!-- ---- Titre de la page ---- -->
<?php $title = 'Contact'; ?>

     
<!-- ---- Titre de la page ---- -->
<?php ob_start(); ?>

    <a id="navTitre" class="navbar-brand" href="#">
        Lecture innovante d'un nouveau roman
    </a>  

<?php $menu_navbar_titre = ob_get_clean(); ?>


<!-- ---- Titre de la page ---- -->
<?php ob_start(); ?>

    <li class="nav-item">
        <a class="nav-link" href="index.php">Accueil</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?='index.php?action=Chapitres'?>">Chapitres</a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="<?='index.php?action=Contact'?>">Contact</a>
    </li>

<?php $menu_navbar = ob_get_clean(); ?>


<!-- ---- Titre de la page ---- -->
<?php ob_start(); ?>

    <input id="connexionBtn" type="button" class="btn mb-2" name="valider" value="Se connecter" onclick="window.location.href='<?='index.php?action=Admin'?>'" />

<?php $menu_navbar_admin = ob_get_clean(); ?>
       


<!-- ------------------------ Début de $content ------------------------------ --> 

<?php ob_start(); ?>

    <!-- ----------- Intro image ----------- -->


    <section id="introImgContenair2" class="" >
        <img id="introImg" src="public/images/contactImg.png" alt= "...">
        <h2 id="contactTitre" class="container-fluid">Prennez contact avec l'auteur</h2>
    </section>



    <!-- ----------- Transition 1 ----------- -->


    <section id="transition1">

    </section>


    <!-- ----------- Le formulaire de contact ----------- -->


    <section id="contactFormContainer" class="container">
        <form id="contenairForm" class="col-xs-12 col-md-11 col-lg-8 m-auto needs-validation" novalidate>

            <h4>Formulaire de contact</h4>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputNom">Nom</label>
                    <input type="name" class="form-control" id="inputNom" placeholder="Nom" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPrenom">Prénom</label>
                    <input type="name" class="form-control" id="inputPrenom" placeholder="Prénom" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputAddress">Email</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="exemple@exemple.com" required>
            </div>

            <div class="form-group">
                <label for="inputAddress2">Titre du message</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Auteur, chapitre, avis personnel, etc..." required>
            </div>

            <div class="form-group">
                <label for="contactTextarea">Votre message</label>
                <textarea id="contactTextarea" class="form-control" aria-label="With textarea" required></textarea>
            </div>

            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" required>
                    <label class="form-check-label" for="gridCheck">
                        Je consens au traitement de mes données personnelles par Jean Forteroche, dans le but de recevoir une réponse par e-mail (selon le RGPD).
                    </label>
                    <div class="invalid-tooltip">
                        Pour recevoir une réponse, il faut cocher cette case.
                    </div>
                </div>
            </div>
            <div id="btnContenair" class="container">
                <button type="submit" class="btn mt-3">Envoyez le formulaire</button>
            </div>
        </form>
    </section>


    <!-- ----------- Transition 2 ----------- -->


    <section id="transition2">

    </section>

    <!-- ---- End ---- -->


<?php $content = ob_get_clean(); ?>

<!-- ------------------------ Fin de $content ------------------------------ --> 



<?php require('template.php'); ?>





