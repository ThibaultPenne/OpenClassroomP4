<?php

/*<!-- Le routeur : sélectionne et appelle l'action à réaliser en lui passant les paramètres nécessaires -->
<!-- Si la requête est incohérente, il signale l'erreur à l'utilisateur -->
<!-- Autre bénéfice : l'organisation interne du site est totalement masquée à l'utilisateur, puisque seul le fichier index.php est visible dans les URL -->*/


require('controller/ctrl-Frontend.php');
require('controller/ctrl-Backend.php');
require('controller/ctrl-Error.php');
require('controller/ctrl-Authentification.php');


try // On essaie de faire des choses..
    {
        if (isset($_GET['action'])) 
            {
                // Page Chapitres :
                if ($_GET['action'] == 'Chapitres') /* Vérif de l'action */
                    {
                        viewChapters();
                    }     
                // Page Chapitre :         
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
                // Page Contact :
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
                // Page Admin Home :
                elseif ($_GET['action'] == 'Admin') 
                    {
                        connexionForced();
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
                // Page Admin Chapitres :
                elseif ($_GET['action'] == 'Admin-chapitres') 
                    {
                        connexionForced();
                        viewChapsAdmin();
                    }
                elseif ($_GET['action'] == 'PublishChap') 
                    {
                        if(isset($_GET['idChapitre']) && $_GET['idChapitre'] > 0) 
                            {
                                connexionForced();
                                $idChapitre = $_GET['idChapitre'];
                                publishChapter($idChapitre);
                            }
                            else 
                                {
                                    throw new Exception("Identifiant du chapitre à supprimé non valide");
                                }
                    }
                elseif ($_GET['action'] == 'DeleteChap') 
                    {
                        if(isset($_GET['idChapitre']) && $_GET['idChapitre'] > 0) 
                            {
                                connexionForced();
                                $idChapitre = $_GET['idChapitre'];
                                deleteChapter($idChapitre);
                            }
                            else 
                                {
                                    throw new Exception("Identifiant du chapitre à supprimé non valide");
                                }
                    }
                elseif ($_GET['action'] == 'RestoreChap') 
                    {
                        if(isset($_GET['idChapitre']) && $_GET['idChapitre'] > 0) 
                            {
                                connexionForced();
                                $idChapitre = $_GET['idChapitre'];
                                restoreChapter($idChapitre);
                            }
                            else 
                                {
                                    throw new Exception("Identifiant du chapitre à supprimé non valide");
                                }
                    }
                elseif ($_GET['action'] == 'DeleteFullChap') 
                    {
                        if(isset($_GET['idChapitre']) && $_GET['idChapitre'] > 0) 
                            {
                                connexionForced();
                                $idChapitre = $_GET['idChapitre'];
                                deleteFullChapter($idChapitre);
                            }
                            else 
                                {
                                    throw new Exception("Identifiant du chapitre à supprimé non valide");
                                }
                    }
                elseif ($_GET['action'] == 'DeleteChaptersTab') 
                    {
                        connexionForced();
                        deleteChaptersTab();
                    }
                // Page Admin Commentaires :
                elseif ($_GET['action'] == 'Admin-commentaires') 
                    {
                        connexionForced();
                        viewComsAdmin();
                    }
                elseif ($_GET['action'] == 'ValidComment') 
                    {
                        if(isset($_GET['idComment']) && $_GET['idComment'] > 0) 
                            {
                                connexionForced();
                                $idComment = $_GET['idComment'];
                                validComment($idComment);
                            }
                            else 
                                {
                                    throw new Exception("Identifiant du chapitre à supprimé non valide");
                                }
                    }
                elseif ($_GET['action'] == 'DeleteComment') 
                    {
                        if(isset($_GET['idComment']) && $_GET['idComment'] > 0) 
                            {
                                connexionForced();
                                $idComment = $_GET['idComment'];
                                deleteComment($idComment);
                            }
                            else 
                                {
                                    throw new Exception("Identifiant du chapitre à supprimé non valide");
                                }
                    }
                elseif ($_GET['action'] == 'RestoreComment') 
                    {
                        if(isset($_GET['idComment']) && $_GET['idComment'] > 0) 
                            {
                                connexionForced();
                                $idComment = $_GET['idComment'];
                                restoreComment($idComment);
                            }
                            else 
                                {
                                    throw new Exception("Identifiant du chapitre à supprimé non valide");
                                }
                    }
                elseif ($_GET['action'] == 'DeleteFullComment') 
                    {
                        if(isset($_GET['idComment']) && $_GET['idComment'] > 0) 
                            {
                                connexionForced();
                                $idComment = $_GET['idComment'];
                                deleteFullComment($idComment);
                            }
                            else 
                                {
                                    throw new Exception("Identifiant du chapitre à supprimé non valide");
                                }
                    }
                elseif ($_GET['action'] == 'DeleteCommentTab') 
                    {
                        connexionForced();
                        deleteCommentTab();
                    }
                // Page Admin New Chapitre :
                elseif ($_GET['action'] == 'Admin-nouveau-chapitre') 
                    {
                        connexionForced();
                        viewNewChapAdmin();
                    }
                elseif ($_GET['action'] == 'RecNewChapter')
                    {                 
                        if (isset($_POST['titreChapitre']))
                            {
                                connexionForced();
                                $numeroChapitre = htmlspecialchars($_POST['numeroChapitre']);
                                $titreChapitre = htmlspecialchars($_POST['titreChapitre']);
                                $texteChapitre = htmlspecialchars($_POST['texteChapitre']);
                                recNewChapter($idChapitre, $numeroChapitre, $titreChapitre, $texteChapitre);
                            }  
                            else
                                {
                                    throw new Exception("Un problème est survenu lors de la création du chapitre");
                                }               
                    } 
                // Page Admin Modif Chapitre :
                elseif ($_GET['action'] == 'Admin-modif-chapitre') 
                    {
                        if (isset($_GET['idChapitre'])) /* Vérif de l'id */
                            {
                                $idChapitre = intval($_GET['idChapitre']); // intval renvoie la valeur numérique du paramètre ou 0 en cas d'échec
                                if ($idChapitre != 0)
                                    {
                                      connexionForced();
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
                elseif ($_GET['action'] == 'RecModifChapter') 
                    {
                        if(!empty($_POST['titreChapitre']) AND !empty($_POST['texteChapitre']))
                            {
                                connexionForced();
                                $idChapitre = $_GET['idChapitre'];
                                $titreChapitre = htmlspecialchars($_POST['titreChapitre']);
                                $texteChapitre = htmlspecialchars($_POST['texteChapitre']);
                                recModifChapter($titreChapitre, $texteChapitre, $idChapitre);
                            }
                            else 
                                {
                                    throw new Exception("Identifiant du chapitre à enregistrer non valide");
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


