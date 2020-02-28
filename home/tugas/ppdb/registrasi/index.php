<?php

require ("../../../../advance.php");
if (isJobDefined ($_COOKIE['id'],"registrasi ppdb")){
    header ("location: error.php");
}

include ("control.php");




?>