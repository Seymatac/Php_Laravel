<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require  'config.php';

if (!empty($_POST)) {
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $mail = new PHPMailer(true);
    try {
        // SMTP Ayarları
        $mail->isSMTP();
        $mail->SMTPAuth   = true;
        $mail->SMTPSecure = "tls"; // ssl de olabilir
        $mail->Port       = $port;
        $mail->Host       = $host; // SMTP sunucu adresi
        $mail->Username = $username;
        $mail->Password = $password;

        $mail->Subject = $subject;
        $mail->Body = $message;
        $mail->isHTML(true);

        $mail->addAddress("seymatacc2772@gmail.com");
        $mail->send();
        echo "mail gönderildi";

    } catch (Exception $e) {
        echo "mail hatası".$mail->ErrorInfo;
    }}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css"/>
    <title>Mail Gönderme</title>
</head><body>
     <div class="container my-5">
        <form method="post">
            <div class="mb-3">
               <label for="subject" class="form-label">Konu</label>
               <input type="text" name="subject" id="subject" class="form-control" required>
            </div>
            <div class="mb-3">
               <label for="message" class="form-label">Mesaj</label>
               <textarea name="message" id="message" class="form-control" rows="5" required></textarea>
            </div>
            <button type="submit" name="sendEmail" class="btn btn-primary">Gönder</button>
        </form></div></body></html>
