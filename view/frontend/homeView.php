<?php echo $title = 'Billet simple pour l\'Alaska'; ?>

<?php ob_start(); ?>
<!DOCTYPE html>
    <html>

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
            <style>
                body {
                    font-family: 'Bitter', serif;
                    background: url('public/img/fond.jpg') no-repeat center center fixed;
                    -webkit-background-size: cover;
                    -moz-background-size: cover;
                    background-size: cover;
                    -o-background-size: cover;
                }
            </style>
            
            </head>

        <body id="page-top" data-spy="scroll" data-target=".navbar">
            

                
            <div class="container-fluid">
                
                <header>

                    <!--Navigation
                    ==================================================--> 
                    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">          
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#page-top">Billet simple pour l'Alaska</a>
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="#auteur"class="ancre">Accueil</a></li>
                                <li><a href="#publications" class="ancre">Chapitres</a></li>
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

                <!-- Caroussel
                ==================================================--> 
                <div class="row">   
                    <div id="carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel" data-slide-to="1"></li>
                            <li data-target="#carousel" data-slide-to="2"></li>
                            <li data-target="#carousel" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active"> <img alt="couverture_livre" src="public/img/couverture.jpg">
                                <h1 class="carousel-caption"><span>Billet simple pour l'Alaska</span></h1>
                            </div>
                            <div class="item"> <img alt="train" src="public/img/train.jpg">
                                <h1 class="carousel-caption"><span>Le nouveau roman de Jean Forteroche</span></h1>
                            </div>
                            <div class="item"> <img alt="aurore" src="public/img/aurora.jpg">
                                <h1 class="carousel-caption"><span>Découvrez une nouvelle façon de lire !</span></h1>
                            </div>
                            <div class="item"> <img alt="loup" src="public/img/wolf.jpg">
                                <h1 class="carousel-caption"><span>Vivez le roman de l'intérieur !</span></h1>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>

                <!-- Corps de page déjà codé
                ==================================================--> 
                <div class="container">

                      <div class="jumbotron row" id="auteur">
                            <h2 class="text-center">Bienvenue dans mon blog</h2>
                            <img class="col-sm-12 col-md-5" src="public/img/jeanF.jpg" alt="Accueil">     
                            <p class="col-sm-12 col-md-7" id="mot_auteur">Avec ce blog, j'espère créer une vraie proximité inédite avec vous. L'écriture est souvent un travail solitaire, c'est pourquoi l'envie de faire partager l'écriture de mon nouveau roman me ravi. Je publierai au fil du temps mes chapitres et vous pourrez me donner votre sentiment. Nous pourrons échanger nos points de vue de la première à la dernière page. L'ouverture de mon blog, c'est avant tout la rencontre entre ma passion et le besoin de la partager avec vous, mes fidèles lecteurs. <br />Bonne lecture à tous ! </p>
                      </div>

                      <div class="jumbotron row" id="publications">
                            <h2 class="text-center">Découvrez toutes les publications du roman "Billet simple pour l'Alaska":</h2>
                             
<?php
while ($data = $posts->fetch())
{
?>



    <div class="last_news">
        <h3>
            <?php echo htmlspecialchars($data['title']) ?>
            <em> posté le <?php echo $data['creation_date_fr'] ?></em>   <i class="far fa-comment-alt"><?php echo $post['nbcomment']; ?>commentaires</i>
    
        </h3>
        
        <p>
            <p><?php  echo substr($data['content'],0,400) ?>... <a href="index.php?action=post&amp;id=<?php echo $data['id'] ?>">Lire la suite</a></p>
            <br />
        </p>
    </div>
<?php
}
$posts->closeCursor();
?>

            </div>

                </div>
            <?php $content = ob_get_clean(); ?>
            <?php ob_start(); ?>



            <!-- jQuery -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <!-- Javascript de Bootstrap -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
            <script src="https://cdn.tiny.cloud/1/ccocp9mhg9jtkqu6n0kobmpx1cp45o4h6xlv1jihacrx9rfi/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
            
            <script>
                  // Scroll fluide menu top
                  /*$(function () {
                        $('.ancre').on('click', function(e) {
                              e.preventDefault();
                              var hash = this.hash;
                              $('html, body').animate({
                                    scrollTop: $(this.hash).offset().top
                              }, 1000, function(){
                                    window.location.hash = hash;
                              });
                        });
                  });*/
            </script>
        
        </body>

</html>
<?php  $footer = ob_get_clean(); ?>
<?php require('template.php'); ?>