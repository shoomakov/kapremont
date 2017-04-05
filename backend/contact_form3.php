<?php
include 'conf.php';
include 'functions.php';


$name = $_POST['cf3_name'];
$tel  = $_POST['cf3_tel'];
$email = $_POST['cf3_email'];
$type_of_object = $_POST['type_of_object'];
$area = $_POST['cf3_area'];
$number_of_rooms = $_POST['cf3_number_of_rooms'];
$object_location = $_POST['cf3_object_location'];

// $to      = 'info@kametr.ru';
$subject = 'Расчитать стоимость. kapremont.kametr.ru';
$message = "<b>Номер заявки:</b> ". order_id() ."<br />".
  "<b>Имя:</b> $name<br />".
  "<b>Телефон:</b> $tel <br />".
  "<b>Email:</b> $email<br/>".
  "<b>Тип объекта:</b> $type_of_object<br />".
  "<b>Площадь объекта:</b> $area м<sup>2</sup><br/>".
  "<b>Количество комнат:</b> $number_of_rooms<br />".
  "<b>Расположение объекта:</b> $object_location<br />".
  "<h2><b>Помещения:</b></h2>".
  checkbox('rooms').checkbox('kitchen').checkbox('bathroom').checkbox('balcony');
$headers = 'From:'. $email . "\r\n" .
  'Reply-To: webmaster@example.com' . "\r\n" .
  "Content-type:text/html; charset=utf-8" . "\r\n".
  'X-Mailer: PHP/' . phpversion();

mail($emailOffer, $subject, $message, $headers);
