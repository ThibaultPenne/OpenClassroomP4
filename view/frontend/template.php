<!DOCTYPE html>

<html lang="fr">
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1"/>

		<title><?= $title ?></title>

		<!-- Mon CSS -->
		<?= $my_css ?> 

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
            <div class="container-fluid">

                <a id="navTitre" class="navbar-brand" href="#">
                    Lecture innovante d'un nouveau roman
                </a>
                <button class="btn btn-dark d-lg-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i> 
                    </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav">

                        <?= $menu_navbar ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</a>                    
                            <form id="menuDropDownNav" class="dropdown-menu p-3">
                                <div class="form-group">
                                    <label for="exampleDropdownFormEmail2">Adresse Email</label>
                                    <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@exemple.com" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleDropdownFormPassword2">Mot de passe</label>
                                    <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="********" name="password">
                                </div>
                                <?= $menu_navbar_admin ?>
                            </form>           
                        </li>
                            <!-- Implanter une condition PHP pour rediriger l'admin vers la page d'admin si il rentre les bonnes informations de connexion -->

                    </ul>
                </div>
            </div>
            </nav>

        </header>

		<?= $content ?>

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

    <!-- Mes fichiers JS -->
    <script src="../../public/js/formValid.js"></script>
    
    

	</body>
</html>