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
                            <li class="nav-item">
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


            <section id="newDashBoard">
                <div class="container-fluid">


                    <!-- ---------- Le Titre ---------- -->

                    <div id="dashboardTitle" class="pt-5 pb-3 m-auto">
                        <h1 class="">Ecriture d'un nouveau chapitre</h1>
                        <p class="col-6 m-auto pb-5">
                            L'imagination vient en créant.
                        </p>
                        <!-- ---------- Le Formulaire Nouveau Chapitre ---------- -->
                        <form id="newChapForm" class="col-6 m-auto">
                            <div class="form-group">
                                <label id="labelTitreChap" for="inputAddress">Titre du chapitre</label>
                                <input type="text" class="form-control" id="inputTitreChap" placeholder="Le titre de votre chapitre...">
                            </div>
                            <div id="champDL" class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputfileDL">
                                    <label class="custom-file-label" for="inputfileDL" aria-describedby="inputGroupFileAddon02">Télécharger une image</label>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- ---------- Création du nouveau Chapitre ---------- -->

                    <!-- 1 seule row -->
                    <div class="row mt-3">

                        <!-- Le Contenair du WYSIWYG  -->
                        <div id="tablesAdminContenair" class="col-sm-12 col-md-11 col-lg-10 col-xl-8 pt-4 m-auto">

                            <!-- ------------- Menu WYSIWYG + Texte -------------- -->

                            <div class="card col-sm-12 col-md-11 col-lg-11 col-xl-11 m-auto">  
                                <div class="card-body">
                                    <p class="card-text">
                                        Ici se trouveront tous les composants de l'interface WYSIWYG basée sur TinyMCE
                                        <br>
                                        <div class="form-group">
                                            <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <textarea id="newChapTextArea" class="form-control" aria-label="With textarea"></textarea>
                                            </div>
                                        </div>
                                    </p>
                                </div>
                            </div>

                            <!-- ------------- Boutons du nouveau Chapitre -------------- -->

                            <div class="row menu-traitement py-4">    
                                <button class="mx-4 my-1 btn btn-primary tables-admin-btns" type="button" data-toggle="collapse" data-target="#collapseEnCours" aria-expanded="false" aria-controls="collapseEnCours">
                                    Enregistrer
                                </button>
                                <button class="mx-4 my-1 btn btn-success tables-admin-btns" type="button" data-toggle="collapse" data-target="#collapseEnLigne" aria-expanded="false" aria-controls="collapseEnLigne">
                                    Publier
                                </button>
                                <button class="mx-4 my-1 btn btn-danger tables-admin-btns" type="button" data-toggle="collapse" data-target="#collapseCorbeille" aria-expanded="false" aria-controls="collapseExample">
                                    Supprimer
                                </button>
                            </div>

                            <!-- ----------------------------------- -->

                        </div> <!-- Fin du Contenair du WYSIWYG -->

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






