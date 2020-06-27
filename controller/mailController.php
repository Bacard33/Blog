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
        $mail->SMTPDebug = false;
        $mail->isSendmail();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'contact.bpiat@gmail.com';
        $mail->Password   = 'Baopendrive';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 465;
        $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
        
        // Destinataire
        $mail->setFrom('forteroche@mail.fr', '[Administrateur Blog Alaska]');
        $mail->addAddress('bacard@netcourrier.com'); 
        
        // Contenu
        $mail->isHTML(true);
        $mail->Subject = '[Blog Alaska] Votre nouveau mot de passe';
        $mail->Body    = 'Bonjour, <br>Voici votre mot de passe temporaire : '. $randomInt . '<br>Cordialement,<br>L\'administration du site';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        // Envoi
        $mail->send();
        echo 'Votre message a bien été envoyé';
    }
    catch (Exception $e)
    {
        echo "Votre message n'a pas pu être envoyé. Type d'erreur: {$mail->ErrorInfo}.";
    }

}
