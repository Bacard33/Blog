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

    //Modification d'un chapitre
    public function viewUpdatePost($title, $content) {
        
        $db = $this->dbConnect();
        $req= $db->prepare('UPDATE posts SET title = ?, content = ?, update_date = NOW() WHERE id = ?');
        $req->execute(array($title, $content)) or die (print_r($req->errorInfo()));

        return $req;
    }
    
    //Création d'un chapitre
    public function createNewPost($title, $content) {
        $bd = $this->dbConnect();
        $req = $bd->prepare('INSERT INTO posts(author, title, content, nbcomment, creation_date, update_date) VALUES ("Jean Forteroche", ?, ?, "0", NOW(), NOW())');
        $req->execute(array($title, $content)) or die (print_r($req->errorInfo()));
        
        return $req;
    }
    //Suppression du chapitre
    public function deletePost($title, $content) {    
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM posts WHERE id = ?');
        $req->execute(array($title, $content)) or die (print_r($req->errorInfo()));

        return $req;
    }

}