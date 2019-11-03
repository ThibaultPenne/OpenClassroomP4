
<?php $title = 'Les chapitres'; ?>
<?php ob_start(); ?>
    <link rel="stylesheet" href="../../public/css/fonts.css"/> <!-- Polices -->
    <link rel="stylesheet" href="../../public/css/style.css"/> <!-- Main CSS -->  
<?php $my_css = ob_get_clean(); ?>


<!-- --------------------------- -->


<?php ob_start(); ?>


        <!-- ---------------------- La Navbar -------------------------------- -->

        <?php ob_start(); ?>
            <li class="nav-item">
                <a class="nav-link" href="../../index.php">Accueil</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="chapitresView.php">Chapitres</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contactView.php">Contact</a>
            </li>
        <?php $menu_navbar = ob_get_clean(); ?>

        <?php ob_start(); ?>
            <input id="connexionBtn" type="button" class="btn mb-2" name="valider" value="Se connecter" onclick="window.location.href='../backend/adminView.php'" />
        <?php $menu_navbar_admin = ob_get_clean(); ?>


        <!-- ------------------------ Intro image ------------------------------ -->


        <section id="introImgContenair" class="" >
            <img id="introImg" src="../../public/images/chapitresImg.png" alt= "...">
            <h2 class="container-fluid">Il était une fois...</h2>
        </section>



        <!-- ----------------------- Transition 1 ------------------------------ -->


        <section id="transition1"></section>


        <!-- ------------------------ Les chapitres ---------------------------- -->


        <section id="bio">

            <div id="bioContenair" class="container">
                <hr>
                <h2>Les chapitres</h2>

                <div id="chapitresSelectorContenair" class="btn-group">
                    <button id="chapitresSelector" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Séléctionner un chapitre
                    </button>
                    <div id="chapDropDownMenu" class="dropdown-menu">
                        <a class="dropdown-item" href="chapitre1View.php">Chapitre 1</a>
                        <a class="dropdown-item" href="chapitre2View.php">Chapitre 2</a>
                        <a class="dropdown-item" href="chapitre3View.php">Chapitre 3</a>
                        <a class="dropdown-item" href="chapitre4View.php">Chapitre 4</a>
                        <a class="dropdown-item" href="chapitre5View.php">Chapitre 5</a>
                    </div>
                </div>

                <div id="bioPart2" class="row">
                    <?= $my_chapitre ?> <!-- Variable qui contient les chapitres -->
                </div>
            </div>
        </section> 
                


        <!-- ----------------------- Transition 2 ------------------------------- -->


        <section id="transition2"></section>


         <!-- ------------------ Les commentaires  ---------------- -->


        <section id="lesCommentaires" class="container">

            <!-- Partie 1 : Les commentaires -->
            <div id="commentairesContainer" class="container">

                <hr>
                <h2>Les commentaires</h2>

                <!-- Les commentaires - row -->
                <div class="row">

                    <?= $my_commentaires ?> <!-- Variable qui contient les commentaires -->
                   

                </div> <!-- Fin des commentaires - row -->

            </div> <!-- Fin de Partie 1 : Les commentaires -->

            <!-- ----------------------------------------- -->

            <!-- Partie 2 : Le formulaire -->

            <!-- Le formulaire - row -->
            <div class="container">

                <form id="contenairForm" class="col-sm-12 col-md-9 col-lg-9 col-xl-6 m-auto needs-validation" novalidate>
                    <h4>Ajouter un commentaire</h4>

                    <div class="form-group">
                        <label for="inputPseudo">Votre Pseudo</label>
                        <input type="text" class="form-control" id="inputPseudo" placeholder="8NINE, Blanche Neige, Musashi Miyamoto etc..." required>
                        <div class="valid-tooltip">
                            Oh ça à l'air pas mal !
                        </div>
                        <div class="invalid-tooltip">
                            Oups ! Un oubli ?
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="commentTextarea">Votre message</label>
                        <textarea class="form-control" id="commentTextarea" placeholder="Un message est requis" rows="5" required></textarea>
                        <div class="valid-tooltip">
                            J'y répond dès que possible !
                        </div>
                        <div class="invalid-tooltip">
                            Aucun message ?
                        </div>
                    </div>
                    <div id="btnContenair" class="container">
                        <button type="submit" class="btn">Soumettre le commentaire</button>
                    </div>

                </form> <!-- Fin de Partie 2 : Le formulaire -->

            </div>

        </section>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>





