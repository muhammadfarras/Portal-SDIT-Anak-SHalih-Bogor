<?php
require ("advance.php");
if(!empty ($_GET['email-terdaftar'])){

    if ( isEmailRegistered ($_GET['email']) ){

      $newResponse  = array('status' => "ok" ,'span' => '&#x2715;' );
      $newResponse = json_encode ($newResponse);
      print_r ($newResponse);
    }
    else {
      $newResponse  = array('status' => "no" ,'span' => '&#x2713;' );
      $newResponse = json_encode ($newResponse);
      print_r ($newResponse);
    }
}

if (!empty ($_GET['email-pass'])){

    if (!isEmailAndPasswordRegistered ($_GET['email'],$_GET['password'])){
      $newResponse  = array('status' => "ok" ,'span' => '&#x2715;' );
      $newResponse = json_encode ($newResponse);
      print_r ($newResponse);
    }
    else {
      $newResponse  = array('status' => "no" ,'span' => '&#x2713;' );
      $newResponse = json_encode ($newResponse);
      print_r ($newResponse);
    }


}


// if (!empty ($_GET['response'])){
//
//   $data = array(
//               'secret' => "6Ld3iNcZAAAAAABbW27rpJJq1lmjLgbBDwnhpmsK",
//               'response' => $_GET['response']
//           );
//
//   $verify = curl_init();
//   curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
//   curl_setopt($verify, CURLOPT_POST, true);
//   curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
//   curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
//   curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
//   $response = curl_exec($verify);
//
//   print_r ($response);
// }
// else {
//   echo $_GET['response'];
// }



?>
