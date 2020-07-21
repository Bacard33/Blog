<?php session_start(); ?>
<?php ob_start(); ?>
<?php require('view/frontend/header.php') ?>
<div class="container">    
    <div class="row-fluid">
        <h2 class="text-center" id="list">Billet simple pour l'Alaska</h2>
        <h3 class="text-center">Voici ici la liste des commentaires signalés :</h3> 
        <button type="submit" class="btn btn-default"><a href="index.php?action=connexion"> Retour</a></button> 
        <br /><br />         
        <table class="table table-hover"> 
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Date du commentaire</th>
                    <th>Commentaire</th>
                    <th>Accepter le commentaire</th>
                    <th>Supprimer le commentaire</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($datas = $s_comments->fetch()) {
                    if ($datas ['reported_comment'] == "o") { ?>
                        <tr>
                            <td data-label="Pseudo"><?php echo $datas['pseudo']; ?></td>
                            <td data-label="Date">le <?php echo $datas['comment_date']; ?></td>
                            <td data-label="Commentaire"><?php echo $datas['comment'];?></td>
                            <td data-label="Accepter le commentaire"><a href="index.php?action=okComment&amp;id=<?php echo $datas['id'] ?>"><i class="fas fa-thumbs-up"></i></a></td>
                            <td data-label="Supprimer le commentaire"><a href="index.php?action=delComment&amp;id=<?php echo $datas['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>  
                        </tr>
                    <?php
                    } 
                } ?>
            </tbody>
        </table>  
    </div>
</div>   
<?php require('view/frontend/footer.php') ?>