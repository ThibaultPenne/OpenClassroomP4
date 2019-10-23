<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Les chapitres</title> <!-- Onglet -->

        <!-- Mon CSS -->
        <link rel="stylesheet" href="../../public/css/fonts.css"/> <!-- Polices -->
        <link rel="stylesheet" href="../../public/css/style.css"/> <!-- Main CSS -->   

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>


    <body>
      

    <!-- Contenair englobant toute la page HTML -->  
    <div id="blocPage">


        <!-- ---------------------- La Navbar -------------------------------- -->


        <!-- Barre de Navigation -->
        <header id="navBar">

            <nav id="nav" class="navbar navbar-expand-lg navbar-dark">
                <a id="navTitre" class="navbar-brand" href="#">
                    Lecture innovante d'un nouveau roman
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="indexVue.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="indexVue.php">Bio</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="chapitresVue.php">
                                Chapitres<span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Admin
                            </a>                    
                            <form id="menuDropDownNav" class="dropdown-menu p-3">
                                <div class="form-group">
                                    <label for="exampleDropdownFormEmail2">Adresse Email</label>
                                    <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleDropdownFormPassword2">Mot de passe</label>
                                    <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password" name="password">
                                </div>
                                <input type="button" class="btn btn-primary mb-2" name="valider" value="Se connecter" onclick="window.location.href='../backend/adminVue.php'" />
                            </form>           
                        </li>
                            <!-- Implanter une condition PHP pour rediriger l'admin vers la page d'admin si il rentre les bonnes informations de connexion -->

                    </ul>
                </div>

            </nav>

        </header>



        <!-- ------------------------ Intro image ------------------------------ -->


        <section id="introImgContenair" class="" >
            <img id="introImg" src="../../public/images/chapitresImg.png" alt= "...">
            <h2>Il était une fois...</h2>
        </section>



        <!-- ----------------------- Transition 1 ------------------------------ -->


        <section id="transition1">
            
        </section>


        <!-- ------------------------ Les chapitres ---------------------------- -->


        <section id="bio">

            <div id="bioContenair" class="container">
                <hr>
                <h2>Les chapitres</h2>
                <div id="chapitresSelectorContenair" class="btn-group">
                    <button id="chapitresSelector" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Séléctionner un chapitre
                    </button>
                    <div id="chapDropDownMenu" class="dropdown-menu">
                        <a class="dropdown-item" href="#">Chapitre 1</a>
                        <a class="dropdown-item" href="#">Chapitre 2</a>
                        <a class="dropdown-item" href="#">Chapitre 3</a>
                    </div>
                </div>

                <div id="bioPart2" class="row">
                    <div id="chapitre1" class="col-xs-12 col-lg-10">
                        <h4>Chapitre 1</h4>
                        <h6>Titre du chapitre 1</h6>
                        <hr>
                        <div class="chapContent">
                            <p>
                                Deux ans plus tard… <br>
                                La journée avait été catastrophique, même avant que son passé ne décide de se réveiller et de lui cracher à la figure.
                                En proie à un conflit d’émotions contradictoires, l’agent infiltré Reid Graham vit Lara Jordan faire son entrée au bras d’un cadre d’entreprise à l’allure stricte, dont le costume devait coûter deux fois son salaire gouvernemental mensuel.
                                De tous les restaurants du pays, il avait fallu qu’elle vienne dans celui-ci, songea-t‑il. Et ce soir, par-dessus le marché !<br>
                                Le désir et la colère le frappèrent à l’estomac à force égale. Le désir, parce que le souvenir de leur unique nuit deux ans auparavant constituait toujours son fantasme numéro un. Et la colère, parce qu’un simple mot d’elle pouvait griller sa couverture et mettre en péril une opération qui lui avait coûté des années de sang et de sueur. Une parole malvenue pouvait aisément les faire tuer tous les deux. Mais pas seulement. Balayant du regard le restaurant bondé, il fronça les sourcils devant tous ces gens qui, en un clin d’œil, pouvaient passer du statut d’innocents citoyens à celui de victimes de fusillade.<br>
                                Nom de Dieu.<br>
                                — Alors c’est vrai que vous n’êtes pas flic, dit Jen, la jeune blonde à la beauté froide assise en face de lui, tout en jouant avec le contenu de son assiette.<br>
                                — Bien sûr que non, trésor.<br>
                                Il ne mentait pas. Enfin, d’un point de vue technique.<br>
                                — Je suis juste l’ami d’un ami, ajouta-t‑il avec un sourire décontracté. Je suis déjà passé par là où tu es. Après c’est plus facile, crois-moi.<br>
                                Une musique de Noël passait en sourdine, tandis qu’une odeur de sapin flottait dans la salle. Le long des murs étaient exposées deux bonnes douzaines de compositions ornementales, lauréates d’un concours organisé dans les écoles du quartier à l’occasion des fêtes.<br>
                            </p>
                            <img src="../../public/images/chap01Img.png">
                            <p>
                                Tout en faisant semblant d’admirer la décoration, Reid jeta un nouveau regard en direction de Lara. Le visage rayonnant sous les lumières colorées, elle riait avec son compagnon. Ses cheveux étaient maintenant coupés à hauteur de menton, et leurs boucles impossibles dansaient contre ses joues, rehaussant la blancheur crémeuse de son cou dénudé.<br>
                                Au fond de lui, il sentit quelque chose se nouer.<br>
                                — Je veux me tirer, répliqua Jen en posant sa fourchette. Je veux disparaître. Je ne donnerai le CD que lorsque j’en aurai la garantie. Et je veux de l’argent.<br>
                                — Je m’occupe de ça.<br>
                                Ce soir, il était Dave Marshall, un personnage trouble qui opérait dans la zone grise entre les deux univers du bien et du mal, avec des liens dans chacun d’entre eux.<br>
                                — Tu as quelque chose pour me prouver que tu es sérieuse ? demanda-t‑il.<br>
                                Elle jeta un coup d’œil autour d’elle, puis sortit un téléphone noir de son sac et le glissa vers lui sur la table.<br>
                                — C’est le portable de secours de Kenny. J’ai dit que le mien était cassé et le lui ai emprunté pour la journée.<br>
                                Il se saisit de l’appareil et le fourra dans sa poche.<br>
                                — Je te le rends demain matin. A part ça, tout va bien ?<br>
                                Elle baissa les yeux et posa une main sur son ventre encore plat.<br>
                                — Il n’est pas au courant, et je n’ai pas l’intention de le lui dire. Il s’est levé cette petite grue. Ce connard pense qu’il peut nous garder toutes les deux.<br>
                                Elle renifla, la mine dégoûtée. Puis soupira.<br>
                                — Ma sœur sait, ajouta-t‑elle en reposant sa main sur la table.<br>
                                L’espaced’un instant, son chemisier bâilla et Reid aperçut le petit pistolet qu’elle portait sur elle. S’il en était besoin, cela lui rappela que Jen était une femme enceinte terrorisée, qui cherchait à quitter un petit ami terroriste infidèle. Même si elle jouait avec conviction le rôle de la jeune fille en détresse, elle n’était pas aussi pure que l’agneau qui vient de naître, loin s’en fallait.<br>
                                — C’est à cause de lui que je me suis retrouvée dans ce sac de nœuds, reprit‑elle, une note de fragilité dans la voix. Tu me sors de là demain à la même heure, n’est‑ce pas ? Avant qu’ils ne remarquent la disparition du CD. Le Dr Julie dit que tu peux faire n’importe quoi.<br>
                                Elle lui adressa un sourire qui promettait des moments voluptueux en guise de paiement.<br>
                                Le Dr Julie Lantos — fournisseuse de soins d’urgence pour criminels blessés qui préféraient éviter les hôpitaux, et par ailleurs indicatrice — avait parlé de lui à Jen. Julie Lantos était aussi une toxicomane qui se fournissait auprès de ses patients, arrangement sur lequel les agents du FBI auxquels elle transmettait ses informations fermaient les yeux.
                            </p>
                        </div>    
                    </div>
                </div>
            </div>
        </section>


        <!-- ----------------------- Transition 2 ------------------------------- -->


        <section id="transition2">

        </section>


         <!-- ------------------ Les commentaires  ---------------- -->


        <section id="lesCommentaires">

            <div id="commentairesContainer" class="container">
                <hr>
                <h2>Les commentaires</h2>
                <div class="commentaires">
                    <div class="row justify-content-between">
                        <div class="col-5">
                            <h4>de Inozuka</h4>
                        </div>
                        <div class="col-4">
                            <h5>le 06/09/2019 à 19h30</h5>
                        </div>
                    </div>
                    <p>Super merci !</p>
                </div>
                <div class="commentaires">
                    <div class="row justify-content-between">
                        <div class="col-5">
                            <h4>de Itachi</h4>
                        </div>
                        <div class="col-4">
                            <h5>le 07/09/2019 à 12h30</h5>
                        </div>
                    </div>
                    <p>Hehehe ce roman s'annone incroyable ! Super idée !</p>
                </div>
                <div class="commentaires">
                    <div class="row justify-content-between">
                        <div class="col-5">
                            <h4>de Senku</h4>
                        </div>
                        <div class="col-4">
                            <h5>le 11/09/2019 à 21h21</h5>
                        </div>
                    </div>
                    <p>Je pense que l'image n'aide pas forcément à l'immersion mais bon. Super chapitre, merci !</p>
                </div>
            </div>

            <div id="writeAComment" class="container">
                <h4>Ajouter un commentaire</h4>
                <form class="was-validated">
                    <div class="col-md-4">
                        <label class="commentLabel" for="validationServer01">Votre Pseudo</label>
                        <input type="text" class="form-control is-valid" id="validationServer01" value="8NINE" required>
                        <div class="feedMessage valid-feedback">
                            Ohh joli !
                        </div>
                    </div>
                    <div class="col-md-8">
                        <label class="commentLabel" for="validationTextarea">Votre Message</label>
                        <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Un message est requis" rows="5" required></textarea>
                        <div class="feedMessage invalid-feedback">
                            S'il vous plait, soyez respectueux.
                        </div>
                    </div>
                    <div class="col-md-5">
                        <button id="commentFormBtn" class="btn btn-primary" type="submit">
                            Soumettre le commentaire
                        </button>
                    </div>
                </form>
                
            </div>

        </section>

        <!-- --------------------- Le Footer Contact --------------------------- -->


         <!-- Footer Contact -->
        <footer id="theEnd">
            <div id="theEndContenair" class="container">
                <p>Billet simple pour l'Alaska - JEAN FORTEROCHE - COPYRIGHT © 2019</p>
            </div>
        </footer> <!-- Fin du footer Contact -->

  

    </div> <!-- Fin du blocPage -->



    <!-- ----------------------- The End ------------------------------- -->




    <!-- --------------------- Le JavaScript ----------------------------- -->

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/1fe76027ec.js" crossorigin="anonymous"></script>

    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 

      
    </body>
 </html>    






