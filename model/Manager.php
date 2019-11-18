<?php

class Manager
	{
		
		// Fonction qui permet d'éviter de répéter du code dans les futures fonctions (ALL) :
	    protected function dbConnect()
	    {
	        // Connexion à la base de données
            $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

            return $db;
	    }

	}