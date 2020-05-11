<?php  $title = "Modification d'un chapitre"; ?>

<!DOCTYPE html>
<html lang="fr">
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tiny.cloud/1/i53cfoz3cdbd6wjz3xguaidinere4i15054cqxueuwk22jnm/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <link rel="stylesheet" href="public/css/p4_blog.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="public/css/p4_blog.css">
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
        
        
                <h1>Billet simple pour l'Alaska</h1>
                <h2>Modifier un chapitre</h2>
                <?php
                while ($data = $posts->fetch())
                {
                ?>
                
                <form action="index.php?id=<?php $data['id'];?>&action=view_update" method="post">
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" name="submit" value="Modifier">
                        <a href="index.php?id=<?php $data['id'];?>&action=deletePost" class="btn btn-danger" role="button">Supprimer</a>
                        <button type="submit" class="btn btn-default"><a href="index.php?action=connexion"> Retour</a></button>
                    </div>
                
                    <div class="form-group">
                        <label for="title">Titre du chapitre</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Titre du chapitre" value="<?php echo $data['title']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="postContent">Contenu du chapitre</label>
                        <textarea id="mytextarea" name="content" rows="15"><?php echo $data['content']; ?></textarea>   
                    </div>
                </form>
        </div>
                <?php
                    }
                    $posts->closeCursor();
                    ?>
    </div>

</body>
      
</html>

<?php  $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
