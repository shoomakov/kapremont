<?php

function zero($number) {
  for ($i = 0; $i < $number; $i++) {
    echo 0;
  }
}

function put_id($fileName, $id) {
  $file = fopen($fileName, "a");
  fwrite($file, "$id,");
  fclose($file);
}

$fileName = 'ids.txt'; //set 777 permision for this file.

$x = random_int(1, 100000000);
$id_lenght = strlen($x);

if ($id_lenght == 8) {
  echo date("ymd-His-") . $x;
  put_id($fileName, date("ymd-His-") . $x);
}
elseif ($id_lenght < 8) {
  $addition = 8 - $id_lenght;
  $zeros = str_repeat("0", $addition);
  $extented_addition = $zeros . $x;
  echo date("ymd-His-") . $extented_addition;
  put_id($fileName, date("ymd-His-") . $extented_addition);
}
