<!DOCTYPE html>

<html>
<head>
    <title>Login SDIT Anak Shalih Bogor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container">
    <form action="" method="post">
      <table>
        <tr>
          <td>Nama Depan</td>
          <td><span id="warn-nama-depan"></span>
            
              <input name="form[]" id="nama_depan" type="text" autocomplete="off">
          </td>
        </tr>
        <tr>
          <td>Nama Belakang</td>
          <td>
              <span id="warn-nama-belakang"></span>
              
              <input name="form[]" id="nama_belakang" type="text" autocomplete="off">
          </td>
        </tr>
        <tr>
          <td>No Telepon Genggam</td>
          <td>
              <span id="warn-nohp"></span>
              
              <input name="form[]" id="nohp" type="number" autocomplete="off">
          </td>
        </tr>
        <tr>
          <td>Email</td>
          <td>
              <span id="warn-email"></span>
              
              <input name="form[]" id="email" type="email" autocomplete="off">
          </td>
        </tr>
        <tr>
          <td>Password</td>
          <td>
              <span id="warn-pass"></span>
              
              <input name="form[]" id="password" type="password" autocomplete="off">
          </td>
        </tr>
        <tr>
          <td>Ulangi Password</td>
          <td>
              <span id="warn-pass2"> </span>
              <input name="form[]" id="password2" type="password" autocomplete="off">
          </td>
        </tr>
        <tr>
          <td colspan=2>
            <input id="submit" type="submit" value="Regiter">
          </td>
        </tr>
        
      </table>
    </form>
  </div>
  <script src="javascript.js"></script>
  <script>
    isEmailRegistered ();
    checkValidNameDepan ();
    checkValidNameBelakang ();
    checkPassword ();
    checkNumb ();
    checkEmpty ();
    checkEmail ();
  </script>
</body>
</html>
