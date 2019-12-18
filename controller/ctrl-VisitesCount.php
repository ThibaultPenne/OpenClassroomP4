<?php

/* Controleur qui gère les Visites */


// Chargement de la classe :
require('model/VisitesCountManager.php');



	/* ------------ Visites Total ------------ */

	// Fonction qui comptabilise tous les visiteurs en créant et incrémentant le fichier VisiteCount (Call sur la page d'acceuil dans l'index) :
	function ajouterVue()
		{
			// Destination et nom du fichier.
			$fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'VisiteCount';
			$compteur = 1; // J'ajoute 1 à la variable compteur.

			// Si ce fichier existe,
			if (file_exists($fichier)) 
				{
				 	// file_get_contents pour récupérer le fichier mais (int) pour convertir en entier au lieu d'une string car je veux incrémenter la variable.
				 	$compteur = (int)file_get_contents($fichier);
				 	$compteur++;
				}

			// Je sauvegarde dans le fichier la valeur du compteur.
			file_put_contents($fichier, $compteur);
		}

	// Fonction qui récupère le nombre de visiteurs Total (call dans une variable sur adminView.php) :
	function nombresVues(): string
		{
			// Destination et nom du fichier.
			$fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'VisiteCount';

			// Je retourne le contenu du fichier.
			return file_get_contents($fichier);

		}



	/* ------------ Visites Live ------------ */

	// Fonction qui comptabilise et gère les visites Live (sur toutes les pages du Blog = sur le template) :
	function visitesLive()
		{
			$tempsSession = 300; // Temps d'un user connecté (300s = 5min).
			$tempsActuel = date("U"); // U = nbr de sec depuis 01/01/1970 (avance chaque sec).
			$ipUser = $_SERVER['REMOTE_ADDR']; // Permet de detecter l'ip d'un user.
			$sessionDeleteTime = $tempsActuel - $tempsSession; // Moment du chargement de la page - Le temps d'une session   
			getIpExists($ipUser, $tempsActuel, $sessionDeleteTime);
		}

	// Fonction qui gère la recherche, l'ajout, l'update et la suppression des ipUser :
	function getIpExists($ipUser, $tempsActuel, $sessionDeleteTime)
		{
			// Je vérifie si l'$ipUser existe ou non.
			$visitesCountManager = new VisitesCountManager();
			$ipExist = $visitesCountManager->getIpManager($ipUser);

	        if($ipExist == 0) // Si l'user n'a pas de ligne, j'en insère une avec son ip et $tempsActuel.
		        {
		            addIp($ipUser, $tempsActuel);
		        }
				else // Sinon, si l'user est déja connecté, je réinitialise son $tempsActuel (Quand l'user change de page ou recharge une page sur le Blog).
			        {
			           updateIp($tempsActuel, $ipUser);
			        }

			// Je supprime sa ligne après 5min. Toutes les lignes de la Table Online qui auront une valeur inférieur à $sessionDeleteTime seront supprimées.
			// Fonctionne quand je ou une personne visite le Blog pour rafraichir la Table avec un nouveau $sessionDeleteTime de référence.
	        $deleteIpLine = $visitesCountManager->deleteIpManager($sessionDeleteTime);

	        // Je supprime mon IP pour éviter d'être compté comme un visiteur (live).
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

	// Fonction qui comptabilise les lignes du tableau Online (les visiteurs connectés) (call dans une variable sur adminView.php) :
	function getUserNbr()
		{
			$visitesCountManager = new VisitesCountManager();
			$userNbr = $visitesCountManager->getUserNbrManager();
			return $userNbr;
		}

	


