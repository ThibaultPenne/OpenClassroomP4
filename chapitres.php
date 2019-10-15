<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Les chapitres</title> <!-- Onglet -->

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
        <header id="navBar">

            <nav id="nav" class="navbar navbar-expand-lg navbar-dark">
                <a id="navTitre" class="navbar-brand" href="#">
                    Lecture innovante d'un nouveau roman
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Bio</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">
                                Chapitres<span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Admin
                            </a>                    
                            <form id="menuDropDownNav" class="dropdown-menu p-3">
                                <div class="form-group">
                                    <label for="exampleDropdownFormEmail2">Adresse Email</label>
                                    <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleDropdownFormPassword2">Mot de passe</label>
                                    <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password" name="password">
                                </div>
                                <input type="button" class="btn btn-primary mb-2" name="valider" value="Se connecter" onclick="window.location.href='admin.html'" />
                            </form>           
                        </li>
                            <!-- Implanter une condition PHP pour rediriger l'admin vers la page d'admin si il rentre les bonnes informations de connexion -->

                    </ul>
                </div>

            </nav>

        </header>



        <!-- ------------------------ Intro image ------------------------------ -->


        <section id="introImgContenair" class="" >
            <img id="introImg" src="images/chapitresImg.png" alt= "...">
            <h2>Il était une fois...</h2>
        </section>



        <!-- ----------------------- Transition 1 ------------------------------ -->


        <section id="transition1">
            
        </section>


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
                        <a class="dropdown-item" href="#">Chapitre 1</a>
                        <a class="dropdown-item" href="#">Chapitre 2</a>
                        <a class="dropdown-item" href="#">Chapitre 3</a>
                    </div>
                </div>

                <div id="bioPart2" class="row">
                    <div id="chapitre1" class="col-xs-12 col-lg-10">
                        <h4>Chapitre 1</h4>
                        <h6>Titre du chapitre 1</h6>
                        <hr>
                        <p>
                            Jean Forteroche est le second fils d'un couple d'avocats, il grandit à Santurce, un quartier de San Juan de Porto Rico. Sa mère meurt d'une hépatite alors qu'il est âgé de 9 ans, et sa famille déménage trois ans plus tard à Mercersburg dans la campagne de Pennsylvanie. À l'âge de 13 ans, Jean est inscrit dans une pension préparant aux meilleures écoles. Son père veut faire de lui un avocat. Il suit les conseils de son père et part étudier à l'université de Californie à San Diego, mais il abandonne rapidement pour entrer à la célèbre Square Acting School de New York. <br>
                            Jean Forteroche est le second fils d'un couple d'avocats, il grandit à Santurce, un quartier de San Juan de Porto Rico. Sa mère meurt d'une hépatite alors qu'il est âgé de 9 ans, et sa famille déménage trois ans plus tard à Mercersburg dans la campagne de Pennsylvanie. À l'âge de 13 ans, Jean est inscrit dans une pension préparant aux meilleures écoles. Son père veut faire de lui un avocat. Il suit les conseils de son père et part étudier à l'université de Californie à San Diego, mais il abandonne rapidement pour entrer à la célèbre Square Acting School de New York.
                            Jean Forteroche est le second fils d'un couple d'avocats, il grandit à Santurce, un quartier de San Juan de Porto Rico. Sa mère meurt d'une hépatite alors qu'il est âgé de 9 ans, et sa famille déménage trois ans plus tard à Mercersburg dans la campagne de Pennsylvanie. À l'âge de 13 ans, Jean est inscrit dans une pension préparant aux meilleures écoles. Son père veut faire de lui un avocat. Il suit les conseils de son père et part étudier à l'université de Californie à San Diego, mais il abandonne rapidement pour entrer à la célèbre Square Acting School de New York. <br>
                            Jean Forteroche est le second fils d'un couple d'avocats, il grandit à Santurce, un quartier de San Juan de Porto Rico. Sa mère meurt d'une hépatite alors qu'il est âgé de 9 ans, et sa famille déménage trois ans plus tard à Mercersburg dans la campagne de Pennsylvanie. À l'âge de 13 ans, Jean est inscrit dans une pension préparant aux meilleures écoles. Son père veut faire de lui un avocat. Il suit les conseils de son père et part étudier à l'université de Californie à San Diego, mais il abandonne rapidement pour entrer à la célèbre Square Acting School de New York.
                            Jean Forteroche est le second fils d'un couple d'avocats, il grandit à Santurce, un quartier de San Juan de Porto Rico. Sa mère meurt d'une hépatite alors qu'il est âgé de 9 ans, et sa famille déménage trois ans plus tard à Mercersburg dans la campagne de Pennsylvanie. À l'âge de 13 ans, Jean est inscrit dans une pension préparant aux meilleures écoles. Son père veut faire de lui un avocat. Il suit les conseils de son père et part étudier à l'université de Californie à San Diego, mais il abandonne rapidement pour entrer à la célèbre Square Acting School de New York. <br>
                            Jean Forteroche est le second fils d'un couple d'avocats, il grandit à Santurce, un quartier de San Juan de Porto Rico. Sa mère meurt d'une hépatite alors qu'il est âgé de 9 ans, et sa famille déménage trois ans plus tard à Mercersburg dans la campagne de Pennsylvanie. À l'âge de 13 ans, Jean est inscrit dans une pension préparant aux meilleures écoles. Son père veut faire de lui un avocat. Il suit les conseils de son père et part étudier à l'université de Californie à San Diego, mais il abandonne rapidement pour entrer à la célèbre Square Acting School de New York. <br>
                            Jean Forteroche est le second fils d'un couple d'avocats, il grandit à Santurce, un quartier de San Juan de Porto Rico. Sa mère meurt d'une hépatite alors qu'il est âgé de 9 ans, et sa famille déménage trois ans plus tard à Mercersburg dans la campagne de Pennsylvanie. À l'âge de 13 ans, Jean est inscrit dans une pension préparant aux meilleures écoles. Son père veut faire de lui un avocat. Il suit les conseils de son père et part étudier à l'université de Californie à San Diego, mais il abandonne rapidement pour entrer à la célèbre Square Acting School de New York.
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <!-- ----------------------- Transition 2 ------------------------------- -->


        <section id="transition2">

        </section>


         <!-- ------------------ Les commentaires  ---------------- -->


        <section id="lesCommentaires">

            <div id="commentairesContainer" class="container">
                <hr>
                <h2>Les commentaires</h2>
                <div class="commentaires">
                    <div class="row justify-content-between">
                        <div class="col-5">
                            <h4>de Daravann Penne</h4>
                        </div>
                        <div class="col-4">
                            <h5>le 14/10/2019 à 16h30</h5>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur.</p>
                </div>
                <div class="commentaires">
                    <div class="row justify-content-between">
                        <div class="col-5">
                            <h4>de Mushashi Miyamoto</h4>
                        </div>
                        <div class="col-4">
                            <h5>le 14/10/2019 à 18h30</h5>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="commentaires">
                    <div class="row justify-content-between">
                        <div class="col-5">
                            <h4>de Blanche Neige</h4>
                        </div>
                        <div class="col-4">
                            <h5>le 15/10/2019 à 11h30</h5>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</p>
                </div>
            </div>

            <div id="writeAComment" class="container">
                <h4>Ajouter un commentaire</h4>
                <form class="was-validated">
                    <div class="col-md-4">
                        <label class="commentLabel" for="validationServer01">Votre Pseudo</label>
                        <input type="text" class="form-control is-valid" id="validationServer01" value="8NINE" required>
                        <div class="feedMessage valid-feedback">
                            Ohh joli !
                        </div>
                    </div>
                    <div class="col-md-8">
                        <label class="commentLabel" for="validationTextarea">Votre Message</label>
                        <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Un message est requis" rows="5" required></textarea>
                        <div class="feedMessage invalid-feedback">
                            S'il vous plait, soyez respectueux.
                        </div>
                    </div>
                    <div class="col-md-5">
                        <button id="commentFormBtn" class="btn btn-primary" type="submit">
                            Soumettre le commentaire
                        </button>
                    </div>
                </form>
                
            </div>

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

      
    </body>
 </html>    






