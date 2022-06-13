<!DOCTYPE html>

<html>
<head>
    <title>Login SDIT Anak Shalih Bogor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fa/css/font-awesome.min.css">


    <!-- <link rel="stylesheet" href="http://192.168.1.201/assets/css/bootstrap.min.css">
    <script src="http://192.168.1.201/assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="http://192.168.1.201/assets/jquery-3.5.1.slim.min.js" type="text/javascript"></script> -->
    <!-- <script src="https://unpkg.com/@popperjs/core@2" type="text/javascript"></script> -->

    <!-- <script src="http://192.168.1.201/assets/popper.min.js" type="text/javascript"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->


<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">



      var onloadCallback = function() {
        console.log ("run call back");
        grecaptcha.render('html_element', {
          'sitekey' : '6Ld3iNcZAAAAAABbW27rpJJq1lmjLgbBDwnhpmsK',
          'theme' : 'light',
          'callback' : 'verifyCallback'
        });
      };


    </script>
</head>
<body id="body">
  <div class="container p-5 mt-5 bg-light rounded">
    <h1 class="display-4 mt-5 mb-3">SDIT Anak Shalih Bogor</h1>
    <form action="" method="post">
        <div class="col-auto mt-3">
          <!-- <span class="badge badge-pill badge-primary mb-2" id="warn-email" class="warn email"></span> -->
          <label class="sr-only" for="inlineFormInputGroup">Username</label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i>&nbsp</div>
            </div>
            <input name="email" type="text" class="form-control" id="email" placeholder="Email" autocomplete="off">
          </div>
        </div>

        <div class="col-auto mt-3">
          <!-- <span class="badge badge-pill badge-primary mb-2" id="warn-password" class="warn password"></span> -->
          <label class="sr-only" for="inlineFormInputGroup">Password</label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></div>
            </div>
            <input name="password" type="password" class="form-control" id="password" placeholder="Password" autocomplete="off">
          </div>
        </div>
      <div class="col-auto mt-3">

              <!-- Ini ada re captcha -->
              <div id="html_element" class="mb-3"></div>

        <input class="btn btn-outline-success" name="submit" id="submit" type="submit" value="Login">



<table class="table table-sm w-25 mt-2">
  <tbody>
    <tr><td><small class="text-muted">Email</small></td>
      <td><span class="mb-2" id="warn-email" class="warn email"><?php echo "&#33;" ?></span></td>
    </tr>

    <tr><td><small class="text-muted">Password</small></td>
      <td><span class="mb-2" id="warn-password" class="warn password"><?php echo "&#33;" ?></span></td>
    </tr>
    <tr><td><small class="text-muted">Validasi</small></td><td></td></tr>
  </tbody>
</table>


      </div>
      <div class="col-auto mt-3">
        <address>Berlum terdaftar ? <a id="daftar">Daftarkan email antum</a></address>
      </div>

    </form>
  </div>
  <script src="javascript.js"></script>
  <!-- <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
  </script> -->
  <script>
    var verifyCallback = function (getResponse){
      capValidation (getResponse);
    }
    // isSubmitOk ();
    checkEmpty ();
    daftarEmail();
    isEmailRegistered ();
    isEmailAndPassRegistered ();
  </script>
</body>
</html>
