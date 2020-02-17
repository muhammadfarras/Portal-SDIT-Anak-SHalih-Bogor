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
    
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body id="body">
  <a class="back" id="exit" href="../">
    Home
  </a>
  
  
      
  <h2 class="judul">Catat Kesehatan Siswa</h2>
  <div class="container">
    <table class="biodata">
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
    <br>
    <form action="update/" method="post">
      <div class="form-group">
        <input name="nis" style="display: none" type="text" class="form-control" id="exampleFormControlInput1" value ="<?php echo $biodata['nis'];?>" readonly>
      </div>
      
      
      
      <div class="form-group">
        <label for="for-waktu">Waktu Pemeriksaan</label>
        <input name="waktu" id="datepicker" type="text" width=200 class="form-control" id="for-waktu" autocomplete="off" required>
      </div>
      <div class="form-group">
        <label for="for-keluhan">Keluhan</label>
        <textarea name="keluhan" class="form-control" id="for-keluhan" rows=3" required></textarea>
      </div>
      <div class="form-group">
        <label for="for-data">Data Objecktif</label>
        <textarea name="data_objek" class="form-control" id="for-data" rows=3" required></textarea>
      </div>
      <div class="form-group">
        <label for="for-diagnosa">Diagnosa</label>
        <textarea name="diagnosa" class="form-control" id="for-diagnosa" rows=3" required></textarea>
      </div>
      <div class="form-group">
        <label for="for-tindakan">Tindakan & Terapi</label>
        <textarea name="tindakan" class="form-control" id="for-tindakan" rows=3" required></textarea>
      </div>
      <div class="form-group">
        <label for="for-keterangan">Keterangan</label>
        <textarea name="keterangan" class="form-control" id="for-keterangan" rows=3" required></textarea>
      </div>
      
      <button name="catat" value="catat" type="submit" class="btn btn-success">Catat Rekam Kesehatan</button>
    </form> 
  </div>
  <script>
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });
  </script>
</body>
</html>
