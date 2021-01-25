<?php

require ("../../../../advance.php");

if (isJobDefined ($_COOKIE['id'],'Rekap PPDB')){
    header ("location: error.php");
}
include ("control.php");




?>
