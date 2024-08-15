<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

require 'includes/config.php';

function sendMail($to, $name, $subject, $body) {
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'localhost';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = false;                                   //Enable SMTP authentication
        // $mail->Username   = 'support@carehomecompliance.com';                     //SMTP username
        // $mail->Password   = 'rjc#.%FcF&33u4j';                               //SMTP password
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->SMTPAutoTLS = false;
        $mail->Port       = 25;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('info@consumerprotectionbureau.co.uk', 'CPB');
        $mail->addAddress('info@consumerprotectionbureau.co.uk', 'CPB');     //Add a recipient
        $mail->addReplyTo($to, $name);
        $mail->addCC(FROM);
        $mail->addBCC(FROM);

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $body;

        $mail->send();
        return ['status' => 'success', 'message' => 'Form has been submitted'];
    } catch (Exception $e) {
        echo $e->getMessage();
        return ['status' => 'error', 'message' => 'Form could not be submitted. Try again later.'];
    }
}
