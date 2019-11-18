<?php

/* Controleur qui gère les fonctions de redirection des pages Admin et récupère les données de la DB dans les models Backend (Admin) */


// Chargement des classes :
require('model/AdminChapterManager.php');
require('model/AdminCommentManager.php');
require('model/AdminModifChapManager.php');



	// Fonction qui redirige vers la page Admin :
	function viewAdmin()
		{
		    $adminChapterManager = new AdminChapterManager();
		    $chaptersAdminLast = $adminChapterManager->getChaptersAdmin0();

		    $adminCommentManager = new AdminCommentManager();
		    $commentsAdminLast = $adminCommentManager->getCommentsAdmin0();
		    
			require 'view/backend/adminView.php';
		}

	// Fonction qui gère la connexion vers la page Admin :
	function connexionAdmin()
        {
            // Si email et password ont été posté :
            if (!empty($_POST['email']) AND !empty($_POST['password']))
                {
                	// Si email et password sont corrects :
                    if ($_POST['email'] == "jeanforteroche@contact.com" AND $_POST['password'] == "alaska95")
                        {
                            // Alors, je connecte l'utilisateur :
                            session_start();
                            // Je stock son état de connexion dans la Session
                            $_SESSION['connecting'] = 1; // Une valeur autre que null passe l'user à l'état connecté (true).

                            header('Location: index.php?action=Admin');
                        }
                        else
                            {
                                throw new Exception("Une information que vous avez renseigné n'est pas reconnue.");
                            }
                }
        }	

    // Fonction qui gère la deconnexion de la page Admin :
	function deconnexionAdmin()
        {
            session_start();
            unset($_SESSION['connecting']); // Fermeture de la session.
            header('Location: index.php');
			exit;
        }

	// Fonction qui redirige vers la page Admin-Chapitres :
	function viewChapsAdmin()
		{
		    $adminChapterManager = new AdminChapterManager();
		    $chaptersAdminEnCours = $adminChapterManager->getChaptersAdmin1();
		    $chaptersAdminPublie = $adminChapterManager->getChaptersAdmin2();
		    $chaptersAdminSupprime = $adminChapterManager->getChaptersAdmin3();

			require 'view/backend/chapsAdminView.php';
		}

	// Fonction qui redirige vers la page Admin-Commentaires :
	function viewComsAdmin()
		{
		    $adminCommentManager = new AdminCommentManager();
		    $commentsAdminEnCours = $adminCommentManager->getCommentsAdmin1();
		    $commentsAdminValide = $adminCommentManager->getCommentsAdmin2();
		    $commentsAdminSupprime = $adminCommentManager->getCommentsAdmin3();

			require 'view/backend/comsAdminView.php';
		}

	// Fonction qui redirige vers la page Admin-New-Chapitre :
	function viewNewChapAdmin()
		{
		    /* A gérer */

			require 'view/backend/newChapAdminView.php';
		}

	// Fonction qui redirige vers la page de modification du Chapitre choisi :
	function viewModifChapAdmin($idChapitre)
		{
			$adminModifChapManager = new AdminModifChapManager();
		    $chaptersAdminModif = $adminModifChapManager->getChapModif($idChapitre);

			require 'view/backend/chapModifAdminView.php';
		}






