<?php

namespace p4_blog\model;

require_once("model/Manager.php"); 

class PostManager extends Manager
{
    //Récupère les 5 derniers chapitres
    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, nbcomment, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5');

        return $req;
    }
    //Récupère un chapitre
    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin\') AS creation_date_fr FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }

    //Affiche espace admin
    public function espaceAdmin($mail, $password) 
    {    
        $pass = hash('md5', $_POST['password']);
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM users WHERE mail = ?'); 
        $req->execute(array($mail));
        $userInfo = $req->fetch();
        
        if($pass = $userInfo['password']) {
        
            $_SESSION['admin']=1;
        }else{ 
            //Si les informations sont mauvaises / L'administrateur n'est pas connecté 
            $_SESSION['admin']=0;
        }
    }

    //Récupère un chapitre à modifier
    public function updatePost($id) {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM posts WHERE id = ?');
        $req->execute(array($id));
        return $req;
    }

    //Affiche un chapitre à modifier
    public function viewUpdatePost($id) {
        
        $db = $this->dbConnect();
        $view_update= $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin\') AS creation_date_fr FROM posts WHERE id = ?');
        $view_update->execute(array('title' => $_POST['title'], 'content' => $_POST ['mytextarea'], $_GET ['id']));

        return $view_update;

    }
    //Création d'un chapitre
    public function newPost() {
        $bd = $this->dbConnect();
        $req = $bd->prepare('INSERT INTO posts (author, title, content, creation_date, update_date) VALUES ("Jean Forteroche", :title, :content, NOW(), NOW())');
        $req->execute(array('title' => $_POST['title'], 'content' => $_POST['mytextarea']));

        return $req;
    }

    //Suppression du chapitre
    public function deletePost($id) {    
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM posts WHERE id = ?');
        $deleteArticle = $req->execute(array($id));

        return $deleteArticle;
    }

}