<?php
include ("modal.php");


// jika yang dipilih adalah download as pdf


if (!empty($_GET['no_id']) && isset ($_GET['no_id'])){

  /*--------------*/
  $tp_check = $_ENV["tahun_ppdb_check"];
  /*--------------*/
  // array nama peserta
    $noPeserta = $_GET['no_peserta'];
    $arrNoPeserta = explode ("-",$noPeserta);


  // Nama Panggilan Peserta
    $namaPanggilanPeserta = $_GET['nama_panggilan'];

  // Objeck Class Calon Siswa
    $siswa = new CalonSiswa ($_GET['no_id']);


    if ($siswa->getDataCalonSiswa()->num_rows > 0 ){

        $data = mysqli_fetch_assoc($siswa->getDataCalonSiswa ());
        // print_r ($data);

        /* ------------------------ Kebijakan corona -----------------*/
        // check apakah ada 5 array atau tidak jika diexploda
        if ($_ENV["apakah_kelompok"] == "yes"){
          /* ------------------------ Kebijakan corona -----------------*/
          if (count($arrNoPeserta) !== 5){
            print_r (json_encode(array("status"=>"0","text"=>"Kode peserta salah tolong ikuti pola yang benar.")));
            exit();
          }
  
          switch ($arrNoPeserta [4]) {
            case 'I':
              $waktuTest = "Senin, 13 Desember 2021";
            break;
  
            case 'II':
            $waktuTest = "Senin, 13 Desember 2021";
            break;
  
            case 'III':
              $waktuTest = "Selasa, 14 Desember 2021";
            break;
  
            case 'IV':
              $waktuTest = "Selasa, 14 Desember 2021";
            break;
  
            case 'V':
            $waktuTest = "Rabu, 15 Desember 2021";
            break;
  
            case 'VI':
            $waktuTest = "Rabu, 15 Desember 2021";
            break;
  
            case 'VII':
            $waktuTest = "Kamis, 16 Desember 2021";
            break;
  
            case 'VIII':
            $waktuTest = "Kamis, 16 Desember 2021";
            break;
  
            case 'IX':
            $waktuTest = "Jum'at, 17 Desember 2021";
            break;
  
            case 'X':
            $waktuTest = "Jum'at, 17 Desember 2021";
            break;
  
            case 'XI':
              $waktuTest = "Jum'at, 17 Desember 2021";
              break;
  
            case 'XII':
              $waktuTest = "Sabtu, 21 Mei 2022";
              break;
  
  
            default:
              print_r (json_encode(array("status"=>"0","text"=>"No Kelompok Salah")));
              exit();
              break;
          }
          /* ------------------------ Kebijakan corona -----------------*/
        }
        else {
          // jika tidak berkelompok
          if (count($arrNoPeserta) !== 4){
            print_r (json_encode(array("status"=>"0","text"=>"Kode peserta salah tolong ikuti pola yang benar.")));
            exit();
          }
        }
        

        // check apakah L atau P
        if (!($arrNoPeserta[1] == "L" || $arrNoPeserta[1] == "P" )) {
          print_r (json_encode(array("status"=>"0","text"=>"Kode peserta salah Jenis Kelamin")));
          exit();
        }

        if ($arrNoPeserta[3] !== $tp_check) {
          print_r (json_encode(array("status"=>"0","text"=>"Kode peserta salah Pada tahun")));
          exit();
        }

        


        // check apakah no pserta sudah terdafatare
        $noPesertaTanpaKelompok = $arrNoPeserta[0]."-".$arrNoPeserta[1]."-".$arrNoPeserta[2]."-".$arrNoPeserta[3];
        if ($siswa->isRegistered($noPesertaTanpaKelompok)->num_rows  == 1){
          print_r (json_encode(array("status"=>"0","text"=>"No peserta sudah terdaftar")));
          exit();
        }

        //Validate alamat email
        if (!validateAddress($data['email_ayah'])) {
          print_r (json_encode(array("status"=>"0","text"=>"Email ayah tidak benar")));
          exit();
        }

        if (!validateAddress($data['email_ibu'])){
          print_r (json_encode(array("status"=>"0","text"=>"Email ibu tidak benar")));
          exit();
        }

        // Update database PPDB Peserta
          // Update calon ppdb_peserta_sementara
          /* Jika hasilnya 1 maka sudah terupdate*/
          if($siswa->updateCalonPesertaSementara()  != 1){
            print_r (json_encode(array("status"=>"0","text"=>"Kesalahan pada Add Update Calon Peserta Sementara")));
            exit();
          }

          // print_r($siswa->addDataPPDBPeserta($data['tp'],$noPeserta,$arrNoPeserta[1],$data['nama'],$namaPanggilanPeserta));
          //
          // Add data ke ppdb_peserta
          if ($siswa->addDataPPDBPeserta($data['tp'],$noPeserta,$arrNoPeserta[1],$data['nama'],$namaPanggilanPeserta) != 1){
            print_r (json_encode(array("status"=>"0","text"=>"Kesalahan pada Add Data PPDB Peserta")));
            exit();
          }
          //
          // // Add data ke ppdb_nilai_wawancara
          if($siswa->addDataWawancara($noPeserta,$data['tp'])  != 1){
            print_r (json_encode(array("status"=>"0","text"=>"Kesalahan pada Add Data PPDB Peserta Data Wawancara")));
            exit();
          }

          // // Add data ke ppdb_text_wawancara
          if($siswa->addDataWawancaraNilai($noPeserta,$data['tp']) != 1) {
            print_r (json_encode(array("status"=>"0","text"=>"Kesalahan pada Add Data PPDB Peserta Nilai")));
            exit();
          }



        // Kirim ke email
        include("view.php");
        include("pdf-email.php");
        /* pesan berhasil ada di pdf-email.php */



        }



}

?>
