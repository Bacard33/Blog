<?php ob_start(); ?>
<!DOCTYPE html>
<html>

    <div class="container-fluid">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="public/css/p4_blog.css">
            
        <header>

        <!--Navigation
        ==================================================--> 
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">          
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Billet simple pour l'Alaska</a>
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
                    </ul>         
                </div>    
            </nav>
                
        </header>                
    </div>
</html>
<?php  $header = ob_get_clean(); ?>