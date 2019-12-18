<?php

require_once('model/Manager.php');

class DashboardManager extends Manager
    {

        /* Les Chapitres */

        // Fonction qui récupère le nombre de chapitres en cours d'écriture :
        public function enCoursChapNbrManager()
            {
                $db = $this->dbConnect();
                $showEnCoursChap = $db->query('SELECT * FROM chapitres WHERE statut="0" ');
                $enCoursChapNbr = $showEnCoursChap->rowCount(); // Le nombre de ligne.

                return $enCoursChapNbr;
            }

        // Fonction qui récupère le nombre de chapitres publiés :
        public function publishChapNbrManager()
            {
                $db = $this->dbConnect();
                $showPublishChap = $db->query('SELECT * FROM chapitres WHERE statut="1" ');
                $publishChapNbr = $showPublishChap->rowCount();

                return $publishChapNbr;
            }

        // Fonction qui récupère le nombre de chapitres supprimés :
        public function deleteChapNbrManager()
            {
                $db = $this->dbConnect();
                $showDeleteChap = $db->query('SELECT * FROM chapitres WHERE statut="2" ');
                $deleteChapNbr = $showDeleteChap->rowCount();

                return $deleteChapNbr;
            }

        // Fonction qui récupère le nombre de tous les chapitres :
        public function allChapNbrManager()
            {
                $db = $this->dbConnect();
                $showAllChap = $db->query('SELECT * FROM chapitres');
                $allChapNbr = $showAllChap->rowCount();

                return $allChapNbr;
            }


        /* Les Commentaires */

        // Fonction qui récupère le nombre de commentaires en attente de validation :
        public function enCoursComNbrManager()
            {
                $db = $this->dbConnect();
                $showEnCoursCom = $db->query('SELECT * FROM commentaires WHERE statut="0" ');
                $enCoursComNbr = $showEnCoursCom->rowCount();

                return $enCoursComNbr;
            }

        // Fonction qui récupère le nombre de commentaires validés :
        public function validComNbrManager()
            {
                $db = $this->dbConnect();
                $showValidCom = $db->query('SELECT * FROM commentaires WHERE statut="1" ');
                $validComNbr = $showValidCom->rowCount();

                return $validComNbr;
            }

        // Fonction qui récupère le nombre de commentaires supprimés :
        public function deleteComNbrManager()
            {
                $db = $this->dbConnect();
                $showDeleteCom = $db->query('SELECT * FROM commentaires WHERE statut="2" ');
                $deleteComNbr = $showDeleteCom->rowCount();

                return $deleteComNbr;
            }

       // Fonction qui récupère le nombre de commentaires signalés :
        public function signalComNbrManager()
            {
                $db = $this->dbConnect();
                $showSignalCom = $db->query('SELECT * FROM commentaires WHERE signal_com="oui" ');
                $signalComNbr = $showSignalCom->rowCount();

                return $signalComNbr;
            }

        // Fonction qui récupère le nombre de tous les commentaires :
        public function allComNbrManager()
            {
                $db = $this->dbConnect();
                $showAllCom = $db->query('SELECT * FROM commentaires');
                $allComNbr = $showAllCom->rowCount();

                return $allComNbr;
            }

        

        
    }


    