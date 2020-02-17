<?php

require ("../../../../advance.php");
print_r ($_COOKIE);
if (isJobDefined ($_COOKIE['id'],"registrasi ppdb")){
    header ("location: error.php");
}

include ("control.php");




?>