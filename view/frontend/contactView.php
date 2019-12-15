<?php $title = 'Contact'; ?> <!-- ---- Titre de la page ---- -->

     
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

        <!-- Si la variable prénom existe, alors : Message de validation -->
        <?php if ($prenom): ?>
            <div id="messageSend" class="container">
                <h2><?php echo htmlspecialchars($prenom) . ", " ?>votre message a bien été envoyé.</h2>
                <h6>L'auteur vous répondra dans les plus bref délais.</h6>
                <a class="btn mt-2" href="index.php?action=Nouveau-formulaire">Envoyer un nouveau message</a>
            </div>

        <!-- Sinon : Formulaire d'envoi de message -->
        <?php else: ?>
        <form action="index.php?action=Envoi-message" method="post" id="contenairForm" class="col-xs-12 col-md-11 col-lg-8 m-auto needs-validation" novalidate>

            <h4>Formulaire de contact</h4>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nom">Nom</label>
                    <input name="nom" type="text" class="form-control" id="nom" placeholder="Nom" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="prenom">Prénom</label>
                    <input name="prenom" type="text" class="form-control" id="prenom" placeholder="Prénom" required>
                </div>
            </div>

            <div class="form-group">
                <label for="emailForm">Email</label>
                <input name="emailForm" type="email" class="form-control" id="emailForm" placeholder="exemple@exemple.com" required>
            </div>

            <div class="form-group">
                <label for="titreMessage">Titre du message</label>
                <input name="titreMessage" type="text" class="form-control" id="titreMessage" placeholder="Auteur, chapitre, avis personnel, etc..." required>
            </div>

            <div class="form-group">
                <label for="message">Votre message</label>
                <textarea name="message" id="message" class="form-control" aria-label="With textarea" required></textarea>
            </div>

            <div class="form-group">
                <div class="form-check">
                    <input name="rgpd" class="form-check-input" type="checkbox" id="rgpd" required>
                    <label class="form-check-label" for="rgpd">
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
        <?php endif; ?>
    </section>


    <!-- ----------- Transition 2 ----------- -->


    <section id="transition2">

    </section>

    <!-- ---- End ---- -->


<?php $content = ob_get_clean(); ?>

<!-- ------------------------ Fin de $content ------------------------------ --> 



<?php require('template.php'); ?>





