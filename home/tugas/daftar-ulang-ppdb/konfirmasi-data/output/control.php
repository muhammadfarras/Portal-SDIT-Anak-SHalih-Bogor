<?php
include ("modal.php");


// jika yang dipilih adalah download as pdf


if (!empty($_GET['no_id']) && isset ($_GET['no_id'])){

  /*--------------*/
  $tp = "2021/2022";
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

        // check apakah ada 4 array atau tidak jika diexploda
        if (count($arrNoPeserta) !== 4){
          print_r (json_encode(array("status"=>"0","text"=>"Kode peserta salah")));
          exit();
        }
        // check apakah L atau P
        if (!($arrNoPeserta[1] == "L" || $arrNoPeserta[1] == "P" )) {
          print_r (json_encode(array("status"=>"0","text"=>"Kode peserta salah Jenis Kelamin")));
          exit();
        }

        if ($arrNoPeserta[3] !== $tp) {
          print_r (json_encode(array("status"=>"0","text"=>"Kode peserta salah Pada tahun")));
          exit();
        }

        // check apakah no pserta sudah terdafatare
        if ($siswa->isRegistered($noPeserta)->num_rows  == 1){
          print_r (json_encode(array("status"=>"0","text"=>"No peserta sudah terdaftar")));
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
