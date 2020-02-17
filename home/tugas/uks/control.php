<?php
    // jika tidak ada cookie then out
    isCookieSet();
    
    include ("modal.php");
    include ("view.php");
    
    
    if (isset($_POST['find'])) {
        
        if (strlen ( $_POST['nama_siswa'] ) > 2 ){
            $_POST = setGoodMysqli ($_POST);
            $data = getList ($_POST['nama_siswa']);
            
            if ($data->num_rows != 0){
                
                include ("view-detail.php");
                
            }
            else {
                echo "<div class='errorpage'>data yang dicari tidak ada</div>";
            }
            
            
        }
        else {
            echo "<div class='errorpage'>data yang dicari tidak ada</div>";
        }
        
    }
    
?>