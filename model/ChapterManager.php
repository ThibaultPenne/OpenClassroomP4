<?php

require_once('model/Manager.php');

class ChapterManager extends Manager // Hérite de la classe Manager.
    {

        // Fonction qui recupère les 3 derniers chapitres publiés en apercus (page Accueil) :
        public function getPreviewChaps()
            {
                $db = $this->dbConnect();
                $previewChaps = $db->query('SELECT id_chapitre, numero, titre, content_text, DATE_FORMAT(date_creation, "%d/%m/%Y à %Hh%imin%ss") AS date_creation_fr FROM chapitres WHERE statut="1" ORDER BY date_creation DESC LIMIT 0, 3');

                return $previewChaps;
            }
       
        // Fonction qui recupère tous les chapitres dans une liste (page Chapitres) :
        public function getChapters()
            {
                $db = $this->dbConnect();
                $chapters = $db->query('SELECT id_chapitre, numero, titre, DATE_FORMAT(date_publication, "%e/%m/%Y") AS date_publication_fra FROM chapitres WHERE statut="1" ORDER BY numero DESC');

                return $chapters;
            }

        // Fonction qui recupère tous les numéros des chapitres dans une liste (page Chapitre) :
        public function getChaptersList()
            {
                $db = $this->dbConnect();
                $chapsList = $db->query('SELECT id_chapitre, numero, DATE_FORMAT(date_publication, "%d/%m/%Y à %Hh%imin%ss") AS date_publication_fr FROM chapitres WHERE statut="1" ORDER BY numero DESC');

                return $chapsList;
            }

        // Fonction qui récupère un chapitre précis en fonction de son ID (page Chapitre) :
        public function getChapter($idChapitre)
            {
                $db = $this->dbConnect();
                $chapter = $db->prepare('SELECT id_chapitre, numero, titre, content_text, img_dest, date_publication, DATE_FORMAT(date_publication, "%e-%m-%Y") AS date_publication_fra FROM chapitres WHERE id_chapitre = ? AND statut="1"');
                $chapter->execute(array($idChapitre));
                if ($chapter->rowCount() == 1)
                    return $chapter->fetch();  // Accès à la première ligne de résultat (fetch = va chercher)
                else
                    throw new Exception("Aucun chapitre ne correspond à l'identifiant '$idChapitre'");
            }
    }


    