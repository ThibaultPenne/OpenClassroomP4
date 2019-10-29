<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Projet 4</title> <!-- Onglet -->

        <!-- Mon CSS -->
        <link rel="stylesheet" href="public/css/fonts.css"/> <!-- Polices -->
        <link rel="stylesheet" href="public/css/style.css"/> <!-- Main CSS -->   

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>


    <body>
      

    <!-- Contenair englobant toute la page HTML -->  
    <div id="blocPage">


        <!-- ---------------------- La Navbar -------------------------------- -->


        <!-- Barre de Navigation -->
        <header id="navBar">

            <nav id="nav" class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">

                <a id="navTitre" class="navbar-brand" href="#">
                    Lecture innovante d'un nouveau roman
                </a>
                <button class="btn btn-dark d-lg-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i> 
                    </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav">

                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="view/frontend/chapitresVue.php">Chapitres</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="view/frontend/contactView.php">Contact</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</a>                    
                            <form id="menuDropDownNav" class="dropdown-menu p-3">
                                <div class="form-group">
                                    <label for="exampleDropdownFormEmail2">Adresse Email</label>
                                    <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@exemple.com" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleDropdownFormPassword2">Mot de passe</label>
                                    <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="********" name="password">
                                </div>
                                <input id="connexionBtn" type="button" class="btn mb-2" name="valider" value="Se connecter" onclick="window.location.href='view/backend/adminVue.php'" />
                            </form>           
                        </li>
                            <!-- Implanter une condition PHP pour rediriger l'admin vers la page d'admin si il rentre les bonnes informations de connexion -->

                    </ul>
                </div>
            </div>
            </nav>

        </header>


        <!-- ------------------------ Le Slider ------------------------------ -->

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
                        <button id="goChapitres" onclick="window.location.href='view/frontend/chapitresVue.php'">Plonger dans l'histoire</button>
                    </figcaption>
                </figure>

            </div>

        </section>


        <!-- ----------------------- Transition 1 ------------------------------ -->


        <section id="transition1">
            
        </section>


        <!-- ------------------------ La Biographie ---------------------------- -->


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


        <!-- ----------------------- Transition 2 ------------------------------- -->


        <section id="transition2">

        </section>


        <!-- ------------------ L'Apercu des derniers chapitres ---------------- -->


        <section id="apercuChapitres">

            <div id="apercuContenair" class="container">
                <hr>
                <h2>Les derniers chapitres</h2>
                <div id="apercuPart1">
                    <img src="public/images/lastChapter.png">
                </div>
                <div id="apercuPart2">
                    <div id="barreBack" class="row justify-content-md-center">
                        <div class="col-xs-12 col-md-3 previewChap">
                            <div class="chapNbr">Chapitre 1</div>
                            <h4>Titre du chapitre 1</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="col-xs-12 col-md-3 previewChap">
                            <div class="chapNbr">Chapitre 2</div>
                            <h4>Titre du chapitre 2</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="col-xs-12 col-md-3 previewChap">
                            <div class="chapNbr">Chapitre 3</div>
                            <h4>Titre du chapitre 3</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- ------------------------ Des Tests Php ------------------------------ -->


        <section id="testPhp">
            <p>
                Cette page contient du code HTML avec des balises PHP. <br>
                <br>
                <?php echo "Bonjour ! "; ?> <!-- echo = insérer du texte -->
                Voici quelques petits tests :
            </p>
            <ul>
                <li>1. echo date('d/m/Y h:i:s') = <?php echo date('d/m/Y h:i:s'); ?></li>
                <li>2. echo $variable = <?php $variable = 28; echo "J'ai " . $variable . " ans." ?></li>
                <li>3. echo date('d/m/Y h:i:s') =</li>
            </ul>
        </section>


        <!-- --------------------- Le Footer Contact --------------------------- -->


        <!-- Footer Contact -->
        <footer id="theEnd">
            <div id="theEndContenair" class="container">
                <p>Billet simple pour l'Alaska - JEAN FORTEROCHE - COPYRIGHT © 2019</p>
            </div>
        </footer> <!-- Fin du footer Contact -->

  

    </div> <!-- Fin du blocPage -->



    <!-- ----------------------- The End ------------------------------- -->




    <!-- --------------------- Le JavaScript ----------------------------- -->

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/1fe76027ec.js" crossorigin="anonymous"></script>

    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 

    <!-- Mes fichiers JS -->

      
    </body>
 </html>    






