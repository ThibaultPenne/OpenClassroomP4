
<!-- Le routeur : sélectionne et appelle l'action à réaliser en lui passant les paramètres nécessaires -->
<!-- Si la requête est incohérente, il signale l'erreur à l'utilisateur -->
<!-- Autre bénéfice : l'organisation interne du site est totalement masquée à l'utilisateur, puisque seul le fichier index.php est visible dans les URL -->
<?php

require('controller/controlFrontend.php');

/* Si action vaut Chapitres, Contact, Admin ou Chapitre, le routeur demande au routeur de diriger le visiteur vers la page correspondante */
/* Sinon, on vera par défaut la page d'acceuil */

try // On essaie de faire des choses..
    {
        if (isset($_GET['action'])) 
            {
                if ($_GET['action'] == 'Chapitres') /* Vérif de l'action */
                    {
                        viewChapters();
                    }              
                elseif ($_GET['action'] == 'Chapitre')
                    {
                        if (isset($_GET['id'])) /* Vérif de l'id */
                            {
                                $idChapitre = intval($_GET['id']); // intval renvoie la valeur numérique du paramètre ou 0 en cas d'échec
                                if ($idChapitre != 0)
                                    {
                                      viewChapter($idChapitre);
                                    }
                                    else
                                        { 
                                            throw new Exception("Identifiant de chapitre non valide dans l'URL");
                                        }
                            }
                            else
                                { 
                                    throw new Exception("Identifiant de chapitre non défini dans l'URL");
                                }
                    }
                    elseif ($_GET['action'] == 'Contact')
                        {
                            viewContact();
                        }  
                    elseif ($_GET['action'] == 'Admin') 
                        {
                            viewAdmin();
                        } 
                    elseif ($_GET['action'] == 'Admin-chapitres') 
                        {
                            viewChapsAdmin();
                        }
                    elseif ($_GET['action'] == 'Admin-commentaires') 
                        {
                            viewComsAdmin();
                        }
                    elseif ($_GET['action'] == 'Admin-nouveau-chapitre') 
                        {
                            viewNewChapAdmin();
                        }
                    else
                        {
                            throw new Exception("Action non valide dans l'URL");
                        }
            }           
        else // aucune action définie : affichage de l'accueil par défaut
            {
                viewPreviewChaps(); 
            }
    }        

catch (Exception $e) // S'il y a eu une erreur, alors..
    {
        errorMode($e->getMessage());
    }


