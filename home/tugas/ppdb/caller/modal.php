<?php

    function callPerserta () {
        $connect = $GLOBALS['connect'];

        $query = "SELECT * FROM ppdb_peserta WHERE ishadir = 'ok' AND wawancara = '' AND tp = '2020-2021' ORDER BY hadir ASC";
        $mysqli = mysqli_query ($connect,$query);

        return $mysqli;
    }

?>
