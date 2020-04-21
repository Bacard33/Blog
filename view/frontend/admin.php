<?php session_start(); ?>

<?php  $title = 'Espace Admin'; ?>

<?php ob_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="public/css/p4_blog.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    </head>
	<body>
		<div class="container-fluid">
      <div class="jumbotron row" id="administration">


    <h2 class="text-center">Espace Administration</h2>   
    <h3>Bienvenue Mr Forteroche,</h3>


    <div class="container">
        <h2>Que souhaitez-vous faire ?</h2>
        <div class="list-group">
            <a href="index.php?action=newPost" class="list-group-item">Créer un nouveau chapitre</a>
            <a href="index.php?action=view_update" class="list-group-item">Modifier un chapitre</a>
            <a href="index.php?action=listReportedComment" class="list-group-item">Consulter la liste des commentaires signalés</a>
        </div>
        <button type="submit" class="btn btn-default"><a href="index.php?action=deconnexion">Se déconnecter</a></button>
    </div>

    
        </div>
    </div>


<?php  $content = ob_get_clean(); ?>
</body>
</html>

<?php require('template.php'); ?>