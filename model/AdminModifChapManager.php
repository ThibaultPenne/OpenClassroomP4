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

    }


    