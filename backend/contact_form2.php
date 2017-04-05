<?php
/*****************************************************************************
 $emailOffer
******************************************************************************/
// require_once 'conf.php';

require_once 'conf.php';
include 'functions.php';

$name = $_POST['cf2_name'];
$tel  = $_POST['cf2_tel'];

$mail->Subject = 'Заявка. kapremont.kametr.ru';
$mail->Body    = "<b>Номер заявки:</b> ". order_id() ."<br />".
  "Имя: $name<br />".
  "Телефон: $tel <br />";
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->send();
?>
