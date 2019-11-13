
<!-- Requêtes SQL : Logique et accès à la base données -->
<?php


    /* -------------- Frontend -------------- */

    // Fonction qui recupère les 3 derniers chapitres publiés en apercus (page Accueil) :
    function getPreviewChaps()
        {
            $db = dbConnect();
            $previewChaps = $db->query('SELECT id, numero, titre, content_text, DATE_FORMAT(date_creation, "%d/%m/%Y à %Hh%imin%ss") AS date_creation_fr FROM chapitres WHERE publié="1" ORDER BY date_creation DESC LIMIT 0, 3');

            return $previewChaps;
        }
   
    // Fonction qui recupère tous les chapitres dans une liste (page Chapitres) :
    function getChapters()
        {
            $db = dbConnect();
            $chapters = $db->query('SELECT id, numero, titre, DATE_FORMAT(date_publication, "%e/%m/%Y") AS date_publication_fra FROM chapitres WHERE publié="1" ORDER BY date_publication DESC');

            return $chapters;
        }

    // Fonction qui recupère tous les numéros des chapitres dans une liste (page Chapitre) :
    function getChaptersList()
        {
            $db = dbConnect();
            $chapsList = $db->query('SELECT id, numero, DATE_FORMAT(date_publication, "%d/%m/%Y à %Hh%imin%ss") AS date_publication_fr FROM chapitres WHERE publié="1" ORDER BY date_publication DESC');

            return $chapsList;
        }

    // Fonction qui récupère un chapitre précis en fonction de son ID (page Chapitre) :
    function getChapter($idChapitre)
        {
            $db = dbConnect();
            $chapter = $db->prepare('SELECT id, numero, titre, content_text, content_img, date_publication, DATE_FORMAT(date_publication, "%e-%m-%Y") AS date_publication_fra FROM chapitres WHERE id = ?');
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
            $comments = $db->prepare('SELECT id, id_chapitre, pseudo, commentaire, signal_com, date_commentaire, DATE_FORMAT(date_commentaire, "%e-%m-%Y à %Hh%i") AS date_commentaire_fra FROM commentaires WHERE id_chapitre = ? AND supprime = 0 ORDER BY date_commentaire DESC');
            $comments->execute(array($idChapitre));

            return $comments;
        }

    // Fonction qui modifie un signalement de commentaire dans la DB (page Chapitre) :
    function postSignalComment ($signalComment)
        {
            $db = dbConnect();
            $comments = $db->prepare('UPDATE commentaires SET signal_com = "on" WHERE id = ?');
            $affectedSignal = $comments->execute(array($signalComment));

            return $affectedSignal;
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

    







/* -------------- General -------------- */

    // Fonction qui permet d'éviter de répéter du code dans les futures fonctions (ALL) :
    function dbConnect()
        {
            // Connexion à la base de données
            $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

            return $db;
        }




