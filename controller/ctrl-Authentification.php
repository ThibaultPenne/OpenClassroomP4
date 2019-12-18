<?php

    /* Controleur qui contient les fonctions d'authentification à la Session Admin */

    // Fonction qui active la session si on est connecté (true)
    function connectingSession()
        {  
            // Si la Session n'est pas active sur une page
            if (session_status() === PHP_SESSION_NONE)
                {
                    session_start(); // Je l'active
                }
                
            // Renvoi la session connectée
            return !empty($_SESSION['connecting']); // false si vide (empty), true avec n'importe quelle valeur (true = connecté = connnecting)
        }

    // Fonction qui force la connexion de l'utilisateur sur les pages admins
    function connexionForced()
        {
            if(!connectingSession())  // Si l'utilisateur n'est pas connecté 
                {
                    throw new Exception("Connectez vous !");
                }
        }

    // Fonction qui gère la connexion vers la page Admin Home
    function connexionAdmin()
        {
            // Si email et password sont corrects
            if ($_POST['email'] == "jeanforteroche@contact.com" AND $_POST['password'] == "alaska95")
                {
                    // Alors, j'active la session
                    session_start();
                    // Et je stock son état de connexion dans la variable $_SESSION['connecting'] (avec ne valeur autre que null = true)
                    $_SESSION['connecting'] = "yes";
                    header('Location: index.php?action=Admin');
                }
                else
                    {
                        throw new Exception("Une information que vous avez renseigné n'est pas reconnue.");
                    }
        }   

    // Fonction qui gère la deconnexion de la page Admin
    function deconnexionAdmin()
        {
            session_start();
            unset($_SESSION['connecting']); // Fermeture de la session
            header('Location: index.php');
            exit;
        }