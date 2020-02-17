<?php
  $detail = callPerserta ();
?>
<!DOCTYPE html>

<html>
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="3">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="body">
  <a id="exit" href="../../../index.php">
    Home
  </a>
  <div class="container">
    <table>
      <tr><th>No</th><th>No Peserta</th><th>Nama Peserta</th></tr>
      <?php
        if ($detail->num_rows != 0){
          $no = 1;
          while ($data = mysqli_fetch_assoc ($detail)){
            
            if (!(time() - $data['online_time'] < 2)){
              echo "<tr><td>$no</td><td class=no-peserta>$data[no_peserta]</td><td>$data[nama_panjang]</td></tr>";
              $no++;
            }
          }
        }
        else {
          echo "<tr><th style=text-align:center colspan=3>Belum ada siswa yang hadir</th></tr>";
        }
      ?>
    </table>
  </div>
  <br>
  <div class="container">
    <table>
      <tr><th colspan=3>Peserta Sedang Wawancara</th></tr>
      <?php
        $detail = callPerserta ();
        if ($detail->num_rows != 0){
          $no = 1;
          while ($data = mysqli_fetch_assoc ($detail)){
            
            if ((time() - $data['online_time'] < 2)){
              echo "<tr><td>$no</td><td class=no-peserta>$data[no_peserta]</td><td>$data[nama_panjang]</td></tr>";
              $no++;
            }
            
            
          }
        }
        else {
          echo "<tr><th style=text-align:center colspan=3>Belum ada siswa yang hadir</th></tr>";
        }
      ?>
    </table>
  </div>
  
  
  <script src="javascript.js"></script>
</body>
</html>
