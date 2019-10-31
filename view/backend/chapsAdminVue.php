
<?php $title = 'Les chapitres'; ?>


<!-- --------------------------- -->


<?php ob_start(); ?>


            <!-- ---------- La NavBar ---------- -->

            <?php ob_start(); ?>
                <li id="homeLinkLi" class="nav-item">
                    <a id="homeLink" class="nav-link" href="adminVue.php"><i class="fas fa-home mr-2"></i>Home</a>
                </li>
                <li class="nav-item active">
                    <a id="chapLink" class="nav-link" href="chapsAdminVue.php"><i class="fas fa-copy mr-2"></i>Chapitres</a>
                </li>
                <li class="nav-item">
                    <a id="comLink" class="nav-link" href="comsAdminVue.php"><i class="fab fa-speakap mr-2"></i>Commentaires</a>
                </li>
            <?php $menuNavbarAdmin = ob_get_clean(); ?>


            <!-- ---------- Le traitement des chapitres ---------- -->


            <section id="dashBoard" class="pb-5">
                <div class="container-fluid">


                    <!-- ---------- Le Titre ---------- -->

                    <div id="dashboardTitle" class="py-5 m-auto">
                        <h1 class="">Le traitement des chapitres</h1>
                        <p class="col-md-8 col-lg-6 m-auto pb-5">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. 
                        </p>
                        <a id="newChapBtn" href="newChapAdminView.php">
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
                                                <th class="colByeBye" scope="col">Chapitre</th>
                                                <th scope="col">Titre</th>
                                                <th scope="col">Date de création</th>
                                                <th scope="col">Traitements</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <!-- ------ Chap #06 ----- -->

                                            <tr id="ch06" class="tabGroup1">
                                                <th scope="row">ch06</th>
                                                <td class="colByeBye">6</td>  
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
                                                                <a class="dropdown-item" href="chapitre6ModifView.php">Modifier</a>
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
                                                <th class="colByeBye" scope="col">Chapitre</th>
                                                <th scope="col">Titre</th>
                                                <th scope="col">Date de publication</th>
                                                <th scope="col">Traitements</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <!-- ------ Chap #05 ----- -->

                                            <tr id="ch05" class="tabGroup1">
                                                <th scope="row">ch05</th>
                                                <td class="colByeBye">5</td>   
                                                <td>Une image occultante</td>
                                                <td>04/10/19</td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-outline dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-arrow-alt-circle-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="../frontend/chapitre5View.php">Lire</a>
                                                                <a class="dropdown-item" href="chapitre5ModifView.php">Modifier</a>
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
                                                <td class="colByeBye">4</td>  
                                                <td>Envolée charnelle</td>
                                                <td>27/09/19</td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-outline dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-arrow-alt-circle-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="../frontend/chapitre4View.php">Lire</a>
                                                                <a class="dropdown-item" href="chapitre4ModifView.php">Modifier</a>
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
                                                <td class="colByeBye">3</td>   
                                                <td>Question de bon sens</td>
                                                <td>20/09/19</td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-outline dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-arrow-alt-circle-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="../frontend/chapitre3View.php">Lire</a>
                                                                <a class="dropdown-item" href="chapitre3ModifView.php">Modifier</a>
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
                                                <td class="colByeBye">2</td>  
                                                <td>Mouvement brusque</td>
                                                <td>13/09/19</td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-outline dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-arrow-alt-circle-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="../frontend/chapitre2View.php">Lire</a>
                                                                <a class="dropdown-item" href="chapitre2ModifView.php">Modifier</a>
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
                                                <td class="colByeBye">1</td>   
                                                <td>Deux ans plus tard…</td>
                                                <td>06/09/19</td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-outline dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-arrow-alt-circle-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="../frontend/chapitre1View.php">Lire</a>
                                                                <a class="dropdown-item" href="chapitre1ModifView.php">Modifier</a>
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
                                    <span id="deleteAllBtn" type="button" class="badge badge-danger ml-3 mb-2">Vider tout le tableau</span>
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

           
<?php $content = ob_get_clean(); ?>

<?php require('templateAdmin.php'); ?>






