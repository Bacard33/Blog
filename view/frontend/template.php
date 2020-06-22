<?php require('header.php') ?>

<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Billet simple pour l'Alaska</title>
        <link rel="stylesheet" href="public/css/p4_blog.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <title>
                <?php echo $title ?>
            </title>
    </head>
    
    <body>
        <header>
            <?php echo $header ?>
        </header>
        <?php echo $content ?>
        <footer>
            <?php echo $footer ?>
        </footer>
    </body>        
</html>
<?php require('footer.php') ?>