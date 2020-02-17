<?php
  if (!empty ($_POST)){
        print_r ($_POST);
        if (isEmailAndPasswordRegistered ($_POST['email'],$_POST['password'])){
            
            $data = getId ($_POST['email'],$_POST['password']);
            
            setcookie ("id",$data["id"],time()+60*60*24*30*12);
            
            header ("location: home");
        
        }
    }
?>