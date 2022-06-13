<?php

require ("../../../../advance.php");
require ("DataBaseUpdate.php");

$myArray = json_decode ($_GET['data']);
$result = setGoodMysqli ($myArray);


// save to mysqli
// print_r ($result);
$tp = $_ENV["tahun_ppdb"];
$data = new DataBaseUpdate ($result,$tp,$connect);

if ($data->saveToDb()){
  echo "berhasil";
}
else {
  echo "gagal";
}
 ?>
