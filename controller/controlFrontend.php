
<!-- Le contrôleur : Il gère les fonctions de redirections (dynamique d'une application MVC) et de récupération des données de la DB dans le model -->
<?php


require('model/modelFrontend.php');


	/* -------------- Frontend -------------- */

	// Fonction qui récupère les données SQL puis redirige vers la page Acceuil :
	function viewPreviewChaps()
		{
		    $previewChaps = getPreviewChaps();

			require 'view/frontend/indexView.php';
		}

	// Fonction qui récupère les données SQL puis redirige vers la page Chapitres :
	function viewChapters()
		{
		    $chapters = getChapters();

			require 'view/frontend/chapitresView.php';
		}

	// Fonction qui récupère les données SQL puis redirige vers la page Chapitre (+ Commentaires) :
	function viewChapter($idChapitre)
		{
		    $chapsList = getChaptersList();
		    $chapter = getChapter($idChapitre);
		    $comments = getComments($idChapitre);

			require 'view/frontend/chapitreView.php';
		}

	// Fonction qui enregistre les données dans la DB puis redirige vers la page Chapitre (+ Commentaires) du commentaire en question :
	function addComment($idChapitre, $pseudo, $comment)
		{
		    $affectedLines = postComment($idChapitre, $pseudo, $comment);

		    if ($affectedLines === false) 
			    {
			        throw new Exception('Impossible d\'ajouter le commentaire !');
			    }
			    else 
				    {
				        header('Location: index.php?action=Chapitre&id=' . $idChapitre);
				    }
		}

	// Fonction qui enregistre les données dans la DB puis redirige vers la page Contact :
	/*function signalComment($idChapitre, $idComment)
		{
		    $affectedSignal = postComment($idChapitre, $idComment);

			require 'view/frontend/contactView.php';
		}*/

	// Fonction qui enregistre les données dans la DB puis redirige vers la page Contact :
	function viewContact()
		{
		    /* A gérer */

			require 'view/frontend/contactView.php';
		}





	/* -------------- Backend -------------- */

	// Fonction qui récupère les données SQL puis redirige vers la page Admin :
	function viewAdmin()
		{
		    /* A gérer */

			require 'view/backend/adminView.php';
		}

	// Fonction qui récupère les données SQL puis redirige vers la page Admin-Chapitres :
	function viewChapsAdmin()
		{
		    /* A gérer */

			require 'view/backend/chapsAdminView.php';
		}

	// Fonction qui récupère les données SQL puis redirige vers la page Admin-Commentaires :
	function viewComsAdmin()
		{
		    /* A gérer */

			require 'view/backend/comsAdminView.php';
		}

	// Fonction qui récupère les données SQL puis redirige vers la page Admin-New-Chapitre :
	function viewNewChapAdmin()
		{
		    /* A gérer */

			require 'view/backend/newChapAdminView.php';
		}




	/* -------------- Error -------------- */

	// Fonction qui récupère le message d'erreur puis redirige vers la page Error :
	function errorMode($errorMsg) 
		{
		    require 'view/frontend/errorView.php';
		}




