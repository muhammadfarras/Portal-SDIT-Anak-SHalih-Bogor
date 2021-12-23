<?php
/*----------------------*/
$tp = "2022-2023";
/*----------------------*/
    function callPerserta () {
        $connect = $GLOBALS['connect'];
        $tp = $GLOBALS['tp'];

        $query = "SELECT * FROM ppdb_peserta WHERE ishadir = 'ok' AND wawancara = '' AND tp = '$tp' ORDER BY hadir ASC";
        $mysqli = mysqli_query ($connect,$query);

        return $mysqli;
    }

?>
