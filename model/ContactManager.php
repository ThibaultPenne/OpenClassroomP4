<?php

require_once('model/Manager.php');

class ContactManager extends Manager
    {

        // Fonction qui ajoute des message dans la DB (page Contact) :
        public function sendMessage($nom, $prenom, $email, $titreMessage, $message, $rgpd)
            {
                $db = $this->dbConnect();
                $messag = $db->prepare('INSERT INTO contact(nom, prenom, email, titre_message, message, rgpd, date_message) VALUES(?, ?, ?, ?, ?, ?, NOW())');
                $affectedLines_message = $messag->execute(array($nom, $prenom, $email, $titreMessage, $message, $rgpd));

                return $affectedLines_message;
            }

    }


    