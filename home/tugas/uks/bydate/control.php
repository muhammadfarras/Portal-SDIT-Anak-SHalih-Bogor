<?php
    // jika tidak ada cookie then out
    isCookieSet();
    
    include ("modal.php");
    include ("view.php");
    
    
    if (isset($_POST['find'])) {
        
        if (strlen ( $_POST['waktu'] ) > 2 ){
            $time = date ("Y-m-d",strtotime($_POST['waktu']));
            $data = getTimeKes ($time);
            
            if ($data->num_rows != 0){
                
                include ("view-detail.php");
                
            }
            else {
                echo "<div class='errorpage'>Pada ". setGoodDate ( $_POST['waktu'] )." tidak catatan.</div>";
            }
            
            
        }
        else {
            echo "<div class='errorpage'>data yang dicari tidak ada</div>";
        }
        
    }
    
?>