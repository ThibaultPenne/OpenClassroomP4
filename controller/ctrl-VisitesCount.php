<?php

/* Controleur qui gère les Visites */


// Chargement de la classe :
require('model/VisitesCountManager.php');



	/* ------------ Visites Total ------------ */

	// Fonction qui comptabilise tous les visiteurs en créant et incrémentant le fichier VisiteCount :
	function ajouterVue()
		{
			$fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'VisiteCount';
			$compteur = 1;
			if (file_exists($fichier)) 
				{
				 	// Si le fichier existe, on incrémente
				 	$compteur = (int)file_get_contents($fichier);
				 	$compteur++;
				}
			// Sinon on crée le fichier avec la valeur 1
			file_put_contents($fichier, $compteur);
		}

	// Fonction qui affiche le nombre de visiteurs Total :
	function nombresVues(): string
		{
			$fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'VisiteCount';
			return file_get_contents($fichier);

		}


	/* ------------ Visites du Mois ------------ */



	/* ------------ Visites Live ------------ */

	// Fonction qui comptabilise et gère les visites Live :
	function visitesLive()
		{
			$tempsSession = 15; // Temps d'un user connecté (15s).
			$tempsActuel = date("U"); // U = nbr de sec depuis 01/01/1970 (avance chaque sec).
			$ipUser = $_SERVER['REMOTE_ADDR']; // Permet de detecter l'ip d'un user.
			$sessionDeleteTime = $tempsActuel - $tempsSession;    
			getIpExists($ipUser, $tempsActuel, $sessionDeleteTime);
		}

	// Fonction qui gère la connexion vers la DB via son modèle et la logique :
	function getIpExists($ipUser, $tempsActuel, $sessionDeleteTime)
		{
			$visitesCountManager = new VisitesCountManager();
			$ipExist = $visitesCountManager->getIpManager($ipUser);

	        if($ipExist == 0) // Si l'user n'a pas de ligne, j'en insère une pendant 15s.
		        {
		            addIp($ipUser, $tempsActuel);
		        }
				else // Sinon, si l'user est toujours connecté, mais sur une autre page, j'update sa ligne en ajoutant 15s.
			        {
			           updateIp($tempsActuel, $ipUser);
			        }

			// Je supprime la ligne après 15s (fonctionne quand je ou une personne visite le Blog pour rafraichir le tableau).
	        $deleteIpLine = $visitesCountManager->deleteIpManager($sessionDeleteTime);

	        // Je supprime mon IP pour éviter que je soit compté comme un visiteur (live).
			$deleteMyIp = $visitesCountManager->deleteMyIpManager();
	    }

	// Fonction qui ajoute une ligne :
	function addIp($ipUser, $tempsActuel)
		{
			$visitesCountManager = new VisitesCountManager();
			$addIp = $visitesCountManager->addIpManager($ipUser, $tempsActuel);
		}

	// Fonction qui update un ligne :
	function updateIp($tempsActuel, $ipUser)
		{
			$visitesCountManager = new VisitesCountManager();
			$updateIp = $visitesCountManager->updateIpManager($tempsActuel, $ipUser);
		}

	// Fonction qui comptabilise les lignes du tableau Online (les visiteurs connectés) :
	function getUserNbr()
		{
			$visitesCountManager = new VisitesCountManager();
			$userNbr = $visitesCountManager->getUserNbrManager();
			return $userNbr;
		}

	


