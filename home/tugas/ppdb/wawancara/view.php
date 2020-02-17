<html>
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="javascript.js"></script>
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
