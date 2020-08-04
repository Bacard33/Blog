<!DOCTYPE html>
<html lang="fr">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Billet simple pour l'Alaska</title>
        <link rel="stylesheet" href="public/css/p4_blog.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css' crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" crossorigin="anonymous" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" crossorigin="anonymous" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.tiny.cloud/1/i53cfoz3cdbd6wjz3xguaidinere4i15054cqxueuwk22jnm/tinymce/5/tinymce.min.js" referrerpolicy="origin" crossorigin="anonymous"></script>

    </head>
    <?php ob_start(); ?>
    <header>
        <div class="container-fluid">
        <!--Navigation
        ==================================================--> 
            <nav class="navbar navbar-inverse navbar-fixed-top">          
                <div class="navbar-header">
                    <a class="ancre" href="index.php#carousel">Billet simple pour l'Alaska</a>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php#accueil" class="ancre">Accueil</a></li>
                        <li><a href="index.php?action=listPosts#publications" class="ancre">Chapitres</a></li>
                        <?php if($_SESSION['admin'] != 1) {  ?>
                            <li id="adminConnexH" class="afficherConnex"><a href="index.php?action=connexion">Administration - Connexion -</a></li> <?php }
                        if($_SESSION['admin'] == 1) { ?>
                            <li id="adminDeconnex" class="afficherDeconnex"><a href="index.php?action=deconnexion">Déconnexion</a></li>
                        <?php }
                        ?>
                        <li class="dropdown">
                            <ul class="dropdown-menu">
                                <li><a href="index.php" class="ancre">Accueil</a></li>
                                <li><a href="index.php?action=listPosts#publications" class="ancre">Chapitres</a></li>
                                <?php if($_SESSION['admin'] != 1) { ?>
                                    <li id="adminConnex_bisH" class="afficherConnex"><a href="index.php?action=connexion">Administration - Connexion -</a></li> <?php }
                                if($_SESSION['admin'] == 1) { ?>
                                    <li id="adminDeconnexH" class="afficherDeconnex"><a href="index.php?action=deconnexion">Déconnexion</a></li>
                                <?php }
                                ?>
                            </ul>
                        </li>         
                    </ul>                        
                </div>    
            </nav>
        </div>
    </header>
</html>