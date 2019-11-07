
<!-- ---- Titre de la page ---- -->
<?php $title = 'Les chapitres'; ?>


<!-- ---- La Navbar : Titre ---- -->
<?php ob_start(); ?>

    <a id="navTitre" class="navbar-brand" href="#">
        Lecture innovante d'un nouveau roman
    </a>  

<?php $menu_navbar_titre = ob_get_clean(); ?>


<!-- ---- La Navbar : Acceuil / Chapitres / Contact ---- -->
<?php ob_start(); ?>

    <li class="nav-item">
        <a class="nav-link" href="index.php">Accueil</a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="<?='index.php?action=Chapitres'?>">Chapitres</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?='index.php?action=Contact'?>">Contact</a>
    </li>

<?php $menu_navbar = ob_get_clean(); ?>


<!-- ---- La Navbar : Admin ---- -->
<?php ob_start(); ?>

    <input id="connexionBtn" type="button" class="btn mb-2" name="valider" value="Se connecter" onclick="window.location.href='<?="index.php?action=Admin"?>'" />

<?php $menu_navbar_admin = ob_get_clean(); ?>



<!-- ------------------------ Début de $content ------------------------------ --> 

<?php ob_start(); ?>

    <!-- ----------- Intro image ----------- -->


    <section id="introImgContenair" class="" >
        <img id="introImg" src="public/images/chapitresImg1.png" alt= "...">
        <h2 class="container-fluid">Il était une fois...</h2>
    </section>



    <!-- ----------- Transition 1 ----------- -->


    <section id="transition1"></section>


    <!-- ----------- Les chapitres ----------- -->


    <section id="bio">

        <div id="bioContenair" class="container">
            <hr>
            <h2>Les chapitres</h2>

            <div id="chapsPart1" class="row">
            	<div id="chapsListImg" class="col-lg-5">
                    <img src="public/images/chapitresImg2.png" class="img-responsive center-block">
                    <h6>Billet simple pour l'Alaska</h6>
                    <p>
                        La publication du roman à débuter le 6 Septembre 2019. Vous retrouverz ici chaques chapitres qui le composent. Bonne lecture !
                    </p>
                </div>
                <div id="chapsPart2" class="col-xs-12 col-lg-7">
                    
                    <!-- Requête SQL : Récupération de tous les chapitres -->
                    <?php while ($data = $chapters->fetch()): ?>  

		                <div id="chapPreviewFull" class="col-12">
	                        <div class="row justify-content-between">
	                            <div class="col-5">
	                                <h4><?php echo htmlspecialchars($data['numero']); ?></h4>
	                                <p><?php echo htmlspecialchars($data['titre']); ?></p>
	                            </div>
	                            <div class="col-4">
	                                <h5>Publié le <?php echo htmlspecialchars($data['date_publication_fra']); ?></h5>
	                                <input id="lireBtn" type="button" class="btn btn-info" value="Lire" onclick="window.location.href='<?= "index.php?action=Chapitre&id=" . $data["id"] ?>'">
	                            </div>
	    					</div>
	                    </div>

            		<?php endwhile; ?> <!-- Fin de la Requête SQL -->

                </div>
            </div>
        </div>

    </section> 
            
    <!-- ---- End ---- -->                    


    <!-- ----------- Transition 2 ----------- -->


    <section id="transition2"></section>

    <!-- ---- End ---- -->


<?php $content = ob_get_clean(); ?>

<!-- ------------------------ Fin de $content ------------------------------ --> 



<?php require('template.php'); ?>





