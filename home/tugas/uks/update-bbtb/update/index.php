<?php
require ("../../../../../advance.php");
include ("load.php");
if (isJobDefined ($_COOKIE['id'],'uks')){
    header ("location: error.php");
}

echo "<pre>";

if (!empty ($_POST)) {
  
  // validasi form kosong
  isFormValidNotEmpty ($_POST,"location: error.php");
  
  // validasi insert mysqli
  $data = setGoodMysqli ($_POST);
  $time = date ("Y-m-d",strtotime ($_POST['waktu']));
  $query = "INSERT INTO uks_his_berat_badan (nis, berat_badan, waktu) VALUES ('$data[nis]','$data[berat]','$time')";
  $query2 = "INSERT INTO uks_his_tinggi_badan (nis, tinggi_badan, waktu) VALUES ('$data[nis]','$data[tinggi]','$time')";
  $sqli = mysqli_query ($connect,$query);
  $sqli2 = mysqli_query ($connect,$query2);
  
  if ( !mysqli_affected_rows ( $connect ) ) {
    header ("location: error.php?error=data tidak terupdate");
  }
  else {
    header('Refresh: 1; URL=../../');
  }
  
}

?>