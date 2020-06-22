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
// Accès connexion admin après réinitialisation mdp
function loginAdminNew() {

    require ('view/frontend/loginNewPass.php');
}
// Oubli du mdp
function forgetPass() {

    require ('view/frontend/forgetPass.php');
}
// Accès espace admin
function espaceAdmin($mail, $password) {
    
    $pass = hash('md5', $_POST['password']);
    $userManager = new p4_blog\model\UserManager();
    $userInfo = $userManager->espaceAdmin($mail, $password);

    if($pass == $userInfo['password']) {
            if($_SESSION['admin']=1) {
                require 'view/frontend/admin.php';
            }            
        }else{ 
            //Si les informations sont mauvaises / L'administrateur n'est pas connecté 
            $_SESSION['admin']=0;
            throw new Exception('Erreur de connexion : Veuillez vérifier vos identifiants.');
        }
}
// Compare l'email avec celui de la BDD
function readAdmin($mail) {

    $userManager = new p4_blog\model\UserManager();
    $userInfo = $userManager->readAdmin($mail);

    if($userInfo) {

        $randomInt = rand(1000000, 999999999);
        $tempPwd = hash('md5', $randomInt);
        $userInfo = $userManager->updateTempPwd($randomInt, $mail);
        //if($userInfo) {
            
            require('controller/mailController.php');
            sendTempPwd($mail, $randomInt);
            
        //} 
        require ('view/frontend/recoverPass.php');     

    }else {
        throw new Exception('Vous n\'avez pas saisi d\'email valide <br /> Vous n\'êtes donc pas autorisé à accéder à l\'administration');
    }
}