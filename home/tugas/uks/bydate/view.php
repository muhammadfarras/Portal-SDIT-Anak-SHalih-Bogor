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
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body id="body">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="../../../">
        <img src="../../../../img/3x3.png" alt="..." class="img" style="width: 2rem">
      </a>
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="../">Find By Name</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Find By Date</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0"  action="" method="post">
          <input id="datepicker" class="form-control" type="search" name="waktu" placeholder="Search By Date" aria-label="Search" autocomplete="off">
          <button class="btn btn-outline-success ml-2 my-2 my-sm-0" type="submit" name="find">Search</button>
        </form>
        
      </div>
    </nav>
  <h2 class="judul">Rekam Kesehatan Siswa</h2>
  <script>
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });
  </script>
</body>
</html>
