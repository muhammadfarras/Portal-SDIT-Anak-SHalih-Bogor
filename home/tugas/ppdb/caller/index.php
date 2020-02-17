<?php

require ("../../../../advance.php");
if (isJobDefined ($_COOKIE['id'],"pemanggil peserta")){
    header ("location: error.php");
}
include ("control.php");



?>