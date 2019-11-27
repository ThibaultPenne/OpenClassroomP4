<?php

require_once('model/Manager.php');

class AdminChapterManager extends Manager
    {

        // Fonction qui recupère tous les 3 derniers chapitres publiés dans 1 tableau (page Admin) :
        public function getChaptersAdmin0()
            {   
                $db = $this->dbConnect();
                $chaptersAdminLast = $db->query('SELECT id_chapitre, numero, titre, DATE_FORMAT(date_publication, "%e/%m/%Y") AS date_publication_franc FROM chapitres WHERE statut="1" ORDER BY date_publication DESC LIMIT 0, 3');

                return $chaptersAdminLast;
            }

        // Fonction qui recupère tous les chapitres en_cours dans 1 tableau (page Admin-chapitres) :
        public function getChaptersAdmin1()
            {
                $db = $this->dbConnect();
                $chaptersAdminEnCours = $db->query('SELECT id_chapitre, numero, titre, DATE_FORMAT(date_creation, "%e/%m/%Y") AS date_creation_franc FROM chapitres WHERE statut="0" ORDER BY date_creation DESC');

                return $chaptersAdminEnCours;
            }

        // Fonction qui recupère tous les chapitres publiés dans 1 tableau (page Admin-chapitres) :
        public function getChaptersAdmin2()
            {
                $db = $this->dbConnect();
                $chaptersAdminPublie = $db->query('SELECT id_chapitre, numero, titre, DATE_FORMAT(date_publication, "%e/%m/%Y") AS date_publication_franc FROM chapitres WHERE statut="1" ORDER BY date_creation DESC');

                return $chaptersAdminPublie;
            }

        // Fonction qui recupère tous les chapitres supprimés dans 1 tableau (page Admin-chapitres) :
        public function getChaptersAdmin3()
            {
                $db = $this->dbConnect();
                $chaptersAdminSupprime = $db->query('SELECT id_chapitre, numero, titre, DATE_FORMAT(date_creation, "%e/%m/%Y") AS date_creation_franc FROM chapitres WHERE statut="2" ORDER BY date_creation DESC');

                return $chaptersAdminSupprime;
            }

        // Fonction qui publie le chapitre sélectionné (pages Admin-chapitres + newChap + chapModif) :
        public function publishChapterAdmin($idChapitre)
            {
                $db = $this->dbConnect();
                $chapter = $db->prepare('UPDATE chapitres SET statut = "1", date_publication = NOW() WHERE id_chapitre = ?');
                $publishChapter = $chapter->execute(array($idChapitre));

                return $publishChapter;  
            }

        // Fonction qui supprime le chapitre sélectionné (pages Admin-chapitres + newChap + chapModif) :
        public function deleteChapterAdmin($idChapitre)
            {
                $db = $this->dbConnect();
                $chapter = $db->prepare('UPDATE chapitres SET statut = 2 WHERE id_chapitre = ?');
                $deleteChapter = $chapter->execute(array($idChapitre));

                return $deleteChapter;  
            }

        // Fonction qui restaure le chapitre sélectionné (pages Admin-chapitres) :
        public function restoreChapterAdmin($idChapitre)
            {
                $db = $this->dbConnect();
                $chapter = $db->prepare('UPDATE chapitres SET statut = 0 WHERE id_chapitre = ?');
                $restoreChapter = $chapter->execute(array($idChapitre));

                return $restoreChapter;  
            }

        // Fonction qui supprime définitivement de la DB, le chapitre sélectionné (page Admin-chapitres) :
        public function deleteFullChapterAdmin($idChapitre)
            {
                $db = $this->dbConnect();
                $chapter = $db->prepare('DELETE FROM chapitres WHERE id_chapitre = ?');
                $deleteFullChapter = $chapter->execute(array($idChapitre));

                return $deleteFullChapter;  
            }

        // Fonction qui supprime définitivement de la DB, tout le tableau des chapitres supprimés (page Admin-chapitres) :
        public function deleteChaptersTabAdmin()
            {
                $db = $this->dbConnect();
                $deleteChaptersTab = $db->query('DELETE FROM chapitres WHERE statut = 2');

                return $deleteChaptersTab;  
            }


    }


    