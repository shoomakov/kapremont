<?php
function checkbox($postname) {
  if (isset($_POST[$postname])) {
    return "&#x02713;". $_POST[$postname] ."<br />";
  } else {
    return "";
  }
}

function put_id($fileName, $id) {
  $file = fopen($fileName, "a");
  fwrite($file, "$id,");
  fclose($file);
}

function order_id() {
  $fileName = 'ids.txt'; //set 777 permision for this file.

  $x = random_int(1, 100000000);
  $id_lenght = strlen($x);

  if ($id_lenght == 8) {
    put_id($fileName, date("mdy-His-") . $x);
    return date("mdy-His-") . $x;
  }
  elseif ($id_lenght < 8) {
    $addition = 8 - $id_lenght;
    $zeros = str_repeat("0", $addition);
    $extented_addition = $zeros . $x;
    put_id($fileName, date("mdy-His-") . $extented_addition);
    return date("mdy-His-") . $extented_addition;
  }
}
