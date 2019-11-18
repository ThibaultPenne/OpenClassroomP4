<?php

/* Controleur qui gère les fonctions de redirection des pages du Blog et récupère les données de la DB dans les models Frontend (Blog) */


// Chargement des classes :
require('model/ChapterManager.php');
require('model/CommentManager.php');
require('model/ContactManager.php');



	// Fonction qui récupère les données SQL puis redirige vers la page Acceuil :
	function viewPreviewChaps()
		{
		    $chapterManager = new ChapterManager();
		    $previewChaps = $chapterManager->getPreviewChaps();

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
		    $signal_com = null; // par défaut, null pour valeur.
		    // Enregistrement de la valeur du Cookie signalement dans la variable $signal_com :
			if (!empty($_COOKIE['signalement']))
			    {
			        $signal_com = $_COOKIE['signalement'];
			    }   

			$chapterManager = new ChapterManager();
		    $chapsList = $chapterManager->getChaptersList();
		    $chapter = $chapterManager->getChapter($idChapitre);

		    $commentManager = new CommentManager();
		    $comments = $commentManager->getComments($idChapitre);
		    
			require 'view/frontend/chapitreView.php';
		}

	// Fonction qui créele Cookie signalement, enregistre le signal dans la DB puis redirige vers la page Chapitre (en mode signalement validé + Bouton de retour) :
	function signalComment($idChapitre, $signal)
		{
		    setcookie('signalement', 'signalOK'); // Création du Cookie.
            $signal_com = 'signalOK';// Quand je fais un setcookie, je défini direct la valeur de la variable $signal_com.

            $commentManager = new CommentManager();
		    $commentSignal = $commentManager->postSignalComment($idChapitre, $signal);

		    if ($commentSignal === false) 
			    {
			        throw new Exception('Impossible de signaler le commentaire !');
			    }
			    else 
				    {
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
		    $prenom = null; // par défaut, null pour valeur.
		    // Enregistrement de la valeur du Cookie utilisateur dans la variable $prénom :
			if (!empty($_COOKIE['utilisateur']))
			    {
			        $prenom = $_COOKIE['utilisateur'];
			    }   

			require 'view/frontend/contactView.php';
		}

	// Fonction qui crée le Cookie utilisateur, envoi un message, enregistre les données dans la DB puis redirige vers la page Contact (en mode message envoyé + Bouton de retour) :
	function sendContact($nom, $prenom, $email, $titreMessage, $message, $rgpd)
		{  
		    setcookie('utilisateur', $_POST['prenom']); // Création du Cookie.
            $prenom = $_POST['prenom'];// Quand je fais un setcookie, je défini direct la valeur de la variable $prenom.

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






