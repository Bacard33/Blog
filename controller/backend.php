<?php
 
// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');
require_once('model/UserManager.php');

// Accès espace admin
function espaceAdmin($mail, $password) {

    $pass = hash('md5', $_POST['password']);
    $userManager = new p4_blog\model\UserManager();
    $userInfo = $userManager->espaceAdmin($mail, $password);

    if($pass == $userInfo['password']) {
        
            if($_SESSION['admin']=1) {
                require 'view/backend/admin.php';
            }            
        }else{ 
            //Si les informations sont mauvaises / L'administrateur n'est pas connecté 
            $_SESSION['admin']=0;
            throw new Exception('Erreur de connexion : Veuillez vérifier vos identifiants.');
        }
}
// Accès espace admin après mise à jour du mdp
function controlAdmin($mail, $password, $temp_password) {
    
    $pass = hash('md5', $temp_password);
    $userManager = new p4_blog\model\UserManager();
    $userInfo = $userManager->readAdmin($mail);

    if($userInfo) {
        //var_dump("----2----");//ne passe pas
        //die();
        if($pass == $userInfo['password']) {
            //var_dump("expression");// ne passe pas ici
            //die();
            //mise à jour mdp
            $tempPwd = hash('md5', $password);
            $userInfo = $userManager->updateTempPwd($tempPwd, $mail);
            require 'view/backend/admin.php';
        }else {
            throw new Exception('Erreur : Vos identifiants sont incorrects.');
        }
    }
    
}
// Compare l'email avec celui de la BDD
function readAdmin($mail) {

    $userManager = new p4_blog\model\UserManager();
    $userInfo = $userManager->readAdmin($mail);

    if($userInfo) {

        $randomInt = rand(1000000, 999999999);
        $tempPwd = hash('md5', $randomInt);
        $userInfo = $userManager->updateTempPwd($tempPwd, $mail);
        
        require('controller/mailController.php');
        sendTempPwd($mail, $randomInt);        
        require ('view/backend/recoverPass.php');     

    }else {
        throw new Exception('Vous n\'avez pas saisi d\'email valide <br /> Vous n\'êtes donc pas autorisé à accéder à l\'administration');
    }
}
// Création d'un chapitre
function newPost() {
    
    require 'view/backend/newPost.php';

}
function createNewPost($title, $content) {
    
    $Manager = new p4_blog\model\PostManager();
    $createNewPost = $Manager->createNewPost($title, $content);
    
    require 'view/backend/admin.php';

}
// Récupère la liste des chapitres
function updatePost() {
    
    $postManager = new p4_blog\model\PostManager();
    $posts = $postManager->getAllPosts();
    
    require 'view/backend/postUpdate.php';
}
// Affiche le chapitre à modifier
function viewUpdatePost() {
    
    $postManager = new p4_blog\model\PostManager();
    $post = $postManager->getPost($_GET['id']);

    require 'view/backend/viewPostUpdate.php';
}
//Validation du chapitre modifié
function confirmUpdatePost($title, $content, $id) {

    $postManager = new p4_blog\model\PostManager();
    $post = $postManager->confirmUpdatePost($title, $content, $_GET['id']);

    require 'view/backend/admin.php';
}
// Supprime un chapitre
function deletePost() {
    
    $postManager = new p4_blog\model\PostManager();
    $deletePost = $postManager->deletePost($_GET['id']);
    
    require 'view/backend/admin.php';
}

// Affiche la liste des commentaires signalés
function listReportedComment() {

    $commentManager = new p4_blog\model\CommentManager();
    $s_comments = $commentManager->listReportedComment();

    require('view/backend/viewReportedComment.php');
    
}

// Autorise le commentaire signalé et empêche le signalement
function approveComment($commentId) {
    
    $commentManager = new p4_blog\model\CommentManager();
    $reportedComment = $commentManager->approveComment($commentId);  
    $s_comments = $commentManager->listReportedComment();

    require('view/backend/viewReportedComment.php');
    
}
// Supprime un commentaire signalé 
function deleteComment($commentId) {
    
    $postManager = new p4_blog\model\PostManager();
    $commentManager = new p4_blog\model\CommentManager();
    $comment = $commentManager->getComment($commentId);
    $action = 'del';
    $post = $postManager->updatePostNbCom($comment['post_id'], $action);
    $deleteComment = $commentManager->deleteComment($commentId);
    $s_comments = $commentManager->listReportedComment();

    require('view/backend/viewReportedComment.php');    
}