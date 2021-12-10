<?php
require ("../../../../advance.php");

$query = "SELECT * FROM `ppdb_peserta` WHERE tp = '2022-2023' AND groupId = ''";
$mysqliQuery = mysqli_query ($connect,$query);
echo mysqli_error($connect);
if (mysqli_affected_rows ($connect)){
$ikhwan = 0;
$akhwat = 0;
$kelSatu = 0;
$kelDua = 0;
$kelTiga = 0;
$kelEmpat = 0;
$kelLima = 0;
$kelEnam = 0;
$kelTujuh = 0;
$kelDelapan = 0;
$kelSembilan = 0;
$kelSepuluh = 0;


  while ($data = mysqli_fetch_assoc($mysqliQuery)) {
    // print_r ($data);

    if ($data['jenis_kelamin'] == 'Ikhwan'){
      $ikhwan++;
    }
    else {
      $akhwat++;
    }

    $kelompok = explode("-",$data['no_peserta']);
    // echo $data['no_peserta']."<br>";
    switch ($kelompok['4']) {
      case 'I':
        $kelSatu ++;
        break;
        case 'II':
          $kelDua++;
          break;
          case 'III':
            $kelTiga++;
            break;
            case 'IV':
              $kelEmpat++;
              break;
              case 'V':
                $kelLima++;
                break;
                case 'VI':
                  $kelEnam++;
                  break;
                  case 'VII':
                    $kelTujuh++;
                    break;
                    case 'VIII':
                      $kelDelapan++;
                      break;
                      case 'IX':
                        $kelSembilan++;
                        break;
                        case 'X':
                          $kelSepuluh++;
                          break;
    }

  }

  $status = "berhasil";
  $terdaftar = mysqli_affected_rows ($connect);
  $array = array(
    "Status" => "$status",
    "hasil" => "$terdaftar",
    "ikhwan" => "$ikhwan",
    "akhwat" => "$akhwat",
    "kelSatu" => "$kelSatu",
    "kelDua" => "$kelDua",
    "kelTiga" => "$kelTiga",
    "kelEmpat" => "$kelEmpat",
    "kelLima" => "$kelLima",
    "kelEnam" => "$kelEnam",
    "kelTujuh" => "$kelTujuh",
    "kelDelapan" => "$kelDelapan",
    "kelSembilan" => "$kelSembilan",
    "kelSepuluh" => "$kelSepuluh",
  );
  print_r ("[".json_encode($array)."]");
}
else {
  $array = array("Status" => "gagal","hasil" => mysqli_error($connect));
  print_r ("[".json_encode($array)."]");
}

?>
