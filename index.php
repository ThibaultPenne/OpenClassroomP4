
<!-- Le routeur : sélectionne et appelle l'action à réaliser en lui passant les paramètres nécessaires -->
<!-- Si la requête est incohérente, il signale l'erreur à l'utilisateur -->
<!-- Autre bénéfice : l'organisation interne du site est totalement masquée à l'utilisateur, puisque seul le fichier index.php est visible dans les URL -->
<?php

require('controller/controlFrontend.php');


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
                        if (isset($_GET['idChapitre'])) /* Vérif de l'id */
                            {
                                $idChapitre = intval($_GET['idChapitre']); // intval renvoie la valeur numérique du paramètre ou 0 en cas d'échec
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
                elseif ($_GET['action'] == 'Signal-commentaire') 
                    {
                        if(isset($_GET['idComment']) && $_GET['idComment'] > 0) 
                            {
                                signalComment($_GET['idChapitre'], $_GET['idComment'], $_POST['signal']);
                            }
                            else 
                                {
                                    throw new Exception("Identifiant de commentaire non défini dans l'URL après le signalement du commentaire");
                                }
                    }
                elseif ($_GET['action'] == 'RetourChap')
                    {
                        if (isset($_GET['idChapitre'])) /* Vérif de l'id */
                            {
                                $idChapitre = intval($_GET['idChapitre']); // intval renvoie la valeur numérique du paramètre ou 0 en cas d'échec
                                if ($idChapitre != 0)
                                    {
                                      deleteSignal($idChapitre);
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
                elseif ($_GET['action'] == 'Ajout-commentaire') 
                    {
                        if (isset($_GET['id']) && $_GET['id'] > 0) 
                            {
                                addComment($_GET['id'], $_POST['pseudo'], $_POST['comment']);
                            }
                            else 
                                {
                                    throw new Exception("Identifiant de chapitre non défini dans l'URL après l'ajout du commentaire");
                                }
                    }
                elseif ($_GET['action'] == 'Contact')
                    {         
                        viewContact();
                    }  
                elseif ($_GET['action'] == 'Envoi-message')
                    {                 
                        if (isset($_POST['nom']))
                            {
                                sendContact($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['titreMessage'], $_POST['message'], $_POST['rgpd']);
                            }  
                            else
                                {
                                    throw new Exception("Un problème est survenu");
                                }               
                    } 
                elseif ($_GET['action'] == 'Nouveau-formulaire')
                    {
                        deleteContact();
                    } 
                elseif ($_GET['action'] == 'Admin') 
                    {
                        viewAdmin(); 
                    } 
                elseif ($_GET['action'] == 'ConnexionAdmin') 
                    {
                        connexionAdmin();
                    }
                elseif ($_GET['action'] == 'DeconnexionAdmin') 
                    {
                        deconnexionAdmin();
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
                elseif ($_GET['action'] == 'Admin-modif-chapitre') 
                    {
                        if (isset($_GET['idChapitre'])) /* Vérif de l'id */
                            {
                                $idChapitre = intval($_GET['idChapitre']); // intval renvoie la valeur numérique du paramètre ou 0 en cas d'échec
                                if ($idChapitre != 0)
                                    {
                                      viewModifChapAdmin($idChapitre);
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


