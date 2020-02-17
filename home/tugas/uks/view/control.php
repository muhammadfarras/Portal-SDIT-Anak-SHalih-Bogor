<?php
    // jika tidak ada cookie then out
    isCookieSet();
    
    include ("modal.php");
    
    $biodata = getDetailBiodata ($_GET['data']);
    $goldar = getGoldar ($_GET['data']);
    $berat = getWeight ($_GET['data']);
    $tinggi = getHeight ($_GET['data']);
    $kelas = getClass ($_GET['data']);
    $ayah = getAyah ($_GET['data']);
    $kesehatan = getHisKes ($_GET['data']);
    if ($biodata->num_rows != 0 ){
        
        $biodata = mysqli_fetch_assoc ($biodata);
        $goldar = mysqli_fetch_assoc ($goldar);
        $berat = mysqli_fetch_assoc ($berat);
        $tinggi = mysqli_fetch_assoc ($tinggi);
        $kelas = mysqli_fetch_assoc ($kelas);
        $ayah = mysqli_fetch_assoc ($ayah);
            
        include ("view.php");
    }
    else {
        header ("location: error.php");
    }
    
    
?>