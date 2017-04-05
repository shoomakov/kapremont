<?php
/*****************************************************************************
 $emailOffer
******************************************************************************/
// require_once 'conf.php';

include 'conf.php';
include 'functions.php';

$name = $_POST['cf2_name'];
$tel  = $_POST['cf2_tel'];

$to      = 'sergeyshoomakov@yandex.ru';
$subject = 'Заявка. kapremont.kametr.ru';
$message = "Номер заявки: ". order_id() ."<br />".
  "Имя: $name<br />".
  "Телефон: $tel <br />";
$headers = 'From: kapremont@kametr.ru' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    "Content-type:text/html; charset=utf-8" . "\r\n".
    'X-Mailer: PHP/' . phpversion();

mail($emailOffer, $subject, $message, $headers);

?>
