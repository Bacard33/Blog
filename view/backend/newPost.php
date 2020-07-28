<!DOCTYPE html>
<html lang="fr-FR">
<?php session_start(); ?>
<?php ob_start(); ?>
<?php require('view/frontend/header.php') ?>

   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Billet simple pour l'Alaska</title>
      <script src="https://cdn.tiny.cloud/1/i53cfoz3cdbd6wjz3xguaidinere4i15054cqxueuwk22jnm/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
      <link rel="stylesheet" href="public/css/p4_blog.css">
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
      <link rel="stylesheet" href="public/css/p4_blog.css">
   </head>
   <body>
      <div class="container-fluid">
         <div class="jumbotron row">
            <h2 class="text-center" id="create">Billet simple pour l'Alaska</h2>
            <h3 class="text-center">Créer un chapitre</h3>
               <form action="index.php?action=createNewPost" method="post">
                  <div class="form-group">
                     <input type="submit" class="btn btn-primary" name="submit" value="Publier">
                     <button type="submit" class="btn btn-default"><a href="index.php?action=connexion"> Retour</a></button>
                  </div>
                  <script>
                     tinymce.init({
                        selector: '#mytextarea'
                     });
                  </script>
                  <div class="form-group">
                     <label for="title">Titre</label>
                     <input type="text" class="form-control" id="title" name="title" placeholder="Titre du chapitre"  required>
                  </div>
                  <div class="form-group">
                     <label for="postContent">Contenu du chapitre</label>
                     <textarea id="mytextarea" name="content" rows="15"></textarea>
                  </div>
                  <input type="submit" class="btn btn-primary" name="submit" value="Publier"> 
               </form>
         </div>
      </div>
   </body>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <?php require('view/frontend/footer.php') ?>
</html>