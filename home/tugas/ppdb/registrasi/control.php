<?php
    // jika tidak ada cookie then out
    isCookieSet();
    include ("modal.php");
    include ("view.php");
    
    if (!empty ($_POST['find'])){
        $data = getDetail ($_POST['nama_peserta']);
        
        
        if ($data->num_rows != 0 ){
            $detail = mysqli_fetch_assoc (getDetail ($_POST['nama_peserta']));
            include ("view-detail.php");
        }
    }
    
    if (!empty($_POST['hadir'])){
        
        updateHadir ($_POST['hadir']);
        
        if (mysqli_affected_rows ($connect)){
            echo "<h3>daftar hadir terupdate, syukran</h3>";
        }
        else {
            echo "<h3>Peserta sudah hadir</h3>";
        }
    }
    
    
?>