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
    // Permet de renvoyer un nouveau mot de passe à l'admin 
    public function updateTempPwd($randomInt, $mail) {
        
        $db = $this->dbConnect();
        $tempPassword = $db->prepare('UPDATE users SET password = ? WHERE mail = ?');
        $randomInt = $tempPassword->execute(array($randomInt, $mail));       
   
    }
}