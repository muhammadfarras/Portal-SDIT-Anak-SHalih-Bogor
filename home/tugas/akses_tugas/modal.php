<?php    
    /*
     * Memanggil user guru atau walikeas
    */
    
    /*
     *---------------------------
    */
    function getList () {
        $connect = $GLOBALS['connect'];
        $tp = $GLOBALS['tp'];
        $query = "SELECT * FROM biodata";
        $mysqli = mysqli_query ($connect,$query);
        return $mysqli;
    }
    
    /*
     * Get detail peserta
     * Agumen pertama adalah nomor peserta
    */
    function getDetail ($idpeserta) {
        $connect = $GLOBALS['connect'];
        $query = "SELECT * FROM biodata WHERE id = '$idpeserta'";
        $mysqli = mysqli_query ($connect,$query);
        return $mysqli;
    }
    
    /*
     * get tugas from
    */
    function getJobDesc (){
        $connect = $GLOBALS['connect'];
        $query = "SELECT * FROM tugas";
        $mysqli = mysqli_query ($connect,$query);
        return $mysqli;
    }
    
    /*
     * is the user already have an accsess or not
     * true if has an accsess and false if opposite
    */
    function isSetJobDesc ($id,$jobdesc){
        $connect = $GLOBALS['connect'];
        $query = "SELECT * FROM akses_tugas WHERE id = '$id' AND deskripsi = '$jobdesc'";
        $mysqli = mysqli_query ($connect,$query);
        return $mysqli;
    }
    
?>