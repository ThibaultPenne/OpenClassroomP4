<?php

/* Controleur qui gère les stats de la page Admin Home et récupère les données de la DB dans le model DashboardManager */
/* Il appele des fonctions situées à l'intérieur d'objets (des fonctions membres) = POO */



// Chargement de la classe :
require('model/DashboardManager.php');



	/* ------------ Les Chapitres ------------ */
	
	// Fonction qui récupère le nombre de chapitres en cours d'écriture :
	function get_enCoursChapNbr()
		{
			$dashboardManager = new DashboardManager(); // Création d'un objet à partir d'une classe (model)
			$enCoursChapNbr = $dashboardManager->enCoursChapNbrManager(); // Appel d'une fonction de cet objet
			return $enCoursChapNbr;
		}

	// Fonction qui récupère le nombre de chapitres publiés :
	function get_publishChapNbr()
		{
			$dashboardManager = new DashboardManager();
			$publishChapNbr = $dashboardManager->publishChapNbrManager();
			return $publishChapNbr;
		}

	// Fonction qui récupère le nombre de chapitres supprimés :
	function get_deleteChapNbr()
		{
			$dashboardManager = new DashboardManager();
			$deleteChapNbr = $dashboardManager->deleteChapNbrManager();
			return $deleteChapNbr;
		}

	// Fonction qui récupère le nombre de tous les chapitres et calcul le % de publication de chapitre :
	function get_publishChapPct($publishChapNbr)
		{
			$dashboardManager = new DashboardManager();
			$allChapNbr = $dashboardManager->allChapNbrManager();

			$publishChapPct = ($publishChapNbr / $allChapNbr) * 100;

			return $publishChapPct;
		}

	// Fonction qui récupère le nombre de tous les chapitres et calcul le % de chapitre restant à publier :
	function get_enCoursChapPct($enCoursChapNbr)
		{
			$dashboardManager = new DashboardManager();
			$allChapNbr = $dashboardManager->allChapNbrManager();

			// Si au moins 1 chapitre est en cours d'écriture.
			if ($enCoursChapNbr > 0) 
				{
					// 100 - ... pour que quand il n'y a plus de chapitre en cours, on atteigne 100% et non pas 0%.
					$enCoursChapPct = 100 - (($enCoursChapNbr / $allChapNbr) * 100);
				}
				else
					{
						// 100 % quand aucun chapitre n'est en cours d'écriture.
						$enCoursChapPct = 100;
					}

			return $enCoursChapPct;
		}


	/* ------------ Les Commentaires ------------ */
	
	// Fonction qui récupère le nombre de commentaires en attente de validation :
	function get_enCoursComNbr()
		{
			$dashboardManager = new DashboardManager();
			$enCoursComNbr = $dashboardManager->enCoursComNbrManager();
			return $enCoursComNbr;
		}

	// Fonction qui récupère le nombre de commentaires validés :
	function get_validComNbr()
		{
			$dashboardManager = new DashboardManager();
			$validComNbr = $dashboardManager->validComNbrManager();
			return $validComNbr;
		}

	// Fonction qui récupère le nombre de commentaires supprimés :
	function get_deleteComNbr()
		{
			$dashboardManager = new DashboardManager();
			$deleteComNbr = $dashboardManager->deleteComNbrManager();
			return $deleteComNbr;
		}

	// Fonction qui récupère le nombre de commentaires signalés :
	function get_signalComNbr()
		{
			$dashboardManager = new DashboardManager();
			$signalComNbr = $dashboardManager->signalComNbrManager();
			return $signalComNbr;
		}

	// Fonction qui récupère le nombre de tous les commentaires :
	function get_allComNbr()
		{
			$dashboardManager = new DashboardManager();
			$allComNbr = $dashboardManager->allComNbrManager();
			return $allComNbr;
		}

	// Fonction qui calcul le % de commentaires validés :
	function get_validComPct($validComNbr, $allComNbr)
		{
			get_allComNbr();

			$validComPct = ($validComNbr / $allComNbr) * 100;

			return $validComPct;
		}

	// Fonction qui calcul le % de commentaires signalés :
	function get_signalComPct($signalComNbr, $allComNbr)
		{
			get_allComNbr();

			$signalComPct = ($signalComNbr / $allComNbr) * 100;

			return $signalComPct;
		}

	// Fonction qui calcul le % de commentaires supprimés :
	function get_deleteComPct($deleteComNbr, $allComNbr)
		{
			get_allComNbr();

			$deletelComPct = ($deleteComNbr / $allComNbr) * 100;

			return $deletelComPct;
		}

	// Fonction qui calcul le % de commentaires restant à traiter :
	function get_enCoursComPct($enCoursComNbr, $allComNbr)
		{
			get_allComNbr();

			// Si au moins 1 commentaire est en cours de traitement.
			if ($enCoursComNbr > 0) 
				{
					// 100 - ... pour que quand il n'y a plus de commentaire en cours, on atteigne 100% et non pas 0%.
					$enCoursComPct = 100 - (($enCoursComNbr / $allComNbr) * 100);
				}
				else
					{
						// 100 % quand aucun commentaire n'est en cours de traitement.
						$enCoursComPct = 100;
					}
					
			return $enCoursComPct;
		}



