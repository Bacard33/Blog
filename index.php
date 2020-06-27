<?php
session_start();

require('controller/frontend.php');
require('controller/backend.php');

try {
    // Affiche les chapitres
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listPosts') {
            listPosts();
        }
        elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                post();
            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        // Ajoute un commentaire
        elseif ($_GET['action'] == 'addComment') {
            
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['pseudo']) && !empty($_POST['comment'])) {
                    addComment($_GET['id'], $_POST['pseudo'], $_POST['comment']);
                }
                else {
                    throw new Exception('Tous les champs ne sont pas remplis ! ');
                }
            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        // Signale un commentaire
        elseif($_GET['action'] == 'reportedComment') {
            
            reportedComment($_GET['id'], $_GET['postId']);
        }
        // Affiche la liste des commentaires signalés
        elseif($_GET['action'] == 'listReportedComment') {

            listReportedComment();   
        }
        // Accepte le commentaire signalé
        elseif($_GET['action'] == 'okComment') {
            
            approveComment($_GET['id']);   
        }
        // Supprime le commentaire signalé
        elseif($_GET['action'] == 'delComment') {
        
            deleteComment($_GET['id']); 
        }
        // Affiche la page de création d'un chapitre
        elseif($_GET['action'] == 'newPost') {
            
            newPost();   
        }
        // Créé un nouveau chapitre
        elseif($_GET['action'] == 'createNewPost') {
            
            if (!empty($_POST['title']) && !empty($_POST['content'])) {
                createNewPost($_POST['title'], $_POST['content']);
            }           
        }
        // Affiche la page de modification des chapitres
        elseif ($_GET['action'] == 'updatePost') {
            
            if($_SESSION['admin']== 1) {  
                updatePost();
            }
        }
        // Sélectionne le chapitre à modifier
        elseif ($_GET['action'] == 'view_update') {

            if($_SESSION['admin']== 1) {
                if(isset($_GET['id']) && $_GET['id'] > 0) {   
                    viewUpdatePost();
                }
            }  
        }
        // Modifie le chapitre
        elseif ($_GET['action'] == 'confirmUpdatePost') {

            if($_SESSION['admin']== 1) {
                
                if (!empty($_POST['title']) && !empty($_POST['content']) && isset($_GET['id'])) {
                    confirmUpdatePost($_POST['title'], $_POST['content'], $_GET['id']);
                }
            }  
        }
        // Supprime un chapitre
        elseif ($_GET['action'] == 'deletePost') {

            if($_SESSION['admin']== 1) {  
                deletePost($_GET['id']);
            }
        } 
        // Affiche la page de l'espace administration
        elseif ($_GET['action'] == "admin") {
            
            if(!empty($_POST['mail']) && !empty($_POST['password'])) {
                $mail = htmlspecialchars(strtolower($_POST['mail']));
                espaceAdmin($mail, $password);
            }else{
                throw new Exception('Vous n\'êtes pas autorisé à accéder à l\'administration');
            }
        }
        // recherche email admin dans BDD
        elseif ($_GET['action'] == "readAdmin") {

            if(!empty($_POST['recup_mail'])) {
                $mail = htmlspecialchars(strtolower($_POST['recup_mail']));
                readAdmin($mail);          
            }else{
                throw new Exception('Vous n\'avez pas saisi d\'email valide');
            }
        }
        
        // Affiche la page de connexion pour l'administrateur
        elseif($_GET['action'] == 'connexion') {
             
            if ($_SESSION['admin']== 1){
                require ('view/frontend/admin.php');
            }else{
                loginAdmin();
            }
        }
        // Affiche la page en cas d'oubli du mdp
        elseif($_GET['action'] == 'forget') {
             
                forgetPass();
        }
        // Deconnexion de l'espace administration
        elseif($_GET['action'] == 'deconnexion') {  
            
            $_SESSION['admin']= 0;
            listPosts();      
        }
    } else {
        listPosts();
    }
}
// Gestion des erreurs
catch(Exception $e) {
    $errorMessage = $e->getMessage();
    require ('view/frontend/errorView.php');
}