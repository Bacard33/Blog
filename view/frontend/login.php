<?php require('view/frontend/header.php') ?>
<div class="container-fluid">
  <div class="jumbotron row" >
    <div class="fade-in">
      <h2 class="text-center" id="login">Connexion administration</h2>
        <div class="connex-form" id="connex-admin">
          <form class="form-horizontal" id="login-form"  method="post" action="index.php?action=admin">
            <div class="form-group">
              <label class="control-label col-sm-4" for="mail">Adresse mail : </label>
                <div class="col-sm-5">
                  <input type="email" class="form-control" name="mail" placeholder="Votre mail" required>
                </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-4" for="pwd">Mot de passe : </label>
                <div class="col-sm-5"> 
                  <input type="password" class="form-control" id="mdp" name="password" placeholder="Votre mot de passe" required>
                </div>
            </div>
            <div class="form-group"> 
              <div class="col-sm-offset-4 col-sm-10">
                <input type="submit" class="btn btn-default" id="submit" value="Se connecter">
              </div>
            </div>
            <div class="container" style="background-color:#f1f1f1">
              <span class="psw">Mot de passe <a href="index.php?action=forget">oublié?</a></span>
            </div>
          </form>
        </div>
    </div>
  </div>
</div>
<?php require('view/frontend/footer.php') ?>