<?php
    // jika tidak ada cookie then out
    isCookieSet();
    
    include ("modal.php");
    include ("view.php");
    
    if (!empty ($_POST['find'])){
        
        $_POST['nama_user'] = mysqli_real_escape_string ($connect,$_POST['nama_user']);  
        $data = getDetail ($_POST['nama_user']);
        
        
        if ($data->num_rows != 0 ){
            $detail = mysqli_fetch_assoc (getDetail ($_POST['nama_user'])); 
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