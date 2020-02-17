<?php

require ("../../../advance.php");

if (isJobDefined ($_COOKIE['id'],'uks')){
    header ("location: error.php");
}
include ("control.php");




?>