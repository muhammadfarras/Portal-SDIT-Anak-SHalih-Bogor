<?php

require ("../../../advance.php");

// Apakah didalam database sudah ada data sebelumnya atau tidak
// jika ada maka buat baru, jika tidak maka update data
$id = $_GET['id'];
$job = $_GET['job'];
$stat_check = $_GET['check'];

$query = "SELECT * FROM akses_tugas WHERE id = '$id' AND deskripsi = '$job'";
$mysqli = mysqli_query ($connect,$query);

if (mysqli_affected_rows ($connect)){
    
    $queryupdate = "DELETE FROM akses_tugas WHERE id = '$id' AND deskripsi = '$job'";
    $mysqli_run = mysqli_query ($connect,$queryupdate);
    echo mysqli_error ($connect);
}
else {
    $queryupdate = "INSERT INTO akses_tugas (id,deskripsi) VALUES  ('$id', '$job')";
    $mysqli_run = mysqli_query ($connect,$queryupdate);
    echo mysqli_error ($connect);
}

?>