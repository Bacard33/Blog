<!DOCTYPE html>
<html lang="fr-FR">

    <?php $title = 'ConnexionAdmin'; ?>
    <?php ob_start(); ?>
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
  <body id="page-top" data-spy="scroll" data-target=".navbar">

    <div class="container-fluid">
      <div class="jumbotron row" >
        <div class="fade-in">
          
            <h2 class="text-center" id="login">Connexion administration</h2>

              <div class="connex-form" id="connex-admin">

                <form class="form-horizontal" id="login-form"  method="post" action="index.php?action=admin">

                  <div class="form-group">
                    <label class="control-label col-sm-4" for="mail">Adresse mail : </label>
                      <div class="col-sm-5">
                        <input type="email" class="form-control" name="mail" placeholder="Votre mail" required>
                      </div>
                  </div>
      
                  <div class="form-group">
                    <label class="control-label col-sm-4" for="pwd">Mot de passe : </label>
                      <div class="col-sm-5"> 
                        <input type="password" class="form-control" id="mdp" name="password" placeholder="Votre mot de passe" required>
                      </div>
                  </div>
      
                    <div class="form-group"> 
                      <div class="col-sm-offset-4 col-sm-10">
                        <input type="submit" class="btn btn-default" id="submit" value="Se connecter">
                      </div>
                    </div>
                    <div class="container" style="background-color:#f1f1f1">
                      <span class="psw">Mot de passe <a href="index.php?action=forget">oublié?</a></span>
                    </div>
                </form>

              </div>
        </div>
      </div>
    </div>
    <?php $content = ob_get_clean(); ?>
    <?php require('template.php'); ?>
  </body>
</html>