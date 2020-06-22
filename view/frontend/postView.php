<!DOCTYPE html>
<html lang="fr-FR">

   <?php $title = htmlspecialchars($post['title']); ?>
   <?php ob_start(); ?>
   <head>
      <meta charset="utf-8"> 
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Billet simple pour l'Alaska</title>
      <meta name="description" property= "blog description" content="Le blog du nouveau roman de Jean Forteroche">
      <link rel="stylesheet" href="public/css/p4_blog.css">
      <script src="https://cdn.tiny.cloud/1/i53cfoz3cdbd6wjz3xguaidinere4i15054cqxueuwk22jnm/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
      
   </head>
   <body id="page-top" data-spy="scroll" data-target=".navbar">    
      <div class="container-fluid">
         <div class="jumbotron row" id="publications">
            <div class="news mt-5" id="chap">
               <h3>
                  <?php echo htmlspecialchars($post['title']) ?>
                  <em> posté le <?php echo $post['creation_date_fr'] ?></em>&ensp;<i class="far fa-comment-alt">&nbsp;</i><?php echo $post['nbcomment'] ?>&nbsp;commentaire(s)
               </h3>
               <div>
                  <?php echo ($post['content']) ?>
               </div>
            </div>
         </div>
         <div class="jumbotron" id="contact">
            <h2 class="text-left">Vos avis et commentaires</h2>
               <form action="index.php?action=addComment&amp;id=<?php echo $post['id']; ?>&amp;nbcomment=<?php echo $post['nbcomment']; ?>" method="post">
                  <div class="form-group col-md-4">
                     <label for="author">Pseudo</label><br />
                        <input type="text" class="form-control" placeholder="Votre pseudo" id="pseudo" name="pseudo">
                     </div>
                     <div class="form-group col-md-8">
                        <label for="comment">Commentaire</label><br />
                           <textarea class="form-control" id="comment" name="comment" rows="3" placeholder="Votre message"></textarea>
                     </div>
                        <div class="form-group col-md-12">
                           <input type="submit" class="btn btn-default pull-right" value="Valider">
                        </div>
               </form>

               <?php
                  while ($comment = $comments->fetch()) { ?>
                     <h3><strong><?php echo htmlspecialchars($comment['pseudo']) ?></strong>,&nbsp;le <?php echo $comment['comment_date_fr'] ?>.</h3>
                     <?php echo nl2br(htmlspecialchars($comment['comment']));
                        if ($comment['reported_comment'] == "o") { ?>
                           <span class="signal" type="submit"><i class="fa fa-exclamation-circle" > Signalé</i></span>
                     <?php 
                        }elseif ($comment['reported_comment'] == "x") { ?>
                           <span class="signal_ok" type="submit"><i class="fas fa-check-square"> Commentaire accepté</i></span>
                     <?php
                        } else { ?>
                           <span class="no-signal" type="submit"><a href="index.php?action=reportedComment&amp;id=<?php echo $comment['id'] ?>&postId=<?php echo $post['id'] ?>"><i class="far fa-bell"> Signaler</i></a></span>
                     <?php
                     }
                     } ?>
         </div>

               <?php  $content = ob_get_clean(); ?>
               <?php  $footer = ob_get_clean(); ?>
               <?php require('template.php'); ?>   
      </div>
   </body>
</html>