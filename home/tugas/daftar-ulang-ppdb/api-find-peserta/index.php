<?php
require ("../../../../advance.php");

if (isset($_GET)){
  if ($_GET['param'] == "find"){
    $findNama = setGoodMysqliOne ($_GET['nama']);
    $tp = $_ENV["tahun_ppdb"];
    $query = "SELECT * FROM `ppdb_peserta` WHERE tp = '$tp' AND nama_panjang LIKE '%$findNama%'";
    $mysqliQuery = mysqli_query ($connect,$query);

    $arrayName = array();
    // echo mysqli_affected_rows ($connect);
    if (mysqli_affected_rows ($connect)){

      while ($data = mysqli_fetch_assoc ($mysqliQuery)) {
        array_push($arrayName,$data);
      }

      print_r(json_encode($arrayName));
    }
    else {
      print_r(json_encode($arrayName));
    }
  }
}





?>
