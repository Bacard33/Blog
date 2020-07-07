<?php
 
// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');
require_once('model/UserManager.php');


//Récupère la liste des chapitres
function listPosts()
{
    $postManager = new p4_blog\model\PostManager();
    $posts = $postManager->getPosts();
    
    require('view/frontend/homeView.php');
}

//Récupère un chapitre 
function post()
{
    $postManager = new p4_blog\model\PostManager();
    $commentManager = new p4_blog\model\CommentManager();
 
    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);
    
    require('view/frontend/postView.php');
}

// Ajoute un commentaire au chapitre 
function addComment($postId, $pseudo, $comment)
{
    $postManager = new p4_blog\model\PostManager();
    $commentManager = new p4_blog\model\CommentManager();
    $action = 'add';
    $post = $postManager->updatePostNbCom($postId, $action);
    $comments = $commentManager->postComment($postId, $pseudo, $comment);
    
    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {

        header('Location: index.php?action=post&id=' . $postId);
    }
}

// Signale un commentaire
function reportedComment($commentId, $postId) {
    
    $commentManager = new p4_blog\model\CommentManager();
    $reportedComment = $commentManager->reportedComment($commentId);
    
    header('Location: index.php?action=post&id=' . $postId);   
}

// Accès connexion admin
function loginAdmin() {

    require ('view/frontend/login.php');
}
// Oubli du mdp
function forgetPass() {

    require ('view/frontend/forgetPass.php');
}
