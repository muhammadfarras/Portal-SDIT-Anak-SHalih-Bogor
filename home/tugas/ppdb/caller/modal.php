<?php
    
    function callPerserta () {
        $connect = $GLOBALS['connect'];
        
        $query = "SELECT * FROM ppdb_peserta WHERE ishadir = 'ok' AND wawancara = '' ORDER BY hadir ASC";
        $mysqli = mysqli_query ($connect,$query);
        
        return $mysqli;
    }

?>