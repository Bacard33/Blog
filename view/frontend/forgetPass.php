<?php require('view/frontend/header.php') ?>
<div class="container-fluid">
    <div class="jumbotron row" >
        <div class="fade-in">
            <h2 class="text-center" id="forget">Mot de passe oublié ?</h2>
            <h3 class="text-center">Saisissez et valider l'adresse mail de votre compte administrateur</h3>
            <h3 class="text-center">Vous recevrez par e-mail un mot de passe temporaire vous permettant de créer facilement votre nouveau mot de passe</h3>
            <div class="text-center">
                <button type="submit" class="btn btn-default" id="forget_return"><a href="index.php?action=connexion"> Retour</a></button>
            </div>
            <div class="connex-form" id="forget-pass">
                <form action="index.php?action=readAdmin" class="text-center" method="post">
                    <input type="email"  class="form-control" placeholder="Votre adresse mail" name="recup_mail"/><br/>
                        <div class="container">
                            <input type="submit" class="btn btn-default pull-right" value="Valider" name="recup_submit"/>
                        </div> 
                </form>  
            </div>
        </div>
    </div>
</div>    
<?php require('view/frontend/footer.php') ?>