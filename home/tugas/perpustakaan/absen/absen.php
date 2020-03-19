<?php
require ("../../../../advance.php");
// Create table first
$mysqli = new mysqli ($host,$username,"$pass");
$mysqli->select_db ($dbname);
$val = $mysqli->query ('select 1 from `perpus_absen` LIMIT 1');
if (!$val){
  // create table
  
  $query = "CREATE TABLE perpus_absen (
    id_kehadiran INT (11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nis VARCHAR (30) NOT NULL,
    waktu DATE NOT NULL DEFAULT current_timestamp(),
    jam datetime NOT NULL DEFAULT current_timestamp()
  )";
  
  $mysqli->query($query);
  if ($mysqli->error){
    echo "error";
    echo $mysqli->error;
  }
  else {
    echo "table berhasil dibuat\n";
  }
}

if (!empty ($_GET)){
  $data = preg_split ("/\\s/",$_GET['input-ni'],2);
  // objek siswa sdit
  $siswa = new baseSiswa ($data[0]);

  // check apakah nis tersebut terdaftar atau tidak
  if ($siswa->getBaseSiswa()->num_rows == 1){
    
    // check apakah dia sudah datang pada waktu ini atau belum
    $siswa = mysqli_fetch_assoc ($siswa->getBaseSiswa());
    
    $query = "SELECT * FROM perpus_absen WHERE nis = '$data[0]' AND waktu = CURDATE()";
    $mysqli->query ($query);
    if ($mysqli->affected_rows == 0){
      
      $query = "INSERT INTO perpus_absen (nis) VALUES ('$data[0]')";
      $mysqli->query ($query);
      
      
      if ($mysqli->error){
        echo "error";
        echo $mysqli->error;
      }
      else {
        echo "Selamat datang $siswa[nama_siswa]";
      }
      
    }
    else {
      echo "$siswa[nama_siswa] sudah datang pada hari ini.";
    } 
  }
  else {
    echo "NIS tidak ditemukan";
  }
}
if (isset($mysqli)) {
  $mysqli->close();
  }


?>