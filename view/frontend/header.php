<!DOCTYPE html>
<html>
    <?php ob_start(); ?>
    
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
               
            <div class="container-fluid">    
                <header>
                    <!--Navigation
                    ==================================================--> 
                    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">          
                        <div class="navbar-header">
                            <ul class="nav navbar-nav">
                                <li><a href="index.php"class="ancre">Billet simple pour l'Alaska</a></li>
                            </ul>
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="index.php"class="ancre">Accueil</a></li>
                                <li><a href="index.php?action=listPosts#publications" class="ancre">Chapitres</a></li>
                                        <?php if($_SESSION['admin'] != 1) {  ?>
                                        <li id="adminConnex" class="afficherConnex"><a href="index.php?action=connexion">Administration - Connexion -</a></li> <?php }
                                        if($_SESSION['admin'] == 1) { ?>
                                        <li id="adminDeconnex" class="afficherDeconnex"><a href="index.php?action=deconnexion">Déconnexion</a></li>
                                        <?php }
                                        ?>
                                <li class="dropdown">
                                    <ul class="dropdown-menu">
                                        <li><a href="index.php"class="ancre">Accueil</a></li>
                                        <li><a href="index.php?action=listPosts#publications" class="ancre">Chapitres</a></li>
                                        <?php if($_SESSION['admin'] != 1) {  ?>
                                        <li id="adminConnex" class="afficherConnex"><a href="index.php?action=connexion">Administration - Connexion -</a></li> <?php }
                                        if($_SESSION['admin'] == 1) { ?>
                                        <li id="adminDeconnex" class="afficherDeconnex"><a href="index.php?action=deconnexion">Déconnexion</a></li>
                                        <?php }
                                        ?>
                                    </ul>
                                </li>         
                            </ul>                        
                        </div>    
                    </nav>
                </header>
            </div>
</html>
