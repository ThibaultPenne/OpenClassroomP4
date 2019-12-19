<?php

/* Controleur qui gère les fonctions de redirection des pages Admin et gère la DB grâce aux models Backend (Admin) */
/* Il appele des fonctions situées à l'intérieur d'objets (des fonctions membres) = POO */


// Chargement des classes :
require('model/AdminChapterManager.php');
require('model/AdminCommentManager.php');
require('model/AdminModifChapManager.php');



	/* ------------ Admin Home ------------ */
	
	// Fonction qui récupère les données SQL puis redirige vers la page Admin :
	function viewAdmin()
		{
		    $adminChapterManager = new AdminChapterManager(); // Création d'un objet à partir d'une classe (model)
		    $chaptersAdminLast = $adminChapterManager->getChaptersAdmin0(); // Appel d'une fonction de cet objet

		    $adminCommentManager = new AdminCommentManager();
		    $commentsAdminLast = $adminCommentManager->getCommentsAdmin0();
		    
			require 'view/backend/adminView.php';
		}




	/* ------------ Chapitres : Publier / Supprimer / Restaurer ------------ */

	// Fonction qui récupère les données SQL dans 3 tables puis redirige vers la page Admin-Chapitres :
	function viewChapsAdmin()
		{
		    $adminChapterManager = new AdminChapterManager();
		    $chaptersAdminEnCours = $adminChapterManager->getChaptersAdmin1();
		    $chaptersAdminPublie = $adminChapterManager->getChaptersAdmin2();
		    $chaptersAdminSupprime = $adminChapterManager->getChaptersAdmin3();

			require 'view/backend/chapsAdminView.php';
		}

	// Fonction qui permet la publication de chapitre puis redirige vers la page Admin-Chapitres :
	function publishChapter($idChapitre)
		{
	    	$adminChapterManager = new AdminChapterManager();
			$publishChapter = $adminChapterManager->publishChapterAdmin($idChapitre);

		    if ($publishChapter === false) 
			    {
			        throw new Exception('...');
			    }
			    else 
				    {
				        header('Location: index.php?action=Admin-chapitres');
						exit;
				    }
		}

	// Fonction qui permet la suppression de chapitre puis redirige vers la page Admin-Chapitres :
	function deleteChapter($idChapitre)
		{
	    	$adminChapterManager = new AdminChapterManager();
			$deleteChapter = $adminChapterManager->deleteChapterAdmin($idChapitre);

		    if ($deleteChapter === false) 
			    {
			        throw new Exception('...');
			    }
			    else 
				    {
				        header('Location: index.php?action=Admin-chapitres');
						exit;
				    }
		}

	// Fonction qui permet la restauration de chapitre puis redirige vers la page Admin-Chapitres :
	function restoreChapter($idChapitre)
		{
	    	$adminChapterManager = new AdminChapterManager();
			$restoreChapter = $adminChapterManager->restoreChapterAdmin($idChapitre);

		    if ($restoreChapter === false) 
			    {
			        throw new Exception('...');
			    }
			    else 
				    {
				        header('Location: index.php?action=Admin-chapitres');
						exit;
				    }
		}

	// Fonction qui permet la suppression (de la DB) de chapitre puis redirige vers la page Admin-Chapitres :
	function deleteFullChapter($idChapitre)
		{
	    	$adminChapterManager = new AdminChapterManager();
			$deleteFullChapter = $adminChapterManager->deleteFullChapterAdmin($idChapitre);

		    if ($deleteFullChapter === false) 
			    {
			        throw new Exception('...');
			    }
			    else 
				    {
				        header('Location: index.php?action=Admin-chapitres');
						exit;
				    }
		}

	// Fonction qui permet la suppresion des chapitres supprimés puis redirige vers la page Admin-Chapitres :
	function deleteChaptersTab()
		{
	    	$adminChapterManager = new AdminChapterManager();
			$deleteChaptersTab = $adminChapterManager->deleteChaptersTabAdmin();

		    if ($deleteChaptersTab === false) 
			    {
			        throw new Exception('...');
			    }
			    else 
				    {
				        header('Location: index.php?action=Admin-chapitres');
						exit;
				    }
		}


	/* ------------ Commentaires : Valider / Supprimer / Restaurer ------------ */

	// Fonction qui redirige vers la page Admin-Commentaires :
	function viewComsAdmin()
		{
		    $adminCommentManager = new AdminCommentManager();
		    $commentsAdminEnCours = $adminCommentManager->getCommentsAdmin1();
		    $commentsAdminValide = $adminCommentManager->getCommentsAdmin2();
		    $commentsAdminSupprime = $adminCommentManager->getCommentsAdmin3();

			require 'view/backend/comsAdminView.php';
		}

	// Fonction qui permet la validation de commentaire puis redirige vers la page Admin-Commentaires :
	function validComment($idComment)
		{
	    	$adminCommentManager = new AdminCommentManager();
			$validComment = $adminCommentManager->validCommentAdmin($idComment);

		    if ($validComment === false) 
			    {
			        throw new Exception('...');
			    }
			    else 
				    {
				        header('Location: index.php?action=Admin-commentaires');
						exit;
				    }
		}

	// Fonction qui permet la supression de commentaire puis redirige vers la page Admin-Commentaires :
	function deleteComment($idComment)
		{
	    	$adminCommentManager = new AdminCommentManager();
			$deleteComment = $adminCommentManager->deleteCommentAdmin($idComment);

		    if ($deleteComment === false) 
			    {
			        throw new Exception('...');
			    }
			    else 
				    {
				        header('Location: index.php?action=Admin-commentaires');
						exit;
				    }
		}

	// Fonction qui permet la restauration de commentaire puis redirige vers la page Admin-Commentaires :
	function restoreComment($idComment)
		{
	    	$adminCommentManager = new AdminCommentManager();
			$restoreComment = $adminCommentManager->restoreCommentAdmin($idComment);

		    if ($restoreComment === false) 
			    {
			        throw new Exception('...');
			    }
			    else 
				    {
				        header('Location: index.php?action=Admin-commentaires');
						exit;
				    }
		}

	// Fonction qui permet la suppression (de la DB) de commentaire puis redirige vers la page Admin-Commentaires :
	function deleteFullComment($idComment)
		{
	    	$adminCommentManager = new AdminCommentManager();
			$deleteFullChapter = $adminCommentManager->deleteFullCommentAdmin($idComment);

		    if ($deleteFullChapter === false) 
			    {
			        throw new Exception('...');
			    }
			    else 
				    {
				        header('Location: index.php?action=Admin-commentaires');
						exit;
				    }
		}

	// Fonction qui permet la suppression (de la DB) de tous les coms supprimés puis redirige vers la page Admin-Commentaires :
	function deleteCommentTab()
		{
	    	$adminCommentManager = new AdminCommentManager();
			$deleteCommentTab = $adminCommentManager->deleteCommentTabAdmin();

		    if ($deleteCommentTab === false) 
			    {
			        throw new Exception('...');
			    }
			    else 
				    {
				        header('Location: index.php?action=Admin-commentaires');
						exit;
				    }
		}





	/* ------------ Admin-Modif-Chapitre : Rec / Publish / Delete ------------ */

	// Fonction qui redirige vers la page de modification du Chapitre choisi :
	function viewModifChapAdmin($idChapitre)
		{
			$adminModifChapManager = new AdminModifChapManager();
		    $chaptersAdminModif = $adminModifChapManager->getChapModif($idChapitre);

			require 'view/backend/chapModifAdminView.php';
		}

	//  Fonction qui après enregistrement des données, modifie le statut du Chapitre :
	function recModifChapter($numeroChapitre, $titreChapitre, $texteChapitre, $imageNameChapitre, $imageDestChapitre, $idChapitre)
		{
	    	$adminModifChapManager = new AdminModifChapManager();
			$recModifChapter = $adminModifChapManager->recModifChapterAdmin($numeroChapitre, $titreChapitre, $texteChapitre, $imageNameChapitre, $imageDestChapitre, $idChapitre);

			if (isset($_POST['recInput']))
				{
					restoreChapter($idChapitre); // Statut 0 = Brouillon.
				}
			if (isset($_POST['publishInput']))
				{
					publishChapter($idChapitre); // Statut 1 = Publié.
				}
			if (isset($_POST['deleteInput']))
				{
					deleteChapter($idChapitre); // Statut 2 = Corbeille.
				}
		}

	// Fonction qui configure la modification du chapitre avec ajout d'une image :
	function recModifWithImg()
		{
		    $imageNameChapitre = $_FILES['imageChapitre']['name']; // Nom du fichier envoyé dans l'input imageChapitre.
	    	$file_extension = strrchr($imageNameChapitre, "."); // Affiche ce qui se trouve à partir du "." après le nom du fichier (l'extention).

	    	$file_tmp_name = $_FILES['imageChapitre']['tmp_name']; // Nom du repertoire temporaire du fichier envoyé dans l'input imageChapitre.
	    	$imageDestChapitre = 'public/images/' . $imageNameChapitre; // Repertoire de destination du fichier envoyé.

	    	$extensions_autorisees = array(".png", ".PNG", ".jpg", ".JPG", ".jpeg", ".JPEG"); // Tableau des extensions autorisées au DL.

	    	// Je vérifie grâce à la fonction in_array, si le fichier DL à une extension autorisée dans le tableau ou non.
	    	if (in_array($file_extension, $extensions_autorisees)) 
		    	{
		    		// Envoi du fichier du repertoire temporaire à sa destination finale.
		    		if (move_uploaded_file($file_tmp_name, $imageDestChapitre)) 
			    		{
			    			// Enregistrement du chapitre avec l'image.
			    			$idChapitre = $_GET['idChapitre'];
			    			$numeroChapitre = $_POST['numeroChapitre'];
		                    $titreChapitre = $_POST['titreChapitre'];
		                    $texteChapitre = $_POST['texteChapitre'];
		                    recModifChapter($numeroChapitre, $titreChapitre, $texteChapitre, $imageNameChapitre, $imageDestChapitre, $idChapitre);
			    		}
			    		else
			    			{
			    				throw new Exception("Une erreur est survenue lors de l'envoi de l'image.");
			    			}
		    	}
		    	// Si l'extension n'est pas autorisé ou si on ne DL pas de fichier.
		    	else
	    			{
	    				// Enregistrement du chapitre sans l'image.
	    				recModifWithoutImg();
	    			}    
		}

	// Fonction qui configure modification du chapitre sans ajout image :
	function recModifWithoutImg()
		{	   
			$imageNameChapitre = $_POST['imgNameChapitre']; // null si vide.
			$imageDestChapitre = $_POST['imgDestChapitre']; // null si vide.

			$idChapitre = $_GET['idChapitre'];
			$numeroChapitre = $_POST['numeroChapitre'];
			$titreChapitre = $_POST['titreChapitre'];
			$texteChapitre = $_POST['texteChapitre'];
			recModifChapter($numeroChapitre, $titreChapitre, $texteChapitre, $imageNameChapitre, $imageDestChapitre, $idChapitre);	    	
		}







	/* ------------ Admin-New-Chapitre ------------ */

	// Fonction qui redirige vers la page Admin-New-Chapitre :
	function viewNewChapAdmin()
		{
		    require 'view/backend/newChapAdminView.php';
		}

	// Fonction qui enregistre le nouveau chapitre et redirige vers la page Admin-Chapitres :
	function recNewChapter($idChapitre, $numeroChapitre, $titreChapitre, $texteChapitre, $imageNameChapitre, $imageDestChapitre)
		{
	    	$adminModifChapManager = new AdminModifChapManager();
			$recNewChapter = $adminModifChapManager->recNewChapterAdmin($idChapitre, $numeroChapitre, $titreChapitre, $texteChapitre, $imageNameChapitre, $imageDestChapitre);

			if (isset($_POST['recInput']))
				{
					restoreChapter($idChapitre); // Statut 0 = Brouillon.
				}
			if (isset($_POST['byeInput']))
				{
					header('Location: index.php?action=Admin-chapitres'); // Abandon.
					exit;
				}
		}

	// Fonction qui configure l'enregistrement du chapitre avec une image :
	function recWithImg()
		{
		    $imageNameChapitre = $_FILES['imageChapitre']['name']; // Nom du fichier envoyé dans l'input imageChapitre.
	    	$file_extension = strrchr($imageNameChapitre, "."); // Affiche ce qui se trouve à partir du "." après le nom du fichier (l'extention).

	    	$file_tmp_name = $_FILES['imageChapitre']['tmp_name']; // Nom du repertoire temporaire du fichier envoyé dans l'input imageChapitre.
	    	$imageDestChapitre = 'public/images/' . $imageNameChapitre; // Nom du repertoire temporaire du fichier envoyé dans l'input imageChapitre.

	    	$extensions_autorisees = array(".png", ".PNG", ".jpg", ".JPG", ".jpeg", ".JPEG");

	    	if (in_array($file_extension, $extensions_autorisees)) 
		    	{
		    		if (move_uploaded_file($file_tmp_name, $imageDestChapitre)) 
			    		{
			    			$numeroChapitre = $_POST['numeroChapitre'];
		                    $titreChapitre = $_POST['titreChapitre'];
		                    $texteChapitre = $_POST['texteChapitre'];
		                    recNewChapter($idChapitre, $numeroChapitre, $titreChapitre, $texteChapitre, $imageNameChapitre, $imageDestChapitre);
			    		}
			    		else
			    			{
			    				throw new Exception("Une erreur est survenue lors de l'envoi de l'image.");
			    			}
		    	}
		    	else
	    			{
	    				recWithoutImg();
	    			}    
		}

	// Fonction qui configure l'enregistrement du chapitre sans image :
	function recWithoutImg()
		{	   
			$imageNameChapitre = null;
			$imageDestChapitre = null;

			$numeroChapitre = $_POST['numeroChapitre'];
			$titreChapitre = $_POST['titreChapitre'];
			$texteChapitre = $_POST['texteChapitre'];
			recNewChapter($idChapitre, $numeroChapitre, $titreChapitre, $texteChapitre, $imageNameChapitre, $imageDestChapitre);	    	
		}














