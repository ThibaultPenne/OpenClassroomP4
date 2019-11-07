
<!-- ---- Titre de la page ---- -->
<?php $title = 'Billet simple pour l Alaska'; ?>


<!-- ---- La Navbar : Titre ---- -->
<?php ob_start(); ?>

    <a id="navTitre" class="navbar-brand" href="#">
        Lecture innovante d'un nouveau roman
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

    <input id="connexionBtn" type="button" class="btn mb-2" name="valider" value="Se connecter" onclick="window.location.href='<?="index.php?action=Admin"?>'" />

<?php $menu_navbar_admin = ob_get_clean(); ?>



<!-- ------------------------ Début de $content ------------------------------ --> 

<?php ob_start(); ?> 


    <!-- ----------- Le Slider ----------- -->

    <!-- Slider -->
    <section id="slider" class="" >

        <!-- Slider (Slideshow) -->
        <div id="slideshow" class="">

            <!-- ---------    Slide 1 - Introduction    ----------- -->

            <figure id="slide1" class="mySlides">
                <img class="slideshowImg" src="public/images/slide1.png" alt= "...">
                <figcaption>
                    <h2>Billet simple pour l'Alaska</h2>
                    <p>
                        une oeuvre réalisée par Jean Forteroche.
                    </p>
                </figcaption>
            </figure>

            <!-- ---------    Slide 2 - Le Projet    ----------- -->

            <figure id="slide2" class="mySlides">
                <img class="slideshowImg" src="public/images/slide2.png" alt= "...">
                <figcaption>
                    <h2>Le Projet</h2>
                    <p>
                        Jean Forteroche travaille actuellement sur un nouveau roman, "Billet simple pour l'Alaska". Il souhaite innover en le publiant sous formes de chapitres en ligne ici même.
                    </p>
                     <h4>A présent, vous n'avez plus qu'à ...</h4>
                    <button id="goChapitres" onclick="window.location.href='<?="index.php?action=Chapitres"?>'">Plonger dans l'histoire</button>
                </figcaption>
            </figure>

        </div>

    </section>

    <!-- ---- End ---- -->


    <!-- ----------- Transition 1 ----------- -->


    <section id="transition1"></section>


    <!-- ----------- La Biographie ----------- -->


    <section id="bio">

        <div id="bioContenair" class="container">
            <hr>
            <h2>Jean Forteroche</h2>
            <div id="bioPart1">
                <h3>A propos</h3>
                <img src="public/images/jean1.png">
                <p>
                  Portrait original de l'acteur, l'auteur, l'aventurier, le passionné... mais avant tout de l'homme derrière l'histoire.  
                </p>
            </div>

            <div id="bioPart2" class="row">
                <div id="bio2Text" class="col-xs-12 col-lg-7">
                    <h4>SON HISTOIRE</h4>
                    <h6>Jeunesse et formation</h6>
                    <p>
                        Jean Forteroche est le second fils d'un couple d'avocats, il grandit à Santurce, un quartier de San Juan de Porto Rico. Sa mère meurt d'une hépatite alors qu'il est âgé de 9 ans, et sa famille déménage trois ans plus tard à Mercersburg dans la campagne de Pennsylvanie. À l'âge de 13 ans, Jean est inscrit dans une pension préparant aux meilleures écoles. Son père veut faire de lui un avocat. Il suit les conseils de son père et part étudier à l'université de Californie à San Diego, mais il abandonne rapidement pour entrer à la célèbre Square Acting School de New York.
                    </p>
                    <h6>Acteur</h6>
                    <p>
                        Il débute avec de petits rôles dans plusieurs séries dont Deux flics à Miami en 1987. Il obtient un peu plus tard ses premiers petits rôles au cinéma entre autres dans Permis de tuer (1989) en devenant le plus jeune adversaire de James Bond.<br>
                        La consécration arrive avec son interprétation de Che Guevara dans le diptyque Che, rôle pour lequel il est récompensé par le prix d'interprétation masculine du Festival de Cannes 2008.
                    </p>
                    <h6>Auteur</h6>
                    <p>
                        L'an 2000 est un véritable tournant pour l'auteur. Après avoir sorti un premier roman, Skidamarink, Jean Forteroche survit miraculeusement à un grave accident de voiture. Cet événement marquant lui fait soudainement prendre conscience que la mort peut arriver à tout moment. Ressentant un vif besoin d'écrire sur l'urgence de vivre, il commence à se documenter sur les cas d'expérience de mort imminente. C'est ainsi qu'il donne naissance en 2004 à son premier grand succès, "Et après".
                    </p>
                    <h6>Explorateur</h6>
                    <p>
                        Jean est aussi un aventurier. Il explore le monde en quête d'inspiration et cette fois ci, vous pourrez suivre son aventure en Alaska tout au long des parutions des chapitres que composeront son roman.
                    </p>
                </div>
                <div id="bio2Img" class="col-lg-5">
                    <img src="public/images/jean2.png" class="img-responsive center-block">
                </div>
            </div>
        </div>
    </section>

    <!-- ---- End ---- -->


    <!-- ----------- Transition 2 ----------- -->


    <section id="transition2"></section>


    <!-- ----------- L'Apercu des derniers chapitres ----------- -->


    <section id="apercuChapitres">

        <div id="apercuContenair" class="container">
            <hr>
            <h2>Les derniers chapitres</h2>
            <div id="apercuPart1">
                <img src="public/images/lastChapter.png">
            </div>
            <div id="apercuPart2">
                <div id="barreBack" class="row justify-content-md-center">

                <!-- Requête SQL : Récupération des 3 derniers chapitres publiés en apercus -->
                <?php while ($data = $previewChaps->fetch()): ?>  

                    <div class="col-xs-12 col-md-3 previewChap">    
                        <div class="chapNbr" onclick="window.location.href='<?= "index.php?action=Chapitre&id=" . $data["id"] ?>'"><?php echo htmlspecialchars($data['numero']); ?>         
                        </div>
                        <h4><?php echo htmlspecialchars($data['titre']); ?></h4>
                        <p><?php echo substr($data['content_text'], 0, 150) . " ... "; ?></p>
                    </div>

                <?php endwhile; ?> <!-- Fin de la Requête SQL -->

                </div>
            </div>
        </div>
    </section>
        
    <!-- ---- End ---- -->


<?php $content = ob_get_clean(); ?> 

<!-- ------------------------ Fin de $content ------------------------------ --> 



<?php require('template.php'); ?>





