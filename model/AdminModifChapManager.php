<?php

require_once('model/Manager.php');

class AdminModifChapManager extends Manager
    {

        // Fonction qui récupère un chapitre précis en fonction de son ID (page Admin-Chap-Modif) :
        public function getChapModif($idChapitre)
            {
                $db = $this->dbConnect();
                $chaptersAdminModif = $db->prepare('SELECT id_chapitre, numero, titre, content_text, DATE_FORMAT(date_creation, "%e/%m/%Y") AS date_creation_france FROM chapitres WHERE id_chapitre = ?');
                $chaptersAdminModif->execute(array($idChapitre));
                if ($chaptersAdminModif->rowCount() == 1)
                    return $chaptersAdminModif->fetch();  // Accès à la première ligne de résultat
                else
                    throw new Exception("Aucun chapitre ne correspond à l'identifiant '$idChapitre'");
            }

        // Fonction qui enregistre le chapitre modifié (pages Admin-Chap-Modif) :
        public function recModifChapterAdmin($titreChapitre, $texteChapitre, $idChapitre)
            {
                $db = $this->dbConnect();
                $chapter = $db->prepare('UPDATE chapitres SET titre = ?, content_text = ? WHERE id_chapitre = ?');
                $recModifChapter = $chapter->execute(array($titreChapitre, $texteChapitre, $idChapitre));

                return $recModifChapter;  
            }

        // Fonction qui enregistre le nouveau chapitre (pages Admin-New-Chap) :
        public function recNewChapterAdmin($idChapitre, $numeroChapitre, $titreChapitre, $texteChapitre)
            {
                $db = $this->dbConnect();
                $chapter = $db->prepare('INSERT INTO chapitres(id_chapitre, numero, titre, content_text, date_creation) VALUES(?, ?, ?, ?, NOW())');
                $recNewChapter = $chapter->execute(array($idChapitre, $numeroChapitre, $titreChapitre, $texteChapitre));

                return $recNewChapter;   
            }



    }


    