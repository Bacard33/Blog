<!DOCTYPE html>
<html lang="fr-FR">

    <head>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Billet simple pour l'Alaska</title>
        <meta name="description" property= "blog description"content="Le blog du nouveau roman de Jean Forteroche">
        <link rel="stylesheet" href="public/css/p4_blog.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
         
    </head>
  <body id="page-top" data-spy="scroll" data-target=".navbar">

    <div class="container-fluid">
      <div class="jumbotron row" id="temp_pwd">
        <div class="fade-in">
          
            <h2 class="text-center">Envoi d'un nouveau mot de passe provisoire</h2>
                <h4 class="text-center">Vous avez oublié votre mot de passe ?</h4>
                    <h4 class="text-center">Il vous suffit de confirmer à nouveau votre adresse mail ci-dessous afin de recevoir un nouveau mot de passe dans votre boite.</h4>
                        <h4 class="text-center">Vous pourrez le personnaliser par la suite dans votre Espace administrateur.</h4>
            <div class="connex-form">

                <form class="form-horizontal" id="login-form"  method="post" action="index.php?action=sendTempPwd">

                  <div class="form-group">
                    <label class="control-label col-sm-4" for="mail">Adresse mail : </label>
                      <div class="col-sm-5">
                        <input type="email" class="form-control" name="mail" placeholder="Votre mail" required>
                      </div>
                  </div>
      
                    <div class="form-group"> 
                      <div class="col-sm-offset-4 col-sm-10">
                        <input type="submit" class="btn btn-default" id="submit" value="Envoyer">
                      </div>
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