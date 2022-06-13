<!DOCTYPE html>

<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal SDIT Anak Shalih Bogor</title>
    <link rel="icon" href="../img/3x3.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="../fa/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
    <!-- <link rel="stylesheet" href="http://192.168.1.201/assets/css/bootstrap.min.css">
    <script src="http://192.168.1.201/assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="http://192.168.1.201/assets/jquery-3.5.1.slim.min.js" type="text/javascript"></script> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </head>
<body id="body" class="bg-secondary">
  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Portal SDIT Anshal</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../">Log Out</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container ">
    <div class="header">
      <table>
        <tr><th colspan=2>Biodata</th></tr>
        <tr><td><?php echo ucfirst ($data['nama_depan'])." ".ucfirst ($data['nama_belakang']); ?></td></tr>
        <tr><td><?php echo ($data['email'])?></td></tr>
      </table>
    </div>
    <div class="body bt-3">
      <h2 class="text-xl-left text-light mt-4 mb-4">Akses Tugas . . . . . .</h2>
      <div class="card-columns">
      <?php
        if (mysqli_affected_rows ($connect)){

          while ($data = mysqli_fetch_assoc ($job)){

                $path = mysqli_fetch_assoc (getPathFromJob ($data['deskripsi']));

                echo '<div class="card">
                      <h5 class="card-title mt-3">'.strtoupper ($data['deskripsi']).'</h5>
                      <div class="card-body">
                      <p class="card-text">Selamat Bekerja</p>

                        <a href="'.$path['path'].'" class="text-secondary"><i class="fa fa-play-circle fa-3x" aria-hidden="true"></i></a>
                      </div>
                    </div>';

            }
        }
        else {
          echo "<span class=caution>Admin belum memberikan akses tugas</span>";
        }
        ?>
      </div>
    </div>
  </div>
  <br>
  <script src="javascript.js"></script>
  <script>
    giveHrefDiv();
  </script>
</body>
</html>
