<?php
require ("../../../../advance.php");

if (isset($_GET)){
  if (!empty($_GET['no_peserta'])){

    $noPeserta = $_GET['no_peserta'];
    $query = "SELECT * FROM `ppdb_peserta` WHERE tp = '2021-2022' AND no_peserta = '$noPeserta'";
    $mysqliQuery = mysqli_query ($connect,$query);

    $arrayName = array();
    if (mysqli_affected_rows ($connect)){

      while ($data = mysqli_fetch_assoc ($mysqliQuery)) {
        array_push($arrayName,$data);
      }

      print_r(json_encode($arrayName));
    }
  }
}





?>
