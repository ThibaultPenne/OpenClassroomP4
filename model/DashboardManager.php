<?php

require_once('model/Manager.php');

class DashboardManager extends Manager
    {

        /* Les Chapitres */

        // Fonction qui ...
        public function enCoursChapNbrManager()
            {
                $db = $this->dbConnect();
                $showEnCoursChap = $db->query('SELECT * FROM chapitres WHERE statut="0" ');
                $enCoursChapNbr = $showEnCoursChap->rowCount();

                return $enCoursChapNbr;
            }

        // Fonction qui ...
        public function publishChapNbrManager()
            {
                $db = $this->dbConnect();
                $showPublishChap = $db->query('SELECT * FROM chapitres WHERE statut="1" ');
                $publishChapNbr = $showPublishChap->rowCount();

                return $publishChapNbr;
            }

        // Fonction qui ...
        public function deleteChapNbrManager()
            {
                $db = $this->dbConnect();
                $showDeleteChap = $db->query('SELECT * FROM chapitres WHERE statut="2" ');
                $deleteChapNbr = $showDeleteChap->rowCount();

                return $deleteChapNbr;
            }

        // Fonction qui ...
        public function allChapNbrManager()
            {
                $db = $this->dbConnect();
                $showAllChap = $db->query('SELECT * FROM chapitres');
                $allChapNbr = $showAllChap->rowCount();

                return $allChapNbr;
            }


        /* Les Commentaires */

        // Fonction qui ...
        public function enCoursComNbrManager()
            {
                $db = $this->dbConnect();
                $showEnCoursCom = $db->query('SELECT * FROM commentaires WHERE statut="0" ');
                $enCoursComNbr = $showEnCoursCom->rowCount();

                return $enCoursComNbr;
            }

        // Fonction qui ...
        public function validComNbrManager()
            {
                $db = $this->dbConnect();
                $showValidCom = $db->query('SELECT * FROM commentaires WHERE statut="1" ');
                $validComNbr = $showValidCom->rowCount();

                return $validComNbr;
            }

        // Fonction qui ...
        public function deleteComNbrManager()
            {
                $db = $this->dbConnect();
                $showDeleteCom = $db->query('SELECT * FROM commentaires WHERE statut="2" ');
                $deleteComNbr = $showDeleteCom->rowCount();

                return $deleteComNbr;
            }

        // Fonction qui ...
        public function signalComNbrManager()
            {
                $db = $this->dbConnect();
                $showSignalCom = $db->query('SELECT * FROM commentaires WHERE signal_com="oui" ');
                $signalComNbr = $showSignalCom->rowCount();

                return $signalComNbr;
            }

        // Fonction qui ...
        public function allComNbrManager()
            {
                $db = $this->dbConnect();
                $showAllCom = $db->query('SELECT * FROM commentaires');
                $allComNbr = $showAllCom->rowCount();

                return $allComNbr;
            }

        

        
    }


    