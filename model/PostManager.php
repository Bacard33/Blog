<?php

namespace p4_blog\model;

require_once("model/Manager.php"); 

class PostManager extends Manager
{
    //Récupère les 5 derniers chapitres
    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, nbcomment, DATE_FORMAT(creation_date, \'%d/%m/%Y\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5');
        $req->execute();
        return $req;
    }

    //Récupère un chapitre
    public function getPost($postId)
    {  
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, nbcomment, DATE_FORMAT(creation_date, \'%d/%m/%Y\') AS creation_date_fr FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }
    public function getAllPosts()
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, nbcomment, DATE_FORMAT(creation_date, \'%d/%m/%Y\') AS creation_date_fr FROM posts ORDER BY creation_date');
        $req->execute();

        return $req;
    }

    //Mise à jour avec incrémentation du nbre de commentaires
    public function updatePostNbCom($id, $action) {

        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, nbcomment, DATE_FORMAT(creation_date, \'%d/%m/%Y\') AS creation_date_fr FROM posts WHERE id = ?');
        $req->execute(array($id));
        $post = $req->fetch();
        
        if ($action == 'add') { 
            $nbcomment = $post['nbcomment']+1;
            //var_dump($post['nbcomment']);
            //die();
        }elseif ($action == 'del') {
            $nbcomment = $post['nbcomment']-1;
            //var_dump($post['nbcomment']);
            //die();
        } 
                                                
        $req= $db->prepare('UPDATE posts SET nbcomment = ? WHERE id = ?');
        $req->execute(array($nbcomment, $id));

        return $req;
    }
    //Modification d'un chapitre
    public function confirmUpdatePost($title, $content, $id) {
        
        $db = $this->dbConnect();
        $req= $db->prepare('UPDATE posts SET title = ?, content = ?, update_date = NOW() WHERE id = ?');
        $req->execute(array($title, $content, $id)) or die (print_r($req->errorInfo()));

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
    public function deletePost() { 
        
        $db = $this->dbConnect();
        $deletePost = $db->prepare('DELETE FROM posts WHERE id = ?');
        $deletePost->execute(array($_GET['id'])) or die (print_r($deletePost->errorInfo()));

        return $deletePost;
    }

}