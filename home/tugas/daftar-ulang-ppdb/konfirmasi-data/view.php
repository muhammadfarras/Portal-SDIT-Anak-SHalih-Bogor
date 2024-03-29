<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bimbingan Konseling</title>
    <link rel="icon" href="../../../../img/3x3.png" type="image/x-icon" />

    <link rel="stylesheet" href="../../../../fa/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

    <!-- <script src="http://192.168.1.201/assets/jquery-3.5.1.slim.min.js" type="text/javascript"></script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="http://192.168.1.201/assets/another/bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <script src="http://192.168.1.201/assets/another/bootstrap-4.4.1-dist/js/bootstrap.min.js" type="text/javascript"></script> -->

    <link rel="stylesheet" href="style.css">
</head>
<body id="body">

  <!-- // Image -->
  <img id="loading-page" src="../img/loading.gif" class="sr-only">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="../">
        <img src="../../../../img/3x3.png" alt="..." class="img" style="width: 2rem">
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="../catat-data">Catat Data<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Konfirmasi Data<span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>


    <div class="container mt-5">


        <div class="form-group">
          <label for="FindNama"><h3>Cari nama calon peserta</h3></label>
          <input type="email" class="form-control" id="FindNama" aria-describedby="findHelp" placeholder=" . . . . .">
          <small id="findHelp" class="form-text text-muted">Ketik nama pengguna berdasarkan nama dari form catat data.</small>
        </div>


    </div>

    <div class="container mt-2" id="result-container">

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


<!--  ini adalah modal -->
<div id="myModal" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="modal-body" class="modal-body">
        <form autocomplete="off">
          <div class="form-group">
            <label for="disabledTextInput">No Peserta</label>
            <!-- pesan error -->
            <small class="error-text sr-only" id="spanError"></small>

            <input type="text" id="NoPeserta" class="form-control">
            <small class="text-muted">
              Ikuti pola penulisan nomor peserta
              <i
              id = "myPopOver"
              class="fa fa-info-circle"
              aria-hidden="true"
              type="button" class="" data-toggle="popover" title="" data-content=""
              ></i>
            </small>
          </div>
          <div class="form-group">
            <label for="disabledTextInput">Nama Panggilan</label>
            <input type="text" id="NamaPanggilan" class="form-control">

          </div>
          <fieldset id="fieldId" disabled>

            <div class="form-group">
              <label for="disabledTextInput">Nama</label>
              <input type="text" id="NamaSiswa" class="form-control">
            </div>

            <div class="row">
              <div class="form-group col-6">
                <label for="disabledTextInput">Nama Ayah</label>
                <input type="text" id="NamaAyah" class="form-control">
              </div>

              <div class="form-group col-6">
                <label for="disabledTextInput">Nama Ibu</label>
                <input type="text" id="NamaIbu" class="form-control">
              </div>
            </div>

            <div class="row">
              <div class="form-group col-6">
                <label for="disabledTextInput">Np Hp Ayah </label>
                <input type="text" id="HpAyah" class="form-control">
              </div>

              <div class="form-group col-6">
                <label for="disabledTextInput">No Hp Ibu</label>
                <input type="text" id="HpIbu" class="form-control">
              </div>
            </div>

            <div class="row">
              <div class="form-group col-6">
                <label for="disabledTextInput">Email Ayah</label>
                <input type="text" id="EmailAyah" class="form-control">
              </div>

              <div class="form-group col-6">
                <label for="disabledTextInput">Email Ibu</label>
                <input type="text" id="EmailIbu" class="form-control">
              </div>
            </div>
            <div class="form-group">
            </div>
            <button id="btnKoreksi" type="submit" class="btn btn-primary sr-only">Submit</button>
          </fieldset>

          <div class="form-check mt-3">
            <input id="isWrong" class="form-check-input" type="checkbox">
            <label class="form-check-label" for="isWrong">
              Ada kesalahan
            </label>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button id="modalBtn" type="button" class="btn btn-primary">Print dan Kirim Email</button>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="javascript.js"></script>
<script>

</script>
</body>

</html>
