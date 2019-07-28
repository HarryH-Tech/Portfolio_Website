<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'C:\xampp\composer\vendor\autoload.php';

$mail = new PHPMailer(TRUE);

try {
   
   $mail->setFrom('darth@empire.com', 'Darth Vader');
   $mail->addAddress('palpatine@empire.com', 'Emperor');
   $mail->Subject = 'Force';
   $mail->Body = 'There is a great disturbance in the Force.';
   
   /* SMTP parameters. */
   $mail->isSMTP();
   $mail->Host = 'smtp.empire.com';
   $mail->SMTPAuth = TRUE;
   $mail->SMTPSecure = 'tls';
   $mail->Username = 'smtp@empire.com';
   $mail->Password = 'iamyourfather';
   $mail->Port = 587;
   
   /* Disable some SSL checks. */
   $mail->SMTPOptions = array(
      'ssl' => array(
      'verify_peer' => false,
      'verify_peer_name' => false,
      'allow_self_signed' => true
      )
   );
   
   /* Finally send the mail. */
   $mail->send();
}
catch (Exception $e)
{
   echo $e->errorMessage();
}
catch (\Exception $e)
{
   echo $e->getMessage();
}