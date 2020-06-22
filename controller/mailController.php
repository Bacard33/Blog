<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


// Envoi d'un mail avec un nouveau mot de passe en cas de mot de passe oublié
function sendTempPwd($mail, $randomInt)
{
    
    $mail = new PHPMailer;
    try
    {
        // Paramètrages du serveur d'envoi smtp
        $mail->SMTPDebug = 3;
        $mail->isSMTP();
        $mail->Host       = 'smtp.ionos.fr';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'ne-pas-repondre@p4blog.béatricepiat.com';
        $mail->Password   = 'dNR-N4B-SbX-FwB';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;// ou 465 ou 25
        $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
        
        // Destinataire
        $mail->setFrom('forteroche@mail.fr', '[Administrateur Blog Alaska]');
        $mail->addAddress('jf@p4blog.béatricepiat.com'); 
        $mail->addAddress('bacard@netcourrier.com');
        // Contenu
        $mail->isHTML(true);
        $mail->Subject = '[Blog Alaska] Votre nouveau mot de passe';
        $mail->Body    = 'Bonjour, <br>Voici votre nouveau mot de passe temporaire : '. $randomInt . '<br>Cordialement,<br>L\'administration du site';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        // Envoi
        $mail->send();
        echo 'Votre message a bien été envoyé';
    }
    catch (Exception $e)
    {
        echo "Votre message n'a pas pu être envoyé. Type d'erreur: {$mail->ErrorInfo}.<br>Retour à la <a href='index.php?action=connexion'>page précédente</a>";
    }

}
