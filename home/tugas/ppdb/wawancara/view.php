<?php
error_reporting(E_ERROR | E_PARSE);


?>
<html>
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="javascript.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body id="body">
  <a id="exit" href="../../../index.php">
    Home
  </a>
  <div class="container">
    
    <form class="find" action="" method="post">
      <input list="peserta" name="nama_peserta" autocomplete="off" type="text">
      <datalist id="peserta">
        <?php
          $mysqli = getList();
         
          while ($data = mysqli_fetch_assoc ($mysqli)){
            
            echo "<option>$data[nama_panjang]</option>";
            
          }
        ?>
      </datalist>
      <input id="find" type="submit" name="find">
    </form>
  </div>
</body>
</html>
