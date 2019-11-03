

<!-- Requêtes SQL -->
<?php

    function getChapitres()
        {
            $db = dbConnect();
            // Je récupère les 3 derniers chapitres publiés :
            $req = $db->query('SELECT numero, titre, content_text, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM chapitres WHERE publié="1" ORDER BY date_creation DESC LIMIT 0, 3');

            return $req;
        }
   


    // Nouvelle fonction qui nous permet d'éviter de répéter du code dans les futures fonctions
    function dbConnect()
        {
            // Connexion à la base de données
            try
                {
                    $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
                    return $db;
                }
            catch(Exception $e)
                {
                    die('Erreur : '.$e->getMessage());
                }
        }

?> <!-- Fin des Requêtes SQL -->



