<?php require('view/frontend/header.php') ?>
<body>  
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
                  <input type="text" class="form-control" placeholder="Votre pseudo" id="pseudo" name="pseudo" required>
               </div>
               <div class="form-group col-md-8">
                  <label for="comment">Commentaire</label><br />
                  <textarea class="form-control" id="comment" name="comment" rows="3" placeholder="Votre message" required></textarea>
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
               }else { ?>
                  <span class="no-signal" type="submit"><a href="index.php?action=reportedComment&amp;id=<?php echo $comment['id'] ?>&postId=<?php echo $post['id'] ?>"><i class="far fa-bell"> Signaler</i></a></span>
                  <?php
                  }
            } ?>
      </div>  
   </div>
</body>
<?php require('view/frontend/footer.php') ?>
</html>