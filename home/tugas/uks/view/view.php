<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
      .card {
        background-color: #515151;
        color: white;
      }
    </style>
    
</head>
<body id="body">
  <a class="back" id="exit" href="../">
    Home
  </a>
  <h2 class="judul">Rekam Kesehatan Siswa</h2>
  <div class="container">
    <a id="print" href="<?php echo "pdf.php?data=".$_GET['data']; ?>">
      PDF
    </a>
    <table>
      <tr>
        <th colspan=2>Biodata Siswa</th>
      </tr>
      <tr>
        <td>NIS</td>
        <td> : <?php echo $biodata['nis'];?></td>
      </tr>
      <tr>
        <td>Nama siswa</td>
        <td> : <?php echo ucwords ( strtolower ($biodata ['nama_siswa'] ) )?></td>
      </tr>
      <tr>
        <td>Nama ayah</td>
        <td> : <?php echo ucwords ( strtolower ($ayah ['nama_ayah'] ) )?></td>
      </tr>
      <tr>
        <td>Kelas</td>
        <td> : <?php echo $kelas ['tingkat']."".$kelas ['kelas']?></td>
      </tr>
      <tr>
        <td>Jenis kelamin</td>
        <td> : <?php echo $biodata ['jenis_kelamin']?></td>
      </tr>
      <tr>
        <td>Tempat/Tanggal lahir</td>
        <td> : <?php echo $biodata ['tempat_lahir']." / ".$biodata['tanggal_lahir']?></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td> : <?php echo $biodata ['alamat']?></td>
      </tr>
    </table>
    <hr>
    <table>
      <tr>
        <th colspan=2>Data Kondisi Badan Siswa</th>
      </tr>
      <tr>
        <td>Golongan Darah</td>
        <td> : <?php echo $goldar['goldar'];?></td>
      </tr>
      <tr>
        <td>Berat</td>
        <td> : <?php echo $berat ['berat_badan']?> Kg </td>
      </tr>
      <tr>
        <td>Tinggi</td>
        <td> : <?php echo $tinggi ['tinggi_badan']?> Cm</td>
      </tr>
      <tr>
        <td><em>Body Mass Index</em></td>
        <td> : <?php echo bmi ($tinggi ['tinggi_badan'],$berat ['berat_badan'])?></td>
      </tr>
      
      
    </table>
    <footer><em class="update">Data tanggal, <?php echo date ("d - M - Y",strtotime( $berat ['waktu']))?></em></footer>
    <hr>
    <table class="rekam">
      <thead>
          <tr>
            <th colspan=2>Catatan Unit Kesehatan Sekolah</th>
          </tr>
      </thead>
      <tbody>
        
          <?php
            while ($data = mysqli_fetch_assoc ($kesehatan)){
              $petugas = mysqli_fetch_assoc (getEmployeByid($data['petugas']));
              echo "<tr>";
              echo "<td>";
              echo '<div class="card mb-3" style="width: 50rem;">
                      <div class="card-header">
                        '.setGoodDate ($data['waktu']).'
                        
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Keluhan</h5>
                          <p class="card-text text-left">'.$data['keluhan'].'</p>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Data Objek</h5>
                          <p class="card-text text-left">'.$data['data_objek'].'</p>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Diagnosa</h5>
                          <p class="card-text text-left">'.$data['diagnosa'].'</p>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Tindakan</h5>
                          <p class="card-text text-left">'.$data['tindakan'].'</p>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Keterangan</h5>
                          <p class="card-text text-left">'.$data['keterangan'].'</p>
                      </div>
                      <div class="card-footer text-muted">Created By '.$petugas['nama_depan'].' '.$petugas['nama_belakang'].'</div>
                    </div>';
              echo "</td>";
              echo "</tr>";
            }
          ?>
      </tbody>
    </table>
  </div>
  
</body>
</html>
