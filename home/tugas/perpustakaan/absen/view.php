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
</head>
<body id="body">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="../">
        <img src="../../../../img/3x3.png" alt="..." class="img" style="width: 2rem">
      </a>
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Perpustakaan SDIT Anak Shalih Bogor</a>
          </li>
        </ul>
      </div>
    </nav>
  
  <div class="container">
    <h3 class="display-4 bg-light mt-2 text-muted text-center" id="time-wow">
      Waktu server
    </h3>
    <form class="mt-2" id="absen">
      <label class="sr-only" for="inlineFormInputGroupUsername2">No induk siswa / no induk yayasan</label>
      <div class="input-group mb-2 mr-sm-2">
        <div class="input-group-prepend">
          <div class="input-group-text">NIS / NIY</div>
        </div>
        <input name="input-ni" type="text" class="form-control" id="nis" placeholder="Username" autofocus="on" autocomplete="off">
      </div>
    </form>
    
    <div class="container mt-3 p-2 bg-info">
      <h4 class="text-muted text-center " id="info">
        latest presence
      </h4>
    </div>
    
    <div class="container mt-3" id="daftar">
      
    </div>
    
  </div>
<script src="javascript.js"></script>
</body>
</html>
