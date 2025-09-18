<?php
session_start();
require_once '../../connect/connectDb/config.php';


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['mailto']) && isset($_SESSION['emailList']) && isset($_SESSION['subject']) && isset($_SESSION['mailContent'])) {
     $mailTo = mysqli_escape_string($link, $_POST['mailto']);
     $subject = $_SESSION['subject'];
     $content = $_SESSION['mailContent'];


     $sendto = json_decode($_SESSION['emailList'])[$mailTo];

     //Load Composer's autoloader
     require '../../PHPMailer/Exception.php';
     require '../../PHPMailer/PHPMailer.php';
     require '../../PHPMailer/SMTP.php';


     //Create an instance; passing `true` enables exceptions 
     $mail = new PHPMailer(true);

     try {
          $mail->isSMTP();
          $mail->Host       = 'smtp.gmail.com';
          $mail->SMTPAuth   = true;
          $mail->Username   = 'smtp_email';
          $mail->Password   = 'smtp_email_password';
          $mail->SMTPSecure = 'tls';
          $mail->Port       = 587;

          //Recipients
          $mail->setFrom('website.yastiwari@gmail.com', 'YasTiwari.com');
          $mail->addAddress($sendto);


          //Content
          $mail->isHTML(true);
          $mail->Subject = $subject;
          $mail->Body = $content;

          $mail->send();

          echo 1;
     } catch (Exception $e) {
          echo 0;
     }
}

