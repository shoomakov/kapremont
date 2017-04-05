<?php
/*****************************************************************************
 $emailOffer
******************************************************************************/
// require_once 'conf.php';

require_once 'conf.php';
include 'functions.php';

$name = $_POST['cf_name'];
$email  = $_POST['cf_email'];
$tel = $_POST['cf_tel'];
if (!empty($_POST['cf_message'])) {
  $cf_message = $_POST['cf_message'];
} else {
  $cf_message = "Клиент оставил поле пустым.";
}

$mail->Subject = 'Заявка на замер. kapremont.kametr.ru';
$mail->Body    = "<b>Номер заявки:</b> ". order_id() ."<br />".
  "<b>Имя:</b> $name<br />".
  "<b>Телефон:</b> $tel <br />".
  "<b>Дополнительная информация:</b><br/>$cf_message";
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->send();

?>
