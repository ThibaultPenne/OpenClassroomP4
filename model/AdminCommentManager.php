<?php

require_once('model/Manager.php');

class AdminCommentManager extends Manager
    {

        // Fonction qui recupère tous les 3 derniers commentaires en_cours dans 1 tableau (page Admin) :
        public function getCommentsAdmin0()
            {
                $db = $this->dbConnect();
                $commentsAdminLast = $db->query('SELECT id_comment, id_chapitre, pseudo, DATE_FORMAT(date_commentaire, "%e/%m/%Y") AS date_commentaire_franc FROM commentaires WHERE en_cours="1" ORDER BY date_commentaire DESC LIMIT 0, 3');

                return $commentsAdminLast;
            }

        // Fonction qui recupère tous les commentaires en_cours dans 1 tableau (page Admin-commentaires) :
        public function getCommentsAdmin1()
            {
                $db = $this->dbConnect();
                $commentsAdminEnCours = $db->query('SELECT id_comment, id_chapitre, pseudo, commentaire, signal_com, DATE_FORMAT(date_commentaire, "le %e/%m/%Y à %Hh%i") AS date_commentaire_franc FROM commentaires WHERE en_cours="1" ORDER BY date_commentaire DESC');

                return $commentsAdminEnCours;
            }

        // Fonction qui recupère tous les commentaires validés dans 1 tableau (page Admin-commentaires) :
        public function getCommentsAdmin2()
            {
                $db = $this->dbConnect();
                $commentsAdminValide = $db->query('SELECT id_comment, id_chapitre, pseudo, commentaire, signal_com, DATE_FORMAT(date_commentaire, "le %e/%m/%Y à %Hh%i") AS date_commentaire_franc FROM commentaires WHERE valide="1" ORDER BY date_commentaire DESC');

                return $commentsAdminValide;
            }

        // Fonction qui recupère tous les commentaires supprimés dans 1 tableau (page Admin-commentaires) :
        public function getCommentsAdmin3()
            {
                $db = $this->dbConnect();
                $commentsAdminSupprime = $db->query('SELECT id_comment, id_chapitre, pseudo, commentaire, signal_com, DATE_FORMAT(date_commentaire, "le %e/%m/%Y à %Hh%i") AS date_commentaire_franc FROM commentaires WHERE supprime="1" ORDER BY date_commentaire DESC');

                return $commentsAdminSupprime;
            }

    }


    