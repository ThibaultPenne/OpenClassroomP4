<?php 

if (session_status() === PHP_SESSION_NONE) 
    {
        session_start(); // Je l'active.
    }

?>
<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>

        <title><?= $title ?></title> <!-- Onglet -->

        <!-- Mon CSS -->
        <link rel="stylesheet" href="public/css/fonts.css"/> <!-- Polices -->
        <link rel="stylesheet" href="public/css/style.css"/> <!-- Main CSS -->  

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
    

    <!-- ------------------------ Le Wrapper ---------------------------- -->


    <div class="wrapper">


        <!-- ------------------------ La SideBar ---------------------------- -->

        <nav id="sidebar">

            <div class="sidebar-header">
                <div class="sidebar-brand-icon">
                    <i id="iconSmileAdmin" class="fas fa-laugh-wink"></i>
                </div>
                <h3>JEAN <sup>FORTEROCHE</sup></h3>
                <strong>JF</strong>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a id="adminDropdown" href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Admin
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li><a href="<?='index.php?action=Admin'?>">Home</a></li>
                        <li><a href="<?='index.php?action=Admin-chapitres'?>">Chapitres</a></li>
                        <li><a href="<?='index.php?action=Admin-commentaires'?>">Commentaires</a></li>
                    </ul>
                </li>
                <li>
                    <a id="blogDropdown" href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-book"></i>Blog</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li> <a href="index.php">Accueil</a></li>
                        <li><a href="<?='index.php?action=Chapitres'?>">Chapitres</a></li>
                        <li><a href="<?='index.php?action=Contact'?>">Contact</a></li>
                    </ul>
                </li>
            </ul>
            <div id="reduireBtnContenair" class="container">
                <button data-toggle="collapse" type="button" id="sidebarCollapse" class="btn btn-info">
                    <strong><i class="fas fa-arrow-alt-circle-right"></i></strong>
                    <span><i class="fas fa-arrow-alt-circle-left"></i>Réduire</span>
                </button>
            </div>
        </nav>

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

                            <?= $menuNavbarAdmin ?>

                            <!-- Si cette fonction est true (connecté), alors lien vers la deconexion : -->
                            <?php if (connectingSession()): ?>
                            <li id="decoLinkLi" class="nav-item">
                                <a id="decoLink" class="nav-link" href="index.php?action=DeconnexionAdmin">Déconnection</a>
                            </li>
                            <?php endif; ?>

                            <li class="nav-item d-xs-none d-lg-block">
                                <img src="public/images/miniEye.png" alt="..." class="rounded-pill">
                            </li>
                            
                        </ul>
                    </div>
                </div>

            </nav>



            <?= $content ?>

           

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
    <script src="public/js/sidebar.js"></script>  





    </body>
 </html>    






