<?php $title = 'Les chapitres'; ?>




<!-- ---------- La NavBar ---------- -->

<?php ob_start(); ?>
    <li id="homeLinkLi" class="nav-item">
        <a id="homeLink" class="nav-link" href="index.php?action=Admin"><i class="fas fa-home mr-2"></i>Home</a>
    </li>
    <li class="nav-item active">
        <a id="chapLink" class="nav-link" href="index.php?action=Admin-chapitres"><i class="fas fa-copy mr-2"></i>Chapitres</a>
    </li>
    <li class="nav-item">
        <a id="comLink" class="nav-link" href="index.php?action=Admin-commentaires"><i class="fab fa-speakap mr-2"></i>Commentaires</a>
    </li>
<?php $menuNavbarAdmin = ob_get_clean(); ?>






<!-- ------------------------ Début de $content ------------------------------ --> 

<?php ob_start(); ?>

    <!-- ---------- Le traitement des chapitres ---------- -->


    <section id="dashBoard" class="pb-5">
        <div class="container-fluid">


            <!-- ---------- Le Titre ---------- -->

            <div id="dashboardTitle" class="py-5 m-auto">
                <h1 class="">Le traitement des chapitres</h1>
                <p class="col-md-8 col-lg-6 m-auto pb-5">
                    Ici, vous avez accès à vos chapitres en cours d'écriture, vos chapitres publiés sur le Blog, ainsi que vos chapitres supprimés.<br>
                    <br>
                    Cliquez sur le lien ci-dessous pour créer un nouveau chapitre :
                </p>
                <a id="newChapBtn" href="index.php?action=Admin-nouveau-chapitre">
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
                            <input value="En cours"/>
                        </button>
                        <button class="mx-4 my-1 btn btn-success tables-admin-btns" type="button" data-toggle="collapse" data-target="#collapseEnLigne" aria-expanded="false" aria-controls="collapseEnLigne">
                            <input value="Publiés"/>
                        </button>
                        <button class="mx-4 my-1 btn btn-danger tables-admin-btns" type="button" data-toggle="collapse" data-target="#collapseCorbeille" aria-expanded="false" aria-controls="collapseExample">
                            <input value="Corbeille"/>
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
                                        <th class="colByeBye" scope="col">Chapitre</th>
                                        <th scope="col">Titre</th>
                                        <th scope="col">Date de création</th>
                                        <th scope="col">Traitements</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <!-- ------ Chapitres ----- -->

                                    <!-- Requête SQL : Récupération de tous les chapitres -->
                                    <?php while ($data = $chaptersAdminEnCours->fetch()): ?>  

                                    <tr id="ch02" class="tabGroup1">
                                        <th scope="row"><?php echo htmlspecialchars($data['id_chapitre']); ?></th>
                                        <td class="colByeBye"><?php echo htmlspecialchars($data['numero']); ?></td>  
                                        <td><?php echo htmlspecialchars($data['titre']); ?></td>
                                        <td><?php echo htmlspecialchars($data['date_creation_franc']); ?></td>
                                        <td>
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <button type="button" class="btn btn-outline dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-arrow-alt-circle-down"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="<?= "index.php?action=PublishChap&idChapitre=" . $data["id_chapitre"] ?>">Publier</a>
                                                        <a class="dropdown-item" href="<?= "index.php?action=Admin-modif-chapitre&idChapitre=" . $data["id_chapitre"] ?>">Modifier</a>
                                                        <a class="dropdown-item" href="<?= "index.php?action=DeleteChap&idChapitre=" . $data["id_chapitre"] ?>">Supprimer</a>
                                                        <a class="dropdown-item" href="<?= "index.php?action=DeleteFullChap&idChapitre=" . $data["id_chapitre"] ?>">Supprimer définitivement</a>
                                                    </div>
                                                </div>
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

                    <!-- ------------- Publiés -------------- -->

                    <div class="collapse colapse-forms" id="collapseEnLigne">
                        <div class="card-body">
                            <span class="badge badge-success mb-2">Chapitres publiés sur le Blog</span>
                            <table id="table02" class="table">
                                <thead>
                                    <tr class="trHead">
                                        <th scope="col">#</th>
                                        <th class="colByeBye" scope="col">Chapitre</th>
                                        <th scope="col">Titre</th>
                                        <th scope="col">Date de publication</th>
                                        <th scope="col">Traitements</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <!-- ------ Chapitres ----- -->

                                    <!-- Requête SQL : Récupération de tous les chapitres -->
                                    <?php while ($data = $chaptersAdminPublie->fetch()): ?>  

                                    <tr id="ch04" class="tabGroup1">
                                        <th scope="row"><?php echo htmlspecialchars($data['id_chapitre']); ?></th>
                                        <td class="colByeBye"><?php echo htmlspecialchars($data['numero']); ?></td>  
                                        <td><?php echo htmlspecialchars($data['titre']); ?></td>
                                        <td><?php echo htmlspecialchars($data['date_publication_franc']); ?></td>
                                        <td>
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <button type="button" class="btn btn-outline dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-arrow-alt-circle-down"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="<?= "index.php?action=Chapitre&idChapitre=" . $data["id_chapitre"] ?>">Lire</a>
                                                        <a class="dropdown-item" href="<?= "index.php?action=Admin-modif-chapitre&idChapitre=" . $data["id_chapitre"] ?>">Modifier</a>
                                                        <a class="dropdown-item" href="<?= "index.php?action=DeleteChap&idChapitre=" . $data["id_chapitre"] ?>">Supprimer</a>
                                                        <a class="dropdown-item" href="<?= "index.php?action=DeleteFullChap&idChapitre=" . $data["id_chapitre"] ?>">Supprimer définitivement</a>
                                                    </div>
                                                </div>
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
                            <span class="badge badge-danger mb-2">Chapitres supprimés</span>
                            <span id="deleteAllBtn" type="button" class="badge badge-danger ml-3 mb-2">
                                
                                <a class="" href="<?= "index.php?action=DeleteChaptersTab" ?>">Vider tout le tableau</a>
                            </span>
                            <table id="table03" class="table">
                                <thead>
                                    <tr class="trHead">
                                        <th scope="col">#</th>
                                        <th class="colByeBye" scope="col">Chapitre</th>
                                        <th scope="col">Titre</th>
                                        <th scope="col">Date de création</th>
                                        <th scope="col">Traitements</th>
                                    </tr>
                                </thead>
                                <tbody>

                                     <!-- ------ Chapitres ----- -->

                                    <!-- Requête SQL : Récupération de tous les chapitres -->
                                    <?php while ($data = $chaptersAdminSupprime->fetch()): ?>  

                                    <tr id="ch06" class="tabGroup1">
                                        <th scope="row"><?php echo htmlspecialchars($data['id_chapitre']); ?></th>
                                        <td class="colByeBye"><?php echo htmlspecialchars($data['numero']); ?></td>  
                                        <td><?php echo htmlspecialchars($data['titre']); ?></td>
                                        <td><?php echo htmlspecialchars($data['date_creation_franc']); ?></td>
                                        <td>
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <button type="button" class="btn btn-outline dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-arrow-alt-circle-down"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="<?= "index.php?action=RestoreChap&idChapitre=" . $data["id_chapitre"] ?>">Restaurer</a>
                                                        <a class="dropdown-item" href="<?= "index.php?action=DeleteFullChap&idChapitre=" . $data["id_chapitre"] ?>">Supprimer définitivement</a>
                                                    </div>
                                                </div>
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






