<!DOCTYPE html>

<html>
<head>
    <title>Login SDIT Anak Shalih Bogor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body id="body">
  <div class="container">
    <form action="" method="post">
      <p>
        <span>Email <span id="warn-email" class="warn email"></span></span>
        <br>
        <input name="email" id="email" type="text" placeholder="Email antum" autocomplete="off">
        
      </p>
      <p>
        <span>Password <span id="warn-password" class="warn password"></span></span>
        <br>
        <input name="password" id="password" type="password" placeholder="Password antum">
      </p>
      <p>
        <input name="submit" id="submit" type="submit" value="Login">
      </p>
      <address>Berlum terdaftar ? <a id="daftar">Daftarkan email antum</a></address>
    </form>
  </div>
  <script src="javascript.js"></script>
  <script>
    isSubmitOk ();
    checkEmpty ();
    daftarEmail();
    isEmailRegistered ();
    isEmailAndPassRegistered ();
  </script>
</body>
</html>
