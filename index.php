<?php
session_start();

require('controller/frontend.php');

try {

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
        elseif($_GET['action'] == 'reportedComment') {
            
            reportedComment($_GET['id'], $_GET['postId']);
        }
        elseif($_GET['action'] == 'listReportedComment') {

            listReportedComment();   
        }
        elseif($_GET['action'] == 'okComment') {
            
            approveComment($_GET['id']);   
        }
        elseif($_GET['action'] == 'delComment') {
            deleteComment($_GET['id']); 
        }
        elseif($_GET['action'] == 'newPost') {
            
            newPost();   
        }
        elseif ($_GET['action'] == 'updatePost') {
            
            if(!empty($_GET['id']) && $_GET['id'] > 0) {
                updatePost($_GET['id']);
            }
        }
        elseif ($_GET['action'] == 'view_update') {
            
                viewUpdatePost($_GET['id']); 
        
        }
        elseif ($_GET['action'] == 'deletePost') {

            deletePost($_GET['id']);
                
        } 
        elseif ($_GET['action'] == "admin") {

            if(!empty($_POST['mail']) && !empty($_POST['password'])) {

                $mail = htmlspecialchars(strtolower($_POST['mail']));
                $password = htmlspecialchars($_POST['password']);
                $passHash = htmlspecialchars(password_hash($_POST['password'], PASSWORD_DEFAULT));
                espaceAdmin($mail, $password);       
            }
        }
        elseif($_GET['action'] == 'connexion') {
            
            // Si le formulaire est vide => formulaire login
            if ($_SESSION['admin']== 1){
                require ('view/frontend/admin.php');
            } else {
                loginAdmin();
            }        
        }
        elseif($_GET['action'] == 'deconnexion') {
            
            $_SESSION['admin']= 0;
            require ('view/frontend/homeView.php');      
        }
    } else {
        listPosts();
    }
}
catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
    //require('view/frontend/errorView.php');
}