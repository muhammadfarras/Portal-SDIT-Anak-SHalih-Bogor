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


    if ($siswa->getDataCalonSiswaTkit()->num_rows > 0 ){

        $data = mysqli_fetch_assoc($siswa->getDataCalonSiswaTkit ());
        // print_r ($data);

        /* ------------------------ Kebijakan corona bagi tkit tidak ada -----------------*/
        // check apakah ada 5 array atau tidak jika diexploda
        if (count($arrNoPeserta) !== 4){
          print_r (json_encode(array("status"=>"0","text"=>"Kode peserta salah tolong ikuti pola yang benar.")));
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

        /* ------------------------ Kebijakan corona -----------------*/
        $noUrut = (int)$arrNoPeserta[0];
        switch (true) {
          case ($noUrut >= 1 and $noUrut <=10):
            $waktuTest = "07:30 - 08:30 WIB";
            break;
          case ($noUrut >= 11 and $noUrut <=20):
            $waktuTest = "08:30 - 09:30 WIB";
            break;
          case ($noUrut >= 21 and $noUrut <=30):
            $waktuTest = "09:30 - 10:30 WIB";
            break;
          case ($noUrut >= 31 and $noUrut <=40):
            $waktuTest = "10:30 - 11:30 WIB";
            break;

          default:
          print_r (json_encode(array("status"=>"0","text"=>"Kode peserta salah Pada no Urut")));
          exit();
            break;
        }
        // check apakah no pserta sudah terdafatare
        $noPesertaTanpaKelompok = $arrNoPeserta[0]."-".$arrNoPeserta[1]."-".$arrNoPeserta[2]."-".$arrNoPeserta[3];
        if ($siswa->isRegisteredTkit($noPesertaTanpaKelompok,"TKIT-AE")->num_rows  == 1){
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
          if($siswa->updateCalonPesertaSementaraTkit("TKIT-AE")  != 1){
            print_r (json_encode(array("status"=>"0","text"=>"Kesalahan pada Add Update Calon Peserta Sementara")));
            exit();
          }

          // print_r($siswa->addDataPPDBPeserta($data['tp'],$noPeserta,$arrNoPeserta[1],$data['nama'],$namaPanggilanPeserta));
          //
          // Add data ke ppdb_peserta
          if ($siswa->addDataPPDBPesertaTkit($data['tp'],$noPeserta,$arrNoPeserta[1],$data['nama'],$namaPanggilanPeserta,"TKIT-AE") != 1){
            print_r (json_encode(array("status"=>"0","text"=>"Kesalahan pada Add Data PPDB Peserta")));
            exit();
          }
          //
          // // Add data ke ppdb_nilai_wawancara
          if($siswa->addDataWawancaraTkit($noPeserta,$data['tp'],"TKIT-AE")  != 1){
            print_r (json_encode(array("status"=>"0","text"=>"Kesalahan pada Add Data PPDB Peserta Data Wawancara")));
            exit();
          }

          // // Add data ke ppdb_text_wawancara
          if($siswa->addDataWawancaraNilaiTkit($noPeserta,$data['tp'],"TKIT-AE") != 1) {
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
