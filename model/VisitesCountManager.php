<?php

require_once('model/Manager.php');

class VisitesCountManager extends Manager
    {

        // Fonction qui recupère l'ip de l'user si elle existe.
        public function getIpManager($ipUser)
            {
                $db = $this->dbConnect();
                $getIp = $db->prepare('SELECT * FROM online WHERE user_ip = ?');
                $getIp->execute(array($ipUser));
                $ipExist = $getIp->rowCount(); // Pour compter le nbr d'entrée qu'il y a avec cette requête. 0 = dehors, 1 = dedans.

                return $ipExist; 
            }

        // Fonction qui ajoute une ligne avec l'ipUser et son temps actuel.
        public function addIpManager($ipUser, $tempsActuel)
            {
                $db = $this->dbConnect();
                $addIp = $db->prepare('INSERT INTO online(user_ip, time_sess) VALUES (?,?)');
                $addIp->execute(array($ipUser, $tempsActuel));

                return $addIp;
            }

        // Fonction qui update le temps actuel de l'ipUser concerné.
        public function updateIpManager($tempsActuel, $ipUser)
            {
                $db = $this->dbConnect();
                $updateIp = $db->prepare('UPDATE online SET time_sess = ? WHERE user_ip = ?');
                $updateIp->execute(array($tempsActuel, $ipUser));

                return $updateIp;
            }

        // Fonction qui supprime la ligne concernée (après les 5min d'inactivité).
        public function deleteIpManager($sessionDeleteTime)
            {
                $db = $this->dbConnect();
                $deleteIp = $db->prepare('DELETE FROM online WHERE time_sess < ?');
                $deleteIpLine = $deleteIp->execute(array($sessionDeleteTime));

                return $deleteIpLine;
            }

        // Fonction qui supprime automatiquement mon ip.
        public function deleteMyIpManager()
            {
                $db = $this->dbConnect();
                $deleteMyIp = $db->query('DELETE FROM online WHERE user_ip = "2a01:cb00:212:d400:a087:a7f4:d10b:c32f"');

                return $deleteMyIp;
            }

        // Fonction qui comptabilise les lignes du tableau.
        public function getUserNbrManager()
            {
                $db = $this->dbConnect();
                $showUserNbr = $db->query('SELECT * FROM online');
                $userNbr = $showUserNbr->rowCount();

                return $userNbr;
            }
       
        
    }


