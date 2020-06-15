<!DOCTYPE html>
<html lang="fr-FR">

    <?php  $title = "Modification d'un chapitre"; ?>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="public/css/p4_blog.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <script>
          tinymce.init({
            selector: '#mytextarea'
          });
        </script>
    </head>
    <?php ob_start(); ?>

    <body>
        <div class="container-fluid">
            <div class="jumbotron row" id="updatePost">
                <div class="container">
                    <h1>Billet simple pour l'Alaska</h1>
                        <h2>Afficher un chapitre pour le lire, modifier ou supprimer</h2>
                            <button type="submit" class="btn btn-default"><a href="index.php?action=connexion"> Retour</a></button>
            
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th collspan= '2'>Sélectionner un chapitre : </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($data = $posts->fetch()) { ?> 
                                        <tr>
                                            <td><?php echo $data['title'] ?></td> 
                                            <td><a href="index.php?action=view_update&amp;id=<?php echo $data['id'] ?>">Afficher</a></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                </div>
            </div>           
        </div>
    </body>      
</html>

<?php  $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
