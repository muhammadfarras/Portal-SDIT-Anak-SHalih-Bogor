<!DOCTYPE html>

<html>
<head>
    <title>Validasi Pendaftaran</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body id="body">
  
  <div class="container confirm">
    <h3>Masukan Kode Pendaftaran</h3>
    <input type="text" id="validasi" autocomplete="off" maxlength=8>
    
    <input style="display: none" id="0" value="<?php echo $data[0]?>">
    <input style="display: none" id="1" value="<?php echo $data[1]?>">
    <input style="display: none" id="2" value="<?php echo $data[2]?>">
    <input style="display: none" id="3" value="<?php echo $data[3]?>">
    <input style="display: none" id="4" value="<?php echo $data[4]?>">
    <span id="kode" style="display: none"><?php echo md5 ($data[6]);?></span>
    <!-- <p><em>Kode pendaftaran dikirim ke email <b><?php echo $data[3]?></b></em></p> -->
  </div>
  <script src="javascript.js"></script>
  <script>
    checkKode ();
  </script>
</body>
</html>
