<!DOCTYPE html>
<html lang="fr-FR">
    <?php  $title = "Gérer les commentaires signalés";?>
    <?php ob_start(); ?>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://cdn.tiny.cloud/1/i53cfoz3cdbd6wjz3xguaidinere4i15054cqxueuwk22jnm/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <link rel="stylesheet" href="public/css/p4_blog.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="public/css/p4_blog.css">
    </head>
      
    <body>
        <div class="container">    
            <div class="row-fluid">
                <h1>Billet simple pour l'Alaska</h1>
                    <h2>Voici ici la liste des commentaires signalés :</h2> 
                        <button type="submit" class="btn btn-default"><a href="index.php?action=connexion"> Retour</a></button> 
                        <br /><br />         
                            <table class="table table-hover"> 
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Date du commentaire</th>
                                        <th>Commentaire</th>
                                        <th>Accepter le commentaire</th>
                                        <th>Supprimer le commentaire</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($datas = $s_comments->fetch()) {
                                        if ($datas ['reported_comment'] == "o") { ?>
                                            <tr>
                                                <td data-label="Pseudo"><?php echo $datas['pseudo']; ?></td>
                                                <td data-label="Date">le <?php echo $datas['comment_date']; ?></td>
                                                <td data-label="Commentaire"><?php echo $datas['comment'];?></td>
                                                <td data-label="Accepter le commentaire"><a href="index.php?action=okComment&amp;id=<?php echo $datas['id'] ?>"><i class="fas fa-thumbs-up"></i></a></td>
                                                <td data-label="Supprimer le commentaire"><a href="index.php?action=delComment&amp;id=<?php echo $datas['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>   
                                            </tr>
                                    <?php
                                    } 
                                    } ?>
                                </tbody>
                            </table>  
            </div>
        </div>
    </body>
</html>

<?php  $content = ob_get_clean(); ?>
<?php require('template.php') ?>