<?php

/* Controleur qui gère les fonctions de redirection des pages Admin et récupère les données de la DB dans les models Backend (Admin) */


// Chargement des classes :
require('model/AdminChapterManager.php');
require('model/AdminCommentManager.php');
require('model/AdminModifChapManager.php');



	/* ------------ Admin Home ------------ */
	
	// Fonction qui redirige vers la page Admin :
	function viewAdmin()
		{
		    $adminChapterManager = new AdminChapterManager();
		    $chaptersAdminLast = $adminChapterManager->getChaptersAdmin0();

		    $adminCommentManager = new AdminCommentManager();
		    $commentsAdminLast = $adminCommentManager->getCommentsAdmin0();
		    
			require 'view/backend/adminView.php';
		}




	/* ------------ Publier / Supprimer / Restaurer les Chapitres ------------ */

	// Fonction qui redirige vers la page Admin-Chapitres :
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


	/* ------------ Valider / Supprimer / Restaurer les Commentaires ------------ */

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
					restoreChapter($idChapitre);
				}
			if (isset($_POST['publishInput']))
				{
					publishChapter($idChapitre);
				}
			if (isset($_POST['deleteInput']))
				{
					deleteChapter($idChapitre);
				}
		}

	// Fonction qui configure la modification du chapitre avec ajout d'une image :
	function recModifWithImg()
		{
		    $imageNameChapitre = $_FILES['imageChapitre']['name'];
	    	$file_extension = strrchr($imageNameChapitre, ".");

	    	$file_tmp_name = $_FILES['imageChapitre']['tmp_name'];
	    	$imageDestChapitre = 'public/images/' . $imageNameChapitre;

	    	$extensions_autorisees = array(".png", ".PNG", ".jpg", ".JPG", ".jpeg", ".JPEG");

	    	if (in_array($file_extension, $extensions_autorisees)) 
		    	{
		    		if (move_uploaded_file($file_tmp_name, $imageDestChapitre)) 
			    		{
			    			$idChapitre = $_GET['idChapitre'];
			    			$numeroChapitre = html_entity_decode($_POST['numeroChapitre']);
		                    $titreChapitre = html_entity_decode($_POST['titreChapitre']);
		                    $texteChapitre = html_entity_decode($_POST['texteChapitre']);
		                    recModifChapter($numeroChapitre, $titreChapitre, $texteChapitre, $imageNameChapitre, $imageDestChapitre, $idChapitre);
			    		}
			    		else
			    			{
			    				throw new Exception("Une erreur est survenue lors de l'envoi de l'image.");
			    			}
		    	}
		    	else
	    			{
	    				recModifWithoutImg();
	    			}    
		}

	// Fonction qui configure modification du chapitre sans ajout image :
	function recModifWithoutImg()
		{	   
			$imageNameChapitre = html_entity_decode($_POST['imgNameChapitre']);
			$imageDestChapitre = html_entity_decode($_POST['imgDestChapitre']);

			$idChapitre = $_GET['idChapitre'];
			$numeroChapitre = html_entity_decode($_POST['numeroChapitre']);
			$titreChapitre = html_entity_decode($_POST['titreChapitre']);
			$texteChapitre = html_entity_decode($_POST['texteChapitre']);
			recModifChapter($numeroChapitre, $titreChapitre, $texteChapitre, $imageNameChapitre, $imageDestChapitre, $idChapitre);	    	
		}







	/* ------------ Admin-New-Chapitre ------------ */

	// Fonction qui redirige vers la page Admin-New-Chapitre :
	function viewNewChapAdmin()
		{
		    /* A gérer */

			require 'view/backend/newChapAdminView.php';
		}

	// Fonction qui enregistre le nouveau chapitre et redirige vers la page Admin-New-Chapitre :
	function recNewChapter($idChapitre, $numeroChapitre, $titreChapitre, $texteChapitre, $imageNameChapitre, $imageDestChapitre)
		{
	    	$adminModifChapManager = new AdminModifChapManager();
			$recNewChapter = $adminModifChapManager->recNewChapterAdmin($idChapitre, $numeroChapitre, $titreChapitre, $texteChapitre, $imageNameChapitre, $imageDestChapitre);

			if (isset($_POST['recInput']))
				{
					restoreChapter($idChapitre);
				}
			if (isset($_POST['byeInput']))
				{
					header('Location: index.php?action=Admin-chapitres');
					exit;
				}
		}

	// Fonction qui configure l'enregistrement du chapitre avec une image :
	function recWithImg()
		{
		    $imageNameChapitre = $_FILES['imageChapitre']['name'];
	    	$file_extension = strrchr($imageNameChapitre, ".");

	    	$file_tmp_name = $_FILES['imageChapitre']['tmp_name'];
	    	$imageDestChapitre = 'public/images/' . $imageNameChapitre;

	    	$extensions_autorisees = array(".png", ".PNG", ".jpg", ".JPG", ".jpeg", ".JPEG");

	    	if (in_array($file_extension, $extensions_autorisees)) 
		    	{
		    		if (move_uploaded_file($file_tmp_name, $imageDestChapitre)) 
			    		{
			    			$numeroChapitre = html_entity_decode($_POST['numeroChapitre']);
		                    $titreChapitre = html_entity_decode($_POST['titreChapitre']);
		                    $texteChapitre = html_entity_decode($_POST['texteChapitre']);
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

			$numeroChapitre = html_entity_decode($_POST['numeroChapitre']);
			$titreChapitre = html_entity_decode($_POST['titreChapitre']);
			$texteChapitre = html_entity_decode($_POST['texteChapitre']);
			recNewChapter($idChapitre, $numeroChapitre, $titreChapitre, $texteChapitre, $imageNameChapitre, $imageDestChapitre);	    	
		}














