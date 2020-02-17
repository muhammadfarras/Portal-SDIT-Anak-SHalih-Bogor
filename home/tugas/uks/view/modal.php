<?php    
    
    /*
     * Get detail siswa
     * Agumen pertama adalah nis
    */
    function getDetailBiodata ($idsiswa) {
        $connect = $GLOBALS['connect'];
        $query = "SELECT * FROM base_data_siswa WHERE nis = '$idsiswa'";
        $mysqli = mysqli_query ($connect,$query);
        return $mysqli;
    }
    
    /*
     * Get detail siswa kondisi darah
     * Agumen pertama adalah nis
    */
    function getGoldar ($idsiswa) {
        $connect = $GLOBALS['connect'];
        $query = "SELECT * FROM uks_goldar WHERE nis = '$idsiswa'";
        $mysqli = mysqli_query ($connect,$query);
        return $mysqli;
    }
    
    /*
     * Get detail siswa tinggi badan
     * Agumen pertama adalah nis
    */
    function getHeight ($idsiswa) {
        $connect = $GLOBALS['connect'];
        $query = "SELECT * FROM uks_his_tinggi_badan WHERE nis = '$idsiswa' ORDER BY no DESC";
        $mysqli = mysqli_query ($connect,$query);
        return $mysqli;
    }
    
    /*
     * Get detail siswa berat badan
     * Agumen pertama adalah nis
    */
    function getWeight ($idsiswa) {
        $connect = $GLOBALS['connect'];
        $query = "SELECT * FROM uks_his_berat_badan WHERE nis = '$idsiswa' ORDER BY no DESC";
        $mysqli = mysqli_query ($connect,$query);
        return $mysqli;
    }
    
    /*
     * Get detail siswa kelas
     * Agumen pertama adalah nis
    */
    function getClass ($idsiswa) {
        $connect = $GLOBALS['connect'];
        $query = "SELECT * FROM base_data_kelas WHERE nis = '$idsiswa'";
        $mysqli = mysqli_query ($connect,$query);
        return $mysqli;
    }
    
    /*
     * Get detail siswa ayah
     * Agumen pertama adalah nis
    */
    function getAyah ($idsiswa) {
        $connect = $GLOBALS['connect'];
        $query = "SELECT * FROM base_data_ayah WHERE nis = '$idsiswa'";
        $mysqli = mysqli_query ($connect,$query);
        return $mysqli;
    }
    
    function bmi ($tinggi,$berat){
        $result = ($berat/(pow(($tinggi/100),2)));
        
        if ($result < 18.5) {
            return "Kurang berat badan";
        }
        elseif ($result >= 18.5 && $result <= 24.9) {
            return "Normal (Ideal)";
        }
        elseif ($result >= 25 && $result <= 29.9) {
            return "Kelebihan berat badan";
        }
        elseif ($result > 30 ) {
            return "Kegemukan (Obesitas)";
        }
        
        
    }
    
    function getHisKes ($nis){
        $connect = $GLOBALS['connect'];
        $query = "SELECT * FROM uks_his_pemeriksaan WHERE nis = '$nis' ORDER BY waktu DESC";
        $mysqli = mysqli_query ($connect,$query);
        return $mysqli;
    }
    
?>