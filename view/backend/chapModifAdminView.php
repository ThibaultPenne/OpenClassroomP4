<?php $title = 'Modification de chapitre'; ?>



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

            <div id="dashboardTitle" class="pt-5 pb-1 m-auto">

                <!-- Requête SQL qui récupère un chapitre précis en fonction de son ID -->

                <h1 class=""><?php echo htmlspecialchars($chaptersAdminModif['numero']); ?></h1>
                <p class="col-12 m-auto pb-4">
                    crée le <?php echo htmlspecialchars($chaptersAdminModif['date_creation_france']); ?>
                </p> 
            </div>

            <!-- ---------- Le Formulaire de création ---------- -->

            <form id="formCreationChapter" method="POST" action="<?= 'index.php?action=RecModifChapter&idChapitre=' . $chaptersAdminModif['id_chapitre']?>" class="needs-validation" enctype="multipart/form-data" novalidate>


                

                <!-- ---------- Le Titre ---------- -->
                <div id="newChapForm" class="col-md-9 col-lg-8 col-xl-6 m-auto">
                    <div class="form-group">
                        <label id="labelNbrChap" for="inputNbrChap">Numéro du chapitre</label>
                        <input name="numeroChapitre" type="text" class="form-control" id="inputNbrChap" value="<?php echo htmlspecialchars($chaptersAdminModif['numero']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label id="labelTitreChap" for="inputTitreChap">Titre du Chapitre</label>
                        <input name="titreChapitre" type="text" class="form-control" id="inputTitreChap" value="<?php echo htmlspecialchars($chaptersAdminModif['titre']); ?>">
                    </div>

                    <!-- ---------- L'Image ---------- -->
                    <?php if (!empty($chaptersAdminModif["img_dest"])):?>  
                    <div id="imgModifView" class="form-group">
                        <p>
                            <?php echo('<img style="width:80%" alt="..." src="' . $chaptersAdminModif["img_dest"] . '">'); ?>        
                        </p>
                        <div class="form-group">
                            <label id="labelNameDestChap" for="imgNameChapitre">Nom et adresse de l'image</label>
                            <input name="imgNameChapitre" type="text" class="form-control" id="imgNameChapitre" value="<?php echo htmlspecialchars($chaptersAdminModif['img_name']); ?>" readonly>
                            <input name="imgDestChapitre" type="text" class="form-control mt-2" id="imgDestChapitre" value="<?php echo htmlspecialchars($chaptersAdminModif['img_dest']); ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label id="labelImageChap" for="inputImageChap">Remplacer l'image</label>
                        <input name="imageChapitre" type="file" class="" id="inputImageChap" required>
                    </div>
                    
                    <?php else: ?>
                    <div class="form-group">
                        <label id="labelImageChap" for="inputImageChap">Télécharger une image</label>
                        <input name="imageChapitre" type="file" class="" id="inputImageChap" required>
                    </div>
                    <?php endif; ?>
                    <div id="imgTypesMessage" class="contenair mt-3">
                        <p>(Ne seront téléchargées que les images de types: .png, .PNG, .jpg, .JPG, .jpeg, .JPEG)</p>
                    </div>
                </div>

                <!-- ---------- Création du nouveau Chapitre ---------- -->

                <!-- 1 seule row -->
                <div class="row mt-3">

                    <!-- Le Contenair du WYSIWYG  -->
                    <div id="tablesAdminContenair" class="col-sm-12 col-md-11 col-lg-10 col-xl-8 pt-4 m-auto">

                        <!-- ------------- Menu WYSIWYG -------------- -->

                        <div class="card col-sm-12 col-md-11 col-lg-11 col-xl-11 m-auto">  
                            <div class="card-body">
                                <!-- ---------- Le Texte ---------- -->
                                <div class="form-group">
                                    <div class="input-group">  
                                    <textarea name="texteChapitre" id="newChapTextArea" class="form-control" aria-label="With textarea" placeholder="Il n'y a plus qu'à s'y mettre !">
<?php echo nl2br(htmlspecialchars($chaptersAdminModif['content_text'])); ?>
                                    </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ------------- Boutons du nouveau Chapitre -------------- -->


                        <div class="row menu-traitement py-4"> 
                            <div class="mx-4 my-1 btn btn-primary tables-admin-btns">
                                <input name="recInput" type="submit" value="Enregistrer"/>
                            </div>
                            <div class="mx-4 my-1 btn btn-success tables-admin-btns">
                                <input name="publishInput" type="submit" value="Publier"/>
                            </div>
                            <div class="mx-4 my-1 btn btn-danger tables-admin-btns">
                                <input name="deleteInput" type="submit" value="Supprimer"/>
                            </div>
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





