<?php

/* Controleur qui ... Dashboard DB ... Admin Home. */


// Chargement des classes :
require('model/DashboardManager.php');



	/* ------------ Les Chapitres ------------ */
	
	// Fonction qui ...
	function get_enCoursChapNbr()
		{
			$dashboardManager = new DashboardManager();
			$enCoursChapNbr = $dashboardManager->enCoursChapNbrManager();
			return $enCoursChapNbr;
		}

	// Fonction qui ...
	function get_publishChapNbr()
		{
			$dashboardManager = new DashboardManager();
			$publishChapNbr = $dashboardManager->publishChapNbrManager();
			return $publishChapNbr;
		}

	// Fonction qui ...
	function get_deleteChapNbr()
		{
			$dashboardManager = new DashboardManager();
			$deleteChapNbr = $dashboardManager->deleteChapNbrManager();
			return $deleteChapNbr;
		}

	// Fonction qui ...
	function get_publishChapPct($publishChapNbr)
		{
			$dashboardManager = new DashboardManager();
			$allChapNbr = $dashboardManager->allChapNbrManager();

			$publishChapPct = ($publishChapNbr / $allChapNbr) * 100;

			return $publishChapPct;
		}

	// Fonction qui ...
	function get_enCoursChapPct($enCoursChapNbr)
		{
			$dashboardManager = new DashboardManager();
			$allChapNbr = $dashboardManager->allChapNbrManager();

			if ($enCoursChapNbr > 0) 
				{
					$enCoursChapPct = 100 - (($enCoursChapNbr / $allChapNbr) * 100);
				}
				else
					{
						$enCoursChapPct = 100;
					}

			return $enCoursChapPct;
		}


	/* ------------ Les Commentaires ------------ */
	
	// Fonction qui ...
	function get_enCoursComNbr()
		{
			$dashboardManager = new DashboardManager();
			$enCoursComNbr = $dashboardManager->enCoursComNbrManager();
			return $enCoursComNbr;
		}

	// Fonction qui ...
	function get_validComNbr()
		{
			$dashboardManager = new DashboardManager();
			$validComNbr = $dashboardManager->validComNbrManager();
			return $validComNbr;
		}

	// Fonction qui ...
	function get_deleteComNbr()
		{
			$dashboardManager = new DashboardManager();
			$deleteComNbr = $dashboardManager->deleteComNbrManager();
			return $deleteComNbr;
		}

	// Fonction qui ...
	function get_signalComNbr()
		{
			$dashboardManager = new DashboardManager();
			$signalComNbr = $dashboardManager->signalComNbrManager();
			return $signalComNbr;
		}

	// Fonction qui ...
	function get_allComNbr()
		{
			$dashboardManager = new DashboardManager();
			$allComNbr = $dashboardManager->allComNbrManager();
			return $allComNbr;
		}

	// Fonction qui ...
	function get_validComPct($validComNbr, $allComNbr)
		{
			get_allComNbr();

			$validComPct = ($validComNbr / $allComNbr) * 100;

			return $validComPct;
		}

	// Fonction qui ...
	function get_signalComPct($signalComNbr, $allComNbr)
		{
			get_allComNbr();

			$signalComPct = ($signalComNbr / $allComNbr) * 100;

			return $signalComPct;
		}

	// Fonction qui ...
	function get_deleteComPct($deleteComNbr, $allComNbr)
		{
			get_allComNbr();

			$deletelComPct = ($deleteComNbr / $allComNbr) * 100;

			return $deletelComPct;
		}

	// Fonction qui ...
	function get_enCoursComPct($enCoursComNbr, $allComNbr)
		{
			get_allComNbr();

			if ($enCoursComNbr > 0) 
				{
					$enCoursComPct = 100 - (($enCoursComNbr / $allComNbr) * 100);
				}
				else
					{
						$enCoursComPct = 100;
					}
					
			return $enCoursComPct;
		}

	// Fonction qui ...
	function get_userComPct($userTotal, $allComNbr)
		{
			get_allComNbr();

			if ($allComNbr > 0) 
				{
					$userCommentPct = 100 - (($allComNbr / $userTotal) * 100);
				}
				else
					{
						$userCommentPct = 100;
					}
					
			return $userCommentPct;
		}


