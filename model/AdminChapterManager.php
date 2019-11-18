<?php

require_once('model/Manager.php');

class AdminChapterManager extends Manager
    {

        // Fonction qui recupère tous les 3 derniers chapitres publiés dans 1 tableau (page Admin) :
        public function getChaptersAdmin0()
            {
                $db = $this->dbConnect();
                $chaptersAdminLast = $db->query('SELECT id_chapitre, numero, titre, DATE_FORMAT(date_publication, "%e/%m/%Y") AS date_publication_franc FROM chapitres WHERE publié="1" ORDER BY date_publication DESC LIMIT 0, 3');

                return $chaptersAdminLast;
            }

        // Fonction qui recupère tous les chapitres en_cours dans 1 tableau (page Admin-chapitres) :
        public function getChaptersAdmin1()
            {
                $db = $this->dbConnect();
                $chaptersAdminEnCours = $db->query('SELECT id_chapitre, numero, titre, DATE_FORMAT(date_creation, "%e/%m/%Y") AS date_creation_franc FROM chapitres WHERE en_cours="1" ORDER BY date_creation DESC');

                return $chaptersAdminEnCours;
            }

        // Fonction qui recupère tous les chapitres publiés dans 1 tableau (page Admin-chapitres) :
        public function getChaptersAdmin2()
            {
                $db = $this->dbConnect();
                $chaptersAdminPublie = $db->query('SELECT id_chapitre, numero, titre, DATE_FORMAT(date_publication, "%e/%m/%Y") AS date_publication_franc FROM chapitres WHERE publié="1" ORDER BY date_publication DESC');

                return $chaptersAdminPublie;
            }

        // Fonction qui recupère tous les chapitres supprimés dans 1 tableau (page Admin-chapitres) :
        public function getChaptersAdmin3()
            {
                $db = $this->dbConnect();
                $chaptersAdminSupprime = $db->query('SELECT id_chapitre, numero, titre, DATE_FORMAT(date_creation, "%e/%m/%Y") AS date_creation_franc FROM chapitres WHERE supprimé="1" ORDER BY date_creation DESC');

                return $chaptersAdminSupprime;
            }

    }


    