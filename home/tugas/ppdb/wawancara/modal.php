<?php
    /*
     * Memanggil nama peserta
    */

    /* Variable untuk tahun pelajaran
     *-------------------------------
    */
    $tp = "2020-2021"; // Tahun pelajaran

    /*
     *---------------------------
    */
    function getList () {
        $connect = $GLOBALS['connect'];
        $tp = $GLOBALS['tp'];
        $query = "SELECT * FROM ppdb_peserta WHERE tp = '$tp' AND ishadir = 'ok' AND wawancara = ''";
        $mysqli = mysqli_query ($connect,$query);
        return $mysqli;
    }

    function getDetail ($namapeserta) {
        $connect = $GLOBALS['connect'];
        $tp = $GLOBALS['tp'];
        $query = "SELECT * FROM ppdb_peserta WHERE nama_panjang = '$namapeserta' AND tp = '$tp'";
        $mysqli = mysqli_query ($connect,$query);
        return $mysqli;
    }

    function getInterview ($nopeserta){
        $connect = $GLOBALS['connect'];
        $tp = $GLOBALS['tp'];
        $query = "SELECT * FROM ppdb_nilai_wawancara WHERE no_peserta = '$nopeserta'";
        $mysqli = mysqli_query ($connect,$query);
        return $mysqli;
    }

    /*
     * Set value untuk nilai interview
     * Ada 13 argumen yang harus diisi
    */
    function setValueInterview ($nopeserta,$pewawancara,$satu,$dua,$tiga,$empat,$lima,$enam,$tujuh,$delapan,$sembilan,$sepuluh,$sebelas){
        $connect = $GLOBALS['connect'];
        $pewawancara = mysqli_real_escape_string ( $connect , htmlspecialchars ( htmlentities ( strip_tags (trim ( $pewawancara ) ) ) ) );
        $query = "UPDATE ppdb_nilai_wawancara SET nilai_satu='$satu',nilai_dua='$dua',
        nilai_tiga='$tiga',nilai_empat='$empat',nilai_lima='$lima',nilai_enam='$enam',nilai_tujuh='$tujuh',
        nilai_delapan='$delapan',nilai_sembilan='$sembilan',nilai_sepuluh='$sepuluh',nilai_sebelas='$sebelas', pewawancara='$pewawancara'
        WHERE no_peserta = '$nopeserta'";

        $mysqli = mysqli_query ($connect,$query);
        return $mysqli;
    }

    function setTextInterview ($nopeserta,$pewawancara,$satu,$dua,$tiga,$empat,$lima,$enam,$tujuh,$delapan,$sembilan,$sepuluh,$sebelas){
        $connect = $GLOBALS['connect'];

        $pewawancara = mysqli_real_escape_string ( $connect , htmlspecialchars ( htmlentities ( strip_tags (trim ( $pewawancara ) ) ) ) );
        $satu = mysqli_real_escape_string ( $connect , htmlspecialchars ( htmlentities ( strip_tags (trim ( $satu ) ) ) ) );
        $dua = mysqli_real_escape_string ( $connect , htmlspecialchars ( htmlentities ( strip_tags (trim ( $dua ) ) ) ) );
        $tiga = mysqli_real_escape_string ( $connect , htmlspecialchars ( htmlentities ( strip_tags (trim ( $tiga ) ) ) ) );
        $empat = mysqli_real_escape_string ( $connect , htmlspecialchars ( htmlentities ( strip_tags (trim ( $empat ) ) ) ) );
        $lima = mysqli_real_escape_string ( $connect , htmlspecialchars ( htmlentities ( strip_tags (trim ( $lima ) ) ) ) );
        $enam = mysqli_real_escape_string ( $connect , htmlspecialchars ( htmlentities ( strip_tags (trim ( $enam ) ) ) ) );
        $tujuh = mysqli_real_escape_string ( $connect , htmlspecialchars ( htmlentities ( strip_tags (trim ( $tujuh) ) ) ) );
        $delapan = mysqli_real_escape_string ( $connect , htmlspecialchars ( htmlentities ( strip_tags (trim ( $delapan ) ) ) ) );
        $sembilan = mysqli_real_escape_string ( $connect , htmlspecialchars ( htmlentities ( strip_tags (trim ( $sembilan ) ) ) ) );
        $sepuluh = mysqli_real_escape_string ( $connect , htmlspecialchars ( htmlentities ( strip_tags (trim ( $sepuluh ) ) ) ) );
        $sebelas = mysqli_real_escape_string ( $connect , htmlspecialchars ( htmlentities ( strip_tags (trim ( $sebelas ) ) ) ) );

        $query = "UPDATE ppdb_text_wawancara SET nilai_satu='$satu',nilai_dua='$dua',
        nilai_tiga='$tiga',nilai_empat='$empat',nilai_lima='$lima',nilai_enam='$enam',nilai_tujuh='$tujuh',
        nilai_delapan='$delapan',nilai_sembilan='$sembilan',nilai_sepuluh='$sepuluh',nilai_sebelas='$sebelas', pewawancara='$pewawancara'
        WHERE no_peserta = '$nopeserta'";

        $mysqli = mysqli_query ($connect,$query);

        return $mysqli;
    }

    function setWawancara ($nopeserta){
        $connect = $GLOBALS['connect'];
        $query = "UPDATE ppdb_peserta SET wawancara = 'ok' WHERE no_peserta = '$nopeserta'";
        $mysqli = mysqli_query ($connect,$query);
        return $mysqli;
    }




?>
