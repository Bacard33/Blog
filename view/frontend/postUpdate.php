<?php  $title = "Modification d'un chapitre"; ?>

<?php ob_start(); ?>

<?php if(empty($_SESSION['name'])) {
    session_start(); } ?>
<!DOCTYPE html>
<html lang="fr">
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tiny.cloud/1/i53cfoz3cdbd6wjz3xguaidinere4i15054cqxueuwk22jnm/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <link rel="stylesheet" href="public/css/p4_blog.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="public/css/p4_blog.css">
        <script>
          tinymce.init({
            selector: '#mytextarea'
          });
        </script>
    </head>

<body>
  <body>
    <div class="container-fluid">
      <div class="jumbotron row" id="updatePost">
        
        <h1>Billet simple pour l'Alaska</h1>
        <h2>Modifier un chapitre</h2>
        <button type="submit" class="btn btn-default">Enregister</button>
        <button type="submit" class="btn btn-default">Mettre en ligne</button>
        <button type="submit" class="btn btn-default">Supprimer</button>
        <button type="submit" class="btn btn-default"><a href="index.php?action=connexion"> Revenir à l'accueil</a></button>

        <textarea name="postText" id="mytextarea"></textarea>    

</body>
      </div>
    </div>
</html>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
