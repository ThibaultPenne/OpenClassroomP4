
<?php $title = 'Création de chapitre'; ?>


<!-- --------------------------- -->


<?php ob_start(); ?>


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



            <!-- ---------- Le traitement des chapitres ---------- -->


            <section id="newDashBoard">
                <div class="container-fluid">


                    <!-- ---------- Le Titre ---------- -->

                    <div id="dashboardTitle" class="pt-5 pb-3 m-auto">

                        <?= $myChapInfo1 ?> 

                        <!-- ---------- Le Formulaire Nouveau Chapitre ---------- -->
                        <form id="newChapForm" class="col-md-9 col-lg-8 col-xl-6 m-auto">
                            <?= $myChapInfo2 ?>
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
                                            <textarea id="newChapTextArea" class="form-control" aria-label="With textarea">
                                                <?= $myChapContent ?>
                                            </textarea>
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

           
<?php $content = ob_get_clean(); ?>

<?php require('templateAdmin.php'); ?>





