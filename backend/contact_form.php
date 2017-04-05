<?php
/*****************************************************************************
 $emailOffer
******************************************************************************/
// require_once 'conf.php';

include 'conf.php';
include 'functions.php';

$name = $_POST['cf_name'];
$email  = $_POST['cf_email'];
if (!empty($_POST['cf_message'])) {
  $cf_message = $_POST['cf_message'];
} else {
  $cf_message = "Клиент оставил поле пустым.";
}


$to      = 'sergeyshoomakov@yandex.ru';
$subject = 'Заявка на замер. kapremont.kametr.ru';
$message = "<b>Номер заявки:</b> ". order_id() ."<br />".
  "<b>Имя:</b> $name<br />".
  "<b>Телефон:</b> $tel <br />".
  "<b>Дополнительная информация:</b><br/>$cf_message";
$headers = 'From: kapremont@kametr.ru' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    "Content-type:text/html; charset=utf-8" . "\r\n".
    'X-Mailer: PHP/' . phpversion();

mail($emailOffer, $subject, $message, $headers);

?>
