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
  $query = "DELETE FROM uks_his_pemeriksaan WHERE id_pemeriksaan = '$data[id_pemeriksaan]'";
  
  
  $sqli = mysqli_query ($connect,$query);
  
  if ( !mysqli_affected_rows ( $connect ) ) {
    header ("location: error.php?error=data tidak terupdate");
  }
  else {
    header('Refresh: 1; URL='.$data['target'].'');
  }
  
}


?>