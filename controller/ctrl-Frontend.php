<?php

/* Controleur qui gère les fonctions de redirection des pages du Blog et gère la DB grâce aux models Frontend (Blog) */
/* Il appele des fonctions situées à l'intérieur d'objets (des fonctions membres) = POO */


// Chargement des classes :
require('model/ChapterManager.php');
require('model/CommentManager.php');
require('model/ContactManager.php');



	// Fonction qui récupère les données SQL puis redirige vers la page Acceuil :
	function viewPreviewChaps()
		{
		    $chapterManager = new ChapterManager(); // Création d'un objet à partir d'une classe (model)
		    $previewChaps = $chapterManager->getPreviewChaps(); // Appel d'une fonction de cet objet

			require 'view/frontend/indexView.php';
		}

	// Fonction qui récupère les données SQL puis redirige vers la page Chapitres :
	function viewChapters()
		{
		    $chapterManager = new ChapterManager();
		    $chapters = $chapterManager->getChapters();

			require 'view/frontend/chapitresView.php';
		}

	// Fonction qui récupère les données SQL puis redirige vers la page Chapitre (+ Commentaires) :
	function viewChapter($idChapitre)
		{
		    $signal_com = null; // null = page chap (sinon, page coment signalé)
		    // Si $_COOKIE['signalement']) n'est pas vide
			if (!empty($_COOKIE['signalement']))
			    {
			        $signal_com = $_COOKIE['signalement']; // Enregistrement de la valeur du Cookie signalement dans la variable $signal_com
			    }   

			$chapterManager = new ChapterManager();
		    $chapsList = $chapterManager->getChaptersList();
		    $chapter = $chapterManager->getChapter($idChapitre);

		    $commentManager = new CommentManager();
		    $comments = $commentManager->getComments($idChapitre);
		    
			require 'view/frontend/chapitreView.php';
		}

	// Fonction qui crée le Cookie signalement, enregistre le signal dans la DB puis redirige vers la page Chapitre (en mode signalement validé + Bouton de retour) :
	function signalComment($idChapitre, $signal)
		{
		    setcookie('signalement', 'signalOK'); // Création et configuration du Cookie signalement.
            $signal_com = 'signalOK'; // La valeur de la variable $signal_com = la valeur du setcookie.

            $commentManager = new CommentManager();
		    $commentSignal = $commentManager->postSignalComment($idChapitre, $signal);

		    if ($commentSignal === false) 
			    {
			        throw new Exception('Impossible de signaler le commentaire !');
			    }
			    else 
				    {
				        // $_GET['idComment'] à bien été récupéré dans l'url mais je ne l'affiche pas.
				        header('Location: index.php?action=Chapitre&idChapitre=' . $idChapitre);
						exit;
				    }
		}

	// Fonction qui efface le Cookie signalement puis redirige vers la page chapitre en question :
	function deleteSignal($idChapitre)
	{
		unset($_COOKIE['signalement']); // Détruit la valeur de $_COOKIE pour la suite.
        setcookie('signalement', '', time() -10); // valeur vide et time -10sec.

		viewChapter($idChapitre);
	}

	// Fonction qui enregistre les données dans la DB puis redirige vers la page Chapitre (+ Commentaires) du commentaire en question :
	function addComment($idChapitre, $pseudo, $comment)
		{
		    $commentManager = new CommentManager();
		    $affectedLines = $commentManager->postComment($idChapitre, $pseudo, $comment);

		    if ($affectedLines === false) 
			    {
			        throw new Exception('Impossible d\'ajouter le commentaire !');
			    }
			    else 
				    {
				        viewChapter($idChapitre);
				    }
		}

	// Fonction qui configure le Cookie utilisateur puis redirige vers la page Contact :
	function viewContact()
		{
		    $prenom = null; // null = page contact (sinon, page message envoyé)
		    // Si $_COOKIE['utilisateur']) n'est pas vide
			if (!empty($_COOKIE['utilisateur']))
			    {
			        $prenom = $_COOKIE['utilisateur']; // Enregistrement de la valeur du Cookie utilisateur dans la variable $prénom
			    }   

			require 'view/frontend/contactView.php';
		}

	// Fonction qui crée le Cookie utilisateur, envoi un message, enregistre les données dans la DB puis redirige vers la page Contact (en mode message envoyé + Bouton de retour) :
	function sendContact($nom, $prenom, $email, $titreMessage, $message, $rgpd)
		{  
		    setcookie('utilisateur', $_POST['prenom']); // Création et configuration du Cookie utilisateur.
            $prenom = $_POST['prenom']; // La valeur de la variable $prenom = la valeur du setcookie.

		    $contactManager = new ContactManager();
		    $affectedLines_message = $contactManager->sendMessage($nom, $prenom, $email, $titreMessage, $message, $rgpd);

		    if ($affectedLines_message === false) 
			    {
			        throw new Exception('Impossible d\'envoyer le message !');
			    }
			    else 
				    {
				        require 'view/frontend/contactView.php';				        
				    }
		}

	// Fonction qui efface le Cookie utilisateur pour qu'il puisse renvoyer un nouveau message sur la page Contact :
	function deleteContact()
		{
		    unset($_COOKIE['utilisateur']); // Détruit la valeur de $_COOKIE pour la suite.
            setcookie('utilisateur', '', time() -10); // valeur vide et time -10sec.

			viewContact();
		}






