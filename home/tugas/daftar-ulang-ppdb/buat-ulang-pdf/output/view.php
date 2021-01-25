<?php
    ob_start();
    $fileStroge = md5(md5(time()));
    include ("qr.php");
     if (!file_exists ("imageqr/$fileStroge.png")){
             // Barcode Objet
             $qr = new QR_BarCode();
             $qr->text ($data['nama']."-".$noPeserta);
             $qr->qrCode(500,'imageqr/'.$fileStroge.'.png');
       }

       // reduce kemungkina file png salah
      // sleep (2);

//       $fileStroge = md5(md5(time()));
//       include ("qr.php");
//        if (!file_exists ("imageqr/$fileStroge.png")){
//                // Barcode Objet
//                $qr = new QR_BarCode();
//                $qr->text ("Hilyah Ma'ruf"."-001-P-PPDB-2021/2022-IX");
//                $qr->qrCode(500,'imageqr/'.$fileStroge.'.png');
//          }
//
//
// echo "work";
//       die();
?>


        <!DOCTYPE html>
            <html>
                <head>
                    <title>Verifikasii PPDB SDIT Anak Shalih Bogor</title>
                    <meta charset="UTF-8">
                    <style>
                      img {
                        width: 100px;
                      }
                        h3 {
                            line-height: 30px;
                        }
                        i {
                            /* color: #50CE50; */
                        }
                        li {
                            text-align: justify;
                            line-height: 30px;
                        }
                        td {
                            padding: 3px;
                        }

                        td.ket {
                            width: 100px;
                        }

                        span {
                            text-decoration: underline;
                        }

                        footer {
                            text-align: right;
                            position: fixed;
                            width: 100%;
                            height: 200px;
                            bottom: 0;
                            left: 0;
                        }

                        .lefter{
                            bottom: 0;
                            left: 0;
                            height: 100%;
                            width: 30px;
                            position: fixed;
                            background-color: green;
                        }

                        .container {
                            margin-left: 40px;
                        }
                        address.dev {
                            text-align: left;
                            font-size: 7px;
                            /*di set margin untukmengikuti container saja*/
                            margin-left: 40px;
                        }

                        a {
                            text-decoration: none;
                            color: green;
                        }

                        address.info {
                            text-align: center;
                        }


                    </style>
                </head>
                <body>
                    <div class="lefter"></div>
                    <div class="container">
                        <h3 style="text-align: center">Bukti Registrasi<br> <i style="color: #50CE50;">PPDB SDIT Anak Shalih Bogor Islamic School</i></h3>
                        <hr>
                        <table>
                            <tr><td class="ket">Nama</td><td>: <?php echo $data['nama']; ?></td></tr>
                            <tr><td class="ket">No Peserta</td><td>: <?php echo $noPeserta; ?></td></tr>
                        </table>
                        <hr>
                        <ul>
                            <li>Seleksi Penerimaan Peserta Didik Baru SDIT Anak Shalih Bogor <i>Islamic School</i> terdiri dari psikotest, Simulasi Pembelajaran, & Wawancara Calon Orangtua Siswa serta Test Potensi Akademik (<b>Khusus Siswa Pindahan</b>).</li>
                            <li>Calon siswa dan orangtua wajib hadir dalam seleksi siswa tersebut pada hari <?php echo $waktuTest; ?> pukul 07.00 WIB di SDIT Anak Shalih Bogor <i>Islamic School</i>.
                            <b>Mohon dapat hadir tepat waktu karena tidak ada perpanjangan waktu bagi calon siswa yang terlambat</b></li>
                        </ul>
                        <ul>
                            <h3>Dalam kegiatan tersebut diwajibkan:</h3>
                            <li>Membawa lembar ini (<em>red: Bukti Registrasi</em>) untuk ditukarkan dengan kartu peserta seleksi siswa.</li>
                            <li>Menaati segala aturan dan tata tertib yang berlaku di SDIT Anak Shalih Bogor Islamic School.</li>
                            <li>Mengenakan pakaian yang sopan dan menutup aurat.</li>
                            <li>Bagi calon orangtua siswa yang membawa kendaraan untuk mematuhi segala arahan petugas keamanan guna kenyamanan bersama.</li>
                            <li>Mematuhi protokol kesehatan, memakai masker, memakai <i>Face Shield</i> dan membawa <i>Hand Sanitizer</i>.</li>
                            <li>Membawa pensil, panghapus & pensil warna.</li>
                        </ul>

                        <address>Informasi lebih lanjut dapat menghubungi <a href="tel: 02518653638"> (0251) 865-3638 </a>atau Whats App <a href="https://wa.me/628111114841?">0811-111-4841</a>.</address>


                    </div>
                    <footer>
                        <?php
                            $hari = date ("D");
                            switch ($hari){
                                case "Sun":
                                    $hari = "Ahad";
                                    break;
                                case "Mon":
                                    $hari = "Senin";
                                    break;
                                case "Tue":
                                    $hari = "Selasa";
                                    break;
                                case "Wed":
                                    $hari = "Rabu";
                                    break;
                                case "Thu":
                                    $hari = "Kamis";
                                    break;
                                case "Fri":
                                    $hari = "Jumat";
                                    break;
                                case "Sat":
                                    $hari = "Sabtu";
                                    break;
                            }
                            $bulan = date ("n");
                            switch ($bulan){
                                case 1:
                                    $bulan = "Januari";
                                    break;
                                case 2:
                                    $bulan = "Februari";
                                    break;
                                case 3:
                                    $bulan = "Maret";
                                    break;
                                case 4:
                                    $bulan = "April";
                                    break;
                                case 5:
                                    $bulan = "Mei";
                                    break;
                                case 6:
                                    $bulan = "Juni";
                                    break;
                                case 7:
                                    $bulan = "Juli";
                                    break;
                                case 8:
                                    $bulan = "Agustus";
                                    break;
                                case 9:
                                    $bulan = "September";
                                    break;
                                case 10:
                                    $bulan = "Oktober";
                                    break;
                                case 11:
                                    $bulan = "November";
                                    break;
                                case 12:
                                    $bulan = "Desember";
                                    break;
                            }

                            echo $hari.date (", d ").$bulan.date (" Y");
                        ?>

                        <br>
                        <br>
                        <img class="mt-3" src="<?php echo 'imageqr/'.$fileStroge.'.png'?>">
                        <br>
                        <span>Panitia PPDB SDIT Anak Shalih Bogor</span>
                        <br>
                        <address class="dev">Dikembangkan oleh tim SDIT Anak Shalih Bogor</address>
                    </footer>
                </body>
            </html>
