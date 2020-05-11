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
// Récupère un chapitre pour le modifier
function updatePost() {

    $postManager = new p4_blog\model\PostManager();
    $posts = $postManager->getPosts();
    
    require 'view/frontend/postUpdate.php';
}
// Affiche le chapitre modifié
function viewUpdatePost($title, $content) {
    
    $postManager = new p4_blog\model\PostManager();
    $view_update = $Manager->view_update($title, $content);

    require 'view/frontend/admin.php';
}

// Supprime un chapitre
function deletePost($title, $content) {

    $postManager = new p4_blog\model\PostManager();
    $deletePost = $Manager->deletePost($title, $content);
    
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
// Supprime le commentaire signalé 
function deleteComment($commentId) {
    
    $commentManager = new p4_blog\model\CommentManager();
    $deleteComment = $commentManager->deleteComment($commentId);
    $s_comments = $commentManager->listReportedComment();
    
    require('view/frontend/viewReportedComment.php');
    
}