<?php $title = 'Les commentaires'; ?>


<!-- --------------------------- -->


<?php ob_start(); ?>


    <!-- ---------- La NavBar ---------- -->

    <?php ob_start(); ?>
        <li id="homeLinkLi" class="nav-item">
            <a id="homeLink" class="nav-link" href="index.php?action=Admin"><i class="fas fa-home mr-2"></i>Home</a>
        </li>
        <li class="nav-item">
            <a id="chapLink" class="nav-link" href="index.php?action=Admin-chapitres"><i class="fas fa-copy mr-2"></i>Chapitres</a>
        </li>
        <li class="nav-item active">
            <a id="comLink" class="nav-link" href="index.php?action=Admin-commentaires"><i class="fab fa-speakap mr-2"></i>Commentaires</a>
        </li>
    <?php $menuNavbarAdmin = ob_get_clean(); ?>


    <!-- -------------- Le traitement des commentaires -------------- -->


    <section id="dashBoard" class="pb-5">
        <div class="container-fluid">


            <!-- ---------- Le Titre ---------- -->

            <div id="dashboardTitle" class="py-5 m-auto">
                <h1 class="">Le traitement des commentaires</h1>
                <p class="col-md-8 col-lg-6 m-auto pb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. </p>
            </div>

            <!-- ---------- Les 3 Tableaux ---------- -->

            <!-- 1 seule row -->
            <div id="tablesComsPage" class="row">

                <!-- Le Contenair des 3 Tableaux -->
                <div id="tablesAdminContenair" class="col-sm-12 col-md-11 col-lg-9 mb-4 p-3 m-auto">

                    <!-- ------------- Menu des Tableaux -------------- -->

                    <div class="row menu-traitement m-auto">
                        <button class="mx-4 my-1 btn btn-warning tables-admin-btns" type="button" data-toggle="collapse" data-target="#collapseEnCours" aria-expanded="false" aria-controls="collapseEnCours">
                            En attente
                        </button>
                        <button class="mx-4 my-1 btn btn-success tables-admin-btns" type="button" data-toggle="collapse" data-target="#collapseEnLigne" aria-expanded="false" aria-controls="collapseEnLigne">
                            Validés
                        </button>
                        <button class="mx-4 my-1 btn btn-danger tables-admin-btns" type="button" data-toggle="collapse" data-target="#collapseCorbeille" aria-expanded="false" aria-controls="collapseExample">
                            Corbeille
                        </button>
                    </div>

                    <!-- ------------- En attente -------------- -->

                    <div class="collapse colapse-forms" id="collapseEnCours">
                        <div class="card-body">
                            <span class="badge badge-warning mb-2">Commentaires en attente de traitment (en ligne)</span>
                            <table id="table001" class="table">
                                <thead>
                                    <tr class="trHead">
                                        <th scope="col">#</th>
                                        <th scope="col">Chapitre</th>
                                        <th class="colByeBye3" scope="col">Pseudo</th>
                                        <th scope="col">Date et Heure</th>
                                        <th scope="col">Signalé</th>
                                        <th scope="col">Traitements</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <!-- ------ Commentaires ----- -->

                                    <!-- Requête SQL : Récupération de tous les chapitres -->
                                    <?php while ($data = $commentsAdminEnCours->fetch()): ?>  

                                    <tr id="co10" class="tabGroup1 tabGroups" data-toggle="collapse" data-target="#demo10" data-parent="#table001">
                                        <th scope="row"><?php echo htmlspecialchars($data['id_comment']); ?></th>    
                                        <td><?php echo htmlspecialchars($data['id_chapitre']); ?></td>
                                        <td class="colByeBye3"><?php echo htmlspecialchars($data['pseudo']); ?></td>
                                        <td><?php echo htmlspecialchars($data['date_commentaire_franc']); ?></td>
                                        <td><?php echo htmlspecialchars($data['signal_com']); ?></td>
                                        <td>
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <button type="button" class="btn btn-outline dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-arrow-alt-circle-down"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Valider</a>
                                                        <a class="dropdown-item" href="#">Supprimer du Blog</a>
                                                        <a class="dropdown-item" href="#">Supprimer définitivement</a>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </td>                                        
                                    </tr>
                                    <!-- Ligne cachée -->
                                    <tr id="demo10" class="collapse"> 
                                        <td colspan="7" class="hiddenRow demos">
                                            <div class="card">
                                                <?php echo nl2br(htmlspecialchars($data['commentaire'])); ?>
                                            </div>
                                        </td>
                                    </tr>

                                    <?php endwhile; ?> <!-- Fin de la Requête SQL -->


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

                    <!-- ------------- Validés -------------- -->

                    <div class="collapse colapse-forms" id="collapseEnLigne">
                        <div class="card-body">
                            <span class="badge badge-success mb-2">Commentaires validés</span>
                            <table id="table002" class="table">
                                <thead>
                                    <tr class="trHead">
                                        <th scope="col">#</th>
                                        <th scope="col">Chapitre</th>
                                        <th class="colByeBye3" scope="col">Pseudo</th>
                                        <th scope="col">Date et Heure</th>
                                        <th scope="col">Signalé</th>
                                        <th scope="col">Traitement</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <!-- ------ Commentaires ----- -->

                                    <!-- Requête SQL : Récupération de tous les chapitres -->
                                    <?php while ($data = $commentsAdminValide->fetch()): ?>  

                                    <tr id="co12" class="tabGroup1 tabGroups" data-toggle="collapse" data-target="#demo12" data-parent="#table001">
                                        <th scope="row"><?php echo htmlspecialchars($data['id_comment']); ?></th>    
                                        <td><?php echo htmlspecialchars($data['id_chapitre']); ?></td>
                                        <td class="colByeBye3"><?php echo htmlspecialchars($data['pseudo']); ?></td>
                                        <td><?php echo htmlspecialchars($data['date_commentaire_franc']); ?></td>
                                        <td><?php echo htmlspecialchars($data['signal_com']); ?></td>
                                        <td>
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <button type="button" class="btn btn-outline dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-arrow-alt-circle-down"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Supprimer du Blog</a>
                                                        <a class="dropdown-item" href="#">Supprimer définitivement</a>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </td>                                        
                                    </tr>
                                    <!-- Ligne cachée -->
                                    <tr id="demo12" class="collapse"> 
                                        <td colspan="7" class="hiddenRow demos">
                                            <div class="card">
                                                <?php echo nl2br(htmlspecialchars($data['commentaire'])); ?>
                                            </div>
                                        </td>
                                    </tr>

                                    <?php endwhile; ?> <!-- Fin de la Requête SQL -->


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
                            <span class="badge badge-danger mb-2">Commentaires supprimés</span>
                            <span id="deleteAllBtn" type="button" class="badge badge-danger ml-3 mb-2">Vider tout le tableau</span>
                            <table id="table003" class="table">
                                <thead>
                                    <tr class="trHead">
                                        <th scope="col">#</th>
                                        <th scope="col">Chapitre</th>
                                        <th class="colByeBye3" scope="col">Pseudo</th>
                                        <th scope="col">Date et Heure</th>
                                        <th scope="col">Signalé</th>
                                        <th scope="col">Traitement</th>
                                    </tr>
                                </thead>
                                <tbody>

                                     <!-- ------ Commentaires ----- -->

                                    <!-- Requête SQL : Récupération de tous les chapitres -->
                                    <?php while ($data = $commentsAdminSupprime->fetch()): ?>  

                                    <tr id="co20" class="tabGroup1 tabGroups" data-toggle="collapse" data-target="#demo20" data-parent="#table001">
                                        <th scope="row"><?php echo htmlspecialchars($data['id_comment']); ?></th>    
                                        <td><?php echo htmlspecialchars($data['id_chapitre']); ?></td>
                                        <td class="colByeBye3"><?php echo htmlspecialchars($data['pseudo']); ?></td>
                                        <td><?php echo htmlspecialchars($data['date_commentaire_franc']); ?></td>
                                        <td><?php echo htmlspecialchars($data['signal_com']); ?></td>
                                        <td>
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <button type="button" class="btn btn-outline dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-arrow-alt-circle-down"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Restaurer</a>
                                                        <a class="dropdown-item" href="#">Supprimer définitivement</a>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </td>                                        
                                    </tr>
                                    <!-- Ligne cachée -->
                                    <tr id="demo20" class="collapse"> 
                                        <td colspan="7" class="hiddenRow demos">
                                            <div class="card">
                                                <?php echo nl2br(htmlspecialchars($data['commentaire'])); ?>
                                            </div>
                                        </td>
                                    </tr>

                                    <?php endwhile; ?> <!-- Fin de la Requête SQL -->
                                

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

           
<?php $content = ob_get_clean(); ?>

<?php require('templateAdmin.php'); ?>





