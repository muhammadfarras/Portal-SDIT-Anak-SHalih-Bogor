<?php
    /*
     * Memanggil nama peserta
    */

    /* Variable untuk tahun pelajaran
     *-------------------------------
    */
    $tp = $_ENV["tahun_ppdb"]; // Tahun pelajaran

    /*
     *---------------------------
    */
    function getList () {
        $connect = $GLOBALS['connect'];
        $tp = $GLOBALS['tp'];
        $query = "SELECT * FROM ppdb_peserta WHERE tp = '$tp'";
        $mysqli = mysqli_query ($connect,$query);
        return $mysqli;
    }

    /*
     * Get detail peserta
     * Agumen pertama adalah nomor peserta
    */
    function getDetail ($namapeserta) {
        $connect = $GLOBALS['connect'];
        $tp = $GLOBALS['tp'];
        $namapeserta = setGoodMysqliOne ($namapeserta);
        $query = "SELECT * FROM ppdb_peserta WHERE nama_panjang = '$namapeserta' AND tp = '$tp'";
        $mysqli = mysqli_query ($connect,$query);
        return $mysqli;
    }

    /*
     * Update peserta hadir time stamp
     * click daftar maka dia hadir
     * membutuhkan satu argumen 'no peserta'
     * nilai kembalian sql query update
    */
    function updateHadir ($nopeserta){
        $connect = $GLOBALS['connect'];
        $tp = $GLOBALS['tp'];
        $query = "UPDATE ppdb_peserta SET ishadir = 'ok' WHERE no_peserta = '$nopeserta' AND tp = '$tp'";
        $mysqli = mysqli_query ($connect,$query);
        return $mysqli;
    }


?>
