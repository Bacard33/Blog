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
}