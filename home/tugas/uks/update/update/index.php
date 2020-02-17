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
  $query = "INSERT INTO uks_his_pemeriksaan (nis, keluhan, data_objek, diagnosa, tindakan, keterangan, waktu, petugas)
  VALUES ('$data[nis]','$data[keluhan]','$data[data_objek]','$data[diagnosa]','$data[tindakan]','$data[keterangan]','$time','$_COOKIE[id]')";
  
  $sqli = mysqli_query ($connect,$query);
  
  if ( !mysqli_affected_rows ( $connect ) ) {
    header ("location: error.php?error=data tidak terupdate");
  }
  else {
    header('Refresh: 1; URL=../../');
  }

}

?>