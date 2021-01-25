<?php

require ("../../../advance.php");

if (isJobDefined ($_COOKIE['id'],'Daftar Ulang PPDB TK')){
    header ("location: error.php");
}
include ("control.php");




?>
