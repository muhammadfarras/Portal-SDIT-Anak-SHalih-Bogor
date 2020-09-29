<?php

require ("../../../../advance.php");


$myArray = json_decode ($_GET['data']);
$result = setGoodMysqli ($myArray);


// save to mysqli

print_r($result);
 ?>
