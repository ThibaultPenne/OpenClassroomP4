<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Projet 4</title> <!-- Onglet -->

        <!-- Mon CSS -->
        <link rel="stylesheet" href="css/fonts.css"/> <!-- Polices -->
        <link rel="stylesheet" href="css/style.css"/> <!-- Main CSS -->   

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>


    <body>
      

    <!-- Contenair englobant toute la page HTML -->  
    <div id="blocPage">


        <!-- ---------------------- La Navbar -------------------------------- -->


        <!-- Barre de Navigation -->
        <header>

            <nav id="nav" class="navbar navbar-expand-lg navbar-dark bg-dark">
              <a class="navbar-brand" href="#">
                <img src="images/signature.png" class="d-inline-block align-top" alt="">
                Lecture innovante d'un nouveau roman
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Bio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="chapitres.html">Chapitres</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Admin
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="admin.html">Connexion</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Déconnexion</a>
                    </div>
                  </li>
                </ul>
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
                    <img class="slideshowImg" src="images/slide1.png" alt= "...">
                    <figcaption>
                        <h2>Billet simple pour l'Alaska</h2>
                        <p>
                            une oeuvre réalisée par Jean Forteroche.
                        </p>
                    </figcaption>
                </figure>

                <!-- ---------    Slide 2 - Le Projet    ----------- -->
                <figure id="slide2" class="mySlides">
                    <img class="slideshowImg" src="images/slide2.png" alt= "...">
                    <figcaption>
                        <h2>Le Projet</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                         <h4>Plus qu'à lire...</h4>
                        <button id="goChapitres">Plonger dans l'histoire</button>
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
                <h2>Jean Forteroche</h2>
                <div id="bioPart1">
                    <h3>About</h3>
                    <img src="">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua.  
                    </p>
                </div>

                <div id="bioPart2">
                    <img src="">
                    <h4>A propos</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
        </section>


        <!-- ----------------------- Transition 2 ------------------------------- -->


        <section id="transition2">

        </section>


        <!-- ------------------ L'Apercu des derniers chapitres ---------------- -->


        <section id="apercuChapitres">

            <div id="apercuContenair" class="container">
                <h3>les derniers chapitres</h3>

                <div id="barreBack">
                    <div class="previewChap">
                        <img src="">
                        <h4>Chapitre 1</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="previewChap">
                        <img src="">
                        <h4>Chapitre 2</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="previewChap">
                        <img src="">
                        <h4>Chapitre 3</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
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

      
    </body>
 </html>    






