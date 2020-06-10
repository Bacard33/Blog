<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8"> 
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Billet simple pour l'Alaska</title>
            <meta name="description" content="Le blog du nouveau roman de Jean Forteroche">
            <link rel="stylesheet" href="public/css/p4_blog.css">
            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
            <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
         
    </head>
  <body id="page-top" data-spy="scroll" data-target=".navbar">

    <div class="container-fluid">
      <div class="jumbotron row" id="login">
        <div class="fade-in">
          
            <h2 class="text-center">Récupération de votre mot de passe</h2>
            <div class="connex-form">
              <?php if($section == 'code') { ?>
                Un code de vérification vous a été envoyé par mail: <?= $_SESSION['recup_mail'] ?>
              <br/>
              <form class="text-center" method="post">
                <input type="text" placeholder="Code de vérification" name="verif_code"/><br/>
                <input type="submit" value="Valider" name="verif_submit"/>
              </form>
              <?php } 
              elseif($section == "changemdp") { ?>
                Nouveau mot de passe pour <?= $_SESSION['recup_mail'] ?>
              <form class="text-center" method="post">
                <input type="password" placeholder="Nouveau mot de passe" name="change_mdp"/><br/>
                <input type="password" placeholder="Confirmation du mot de passe" name="change_mdpc"/><br/>
                <input type="submit" value="Valider" name="change_submit"/>
              </form>
              <?php } 
              else { ?>
                <form action="index.php?action=readAdmin" class="text-center" method="post">
                    <input type="email"  class="form-control" placeholder="Votre adresse mail" name="recup_mail"/><br/>
                    <div class="container">
                      <input type="submit" class="btn btn-default pull-right" value="Valider" name="recup_submit"/>
                    </div>
                </form>
              <?php } ?>
              <?php if(isset($error)) { 
                echo '<span style="color:red">'.$error.'</span>'; 
              } else { 
                  echo ""; 
              } ?>
            </div>

    <?php $content = ob_get_clean(); ?>
    <?php require('template.php'); ?>
  </body>
</html>