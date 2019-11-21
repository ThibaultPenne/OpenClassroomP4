<?php $title = 'Création de chapitre'; ?>



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


    <section id="newDashBoard">
        <div class="container-fluid">


            <!-- ---------- Le Titre ---------- -->

            <div id="dashboardTitle" class="pt-5 pb-3 m-auto">

                <h1 class="">Ecriture d'un nouveau chapitre</h1>
                <p class="col-12 m-auto pb-5">
                    L'imagination vient en créant.
                </p> 
            </div>


            <!-- ---------- Le Formulaire de création ---------- -->

            <form id="formCreationChapter" method="POST" action="index.php?action=RecNewChapter" class="needs-validation" novalidate>


                <!-- ---------- Le Titre ---------- -->
                <div id="newChapForm" class="col-md-9 col-lg-8 col-xl-6 m-auto">
                    <div class="form-group">
                        <label id="labelNbrChap" for="inputAddress">Numéro du chapitre</label>
                        <input name="numeroChapitre" type="text" class="form-control" id="inputNbrChap" placeholder="Le numéro de votre chapitre..." required>
                    </div>
                    <div class="form-group">
                        <label id="labelTitreChap" for="inputAddress">Titre du chapitre</label>
                        <input name="titreChapitre" type="text" class="form-control" id="inputTitreChap" placeholder="Le titre de votre chapitre..." required>
                    </div>

                    <!-- ---------- L'Image ---------- -->
                    <div id="champDL" class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputfileDL">
                            <label class="custom-file-label" for="inputfileDL" aria-describedby="inputGroupFileAddon02">Télécharger une image</label>
                        </div>
                    </div>
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
                                    <!-- ---------- Le Texte ---------- -->
                                    <div class="form-group">
                                        <div class="input-group">
                                            <textarea name="texteChapitre" id="newChapTextArea" class="form-control" aria-label="With textarea" required>
                                                Il n'y a plus qu'à s'y mettre !
                                            </textarea>
                                        </div>
                                    </div>
                                </p>
                            </div>
                        </div>

                        <!-- ------------- Boutons du nouveau Chapitre -------------- -->

                        <div class="row menu-traitement py-4">    
                            <button class="mx-4 my-1 btn btn-primary tables-admin-btns" type="button">
                                <input name="recInput" type="submit" value="Enregistrer"/>
                            </button>
                            <button class="mx-4 my-1 btn btn-danger tables-admin-btns" type="button">
                                <input name="byeInput" type="submit" value="Annuler"/>
                            </button>
                        </div>

                        <!-- ----------------------------------- -->

                    </div> <!-- Fin du Contenair du WYSIWYG -->

                </div> <!-- Fin de la row -->

            </form> <!-- Fin de formCreationChapter -->

            <!-- ------------------------------------------------------------------- -->

        </div> <!-- Fin du container-fluid -->

    </section> <!-- Fin de la section Dashboard -->

           
<?php $content = ob_get_clean(); ?>

<?php require('templateAdmin.php'); ?>





