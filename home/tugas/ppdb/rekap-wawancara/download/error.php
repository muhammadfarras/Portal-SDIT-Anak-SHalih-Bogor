<?php
// back to home page
function backToHomePage () {
  $no = 0;
  $flag = true;
  $muchSub = 0;

  while ($flag){

    // jika 0 kadang ada dihurup pertama
    $positionIndex = strpos ($_SERVER['SCRIPT_NAME'],"/",$no);
    if ( $positionIndex !== false){

      if ($positionIndex == 0 ){
        $no = $no + $positionIndex + 1;
        $muchSub++;
      }
      else {
        $no = $positionIndex+1;
        $muchSub++;
      }
    }
    else {
      $flag = false;
    }
  }


  return str_repeat ("../",$muchSub-3);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="javascript.js"></script>
</head>
<body id="body">
  <div class="container error">
    <h1>Ada kesalahan : <?php echo $_GET['error']; ?></h1>
    <br>
    <a href="<?php
    echo backToHomePage();
    ?>">Back to home</a>
  </div>
</body>
</html>
<pre>
</pre>
