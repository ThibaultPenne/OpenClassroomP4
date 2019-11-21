<?php $title = 'Tableau de bord'; ?>



    <!-- ---------- La NavBar ---------- -->

    <?php ob_start(); ?>
        <li id="homeLinkLi" class="nav-item active">
            <a id="homeLink" class="nav-link" href="<?='index.php?action=Admin'?>"><i class="fas fa-home mr-2"></i>Home</a>
        </li>
        <li class="nav-item">
            <a id="chapLink" class="nav-link" href="<?='index.php?action=Admin-chapitres'?>"><i class="fas fa-copy mr-2"></i>Chapitres</a>
        </li>
        <li class="nav-item">
            <a id="comLink" class="nav-link" href="<?='index.php?action=Admin-commentaires'?>"><i class="fab fa-speakap mr-2"></i>Commentaires</a>
        </li>
    <?php $menuNavbarAdmin = ob_get_clean(); ?>



<!-- ------------------------ Début de $content ------------------------------ --> 

<?php ob_start(); ?>


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
                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" src="public/images/dashboard.png" alt="">
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

                                    <!-- Requête SQL : Récupération de tous les chapitres -->
                                    <?php while ($data = $chaptersAdminLast->fetch()): ?>  

                                        <tr class="tabGroup1">
                                            <th scope="row"><?php echo htmlspecialchars($data['id_chapitre']); ?></th>
                                            <td><?php echo htmlspecialchars($data['numero']); ?></td>  
                                            <td><?php echo htmlspecialchars($data['titre']); ?></td>
                                            <td><?php echo htmlspecialchars($data['date_publication_franc']); ?></td>
                                        </tr>

                                    <?php endwhile; ?> <!-- Fin de la Requête SQL -->

                                </tbody>
                            </table>
                            <div id="chapBtn" class="container">
                                <button type="button" class="btn" onclick="window.location.href='index.php?action=Admin-chapitres'">
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

                                     <!-- Requête SQL : Récupération de tous les chapitres -->
                                    <?php while ($data = $commentsAdminLast->fetch()): ?>  

                                        <tr class="tabGroup1">
                                            <th scope="row"><?php echo htmlspecialchars($data['id_comment']); ?></th>
                                            <td><?php echo htmlspecialchars($data['id_chapitre']); ?></td>  
                                            <td><?php echo htmlspecialchars($data['pseudo']); ?></td>
                                            <td><?php echo htmlspecialchars($data['date_commentaire_franc']); ?></td>
                                        </tr>

                                    <?php endwhile; ?> <!-- Fin de la Requête SQL -->
                     
                                </tbody>
                            </table>
                            <div id="comBtn" class="container">
                                <button type="button" class="btn" onclick="window.location.href='index.php?action=Admin-commentaires'">
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


<?php $content = ob_get_clean(); ?>

<?php require('templateAdmin.php'); ?>


