<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bimbingan Konseling</title>
    <link rel="icon" href="../../../../img/3x3.png" type="image/x-icon" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../../../fa/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
            <a class="nav-link" href="#">Catat Data<span class="sr-only active">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../konfirmasi-data">Konfirmasi Data<span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>



    <div class="container mt-2">
      <h2>Catat Informasi Calon peserta didik SDIT Anshal</h2>
      <hr>
      <form class="mt-2">


        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="inputnama">Nama Anak</label>
            <input type="text" class="form-control" id="inputnama">
          </div>
          <div class="form-group col-md-6">
            <label for="inputnamaayah">Nama Ayah</label>
            <input type="text" class="form-control" id="inputnamaayah">
          </div>
          <div class="form-group col-md-6">
            <label for="inputhpayah">Nomor <i>Handphone</i></label>
            <input type="text" class="form-control" id="inputhpayah">
          </div>
          <div class="form-group col-md-12">
            <label for="inputemailayah">Email Ayah</label>
            <input type="email" class="form-control error-input" id="inputemailayah">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputemailibu">Nama Ibu</label>
            <input type="text" class="form-control" id="inputemailibu">
          </div>
          <div class="form-group col-md-6">
            <label for="inputhpibu">Nomor <i>Handphone</i></label>
            <input type="text" class="form-control" id="inputhpibu">
          </div>
          <div class="form-group col-md-12">
            <label for="inputnamaibu">Email Ibu</label>
            <input type="email" class="form-control" id="inputnamaibu">
          </div>
        </div>

        <!-- Button untuk memicu modal -->
        <button id="buttonSubmit" type="button" class="btn btn-success" data-target="#exampleModal">
          Submit
        </button>
      </form>
    </div>

    <!-- // Toast -->
    <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
        <div class="toast mt-5 ml-5" style="position: absolute; top: 0; left: 0;" data-autohide="false">
        <div class="toast-header">
          <strong class="mr-auto text-primary">Status Update Data</strong>
          <small class="text-muted"></small>
          <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
        </div>
        <div id="isiToast" class="toast-body">
          Data berhasil di update
        </div>
      </div>
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
