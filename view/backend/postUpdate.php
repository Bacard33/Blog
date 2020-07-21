<?php session_start(); ?>
<?php ob_start(); ?>
<?php require('view/frontend/header.php') ?>
<div class="container-fluid">
    <div class="jumbotron row">
        <div class="container">
            <h2 class="text-center" id="update">Billet simple pour l'Alaska</h2>
            <h3 class="text-center">Afficher un chapitre pour le lire, modifier ou supprimer</h3>
            <button type="submit" class="btn btn-default"><a href="index.php?action=connexion"> Retour</a></button>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th collspan= '2'>Sélectionner un chapitre : </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($data = $posts->fetch()) { ?>
                        <tr>
                            <td><?php echo $data['title'] ?></td> 
                            <td><a href="index.php?action=view_update&amp;id=<?php echo $data['id'] ?>">Afficher</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>           
</div>   
<?php require('view/frontend/footer.php') ?>