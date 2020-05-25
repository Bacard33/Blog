<?php require('header.php') ?>


<!DOCTYPE html>
<html lang="fr">
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="public/css/p4_blog.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
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