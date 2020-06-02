<?php
 
// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');
require_once('model/UserManager.php');


// Création d'un chapitre
function newPost() {
    
    require 'view/frontend/newPost.php';

}
function createNewPost($title, $content) {
    
    $Manager = new p4_blog\model\PostManager();
    $createNewPost = $Manager->createNewPost($title, $content);
    
    require 'view/frontend/admin.php';

}
// Récupère la liste des chapitres
function updatePost() {
    
    $postManager = new p4_blog\model\PostManager();
    $posts = $postManager->getAllPosts();
    
    require 'view/frontend/postUpdate.php';
}
// Affiche le chapitre à modifier
function viewUpdatePost() {
    
    $postManager = new p4_blog\model\PostManager();
    $post = $postManager->getPost($_GET['id']);

    require 'view/frontend/viewPostUpdate.php';
}
//Validation du chapitre modifié
function confirmUpdatePost($title, $content, $id) {

    $postManager = new p4_blog\model\PostManager();
    $post = $postManager->confirmUpdatePost($title, $content, $_GET['id']);

    require 'view/frontend/admin.php';
}
// Supprime un chapitre
function deletePost() {
    
    $postManager = new p4_blog\model\PostManager();
    $deletePost = $postManager->deletePost($_GET['id']);
    
    require 'view/frontend/admin.php';
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
// Supprime un commentaire signalé 
function deleteComment($commentId) {
    //var_dump($commentId); //ok
    //die();
    $postManager = new p4_blog\model\PostManager();
    $commentManager = new p4_blog\model\CommentManager();
    $comment = $commentManager->getComment($commentId);
    $action = 'del';
    $post = $postManager->updatePostNbCom($comment['post_id'], $action);
    $deleteComment = $commentManager->deleteComment($commentId);
    $s_comments = $commentManager->listReportedComment();

    require('view/frontend/viewReportedComment.php');
    
}