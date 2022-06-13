<?php
require ("../../../../advance.php");

// $query = "SELECT * FROM `ppdb_peserta` WHERE tp = '2022-2023' AND jenis_kelamin = 'Akhwat'  AND groupId = ''";
$query = "SELECT * FROM `ppdb_peserta` WHERE tp = '2022-2023' AND jenis_kelamin = 'Akhwat'";
$mysqliQuery = mysqli_query ($connect,$query);

$arrayName = array();
if (mysqli_affected_rows ($connect)){

  while ($data = mysqli_fetch_assoc ($mysqliQuery)) {
    array_push($arrayName,$data);
  }

  print_r(json_encode($arrayName));
}



?>
