<?php
include ("../advance.php");

if (!empty($_GET['kode-pendaftaran'])){
    echo md5($_GET['kode-pendaftaran']);
}

if (!empty ($_GET['kode-ok'])){
    if (isEmailRegistered ($_GET['email'])){
        
        saveNewUser ($_GET['email'],$_GET['password']);
        saveNewBiodate ($_GET['nama_depan'],$_GET['nama_belakang'],$_GET['telepon'],$_GET['email']);
        
        echo "oke";
        
    }
    else {
        echo "terdaftar";
    }
}

if (!empty ($_GET['is-registered'])){
    
    if (!isEmailRegistered ($_GET['email'])) {
        echo "terdaftar";
    }
    
}



?>