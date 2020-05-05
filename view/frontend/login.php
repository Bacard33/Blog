<?php $title = 'ConnexionAdmin'; ?>

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
        <link rel="stylesheet" href="public/css/p4_blog.css">
         
    </head>

    <div class="container-fluid">
      <div class="jumbotron row" id="login">
        <div class="fade-in">
          
            <h2 class="text-center">Connexion administration</h2>

              <div class="connex-form">

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
                        <button type="submit" class="btn btn-default" id="submit">Se connecter</button>
                      </div>
                    </div>
                </form>
              </div>
        </div>
      </div>
    </div>
</html>
               
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>