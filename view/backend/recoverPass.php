<?php session_start(); ?>

<html>
    <head>
      <meta charset="utf-8"> 
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Billet simple pour l'Alaska</title>
      <meta name="description" property= "blog description" content="Le blog du nouveau roman de Jean Forteroche">
      <link rel="stylesheet" href="public/css/p4_blog.css">
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">   
    </head>
    <div class="container-fluid">
      <div class="jumbotron row">
        <div class="fade-in">
          <div class="connex-form" id="new-pass">
            <h2 class="text-center" id="temp_pwd">Mot de passe oublié ?</h2>
            <h3 class="text-center">Vous allez recevoir d'ici quelques instants un e-mail contenant un mot de passe temporaire</h3>
              <button type="submit" class="btn btn-default" id="log"><a href="index.php?action=connexion">Administration - Connexion -</a></button>
          </div>
        </div>
      </div>
    </div>
</html>
    <?php $content = ob_get_clean(); ?>
    <?php require('view/template.php'); ?>
  