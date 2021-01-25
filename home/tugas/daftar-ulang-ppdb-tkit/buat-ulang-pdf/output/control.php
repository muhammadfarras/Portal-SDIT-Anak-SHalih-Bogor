<?php
include ("modal.php");


// jika yang dipilih adalah download as pdf


if (!empty($_GET['no_id']) && isset ($_GET['no_id'])){

  /*--------------*/
  $tp = "2021/2022";
  /*--------------*/
  // array nama peserta
    $noPeserta = setGoodMysqliOne ($_GET['no_id']);
    $arrNoPeserta = explode ("-",$noPeserta);
    // $arrNoPeserta = $noPeserta[0]."-".$noPeserta[1]."-".$noPeserta[2];
    // print_r (json_encode(array("status"=>"0","text"=>$arrNoPeserta)));
    // exit();

  // Objeck Class Calon Siswa
    $siswa = new CalonSiswaUlang ($noPeserta);

    if ($siswa->getDataCalonSiswa()->num_rows > 0 ){


      switch ($arrNoPeserta [4]) {
          case 'I':
            $waktuTest = "Senin, 4 Januari 2021";
          break;

          case 'II':
          $waktuTest = "Senin, 4 Januari 2021";
          break;

          case 'III':
            $waktuTest = "Selasa, 5 Januari 2021";
          break;

          case 'IV':
            $waktuTest = "Selasa, 5 Januari 2021";
          break;

          case 'V':
          $waktuTest = "Rabu, 6 Januari 2021";
          break;

          case 'VI':
          $waktuTest = "Rabu, 6 Januari 2021";
          break;

          case 'VII':
          $waktuTest = "Kamis, 7 Januari 2020";
          break;

          case 'VIII':
          $waktuTest = "Kamis, 7 Januari 2020";
          break;

          case 'IX':
          $waktuTest = "Jum'at, 8 Januari 2020";
          break;

          case 'X':
          $waktuTest = "Jum'at, 8 Januari 2020";
          break;


          default:
            print_r (json_encode(array("status"=>"0","text"=>"No Kelompok Salah")));
            exit();
            break;
        }
        $nama = mysqli_fetch_assoc ($siswa->getDataCalonSiswa());
        // take email form peserta sementaran
        $data = mysqli_fetch_assoc ($siswa->getEmail($nama['nama_panjang']));
        // Kirim ke email
        include("view.php");
        include("pdf-email.php");
        /* pesan berhasil ada di pdf-email.php */


        }
}
else {
  print_r (json_encode(array("status"=>"0","text"=>"Kesalahan pada nomor peserta")));
  exit();
}

?>
