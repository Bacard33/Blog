<?php
 
// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');

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

    $commentManager = new p4_blog\model\CommentManager();
    
    $affectedLines = $commentManager->postComment($postId, $pseudo, $comment);


    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {

        $Manager = new p4_blog\model\PostManager();
        $update = $Manager->updatePost($id, $postId);
        header('Location: index.php?action=post&id=' . $postId);
    }
}

// Signale un commentaire
function reportedComment($commentId, $postId) {
    
    $commentManager = new p4_blog\model\CommentManager();
    $reportedComment = $commentManager->reportedComment($commentId);
    
    header('Location: index.php?action=post&id=' . $postId);
    
}

// Affiche la liste des commentaires signalés
function listReportedComment() {

    $commentManager = new p4_blog\model\CommentManager();
    $s_comments = $commentManager->listReportedComment();
    
    require('view/frontend/viewReportedComment.php');
    
}

// Autorise le commentaire signalé et empêche le signalement
function approveComment($commentId) {
    
    $commentManager = new p4_blog\model\CommentManager();
    $reportedComment = $commentManager->approveComment($commentId);  
    $s_comments = $commentManager->listReportedComment();

    require('view/frontend/viewReportedComment.php');
    
}
// Supprime le commentaire signalé 
function deleteComment($commentId) {
    
    $commentManager = new p4_blog\model\CommentManager();
    $deleteComment = $commentManager->deleteComment($commentId);
    $s_comments = $commentManager->listReportedComment();
    
    require('view/frontend/viewReportedComment.php');
    
}
// Accès connexion admin
function loginAdmin() {

    require ('view/frontend/login.php');
}
// Accès espace admin
function espaceAdmin($mail, $password) {

    $postManager = new p4_blog\model\PostManager();
    $posts = $postManager->espaceAdmin($mail, $password);
    
    if ($_SESSION['admin']==1) {
        require 'view/frontend/admin.php';
    } else {
        echo 'erreur connexion';
    }
    
}
// Création d'un chapitre
function newPost() {
    
    $Manager = new p4_blog\model\PostManager();
    $newPost = $Manager->newPost();

    require 'view/frontend/newPost.php';

}
// Récupère un chapitre pour le modifier
function updatePost($id) {

    $Manager = new p4_blog\model\PostManager();
    $update = $Manager->updatePost($id);

    require 'view/frontend/postUpdate.php';
}
// Affiche le chapitre modifié
function viewUpdatePost($id) {
    
    $Manager = new p4_blog\model\PostManager();
    $view_update = $Manager->viewUpdatePost($id);
    
    require 'view/frontend/postUpdate.php';
}

// Supprime un chapitre
function deletePost($id) {
    $postManager = new p4_blog\model\PostManager();
    $deletePost = $postManager->deletePost($id);
    if ($deleteArticle === false) {
        throw new Exception("Impossible de supprimer l'article !");
    }
    else {
        header('Location: index.php?action=admin');
    }
}