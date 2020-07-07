<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr-FR">

    <?php  $title = 'Espace Admin'; ?>
    <?php ob_start(); ?>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Billet simple pour l'Alaska</title>
        <link rel="stylesheet" href="public/css/p4_blog.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
         
    </head>
    <body>
        <div class="container-fluid">
            <div class="jumbotron row">
                <div class="fade-in">
                
                    <h2 class="text-center" id="admin">Espace Administration</h2>   
                        <h3 class="text-center">Bienvenue Mr Forteroche, vous êtes maintenant connecté à votre espace d'administration</h3>
                        <?php if(!empty($_POST['submit'] == "Publier")) { ?>
                            <div class="modal-content">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="fade-in">
                                        <h2>Votre nouveau chapitre a bien été ajouté</h2>   
                                    </div>
                                </div>
                            </div>
                        <?php
                            } if(empty($_POST['submit'])) { ?>
                            <!---- Aucun message ---->
                        <?php }

                        ?> 
                        <?php if(!empty($_POST['submit'] == "Modifier")) { ?>
                            <div class="modal-content">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="fade-in">
                                        <h2>Votre chapitre a bien été modifié</h2>   
                                    </div>
                                </div>
                            </div>
                            <?php
                        } if(empty($_POST['submit'])) { ?>
                            <!---- Aucun message ---->
                        <?php }

                        ?> 
                        <?php if(!empty($_POST['submit']  == "Supprimer")) { ?>
                            <div class="modal-content">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="fade-in">
                                        <h2>Votre chapitre a bien été supprimé</h2>   
                                    </div>
                                </div>
                            </div>
                            <?php
                        } if(empty($_POST['submit'])) { ?>
                            <!---- Aucun message ---->
                        <?php }

                        ?>
                        <?php if(!empty($_POST['submit']  == "Sauvegarder")) { ?>
                            <div class="modal-content">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="fade-in">
                                        <h2>Votre nouveau mot de passe a bien été enregistré</h2>   
                                    </div>
                                </div>
                            </div>
                            <?php
                        } if(empty($_POST['submit'])) { ?>
                            <!---- Aucun message ---->
                        <?php }

                        ?>  
                        <div class="container">
                            <h3>Que souhaitez-vous faire ?</h3>
                            <div class="list-group">
                                <a href="index.php?action=newPost" class="list-group-item">Créer un nouveau chapitre</a>
                                <a href="index.php?id=<?php $data['id'];?>&action=updatePost" class="list-group-item">Lire, Modifier ou Supprimer un chapitre</a>
                                <a href="index.php?action=listReportedComment" class="list-group-item">Consulter la liste des commentaires signalés</a>
                            </div>
                            <button type="submit" class="btn btn-default"><a href="index.php?action=deconnexion">Se déconnecter</a></button>
                                <div class="container">
                                    <!-- Trigger the modal -->
                                    <button type="button" class="btn btn-default psw" data-toggle="modal" data-target="#myModal">Modifier votre mot de passe?</button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog modal-lg">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="text-center">Modifier votre mot de passe</h3>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form id="login-form"  method="post" action="index.php?action=saveNewPass">
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Votre e-mail :</label>
                                                                <input type="mail" class="form-control" id="mail" name="mail" placeholder="Votre adresse mail" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Votre mot de passe :</label>
                                                                <input type="password" class="form-control" id="temp-mdp" name="temp_password" placeholder="Votre mot de passe" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="message-text" class="col-form-label">Nouveau mot de passe :</label>
                                                                <input type="password" class="form-control" id="mdp" name="password" placeholder="Nouveau mot de passe" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="message-text" class="col-form-label">Confirmer votre nouveau mot de passe :</label>
                                                                <input type="password" class="form-control" id="confirm_mdp" name="confirm_password" placeholder="Confirmer votre nouveau mot de passe" required>
                                                        </div>     
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                                                <input type="submit" class="btn btn-primary">Sauvegarder
                                                            </div>
                                                    </form>    
                                                </div>        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                </div>
            </div>
        </div>


<?php  $content = ob_get_clean(); ?>
    </body>
</html>

<?php require('view/frontend/template.php'); ?>