<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bimbingan Konseling</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body id="body">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="../">
        <img src="../img/3x3.png" alt="..." class="img" style="width: 2rem">
      </a>
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Kognitif<span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>
    
    <div class="container bg-light mt-5 mb-5 p-4">
      
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
      
      <hr>
      <form class="mt-3">
        <div class="form-group font-weight-bold mb-5">
          <label for="exampleFormControlTextarea1" class="h4">Koognitif</label>
          <p class="text-muted">Dapat dijelaskan melalui narasi berdasarkan kemampuan calistung dan pemahaman dalam intruksi</p>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          
          <!--Ini history terakhir pencatatan -->
            <div class="card ml-4 pt-2 mb-2 mt-2 w-75 alert-secondary">
              <p class="h6 pl-2">15 Februari 2020</p>
              <p class="h6 pl-2"><small>Bla bla bla bla bla.</small></p>
              <div class="card-footer text-muted">
                <small class="text-muted">Dicatat oleh Fulan Bin Fulan</small>
              </div>
            </div>
            <a href="#" class="text-muted ml-4">Tekan untuk history lengkap</a>
          
        </div>
        
        <div class="form-group font-weight-bold mb-5">
          <label for="exampleFormControlTextarea1" class="h4">Sosial</label>
          <p>
            <small class="text-muted">Dapat dijelaskan melalui narasi berdasarkan hubungan dengan teman, tanggung jawab sosial, peran dalam kelompok</small>
          </p>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          
          <!--Ini history terakhir pencatatan -->
            <div class="card ml-4 pt-2 mb-2 mt-2 w-75 alert-secondary">
              <p class="h6 pl-2">15 Februari 2020</p>
              <p class="h6 pl-2"><small>Bla bla bla bla bla.</small></p>
              <div class="card-footer text-muted">
                <small class="text-muted">Dicatat oleh Fulan Bin Fulan</small>
              </div>
            </div>
            <a href="#" class="text-muted ml-4">Tekan untuk history lengkap</a>
            
        </div>
        
        <div class="form-group font-weight-bold mb-5">
          <label for="exampleFormControlTextarea1" class="h4">Emosi</label>
          <p>
            <small class="text-muted">Dapat dijelaskan melalui narasi berdasarkan pengendalian emosi dan penyesuaian diri</small>
          </p>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          
          <!--Ini history terakhir pencatatan -->
            <div class="card ml-4 pt-2 mb-2 mt-2 w-75 alert-secondary">
              <p class="h6 pl-2">15 Februari 2020</p>
              <p class="h6 pl-2"><small>Bla bla bla bla bla.</small></p>
              <div class="card-footer text-muted">
                <small class="text-muted">Dicatat oleh Fulan Bin Fulan</small>
              </div>
            </div>
            <a href="#" class="text-muted ml-4">Tekan untuk history lengkap</a>
            
            
        </div>
        
        <div class="form-group font-weight-bold mb-5">
          <label for="exampleFormControlTextarea1" class="h4">Wawasan Pengetahuan</label>
          <p>
            <small class="text-muted">Dapat dijelaskan melalui narasi berdasarkan adab menuntut ilmu, adab terhadap guru, siswa lain, tamu dsb</small>
          </p>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          
          <!--Ini history terakhir pencatatan -->
            <div class="card ml-4 pt-2 mb-2 mt-2 w-75 alert-secondary">
              <p class="h6 pl-2">15 Februari 2020</p>
              <p class="h6 pl-2"><small>Bla bla bla bla bla.</small></p>
              <div class="card-footer text-muted">
                <small class="text-muted">Dicatat oleh Fulan Bin Fulan</small>
              </div>
            </div>
            <a href="#" class="text-muted ml-4">Tekan untuk history lengkap</a>
            
            
        </div>
        
        <div class="form-group font-weight-bold mb-5">
          <label for="exampleFormControlTextarea1" class="h4">Bahasa/Interaksi-Komunikasi</label>
          <p>
            <small class="text-muted">Dapat dijelaskan melalui narasi berdasarkan perkembangan interaksi dan komunikasi, penggunaan bahasa, pemahaman dalam berkomunikasi dll</small>
          </p>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          
          <!--Ini history terakhir pencatatan -->
            <div class="card ml-4 pt-2 mb-2 mt-2 w-75 alert-secondary">
              <p class="h6 pl-2">15 Februari 2020</p>
              <p class="h6 pl-2"><small>Bla bla bla bla bla.</small></p>
              <div class="card-footer text-muted">
                <small class="text-muted">Dicatat oleh Fulan Bin Fulan</small>
              </div>
            </div>
            <a href="#" class="text-muted ml-4">Tekan untuk history lengkap</a>
            
            
        </div>
        
        <button type="button" class="btn btn-outline-secondary w-50">Catat</button>
      </form>
    </div>
    <script>
      $('.carousel').carousel({
          interval: false
      }); 
    </script>
  </body>
</html>
