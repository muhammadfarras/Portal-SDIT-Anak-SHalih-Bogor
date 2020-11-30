<?php

require ("../../../../advance.php");

if (isset($_GET)){
  if (!empty($_GET['no_peserta'])){

    $noPeserta = $_GET['no_peserta'];
    $query = "UPDATE ppdb_peserta SET ishadir = 'ok' WHERE no_peserta = '$noPeserta'";
    $mysqliQuery = mysqli_query ($connect,$query);


    if (mysqli_affected_rows ($connect)){

      print_r(json_encode(array('status' =>  1, 'respone' => 'data berhasil di update' )));
      }
      else {
        print_r(json_encode(array('status' =>  0, 'respone' => 'data tidak di update' )));
      }


    }
  }
 ?>
