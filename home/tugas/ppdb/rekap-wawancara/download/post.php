<?php

require ("../../../../advance.php");
require ("ShowList.php");
require ("../catat-data/DataBaseUpdate.php");

$dataGet =  ($_GET['data']);
$type = $_GET['type'];

switch ($type) {
  case 'list':
      $result = setGoodMysqliOne ($dataGet);
      $data = new FindDb ($result,$connect);

      if ($data->isFindFromDb()){
        // echo $array = json_encode (array (1));
        $data->showFind();
      }
      else {
      echo $array = json_encode ( array (0));

      }
      break;

    case 'modal':
      $result = setGoodMysqliOne ($dataGet);
      $data = new FindDb ($result,$connect);
      $data->showFetchAssoc ();
      break;

      case 'modal-update':
      $id = $_GET['id'];
      $myArray = json_decode ($_GET['data']);
      $result = setGoodMysqli ($myArray);
      $data = new DataBaseUpdate ($result,"2021-2022",$connect);

      if ($data->isDbupdated($id)){
        echo "berhasil";
      }
      else {
        echo "gagal";
      }
      break;

  default:
    // code...
    break;
}

 ?>
