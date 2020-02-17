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
  $query = "UPDATE uks_his_pemeriksaan SET nis='$data[nis]', keluhan='$data[keluhan]', data_objek='$data[data_objek]', diagnosa='$data[diagnosa]',
  tindakan='$data[tindakan]', keterangan='$data[keterangan]', waktu='$time', petugas='$_COOKIE[id]' WHERE id_pemeriksaan = '$data[id_pemeriksaan]'";
  

  
  $sqli = mysqli_query ($connect,$query);
  
  if ( !mysqli_affected_rows ( $connect ) ) {
    header ("location: error.php?error=data tidak terupdate");
  }
  else {
    header('Refresh: 1; URL='.$data['target'].'');
  }
  
}

?>