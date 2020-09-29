<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bimbingan Konseling</title>
    <link rel="icon" href="../../../../img/3x3.png" type="image/x-icon" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../../../fa/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body id="body">
    <!-- <img id="loading-page" src="img/loading.gif" class="sr-only"> -->
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
            <a class="nav-link" href="#">Catat data<span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container mt-5">
      <h2>Catat Informasi Calon peserta didik SDIT Anshal</h2>
      <hr>
      <form class="mt-2">


        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="inputnama">Nama Anak</label>
            <input type="email" class="form-control" id="inputnama">
          </div>
          <div class="form-group col-md-6">
            <label for="inputnamaayah">Nama Ayah</label>
            <input type="email" class="form-control" id="inputnamaayah">
          </div>
          <div class="form-group col-md-6">
            <label for="inputhpayah">Nomor <i>Handphone</i></label>
            <input type="Email" class="form-control" id="inputhpayah">
          </div>
          <div class="form-group col-md-12">
            <label for="inputemailayah">Email Ayah</label>
            <input type="email" class="form-control error-input" id="inputemailayah">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputemailibu">Nama Ibu</label>
            <input type="email" class="form-control" id="inputemailibu">
          </div>
          <div class="form-group col-md-6">
            <label for="inputhpibu">Nomor <i>Handphone</i></label>
            <input type="Email" class="form-control" id="inputhpibu">
          </div>
          <div class="form-group col-md-12">
            <label for="inputnamaibu">Email Ibu</label>
            <input type="email" class="form-control" id="inputnamaibu">
          </div>
        </div>

        <!-- Button untuk memicu modal -->
        <button id="buttonSubmit" type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
          Submit
        </button>
      </form>
    </div>



    <!-- tempat konfirmasi masukan data -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Data Siswa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table>
              <tr><td>Nama</td><td>: <span id="spannama"></span></td></tr>
              <tr><td>Nama Ayah</td><td>: <span id="spannamaayah"></span></td></tr>
              <tr><td>Email Ayah</td><td>: <span id="spanemailayah"></span></td></tr>
              <tr><td>No Handphone Ayah</td><td>: <span id="spanhpayah"></span></td></tr>
              <tr><td>Nama Ibu</td><td>: <span id="spannamaibu"></span></td></tr>
              <tr><td>Email Ibu</td><td>: <span id="spanemailibu"></span></td></tr>
              <tr><td>No Handphone Ibu</td><td>: <span id="spanhpibu"></span></td></tr>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button id="btnsure" type="button" class="btn btn-success">Simpan</button>
          </div>
          <smal class="p-3 text-muted">Pastikan data diatas benar, jika sudah diyakini benar tekan tombol berwarna hijau.</small>
        </div>
      </div>
    </div>
<script src="javascript.js"></script>
</body>

</html>
