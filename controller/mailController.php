<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


// Envoi d'un mail avec un nouveau mot de passe en cas de mot de passe oublié
function sendTempPwd($mailtoAddress, $randomInt)
{
    $mail = new PHPMailer;
    try
    {
        // Paramètrages du serveur d'envoi smtp
        $mail->SMTPDebug = false;
        $mail->isSMTP();
        $mail->Host       = 'smtp.ionos.fr';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'Jean.Forteroche@p4blog.béatricepiat.com';
        $mail->Password   = 'dNR-N4B-SbX-FwB';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;
        $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
        
        // Destinataire
        $mail->setFrom('forteroche@mail.fr', '[Administrateur Blog Alaska]');
        $mail->addAddress('p4blog@béatricepiat.com'); // $mailtoAddress ou p4blog@béatricepiat.com

        // Contenu
        $mail->isHTML(true);
        $mail->Subject = '[Blog Alaska] Votre nouveau mot de passe';
        $mail->Body    = 'Bonjour, <br>Voici votre nouveau mot de passe : '. $randomInt . '<br>Cordialement,<br>L\'administration du site';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        // Envoi
        $mail->send();

        header('Refresh:5; url=index.php');
        echo '<div class="card" style="border:solid 2px grey; border-radius:15px; width:50%; margin:4rem auto; font-size:1.5rem; padding:1rem; text-align:center">';
        echo 'Votre nouveau mot de passe a été envoyé avec succès.<br>Veuillez patienter, vous allez être redirigé vers la page de connexion...';
        echo '</div>';
        $_SESSION['info'] = "Mot de passe envoyé avec succès";
    }

    catch (Exception $e)
    {
        echo "Votre message n'a pas pu être envoyé. Type d'erreur: {$mail->ErrorInfo}.<br>Retour à la <a href='index.php?action=connexion'>page précédente</a>";
    }

}
