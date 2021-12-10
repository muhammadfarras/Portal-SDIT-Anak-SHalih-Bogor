<?php

require ("../../../../advance.php");
require ("DataBaseUpdate.php");

$myArray = json_decode ($_GET['data']);
$result = setGoodMysqli ($myArray);


// save to mysqli
// print_r ($result);
$data = new DataBaseUpdate ($result,"2022-2023",$connect);

if ($data->saveToDb()){
  echo "berhasil";
}
else {
  echo "gagal";
}
 ?>
