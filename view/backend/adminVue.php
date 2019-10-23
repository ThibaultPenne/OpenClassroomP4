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
                            <li id="homeLinkLi" class="nav-item active">
                                <a id="chapLink" class="nav-link" href="adminVue.php"><i class="fas fa-home mr-2"></i>Home</a>
                            </li>
                            <li class="nav-item">
                                <a id="chapLink" class="nav-link" href="chapsAdminVue.php"><i class="fas fa-copy mr-2"></i>Chapitres</a>
                            </li>
                            <li class="nav-item">
                                <a id="comLink" class="nav-link" href="comsAdminVue.php"><i class="fab fa-speakap mr-2"></i>Commentaires</a>
                            </li>
                            <li id="decoLinkLi" class="nav-item">
                                <a id="decoLink" class="nav-link" href="../frontend/indexVue.php">Déconnection</a>
                            </li>
                            <li class="nav-item d-xs-none d-lg-block">
                                <img src="../../public/images/miniEye.png" alt="..." class="rounded-pill">
                            </li>
                                <!-- Implanter une condition PHP pour rediriger l'admin vers la page d'acceuil lors d'une déconnexion active -->
                        </ul>
                    </div>
                </div>

            </nav>



            <!-- ---------- Le Tableau de bord ---------- -->


            <section id="dashBoard">
                <div class="container-fluid">


                    <!-- ----- Titre ----- -->

                    <div id="dashboardTitle" class="py-5">
                        <h1 class="">Tableau de bord</h1>
                    </div>

                    <!-- ------------------------------------------------------------------- -->

                    <!-- Statistiques 1 = 1ère Principale row (sur 2) -->
                    <div id="bienvenueCol" class="row">

                        <!-- 1ère colonne = Dashboard Image -->
                        <div class="col-xl-6 col-md-12 mb-4">
                            <div class="card mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0">Bienvenue sur votre page d'administration</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" src="../../public/images/dashboard.png" alt="">
                                </div>
                                    <p>
                                        Ici, vous avez une vision globale de votre oeuvre et des retours qu'elle apporte. Prennez le temps d'analyser ces données pour apporter la meilleure réponse possible à vos visiteurs.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 2e colonne = Avancée des tâches -->
                        <div id="tachesCol" class="col-xl-6 col-md-12 mb-4">
                            <div class="card mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0">Avancée des tâches</h6>
                                </div>
                                <div class="card-body">
                                    <h4>
                                        1 chapitre en cours d'écriture
                                        <span class="float-right">1%</span>
                                    </h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 1%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4>
                                        4 commentaires en attente de traitement
                                        <span class="float-right">1 %</span>
                                    </h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 1%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4>
                                        Taux des commentaires remontés par des visteurs
                                        <span class="float-right">15 %</span>
                                    </h4>
                                    <div class="comms-progress progress mb-4">
                                    <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4>
                                        Taux de suppression des commentaires
                                        <span class="float-right">20 %</span>
                                    </h4>
                                    <div class="comms-progress progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4>
                                        Taux des visiteurs qui commentent
                                        <span class="float-right">16 %</span>
                                    </h4>
                                    <div class="visites-progress progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>               
                        </div>

                    </div> <!-- Fin de Statistiques 1 = 1ère Principale row (sur 2) -->


                    <!-- ------------------------------------------------------------------- -->


                    <!-- Statistiques 2 = 2ème Principale row (sur 2) -->
                    <!-- Contient de Principales colonnes -->
                    <div class="row"> 
               
                        <!-- --------------------------------------- -->

                        <!-- 1ère Principale colonne = Les stats --> 
                        <!-- Contient 2 rows -->
                        <div class="col-xl-6 col-md-12 mb-4">

                            <!-- ------------- -->

                            <!-- 1ère row = Les Stats Visiteurs -->
                            <!-- Contient 3 colonnes -->
                            <div class="row">

                                <!-- ----- -->

                                <!-- Colonne 1 = Visite 1 -->   
                                <div class="col-xl-4 col-md-4 mb-4">                
                                    <div id="visite1" class="card">
                                        <div class="card-body">
                                            <div class="row no-gutters">
                                                <div class="col">
                                                    <div id="visite1Txt" class="visite-txt">VISITE(S) (live)</div>
                                                    <div id="visite1Nbr" class="visite-nbr">2</div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-street-view"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- ----- -->

                                <!-- Colonne 2 = Visite 2 -->   
                                <div class="col-xl-4 col-md-4 mb-4">                     
                                    <div id="visite2" class="card">
                                        <div class="card-body">
                                            <div class="row no-gutters">
                                                <div class="col">
                                                    <div id="visite2Txt" class="visite-txt">VISITES (week)</div>
                                                    <div id="visite2Nbr" class="visite-nbr">19</div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-user-plus"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- ----- -->

                                <!-- Colonne 3 = Visite 3 -->   
                                <div class="col-xl-4 col-md-4 mb-4">                    
                                    <div id="visite3" class="card">
                                        <div class="card-body">
                                            <div class="row no-gutters">
                                                <div class="col">
                                                    <div id="visite3Txt" class="visite-txt">VISITES (total)</div>
                                                    <div id="visite3Nbr" class="visite-nbr">125</div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-user-plus"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div> <!-- Fin de 1ère row = Les Stats Visiteurs -->

                            <!-- ------------- -->

                            <!-- 2ème row = Les Stats Chap / Com -->
                            <!-- Contient 2 colonnes -->
                            <div id="row2Stats" class="row">

                                <!-- ----- -->

                                <!-- Colonne 1 = Chapitres -->
                                <div class="col-xl-6 col-md-6 mb-4">

                                    <!-- Card 1 = stat -->
                                    <div id="card1" class="card">
                                        <div class="card-body">
                                            <div class="row no-gutters">
                                                <div class="col mr-2">
                                                    <div id="card1Txt" class="">LES CHAPITRES</div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-copy"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 2 = % -->
                                    <div id="card2" class="card">
                                        <div class="card-body">
                                            <div class="row no-gutters">
                                                <div class="col mr-2">
                                                    <div id="card2Txt" class="">Taux de publication</div>
                                                    <div id="card2Nbr" class="row no-gutters">
                                                        <div class="col-auto">
                                                            <div class="mb-0 mr-3">84%</div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="progress progress-sm mr-2">
                                                                <div class="progress-bar" role="progressbar" style="width: 84%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Color 2 = En cours -->
                                    <div id="color2" class="card color-card">
                                        <div class="card-body">
                                            1 chapitre à traiter
                                            <div class="small-txt">En cours</div>
                                        </div>
                                    </div>

                                    <!-- Color 1 = Validé -->
                                    <div id="color1" class="card color-card">
                                        <div class="card-body">
                                            5 chapitres publiés
                                            <div class="small-txt">Sur le Blog</div>
                                        </div>
                                    </div>

                                    <!-- Color 3 = Supprimé -->
                                    <div id="color3" class="card color-card">
                                        <div class="card-body">
                                            0 chapitre(s) supprimé(s)
                                            <div class="small-txt">Corbeille</div>
                                        </div>
                                    </div>

                                </div> <!-- Fin de Colonne 1 = Chapitres -->
                                  

                                <!-- ----- -->


                                <!-- Colonne 2 = Commentaires -->
                                <div class="col-xl-6 col-md-6 mb-4">

                                    <!-- Card 3 = stat -->
                                    <div id="card3" class="card">
                                        <div class="card-body">
                                            <div class="row no-gutters">
                                                <div class="col mr-2">
                                                    <div id="card3Txt" class="">LES COMMENTAIRES</div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fab fa-speakap"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 4 = % -->
                                    <div id="card4" class="card">
                                        <div class="card-body">
                                            <div class="row no-gutters">
                                                <div class="col mr-2">
                                                    <div id="card4Txt" class="">Taux de validation</div>
                                                    <div id="card4Nbr" class="row no-gutters">
                                                        <div class="col-auto">
                                                            <div class="mb-0 mr-3">60%</div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="progress progress-sm mr-2">
                                                                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                     

                                    <!-- Color 5 = En cours -->
                                    <div id="color5" class="card color-card">
                                        <div class="card-body">
                                            4 commentaires à traiter
                                            <div class="small-txt">En cours</div>
                                        </div>
                                    </div>

                                    <!-- Color 4 = Validé -->
                                    <div id="color4" class="card color-card">
                                        <div class="card-body">
                                            12 commentaires validés
                                            <div class="small-txt">Sur le Blog</div>
                                        </div>
                                    </div> 

                                    <!-- Color 6 = Supprimé -->
                                    <div id="color6" class="card color-card">
                                        <div class="card-body">
                                            4 commentaires supprimés
                                            <div class="small-txt">Corbeille</div>
                                        </div>
                                    </div>
                              
                                </div> <!-- Fin de Colonne 2 = Commentaires -->


                            </div> <!-- Fin de 2ème row = Les Stats Chap / Com --> <!-- Fin de 1ère Principale colonne = Les stats -->
                         
                            <!-- ------------- -->

                        </div> <!-- Fin de 1ère Principale colonne = Les stats -->   


                        <!-- --------------------------------------- -->


                        <!-- 2ème Principale colonne = Les résumés -->
                        <div id="col2Resumes" class="col-xl-6 col-md-12 mb-4">

                            <!-- Les 3 derniers chapitres publiés -->
                            <div class="card mb-4 col-resume-contenair">
                                <div class="card-header py-3">
                                    <h6 class="m-0">
                                        <i class="fas fa-copy"></i>
                                        Les 3 derniers chapitres publiés
                                    </h6>
                                </div>
                                <div class="card-body">
                                    <table id="table1" class="table">
                                        <thead>
                                            <tr class="trHead">
                                                <th scope="col">#</th>
                                                <th scope="col">Chapitre</th>
                                                <th scope="col">Titre</th>
                                                <th scope="col">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tabGroup1">
                                                <th scope="row">05</th>
                                                <td>Chapitre 5</td>  
                                                <td>Titre du chapitre 5</td>
                                                <td>04/10/19</td>
                                            </tr>
                                            <tr class="tabGroup2">
                                                <th scope="row">04</th>
                                                <td>Chapitre 4</td>   
                                                <td>Titre du chapitre 4</td>
                                                <td>27/09/19</td>
                                            </tr>
                                            <tr class="tabGroup1">
                                                <th scope="row">03</th>
                                                <td>Chapitre 3</td>  
                                                <td>Titre du chapitre 3</td>
                                                <td>20/09/19</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div id="chapBtn" class="container">
                                        <button type="button" class="btn" onclick="window.location.href='chapsAdminVue.php'">
                                            <i class="fas fa-arrow-alt-circle-right"></i>
                                            Traiter les chapitres
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Les 3 derniers commentaires en attente -->
                            <div class="card mb-4 col-resume-contenair">
                                <div class="card-header py-3">
                                    <h6 class="m-0">
                                        <i class="fab fa-speakap"></i>
                                        Les 3 derniers commentaires en attente
                                    </h6>
                                </div>
                                <div class="card-body">
                                    <table id="table2" class="table">
                                        <thead>
                                            <tr class="trHead">
                                                <th scope="col">#</th>    
                                                <th scope="col">Chapitre #</th>
                                                <th scope="col">Pseudo</th>
                                                <th scope="col">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tabGroup1">
                                                <th scope="row">20</th>    
                                                <td>05</td>
                                                <td>Senku</td>
                                                <td>05/10/19</td>
                                            </tr>
                                            <tr class="tabGroup2">
                                                <th scope="row">19</th>
                                                <td>05</td>
                                                <td>Itachi</td>
                                                <td>05/10/19</td>
                                            </tr>
                                            <tr class="tabGroup1">
                                                <th scope="row">18</th>    
                                                <td>05</td>
                                                <td>Senku</td>
                                                <td>04/10/19</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div id="comBtn" class="container">
                                        <button type="button" class="btn" onclick="window.location.href='comsAdminVue.php'">
                                            <i class="fas fa-arrow-alt-circle-right"></i>
                                            Traiter les commentaires
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- Fin de 2ème Principale colonne = Les résumés -->

                        <!-- --------------------------------------- -->

                    </div> <!-- Fin de Statistiques 2 = 2ème Principale row (sur 2) -->

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






