<?php
    require_once("GravityFormApi.php");
    
    $objekApi = new GravityFormApi();
    
    
    /*
     *Nama Contoh :
     *FAISHAL SALIM ABDURRAHMAN
     *JENNA NOUREEN ZAHRA
     *HABIBI RUZAIN RAFIF
     *AISYAH SYAHIDAH
     *
     * Kode pengahasilan
     *
     * -- Ayah --
     * Pekerjaan : 642
     * Penghasilan : 897
     *
     * -- Ibu --
     * Pekerjaan : 672
     * Penghasilan : 905
     */
    echo "<pre>";
    //print_r ($objekApi->getwealthinessByName("AL AZHAR FIQR DZIKRI"));
    //print_r ($objekApi->getSiblingsByName("NUHA SYAFIQ ASKAR"));
    print_r ($objekApi);

    
    
?>