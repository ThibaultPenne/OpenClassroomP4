<?php

class Manager
	{
		
		// Fonction qui permet d'éviter de répéter ce code dans les futures fonctions (ALL).
		// protected autorise les classes filles de faire appel à cette fonction.
	    protected function dbConnect()
	    {
	        // Connexion à la base de données (les éventuelles erreurs seront signalées sous la forme d'exceptions et catch sur l'index).
	        // $db est l'objet qui représente la connexion à la DB (Nom de l'hôte, nom de la DB, login, mdp, erreurs).
            $db = new PDO('mysql:host=db5000212522.hosting-data.io;dbname=dbs207376;charset=utf8', 'dbu209349', '@Azerty95', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

            return $db;
	    }

	}