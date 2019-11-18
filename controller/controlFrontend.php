
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
		    $signal_com = null; // par défaut, null pour valeur.
		    // Enregistrement de la valeur du Cookie signalement dans la variable $signal_com :
			if (!empty($_COOKIE['signalement']))
			    {
			        $signal_com = $_COOKIE['signalement'];
			    }   

		    $chapsList = getChaptersList();
		    $chapter = getChapter($idChapitre);
		    $comments = getComments($idChapitre);
		    
			require 'view/frontend/chapitreView.php';
		}

	// Fonction qui créele Cookie signalement, enregistre le signal dans la DB puis redirige vers la page Chapitre (en mode signalement validé + Bouton de retour) :
	function signalComment($idChapitre, $signal)
		{
		    setcookie('signalement', 'signalOK'); // Création du Cookie.
            $signal_com = 'signalOK';// Quand je fais un setcookie, je défini direct la valeur de la variable $signal_com.

		    $commentSignal = postSignalComment($idChapitre, $signal);

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
		    $affectedLines = postComment($idChapitre, $pseudo, $comment);

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

		    $affectedLines_message = sendMessage($nom, $prenom, $email, $titreMessage, $message, $rgpd);

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





	/* -------------- Backend -------------- */

	// Fonction qui redirige vers la page Admin :
	function viewAdmin()
		{
		    $_SESSION['connecting'] = 1;
		    connexionForced(); // Empêche la connexion par l'URL.

		    $chaptersAdminLast = getChaptersAdmin0();
		    $commentsAdminLast = getCommentsAdmin0();
		    
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
                            viewAdmin();
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
            $_SESSION['connecting'] = 0;
            unset($_SESSION['connecting']); // Fermeture de la session.
            viewPreviewChaps();
        }

	// Fonction qui redirige vers la page Admin-Chapitres :
	function viewChapsAdmin()
		{
		    /* A gérer */
		    session_start();
		    $_SESSION['connecting'] = 1;
		    connexionForced(); // Empêche la connexion par l'URL.

		    $chaptersAdminEnCours = getChaptersAdmin1();
		    $chaptersAdminPublie = getChaptersAdmin2();
		    $chaptersAdminSupprime = getChaptersAdmin3();

			require 'view/backend/chapsAdminView.php';
		}

	// Fonction qui redirige vers la page Admin-Commentaires :
	function viewComsAdmin()
		{
		    /* A gérer */
		    session_start();
		    $_SESSION['connecting'] = 1;
		    connexionForced(); // Empêche la connexion par l'URL.

		    $commentsAdminEnCours = getCommentsAdmin1();
		    $commentsAdminValide = getCommentsAdmin2();
		    $commentsAdminSupprime = getCommentsAdmin3();


			require 'view/backend/comsAdminView.php';
		}

	// Fonction qui redirige vers la page Admin-New-Chapitre :
	function viewNewChapAdmin()
		{
		    /* A gérer */
		    session_start();
		    $_SESSION['connecting'] = 1;
		    connexionForced(); // Empêche la connexion par l'URL.
			require 'view/backend/newChapAdminView.php';
		}

	//
	function viewModifChapAdmin($idChapitre)
		{
			/* A gérer */
		    session_start();
		    $_SESSION['connecting'] = 1;
		    connexionForced(); // Empêche la connexion par l'URL.

		    $chaptersAdminModif = getChapModif($idChapitre);

			require 'view/backend/chapModifAdminView.php';
		}




	/* -------------- Error -------------- */

	// Fonction qui récupère le message d'erreur puis redirige vers la page Error :
	function errorMode($errorMsg) 
		{
		    require 'view/frontend/errorView.php';
		}




