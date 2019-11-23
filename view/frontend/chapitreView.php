<?php $title = 'Lecture de chapitre'; ?> <!-- ---- Titre de la page ---- -->


<!-- ---- La Navbar : Menu déroulant de tous les Chapitres publiés ---- -->
<?php ob_start(); ?>

    <div id="chapitresSelectorContenair" class="btn-group">
        <button id="chapitresSelector" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Séléctionner un chapitre
        </button>
        <div id="chapDropDownMenu" class="dropdown-menu">

            <!-- Requête SQL qui recupère tous les numéros des chapitres dans une liste -->
            <?php while ($data = $chapsList->fetch()): ?>  

                <a class="dropdown-item" href="<?= 'index.php?action=Chapitre&idChapitre=' . $data['id_chapitre'] ?>"><?php echo htmlspecialchars($data['numero']); ?></a>

            <?php endwhile; ?> <!-- Fin de la Requête SQL -->

        </div>
    </div> 

<?php $menu_navbar_titre = ob_get_clean(); ?>


<!-- ---- La Navbar : Retour ---- -->
<?php ob_start(); ?>

    <li class="nav-item active">
        <a class="nav-link" href="<?='index.php?action=Chapitres'?>">Retour aux Chapitres</a>
    </li>

<?php $menu_navbar = ob_get_clean(); ?>



<!-- ------------------------ Début de $content ------------------------------ --> 

<?php ob_start(); ?>

    <!-- ----------- Transition 1 ----------- -->


    <section id="transition1"></section>


    <!-- ----------- Le chapitre ----------- -->


    <section id="bio">

        <div id="bioContenair" class="container">
            <hr>

            <!-- Si la variable signal_com existe, alors : Message de validation -->
                <?php if ($signal_com): ?>
                <div id="commentSignalOk" class="container">
                    <h2>Le commentaire que vous avez sélectionné a bien été signalé !</h2>
                    <h6>L'auteur va l'analyser de plus près dans les plus bref délais.</h6>
                    <a class="btn" href="<?='index.php?action=RetourChap&idChapitre=' .$chapter['id_chapitre']?>">Retour sur la page de votre chapitre</a>
                </div>

                <!-- Sinon : Page Chapitre -->
                <?php else: ?>

            <!-- Requête SQL qui récupère un chapitre précis en fonction de son ID -->

            <h5>Publié le <?php echo htmlspecialchars($chapter['date_publication_fra']); ?></h5>
            <div id="bioPart2" class="row">
                <div id="chapitre1" class="col-xs-12 col-lg-10">
                    <h4><?php echo htmlspecialchars($chapter['numero']); ?></h4>
                    <h6><?php echo htmlspecialchars($chapter['titre']); ?></h6>
                    <hr>
                    <?php
                        echo('<img style="width:80%" src="' . $chapter["img_dest"] . '">');
                    ?>            
                    <div class="chapContent">
                        <p>
                            <?php echo nl2br(htmlspecialchars($chapter['content_text'])); ?>
                        </p>
                    </div>   
                </div>
            </div> 
                

        </div>
    </section> 
            


    <!-- ----------- Transition 2 ----------- -->


    <section id="transition2"></section>


     <!-- ----------- Les commentaires  ----------- -->


    <section id="lesCommentaires" class="container">

        <!-- Partie 1 : Les commentaires -->

        <div id="commentairesContainer" class="container">
            <hr>
            <h2>Les commentaires</h2>
            <div class="row">

                

                <!-- Requête SQL qui récupère les commentaires associés à un ID de chapitre -->
                <?php while ($data = $comments->fetch()): ?>  

                   <div class="col-md-10 col-xl-7 commentaires">
                        <div class="row justify-content-between">
                            <div class="col-5">
                                <h4>de <?php echo htmlspecialchars($data['pseudo']); ?></h4>      
                            </div>
                            <div class="col-4">
                                <h5>le <?php echo htmlspecialchars($data['date_commentaire_fra']); ?></h5>
                            </div>
                        </div>
                        <p><?php echo nl2br(htmlspecialchars($data['commentaire'])); ?></p>

                   

                    
                        <form action="<?='index.php?action=Signal-commentaire&idChapitre=' .$data['id_chapitre'] . '&idComment='.$data['id_comment']?>" method="post" class="col-12 needs-validation" novalidate>
                            <div class="row">
                                <div class="form-check">
                                    <label class="form-check-label" for="signal"></label>
                                    <input class="form-check-input" type="checkbox" value="" name="signal" required>
                                    <div class="valid-tooltip">
                                        Ce commentaire va être signalé.
                                    </div>
                                    <div class="invalid-tooltip">
                                        Aucun commentaire sélectionné.
                                    </div>
                                </div>
                                <span id="signalerComBtn">
                                    <input name="submitSignal" type="submit" value="Signaler le commentaire">
                                </span>
                                
                            </div>            
                        </form>  
                    
                    </div>

                <?php endwhile; ?> <!-- Fin de la Requête SQL -->
                

            </div> <!-- Fin de row -->

             

               
                   
                

        </div> <!-- Fin de Partie 1 : Les commentaires -->

        <!-- ----------------------------------------- -->

        <!-- Partie 2 : Le formulaire -->

        <div class="container">

            <!-- Requête SQL : Ajout de commentaires dans la DB -->
            
            <form action="index.php?action=Ajout-commentaire&id=<?= $chapter['id_chapitre'] ?>" method="post" id="contenairForm" class="col-sm-12 col-md-9 col-lg-9 col-xl-6 m-auto needs-validation" novalidate>
                <h4>Ajouter un commentaire</h4>

                <div class="form-group">
                    <label for="pseudo">Votre Pseudo</label>
                    <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="8NINE, Blanche Neige, Musashi Miyamoto etc..." required>
                    <div class="valid-tooltip">
                        Oh ça à l'air pas mal !
                    </div>
                    <div class="invalid-tooltip">
                        Oups ! Un oubli ?
                    </div>
                </div>

                <div class="form-group">
                    <label for="comment">Votre message</label>
                    <textarea class="form-control" id="comment" name="comment" placeholder="Un message est requis" rows="5" required></textarea>
                    <div class="valid-tooltip">
                        J'y répond dès que possible !
                    </div>
                    <div class="invalid-tooltip">
                        Aucun message ?
                    </div>
                </div>
                <div id="btnContenair" class="container">
                    <input id="submitComment" name="submitCommentaire" type="submit" class="btn" value="Soumettre le commentaire">
                </div>
                
            </form>  
        </div> <!-- Fin de Partie 2 : Le formulaire -->  

    <?php endif; ?>

    </section> <!-- Fin de la section Commentaires -->



    <!-- ---- End ---- -->


<?php $content = ob_get_clean(); ?>

<!-- ------------------------ Fin de $content ------------------------------ --> 



<?php require('template.php'); ?>





