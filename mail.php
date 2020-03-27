<?php
error_reporting(0);
 require("PHPMailer/src/PHPMailer.php");
  require("PHPMailer/src/SMTP.php");

    $mail = new PHPMailer\PHPMailer\PHPMailer();

    $mail->IsSMTP(); // enable SMTP

 // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "ecopsecops8@gmail.com";
    $mail->Password = "ecops12345@";
    $mail->SetFrom("ecopsecops8@gmail.com","ecops");
    $mail->Subject = "test 1";
    $mail->Body = "hello kamesh";
    $mail->AddAddress("ksdkamesh99@gmail.com");

     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
     }
?>