<?php

require ("../../../../advance.php");
require ("GravityFormApi.php");
if (isJobDefined ($_COOKIE['id'],"wawancara ppdb")){
    header ("location: error.php");
}
include ("control.php");





?>