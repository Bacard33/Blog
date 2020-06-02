<?php
 
namespace p4_blog\model;

require_once("model/Manager.php");
 
class CommentManager extends Manager
{
    //Récupère les commentaires d'un article
    public function getComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, pseudo, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y\') AS comment_date_fr, reported_comment FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($postId));
        
        return $comments;
    }
    
    //Création d'un commentaire
    public function postComment($postId, $pseudo, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_id, pseudo, comment, comment_date, reported_comment) VALUES(?, ?, ?, NOW(), "n")');
        $affectedLines = $comments->execute(array($postId, $pseudo, $comment));
    
        return $affectedLines;
    }

    //Récupère un commentaire 
    public function getComment($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, pseudo, comment, post_id, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin\') AS comment_date_fr FROM comments WHERE id = ?');
        $req->execute(array($id));
        $comment = $req->fetch();

        return $comment;
    }
    
    //Signalement d'un commentaire
    public function reportedComment($id)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('UPDATE comments SET reported_comment = "o" WHERE id = ?');
        $comments->execute(array($id));

        return $comments;
    }
    //Récupère la liste des commentaires signalés
    public function listReportedComment()
    {
        $db = $this->dbConnect();
        
        $listcomments = $db->prepare('SELECT * FROM comments WHERE reported_comment = "o"');
        $listcomments->execute();

        return $listcomments;
    }

    //Signalement du commentaire approuvé
    public function approveComment($id)
    { 
        $db = $this->dbConnect();
        $okListcomments = $db->prepare('UPDATE comments SET reported_comment = "x" WHERE id = ?');
        $okListcomments->execute(array($id));

        return $okListcomments;
    }
    //Suppression du commentaire signalé
    public function deleteComment($id)
    {
        //var_dump($nbcomment, $id);
        //die();
        $db = $this->dbConnect();
        $deleteComment = $db->prepare('DELETE FROM comments WHERE id = ?');
        $deleteComment->execute(array($id));

        //$req= $db->prepare('UPDATE posts SET nbcomment = ? WHERE id = ?');
        //$req->execute(array($nbcomment, $id));

        return $deleteComment;
    }
}