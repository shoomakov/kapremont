<?php
$phoneOfficial = getenv('PHONE');

require __DIR__.'../../vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__);
$mail = new PHPMailer;
$dotenv->load();

$mail->isSMTP();
$mail->Host = 'smtp.yandex.ru';
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = getenv('MAILER');                 // SMTP username
$mail->Password = getenv('MPASSWORD');                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom(getenv('MAILER'), 'kapremont');
$mail->addAddress(getenv('MAILTO'), getenv('RECIPIENT'));     // Add a recipient
$mail->isHTML(true);                                  // Set email format to HTML
