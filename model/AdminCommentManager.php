<?php

require_once('model/Manager.php');

class AdminCommentManager extends Manager
    {

        // Fonction qui recupère tous les 3 derniers commentaires en_cours dans 1 tableau (page Admin) :
        public function getCommentsAdmin0()
            {
                $db = $this->dbConnect();
                $commentsAdminLast = $db->query('SELECT id_comment, id_chapitre, pseudo, DATE_FORMAT(date_commentaire, "%e/%m/%Y") AS date_commentaire_franc FROM commentaires WHERE statut="0" ORDER BY date_commentaire DESC LIMIT 0, 3');

                return $commentsAdminLast;
            }

        // Fonction qui recupère tous les commentaires en_cours dans 1 tableau (page Admin-commentaires) :
        public function getCommentsAdmin1()
            {
                $db = $this->dbConnect();
                $commentsAdminEnCours = $db->query('SELECT id_comment, id_chapitre, pseudo, commentaire, signal_com, DATE_FORMAT(date_commentaire, "le %e/%m/%Y à %Hh%i") AS date_commentaire_franc FROM commentaires WHERE statut="0" ORDER BY date_commentaire DESC');

                return $commentsAdminEnCours;
            }

        // Fonction qui recupère tous les commentaires validés dans 1 tableau (page Admin-commentaires) :
        public function getCommentsAdmin2()
            {
                $db = $this->dbConnect();
                $commentsAdminValide = $db->query('SELECT id_comment, id_chapitre, pseudo, commentaire, signal_com, DATE_FORMAT(date_commentaire, "le %e/%m/%Y à %Hh%i") AS date_commentaire_franc FROM commentaires WHERE statut="1" ORDER BY date_commentaire DESC');

                return $commentsAdminValide;
            }

        // Fonction qui recupère tous les commentaires supprimés dans 1 tableau (page Admin-commentaires) :
        public function getCommentsAdmin3()
            {
                $db = $this->dbConnect();
                $commentsAdminSupprime = $db->query('SELECT id_comment, id_chapitre, pseudo, commentaire, signal_com, DATE_FORMAT(date_commentaire, "le %e/%m/%Y à %Hh%i") AS date_commentaire_franc FROM commentaires WHERE statut="2" ORDER BY date_commentaire DESC');

                return $commentsAdminSupprime;
            }

        // Fonction qui valide le commentaire sélectionné (pages Admin-comment) :
        public function validCommentAdmin($idComment)
            {
                $db = $this->dbConnect();
                $comment = $db->prepare('UPDATE commentaires SET statut = "1", signal_com = "non" WHERE id_comment = ?');
                $validComment = $comment->execute(array($idComment));

                return $validComment;  
            }

        // Fonction qui supprime le chapitre sélectionné (pages Admin-comment) :
        public function deleteCommentAdmin($idComment)
            {
                $db = $this->dbConnect();
                $comment = $db->prepare('UPDATE commentaires SET statut = 2 WHERE id_comment = ?');
                $deleteComment = $comment->execute(array($idComment));

                return $deleteComment;  
            }

        // Fonction qui restaure le commentaire sélectionné (pages Admin-comment) :
        public function restoreCommentAdmin($idComment)
            {
                $db = $this->dbConnect();
                $comment = $db->prepare('UPDATE commentaires SET statut = 0 WHERE id_comment = ?');
                $restoreComment = $comment->execute(array($idComment));

                return $restoreComment;  
            }

        // Fonction qui supprime définitivement de la DB, le commentaire sélectionné (page Admin-comment) :
        public function deleteFullCommentAdmin($idComment)
            {
                $db = $this->dbConnect();
                $comment = $db->prepare('DELETE FROM commentaires WHERE id_comment = ?');
                $deleteFullChapter = $comment->execute(array($idComment));

                return $deleteFullComment;  
            }

        // Fonction qui supprime définitivement de la DB, tout le tableau des commenaitres supprimés (page Admin-comment) :
        public function deleteCommentTabAdmin()
            {
                $db = $this->dbConnect();
                $deleteCommentTab = $db->query('DELETE FROM commentaires WHERE statut = 2');

                return $deleteCommentTab;  
            }

    }


    