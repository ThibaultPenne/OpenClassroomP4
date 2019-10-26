<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Administration</title> <!-- Onglet -->

        <!-- Mon CSS -->
        <link rel="stylesheet" href="../../public/css/fonts.css"/> <!-- Polices -->
        <link rel="stylesheet" href="../../public/css/style.css"/> <!-- Main CSS -->   

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>


    <body>
    

    <!-- ------------------------ Le Wrapper ---------------------------- -->


    <div class="wrapper">


        <!-- ------------------------ La SideBar ---------------------------- -->


        <?php include("sidebar.php"); ?>



        <!-- ------------------- Content (La Page de droite) ------------------- -->


        <div id="content">


            <!-- ---------- La NavBar ---------- -->


            <nav id="navBarAdmin" class="navbar navbar-expand-lg navbar-dark">

                <div class="container-fluid">
                    
                    <button class="btn btn-dark d-lg-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i> 
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav">
                            <li id="homeLinkLi" class="nav-item">
                                <a id="chapLink" class="nav-link" href="adminVue.php"><i class="fas fa-home mr-2"></i>Home</a>
                            </li>
                            <li class="nav-item active">
                                <a id="chapLink" class="nav-link" href="chapsAdminVue.php"><i class="fas fa-copy mr-2"></i>Chapitres</a>
                            </li>
                            <li class="nav-item">
                                <a id="comLink" class="nav-link" href="comsAdminVue.php"><i class="fab fa-speakap mr-2"></i>Commentaires</a>
                            </li>
                            <li id="decoLinkLi" class="nav-item">
                                <a id="decoLink" class="nav-link" href="../../index.php">Déconnection</a>
                            </li>
                            <li class="nav-item d-xs-none d-lg-block">
                                <img src="../../public/images/miniEye.png" alt="..." class="rounded-pill">
                            </li>
                                <!-- Implanter une condition PHP pour rediriger l'admin vers la page d'acceuil lors d'une déconnexion active -->
                        </ul>
                    </div>
                </div>

            </nav>



            <!-- ---------- Le traitement des chapitres ---------- -->


            <section id="dashBoard" class="pb-5">
                <div class="container-fluid">


                    <!-- ---------- Le Titre ---------- -->

                    <div id="dashboardTitle" class="py-5 m-auto">
                        <h1 class="">Le traitement des chapitres</h1>
                        <p class="col-6 m-auto pb-5">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. 
                        </p>
                        <a id="newChapBtn" href="newChapAdminVue.php">
                            + Nouveau chapitre
                        </a>
                    </div>

                    <!-- ---------- Les 3 Tableaux ---------- -->

                    <!-- 1 seule row -->
                    <div class="row">

                        <!-- Le Contenair des 3 Tableaux -->
                        <div id="tablesAdminContenair" class="col-sm-12 col-md-10 col-lg-9 mb-4 p-3 m-auto">

                            <!-- ------------- Menu des Tableaux -------------- -->

                            <div class="row menu-traitement m-auto">    
                                <button class="mx-4 my-1 btn btn-warning tables-admin-btns" type="button" data-toggle="collapse" data-target="#collapseEnCours" aria-expanded="false" aria-controls="collapseEnCours">
                                    En cours
                                </button>
                                <button class="mx-4 my-1 btn btn-success tables-admin-btns" type="button" data-toggle="collapse" data-target="#collapseEnLigne" aria-expanded="false" aria-controls="collapseEnLigne">
                                    Publiés
                                </button>
                                <button class="mx-4 my-1 btn btn-danger tables-admin-btns" type="button" data-toggle="collapse" data-target="#collapseCorbeille" aria-expanded="false" aria-controls="collapseExample">
                                    Corbeille
                                </button>
                            </div>

                            <!-- ------------- En attente -------------- -->

                            <div class="collapse colapse-forms" id="collapseEnCours">
                                <div class="card-body">
                                    <span class="badge badge-warning mb-2">Chapitres en cours d'écriture</span>
                                    <table id="table01" class="table">
                                        <thead>
                                            <tr class="trHead">
                                                <th scope="col">#</th>
                                                <th scope="col">Chapitre</th>
                                                <th scope="col">Titre</th>
                                                <th scope="col">Date de création</th>
                                                <th scope="col">Traitements</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <!-- ------ Chap #06 ----- -->

                                            <tr id="ch06" class="tabGroup1">
                                                <th scope="row">ch06</th>
                                                <td>Chapitre 6</td>  
                                                <td>Un fluide glacé</td>
                                                <td>18/10/19</td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-outline dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-arrow-alt-circle-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Publier</a>
                                                                <a class="dropdown-item" href="#">Modifier</a>
                                                                <a class="dropdown-item" href="#">Supprimer</a>
                                                                <a class="dropdown-item" href="#">Supprimer définitivement</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                    <div class="container fermer-btn">
                                        <button type="button" class="btn" data-toggle="collapse" data-target="#collapseEnCours">
                                            <i class="fas fa-arrow-alt-circle-up"></i>
                                            Fermer
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- ------------- Publiés -------------- -->

                            <div class="collapse colapse-forms" id="collapseEnLigne">
                                <div class="card-body">
                                    <span class="badge badge-success mb-2">Chapitres publiés sur le Blog</span>
                                    <table id="table02" class="table">
                                        <thead>
                                            <tr class="trHead">
                                                <th scope="col">#</th>
                                                <th scope="col">Chapitre</th>
                                                <th scope="col">Titre</th>
                                                <th scope="col">Date de publication</th>
                                                <th scope="col">Traitements</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <!-- ------ Chap #05 ----- -->

                                            <tr id="ch05" class="tabGroup1">
                                                <th scope="row">ch05</th>
                                                <td>Chapitre 5</td>   
                                                <td>Une image occultante</td>
                                                <td>04/10/19</td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-outline dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-arrow-alt-circle-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Lire</a>
                                                                <a class="dropdown-item" href="#">Modifier</a>
                                                                <a class="dropdown-item" href="#">Supprimer du Blog</a>
                                                                <a class="dropdown-item" href="#">Supprimer définitivement</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- ------ Chap #04 ----- -->

                                            <tr id="ch04" class="tabGroup2">
                                                <th scope="row">ch04</th>
                                                <td>Chapitre 4</td>  
                                                <td>Envolée charnelle</td>
                                                <td>27/09/19</td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-outline dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-arrow-alt-circle-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Lire</a>
                                                                <a class="dropdown-item" href="#">Modifier</a>
                                                                <a class="dropdown-item" href="#">Supprimer du Blog</a>
                                                                <a class="dropdown-item" href="#">Supprimer définitivement</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- ------ Chap #03 ----- -->

                                            <tr id="ch03" class="tabGroup1">
                                                <th scope="row">ch03</th>
                                                <td>Chapitre 3</td>   
                                                <td>Question de bon sens</td>
                                                <td>20/09/19</td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-outline dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-arrow-alt-circle-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Lire</a>
                                                                <a class="dropdown-item" href="#">Modifier</a>
                                                                <a class="dropdown-item" href="#">Supprimer du Blog</a>
                                                                <a class="dropdown-item" href="#">Supprimer définitivement</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- ------ Chap #02 ----- -->

                                            <tr id="ch02" class="tabGroup2">
                                                <th scope="row">ch02</th>
                                                <td>Chapitre 2</td>  
                                                <td>Mouvement brusque</td>
                                                <td>13/09/19</td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-outline dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-arrow-alt-circle-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Lire</a>
                                                                <a class="dropdown-item" href="#">Modifier</a>
                                                                <a class="dropdown-item" href="#">Supprimer du Blog</a>
                                                                <a class="dropdown-item" href="#">Supprimer définitivement</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- ------ Chap #01 ----- -->

                                            <tr id="ch01" class="tabGroup1">
                                                <th scope="row">ch01</th>
                                                <td>Chapitre 1</td>   
                                                <td>Deux ans plus tard…</td>
                                                <td>06/09/19</td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-outline dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-arrow-alt-circle-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Lire</a>
                                                                <a class="dropdown-item" href="#">Modifier</a>
                                                                <a class="dropdown-item" href="#">Supprimer du Blog</a>
                                                                <a class="dropdown-item" href="#">Supprimer définitivement</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                    <div class="container fermer-btn">
                                        <button type="button" class="btn" data-toggle="collapse" data-target="#collapseEnLigne">
                                            <i class="fas fa-arrow-alt-circle-up"></i>
                                            Fermer
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- ------------- Supprimés -------------- -->

                            <div class="collapse colapse-forms" id="collapseCorbeille">
                                <div class="card-body">
                                    <span class="badge badge-danger mb-2">Chapitres supprimés</span>
                                    <span id="deleteAllBtn" type="button" class="badge badge-danger ml-4 mb-2">X Vider tout le tableau</span>
                                    <table id="table03" class="table">
                                        <thead>
                                            <tr class="trHead">
                                                <th scope="col">#</th>
                                                <th scope="col">Chapitre</th>
                                                <th scope="col">Titre</th>
                                                <th scope="col">Date de création</th>
                                                <th scope="col">Traitements</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Vide si il n'y a rien à mettre dedans -->
                                        </tbody>
                                    </table>
                                    <div class="container fermer-btn">
                                        <button type="button" class="btn" data-toggle="collapse" data-target="#collapseCorbeille">
                                            <i class="fas fa-arrow-alt-circle-up"></i>
                                            Fermer
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- ----------------------------------- -->

                        </div> <!-- Fin du Contenair des 3 Tableaux -->

                    </div> <!-- Fin de la row -->

                    <!-- ------------------------------------------------------------------- -->

                </div> <!-- Fin du container-fluid -->

            </section> <!-- Fin de la section Dashboard -->

           

            <!-- ---------- Le Footer Contact ---------- -->


            <!-- Footer Contact -->
            <footer id="theEnd">
                <div id="theEndContenair" class="container">
                    <p>Administration - JEAN FORTEROCHE - COPYRIGHT © 2019</p>
                </div>
            </footer> <!-- Fin du footer Contact -->

    


        </div> <!-- Fin du content -->


    </div> <!-- Fin du Wrapper -->


    <!-- ---------- The End ---------- -->






    <!-- --------------------- Le JavaScript ----------------------------- -->


    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/1fe76027ec.js" crossorigin="anonymous"></script>

    <!-- Bootstrap + un slim build pour jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 

    <!-- Mes fichiers JS -->
    <script src="../../public/js/admin.js"></script>  





    </body>
 </html>    






