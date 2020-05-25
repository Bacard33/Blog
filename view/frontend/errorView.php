<!DOCTYPE html>
<html lang="fr">
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tiny.cloud/1/i53cfoz3cdbd6wjz3xguaidinere4i15054cqxueuwk22jnm/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <link rel="stylesheet" href="public/css/p4_blog.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="public/css/p4_blog.css">
    </head>

<?php ob_start(); ?>
  
  <body>
    <div class="container-fluid">
        <div class="jumbotron row" id="errorPage">
          <h1 class="text-center">Billet simple pour l'Alaska</h1>
            <div class="container">
              
                <?php if(!empty($_POST['mail']) && !empty($_POST['password'])) { ?>
                        <button id="retour_login" class="btn btn-default"><a href="index.php?action=connexion">Retour</a></button><?php } ?>
                          <div class="fade-in">
                            <div class="modal-content">
                              <div class="modal-header">
                                <p class="text-center"><?php echo $errorMessage ?></p>
                              </div>
                            </div>
                          </div>
                <?php if(empty($_POST['mail']) && empty($_POST['password'])) { ?>
                  <button id="retour_accueil" class="btn btn-default"><a href="index.php?action=listPosts">Retour</a></button><?php } ?>     
            </div>
        </div>
    </div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
      
    
  </body>
</html>