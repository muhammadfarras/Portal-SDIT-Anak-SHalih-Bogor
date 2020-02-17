<?php
require ("../advance.php");
include ("modal.php");

if (empty ($_POST)){
  
  include ("view.php");
  
}
else {
  $data = setGoodArrayAndGoodMysql ($_POST);
  include ("email.php");
  include ("confirm.php");
}



?>