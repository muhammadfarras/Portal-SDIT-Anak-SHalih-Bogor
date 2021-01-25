<?php

require ("../../../../../../advance.php");



// convert id to btn_year

$year = idToYear();
$urutPertanyaan = ["Satu","Dua","Tiga","Empat","Lima","Enam","Tujuh","Delapan","Sembilan","Sepuluh","Sebelas","Duabelas"];

function idToYear (){
  $btn = $_POST['year'];
  $year = explode ("_",$btn);
  return "20".$year[1]."-"."20".($year[1]+1);
}


 ?>

 <!DOCTYPE html>
 <html>
 <head>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Download Rekap Wawancaran PPDB</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="style.css">
 </head>
 <body>

   <div class="mt-5">

     <?php

       $query = "SELECT * FROM ppdb_pertanyaan WHERE tp = '$year'";
       $sql = mysqli_query ($connect,$query);
       $rows = mysqli_affected_rows ($connect);
       if ($rows == 0){
         ?>
         <div class="alert alert-danger" role="alert">
          Pertanyaan belum tersedia!!!
        </div>
        <?php
          die();
       }
       // mysqli_close($connect);

       // jika pertanyaan ada maka Peserta
       $queryCheckPeserta = "SELECT * FROM ppdb_peserta WHERE tp='$year'";
       $sqlQuery = mysqli_query($connect,$queryCheckPeserta);
       $banyakPeserta = mysqli_affected_rows ($connect);
       if ($rows == 0){
         ?>
         <div class="alert alert-danger" role="alert">
          Peserta belum tersedia!!!
        </div>
         <?php
         die();
       }

       header ("location: xl.php?year=$year");



      ?>


   </div>
 </body>
 </html>
