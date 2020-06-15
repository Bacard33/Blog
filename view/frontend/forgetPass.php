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
        <div class="jumbotron row" id="forget">
            <div class="fade-in">
          
                <h2 class="text-center">Vérification de votre adresse mail</h2>
                    <div class="connex-form">
              
                        <form action="index.php?action=readAdmin" class="text-center" method="post">
                            <input type="email"  class="form-control" placeholder="Votre adresse mail" name="recup_mail"/><br/>
                                <div class="container">
                                    <input type="submit" class="btn btn-default pull-right" value="Valider" name="recup_submit"/>
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