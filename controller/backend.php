<?php
 
// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');
require_once('model/UserManager.php');


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
// Valide/Affiche le chapitre modifié
function viewUpdatePost($id) {
    
    $Manager = new p4_blog\model\PostManager();
    $view_update = $Manager->viewUpdatePost($id);
    
    require 'view/frontend/postUpdate.php';
}

// Supprime un chapitre
function deletePost($id) {
    $postManager = new p4_blog\model\PostManager();
    $deletePost = $postManager->deletePost($id);
    
    require 'view/frontend/postUpdate.php';
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