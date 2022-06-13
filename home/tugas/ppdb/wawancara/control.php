<?php
    isCookieSet();

    include ("modal.php");
    include ("view.php");

    $resultGFAPI = new GravityFormApi();


    if (!empty ($_POST['find'])){
        $data = getDetail (setGoodMysqliOne ($_POST['nama_peserta']));

        if ($data->num_rows != 0 ){
            $biodata = mysqli_fetch_assoc (getBiodataFromIdRaw ($_COOKIE['id']));
            $detail = mysqli_fetch_assoc (getDetail (setGoodMysqliOne ($_POST['nama_peserta'])));
            $result = mysqli_fetch_assoc (getInterview ($detail['no_peserta']));

            $namaPanjang = $detail["nama_panjang"];

            $hasil_kontribusi = $resultGFAPI->getResultByName($namaPanjang);
            $hasil_kekayaan = $resultGFAPI->getwealthinessByName($namaPanjang);
            $hasil_persaudaraan = $resultGFAPI->getSiblingsByName($namaPanjang);

            include ("view-detail.php");
        }
    }

    if (!empty ($_POST['wawancara'])){
        setValueInterview ($_POST['no_peserta'],$_POST['pewawancara'],$_POST['satu'],$_POST['dua'],$_POST['tiga'],$_POST['empat'],$_POST['lima']
                           ,$_POST['enam'],$_POST['tujuh'],$_POST['delapan'],$_POST['sembilan'],$_POST['sepuluh'],$_POST['sebelas'],$_POST['duabelas']);

        setTextInterview ($_POST['no_peserta'],$_POST['pewawancara'],$_POST['text-satu'],$_POST['text-dua'],$_POST['text-tiga'],$_POST['text-empat']
                               ,$_POST['text-lima'],$_POST['text-enam'],$_POST['text-tujuh'],$_POST['text-delapan'],$_POST['text-sembilan']
                               ,$_POST['text-sepuluh'],$_POST['text-sebelas'],$_POST['text-duabelas']);

        setWawancara ($_POST['no_peserta']);


        // echo "<pre>";
        //     print_r ($_POST);
        // echo "</pre>";
    }

?>
