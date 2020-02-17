<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="body">
  <a id="exit" href="../../index.php">
    Home
  </a>
  <div class="container">
    
    <form action="" method="post">
      <input list="peserta" name="nama_user" autocomplete="off" type="text">
      <datalist id="peserta">
        <?php
          $mysqli = getList();
         
          while ($data = mysqli_fetch_assoc ($mysqli)){
            
            echo "<option value=$data[id]>$data[nama_depan] $data[nama_belakang]</option>";
            
          }
        ?>
      </datalist>
      <input id="find" type="submit" name="find">
    </form>
  </div>
  
</body>
</html>
