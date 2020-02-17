<?php
    // jika tidak ada cookie then out
    isCookieSet();
    
    include ("modal.php");
    
    $biodata = getDetailBiodata ($_GET['data']);

    $kelas = getClass ($_GET['data']);
    

    if ($biodata->num_rows != 0 ){
        
        $biodata = mysqli_fetch_assoc ($biodata);
        
        $kelas = mysqli_fetch_assoc ($kelas);

        include ("view.php");
    }
    else {
        header ("location: error.php");
    }
    
    
?>