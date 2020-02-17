<?php
require ("advance.php");
if(!empty ($_GET['email-terdaftar'])){
    
    if ( isEmailRegistered ($_GET['email']) ){
        echo "Tidak terdaftar";
    }
    
}

if (!empty ($_GET['email-pass'])){
    
    if (!isEmailAndPasswordRegistered ($_GET['email'],$_GET['password'])){
        echo "password salah";
    }
    
    
}



?>