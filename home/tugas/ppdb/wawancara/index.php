<?php

require ("../../../../advance.php");
if (isJobDefined ($_COOKIE['id'],"wawancara ppdb")){
    header ("location: error.php");
}
include ("control.php");


?>