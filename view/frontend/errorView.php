<?php require('view/frontend/header.php') ?>
<?php ob_start(); ?>
<div class="container-fluid">
  <div class="jumbotron row" >
    <h1 class="text-center" id="errorPage">Billet simple pour l'Alaska</h1>
      <div class="container">
        <?php if(!empty($_POST['mail']) && !empty($_POST['password'])){ ?>
          <button id="retour_login" class="btn btn-default"><a href="index.php?action=connexion">Retour</a></button><?php } ?>
          <div class="fade-in">
            <div class="modal-content">
              <div class="modal-header">
                <p class="text-center"><?php echo $errorMessage ?></p>
              </div>
            </div>
          </div>
          <?php if(empty($_POST['mail']) && empty($_POST['password'])) { ?>
            <button id="retour_accueil" class="btn btn-default"><a href="index.php?action=listPosts">Retour</a></button><?php } ?>     
      </div>
  </div>
</div>
<?php require('view/frontend/footer.php') ?>