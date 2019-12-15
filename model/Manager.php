<?php

class Manager
	{
		
		// Fonction qui permet d'éviter de répéter du code dans les futures fonctions (ALL) :
	    protected function dbConnect()
	    {
	        // Connexion à la base de données
            $db = new PDO('mysql:host=db5000212522.hosting-data.io;dbname=dbs207376;charset=utf8', 'dbu209349', '@Azerty95', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

            return $db;
	    }

	}