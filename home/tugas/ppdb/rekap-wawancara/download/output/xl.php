<?php
require ("../../../../../../advance.php");
header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename=rekap-wawancara-sdit-".date("d-m-Y").".xls");  //File name extension was wrong
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: private",false);
$year = $_GET['year'];
$urutPertanyaan = ["Satu","Dua","Tiga","Empat","Lima","Enam","Tujuh","Delapan","Sembilan","Sepuluh","Sebelas","Duabelas"];

function nopToNama ($connect,$nop) {
  $query = "SELECT nama_panjang FROM ppdb_peserta WHERE no_peserta = '$nop'";
  $squery = mysqli_query ($connect,$query);

  return $data = mysqli_fetch_assoc ($squery)['nama_panjang'];
}

function textWan ($connect,$nop){
  $query = "SELECT * FROM ppdb_text_wawancara WHERE no_peserta = '$nop'";
  $squery = mysqli_query ($connect,$query);

  return mysqli_fetch_row($squery);
}
$query = "SELECT * FROM ppdb_pertanyaan WHERE tp = '$year'";
$sql = mysqli_query ($connect,$query);
$rows = mysqli_affected_rows ($connect);
 ?>

<table>
  <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <?php
      if ($year ="2021-2022"){
        for ($i = 0 ; $i < $rows ; $i++){
          echo "<th>".$urutPertanyaan[$i]."</th>";
        }
      }
       ?>

       <th>
         Pewawancara
       </th>
       <th>
         Waktu
       </th>
    </tr>
  </thead>
  <tbody>
    <?php
    $query = "SELECT * FROM ppdb_nilai_wawancara WHERE tp='$year'";
    $sqlQuery = mysqli_query ($connect,$query);
    $no = 1;
    while ($data = mysqli_fetch_row($sqlQuery)){
       echo "<tr>";
       echo "<td rowspan='2'>$no</td>";
       echo "<td rowspan='2'>".nopToNama($connect,$data[0])."</td>";

       // Nilai dari wawancara
       if ($year ="2021-2022"){
         for ($i = 0 ; $i < $rows ; $i++){
           echo "<td>".$data[2+$i]."</td>";
         }
       }

       echo "<td rowspan=2>$data[14]</td>";
       echo "<td rowspan=2>$data[15]</td>";
       echo "</tr>";

       echo "<tr>";

       if ($year ="2021-2022"){
         for ($i = 0 ; $i < $rows ; $i++){

           echo "<td>".textWan($connect,$data[0])[2+$i]."</td>";
         }
       }
       echo "</tr>";
       ;

      $no++;
    }
     ?>
  </tbody>
</table>
