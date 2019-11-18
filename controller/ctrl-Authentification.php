<?php

/*<!-- Controleur qui contient les fonctions d'authentification à la Session -->*/


    // Fonction qui active la session si on est connecté (true) :
    function connectingSession (): bool
        {
            // Si la Session n'est pas active sur une page ...
            if (session_status() === PHP_SESSION_NONE) 
                {
                    session_start(); // Je l'active.
                }

            // Renvoi la session connectée :
            return !empty($_SESSION['connecting']); // false si vide (empty), true avec n'importe quelle valeur (true = connecté = connnecting).
        }

    // Fonction qui force la connexion de l'utilisateur :
    function connexionForced (): void // retour void pas besoin de return, c'est une redirection.
        {
            if(!connectingSession())  // Si l'utilisateur n'est pas connecté, 
                {
                    throw new Exception("Connectez vous !");
                }
        }