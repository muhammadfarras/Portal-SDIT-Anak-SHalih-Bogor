<?php

require ("../../../../advance.php");
isCookieSet();
if (isJobDefined ($_COOKIE['id'],'Daftar Ulang PPDB TK')){
    header ("location: error.php?error=Akses tugas tidak ada");
}
include ("control.php");




?>
