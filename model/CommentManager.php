<?php

require_once('model/Manager.php');

class CommentManager extends Manager
    {

        // Fonction qui récupère les commentaires associés à un ID de chapitre (page Chapitre) :
        public function getComments($idChapitre)
            {
                $db = $this->dbConnect();
                $comments = $db->prepare('SELECT id_comment, id_chapitre, pseudo, commentaire, signal_com, date_commentaire, DATE_FORMAT(date_commentaire, "%e-%m-%Y à %Hh%i") AS date_commentaire_fra FROM commentaires WHERE id_chapitre = ? AND statut != 2 ORDER BY date_commentaire DESC');
                $comments->execute(array($idChapitre));

                return $comments;
            }

        // Fonction qui modifie un signalement de commentaire dans la DB (page Chapitre) :
        public function postSignalComment($idChapitre, $signal)
            {
                $db = $this->dbConnect();
                $comments = $db->prepare('UPDATE commentaires SET signal_com = "oui", statut = 0 WHERE id_chapitre = ? AND id_comment = ?');
                $commentSignal = $comments->execute(array($idChapitre, $signal));

                return $commentSignal;
            }

        // Fonction qui ajoute des commentaires dans la DB (page Chapitre) :
        public function postComment($idChapitre, $pseudo, $comment)
            {
                $db = $this->dbConnect();
                $comments = $db->prepare('INSERT INTO commentaires(id_chapitre, pseudo, commentaire, date_commentaire) VALUES(?, ?, ?, NOW())');
                $affectedLines = $comments->execute(array($idChapitre, $pseudo, $comment));

                return $affectedLines;
            }
    }


    