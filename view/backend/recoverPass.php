<?php session_start(); ?> 
<?php require('view/frontend/header.php') ?>
<div class="container-fluid">
  <div class="jumbotron row">
    <div class="fade-in">
      <div class="connex-form" id="new-pass">
        <h2 class="text-center" id="temp_pwd">Mot de passe oublié ?</h2>
        <h3 class="text-center">Vous allez recevoir d'ici quelques instants un e-mail contenant un mot de passe temporaire</h3>
        <button type="submit" class="btn btn-default" id="log"><a href="index.php?action=connexion">Administration - Connexion -</a></button>
      </div>
    </div>
  </div>
</div>
<?php require('view/frontend/footer.php') ?>
  