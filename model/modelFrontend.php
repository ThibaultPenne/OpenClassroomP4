
<!-- Requêtes SQL : Logique et accès à la base données -->
<?php


    /* -------------- Frontend -------------- */

    // Fonction qui recupère les 3 derniers chapitres publiés en apercus (page Accueil) :
    function getPreviewChaps()
        {
            $db = dbConnect();
            $previewChaps = $db->query('SELECT id_chapitre, numero, titre, content_text, DATE_FORMAT(date_creation, "%d/%m/%Y à %Hh%imin%ss") AS date_creation_fr FROM chapitres WHERE publié="1" ORDER BY date_creation DESC LIMIT 0, 3');

            return $previewChaps;
        }
   
    // Fonction qui recupère tous les chapitres dans une liste (page Chapitres) :
    function getChapters()
        {
            $db = dbConnect();
            $chapters = $db->query('SELECT id_chapitre, numero, titre, DATE_FORMAT(date_publication, "%e/%m/%Y") AS date_publication_fra FROM chapitres WHERE publié="1" ORDER BY date_publication DESC');

            return $chapters;
        }

    // Fonction qui recupère tous les numéros des chapitres dans une liste (page Chapitre) :
    function getChaptersList()
        {
            $db = dbConnect();
            $chapsList = $db->query('SELECT id_chapitre, numero, DATE_FORMAT(date_publication, "%d/%m/%Y à %Hh%imin%ss") AS date_publication_fr FROM chapitres WHERE publié="1" ORDER BY date_publication DESC');

            return $chapsList;
        }

    // Fonction qui récupère un chapitre précis en fonction de son ID (page Chapitre) :
    function getChapter($idChapitre)
        {
            $db = dbConnect();
            $chapter = $db->prepare('SELECT id_chapitre, numero, titre, content_text, content_img, date_publication, DATE_FORMAT(date_publication, "%e-%m-%Y") AS date_publication_fra FROM chapitres WHERE id_chapitre = ?');
            $chapter->execute(array($idChapitre));
            if ($chapter->rowCount() == 1)
                return $chapter->fetch();  // Accès à la première ligne de résultat
            else
                throw new Exception("Aucun chapitre ne correspond à l'identifiant '$idChapitre'");
        }

    // Fonction qui récupère les commentaires associés à un ID de chapitre (page Chapitre) :
    function getComments($idChapitre)
        {
            $db = dbConnect();
            $comments = $db->prepare('SELECT id_comment, id_chapitre, pseudo, commentaire, signal_com, date_commentaire, DATE_FORMAT(date_commentaire, "%e-%m-%Y à %Hh%i") AS date_commentaire_fra FROM commentaires WHERE id_chapitre = ? AND supprime = 0 ORDER BY date_commentaire DESC');
            $comments->execute(array($idChapitre));

            return $comments;
        }

    // Fonction qui modifie un signalement de commentaire dans la DB (page Chapitre) :
    function postSignalComment($idChapitre, $signal)
        {
            $db = dbConnect();
            $comments = $db->prepare('UPDATE commentaires SET signal_com = "oui" WHERE id_chapitre = ? AND id_comment = ?');
            $commentSignal = $comments->execute(array($idChapitre, $signal));

            return $commentSignal;
        }

    // Fonction qui ajoute des commentaires dans la DB (page Chapitre) :
    function postComment($idChapitre, $pseudo, $comment)
        {
            $db = dbConnect();
            $comments = $db->prepare('INSERT INTO commentaires(id_chapitre, pseudo, commentaire, date_commentaire) VALUES(?, ?, ?, NOW())');
            $affectedLines = $comments->execute(array($idChapitre, $pseudo, $comment));

            return $affectedLines;
        }

    // Fonction qui ajoute des message dans la DB (page Contact) :
    function sendMessage($nom, $prenom, $email, $titreMessage, $message, $rgpd)
        {
            $db = dbConnect();
            $messag = $db->prepare('INSERT INTO contact(nom, prenom, email, titre_message, message, rgpd, date_message) VALUES(?, ?, ?, ?, ?, ?, NOW())');
            $affectedLines_message = $messag->execute(array($nom, $prenom, $email, $titreMessage, $message, $rgpd));

            return $affectedLines_message;
        }

    





/* -------------- Backend -------------- */

    // Fonction qui active la session si on est connecté (true) :
    function connectingSession (): bool
        {
            // Si la Session n'est pas active sur une page ...
            if (session_status() === PHP_SESSION_NONE) 
                {
                    session_start(); // Je l'active.
                }

            // Renvoi la session connectée :
            return !empty($_SESSION['connecting']); // false si vide (empty), true avec n'importe quelle valeur (true = connecté).
        }

    // Fonction qui force la connexion de l'utilisateur :
    function connexionForced (): void 
        {
            if(!connectingSession())  // Si l'utilisateur n'est pas connecté, 
                {
                    throw new Exception("Connectez vous !");
                }
        }

    /* Page Admin Home */

    // Fonction qui recupère tous les 3 derniers chapitres publiés dans 1 tableau (page Admin) :
    function getChaptersAdmin0()
        {
            $db = dbConnect();
            $chaptersAdminLast = $db->query('SELECT id_chapitre, numero, titre, DATE_FORMAT(date_publication, "%e/%m/%Y") AS date_publication_franc FROM chapitres WHERE publié="1" ORDER BY date_publication DESC LIMIT 0, 3');

            return $chaptersAdminLast;
        }

    // Fonction qui recupère tous les 3 derniers commentaires en_cours dans 1 tableau (page Admin) :
    function getCommentsAdmin0()
        {
            $db = dbConnect();
            $commentsAdminLast = $db->query('SELECT id_comment, id_chapitre, pseudo, DATE_FORMAT(date_commentaire, "%e/%m/%Y") AS date_commentaire_franc FROM commentaires WHERE en_cours="1" ORDER BY date_commentaire DESC LIMIT 0, 3');

            return $commentsAdminLast;
        }


    /* Page Admin Chapitres */

    // Fonction qui recupère tous les chapitres en_cours dans 1 tableau (page Admin-chapitres) :
    function getChaptersAdmin1()
        {
            $db = dbConnect();
            $chaptersAdminEnCours = $db->query('SELECT id_chapitre, numero, titre, DATE_FORMAT(date_creation, "%e/%m/%Y") AS date_creation_franc FROM chapitres WHERE en_cours="1" ORDER BY date_creation DESC');

            return $chaptersAdminEnCours;
        }

    // Fonction qui recupère tous les chapitres publiés dans 1 tableau (page Admin-chapitres) :
    function getChaptersAdmin2()
        {
            $db = dbConnect();
            $chaptersAdminPublie = $db->query('SELECT id_chapitre, numero, titre, DATE_FORMAT(date_publication, "%e/%m/%Y") AS date_publication_franc FROM chapitres WHERE publié="1" ORDER BY date_publication DESC');

            return $chaptersAdminPublie;
        }

    // Fonction qui recupère tous les chapitres supprimés dans 1 tableau (page Admin-chapitres) :
    function getChaptersAdmin3()
        {
            $db = dbConnect();
            $chaptersAdminSupprime = $db->query('SELECT id_chapitre, numero, titre, DATE_FORMAT(date_creation, "%e/%m/%Y") AS date_creation_franc FROM chapitres WHERE supprimé="1" ORDER BY date_creation DESC');

            return $chaptersAdminSupprime;
        }


    /* Page Admin Modif Chapitre */

    // Fonction qui récupère un chapitre précis en fonction de son ID (page Admin-Chap-Modif) :
    function getChapModif($idChapitre)
        {
            $db = dbConnect();
            $chaptersAdminModif = $db->prepare('SELECT id_chapitre, numero, titre, content_text, DATE_FORMAT(date_creation, "%e/%m/%Y") AS date_creation_france FROM chapitres WHERE id_chapitre = ?');
            $chaptersAdminModif->execute(array($idChapitre));
            if ($chaptersAdminModif->rowCount() == 1)
                return $chaptersAdminModif->fetch();  // Accès à la première ligne de résultat
            else
                throw new Exception("Aucun chapitre ne correspond à l'identifiant '$idChapitre'");
        }


    /* Page Admin Commentaires */

    // Fonction qui recupère tous les commentaires en_cours dans 1 tableau (page Admin-commentaires) :
    function getCommentsAdmin1()
        {
            $db = dbConnect();
            $commentsAdminEnCours = $db->query('SELECT id_comment, id_chapitre, pseudo, commentaire, signal_com, DATE_FORMAT(date_commentaire, "le %e/%m/%Y à %Hh%i") AS date_commentaire_franc FROM commentaires WHERE en_cours="1" ORDER BY date_commentaire DESC');

            return $commentsAdminEnCours;
        }

    // Fonction qui recupère tous les commentaires validés dans 1 tableau (page Admin-commentaires) :
    function getCommentsAdmin2()
        {
            $db = dbConnect();
            $commentsAdminValide = $db->query('SELECT id_comment, id_chapitre, pseudo, commentaire, signal_com, DATE_FORMAT(date_commentaire, "le %e/%m/%Y à %Hh%i") AS date_commentaire_franc FROM commentaires WHERE valide="1" ORDER BY date_commentaire DESC');

            return $commentsAdminValide;
        }

    // Fonction qui recupère tous les commentaires supprimés dans 1 tableau (page Admin-commentaires) :
    function getCommentsAdmin3()
        {
            $db = dbConnect();
            $commentsAdminSupprime = $db->query('SELECT id_comment, id_chapitre, pseudo, commentaire, signal_com, DATE_FORMAT(date_commentaire, "le %e/%m/%Y à %Hh%i") AS date_commentaire_franc FROM commentaires WHERE supprime="1" ORDER BY date_commentaire DESC');

            return $commentsAdminSupprime;
        }







/* -------------- General -------------- */

    // Fonction qui permet d'éviter de répéter du code dans les futures fonctions (ALL) :
    function dbConnect()
        {
            // Connexion à la base de données
            $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

            return $db;
        }




