<?php

namespace p4_blog\model;

require_once("model/UserManager.php"); 

class UserManager extends Manager
{
    //Affiche espace admin
    public function espaceAdmin($mail, $password) 
    {  
        $pass = hash('md5', $_POST['password']);
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM users WHERE mail = ?'); 
        $req->execute(array($mail));
        $userInfo = $req->fetch();

        return $userInfo;  
    }
    // Sélectionne email de l'admin dans la BDD
    public function readAdmin($mail) 
    {  
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM users WHERE mail = ?'); 
        $req->execute(array($mail));
        $userInfo = $req->fetch();

        return $userInfo;  
    }
    // si le mot de passe est perdu : création d'un nouveau mdp + mise à jour de la BDD
    public function generateTempPwd($mailtoAddress) {

        require_once 'model/UserManager.php';

        $randomInt = rand(1000000, 999999999);
        $tempPwd = hash('md5', $randomInt);
        $user = new User();
        $forterocheMail = $userManager->getForterocheMail();

        if ($forterocheMail = $mailtoAddress) {

            $userManager->updateTempPwd($tempPwd, $forterocheMail);

            return $randomInt;

            } else {

                $_SESSION['info'] = 'Votre adresse est inconnue dans la base.<br>

                Cliquez pour revenir à la <a href="index.php?action=connexion">page de connexion</a>';
        }
    }
     /* Permet de renvoyer un nouveau mot de passe à l'admin */
    public function updateTempPwd($tempPwd, $mailtoAddress) {

        $db = Database::getConnection();
        $tempPassword = $db->prepare('UPDATE users SET password = ? WHERE mail = ?');
        $randomInt = $tempPassword->execute(array($tempPwd, $mailtoAddress));       
    }   

}