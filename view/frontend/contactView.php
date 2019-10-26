
<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Contact</title> <!-- Onglet -->

        <!-- Mon CSS -->
        <link rel="stylesheet" href="../../public/css/fonts.css"/> <!-- Polices -->
        <link rel="stylesheet" href="../../public/css/style.css"/> <!-- Main CSS -->   

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
                            <a class="nav-link" href="../../index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="chapitresVue.php">
                                Chapitres<span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="contactView.php">
                                Contact
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
                                <input type="button" class="btn btn-primary mb-2" name="valider" value="Se connecter" onclick="window.location.href='../backend/adminVue.php'" />
                            </form>           
                        </li>
                            <!-- Implanter une condition PHP pour rediriger l'admin vers la page d'admin si il rentre les bonnes informations de connexion -->

                    </ul>
                </div>

            </nav>

        </header>



        <!-- ------------------------ Intro image ------------------------------ -->


        <section id="introImgContenair2" class="" >
            <img id="introImg" src="../../public/images/contactImg.png" alt= "...">
            <h2 id="contactTitre" class="container-fluid">Prennez contact avec l'auteur</h2>
        </section>



        <!-- ----------------------- Transition 1 ------------------------------ -->


        <section id="transition1">

        </section>


        <!-- ------------------------ Le formulaire de contact ---------------------------- -->


        <section id="contactFormContainer" class="container">
            <form id="contenairForm" class="col-xs-12 col-md-11 col-lg-8 m-auto">

                <h4>Formulaire de contact</h4>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputNom">Nom</label>
                        <input type="name" class="form-control" id="inputNom" placeholder="Nom">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPrenom">Prénom</label>
                        <input type="name" class="form-control" id="inputPrenom" placeholder="Prénom">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputAddress">Email</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="exemple@exemple.com">
                </div>

                <div class="form-group">
                    <label for="inputAddress2">Titre du message</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Auteur, chapitre, avis personnel, etc...">
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Votre message</span>
                        </div>
                        <textarea id="contactTextarea" class="form-control" aria-label="With textarea"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Je consens au traitement de mes données personnelles par Jean Forteroche, dans le but de recevoir une réponse par e-mail (selon le RGPD).
                        </label>
                    </div>
                </div>
                <div id="btnContenair" class="container">
                    <button type="submit" class="btn mt-3">Envoyez le formulaire</button>
                </div>
            </form>
        </section>


        <!-- ----------------------- Transition 2 ------------------------------- -->


        <section id="transition2">

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






