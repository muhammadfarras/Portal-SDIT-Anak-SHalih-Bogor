<?php
ob_start ();
require ("../../../../advance.php");
require ("modal.php");

    $biodata = getDetailBiodata ($_GET['data']);
    $goldar = getGoldar ($_GET['data']);
    $berat = getWeight ($_GET['data']);
    $tinggi = getHeight ($_GET['data']);
    $kelas = getClass ($_GET['data']);
    $ayah = getAyah ($_GET['data']);
    $kesehatan = getHisKes ($_GET['data']);
    if ($biodata->num_rows != 0 ){
        
        $biodata = mysqli_fetch_assoc ($biodata);
        $goldar = mysqli_fetch_assoc ($goldar);
        $berat = mysqli_fetch_assoc ($berat);
        $tinggi = mysqli_fetch_assoc ($tinggi);
        $kelas = mysqli_fetch_assoc ($kelas);
        $ayah = mysqli_fetch_assoc ($ayah); 
    }

?>
<!DOCTYPE html>
    <html>
        <head>
            <title>Verifikasii PPDB SDIT Anak Shalih Bogor</title>
            <meta charset="UTF-8">
            <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="fontaw/css/font-awesome.min.css">
            <style>
                body {
                    font-family: 'Poppins', sans-serif;
                }
                h2 {
                    font-size: 40px;
                    text-align: center;
                    color: #35F709;
                }
                h3 {
                    margin-top: -40px;
                    text-align: center;
                }
             
                .lefter{
                    bottom: 0;
                    left: 0;
                    height: 100%;
                    width: 20px;
                    position: fixed;
                    background-color: rgb(0, 255, 85);
                }
                
                .container {
                    margin-left: 40px;
                }
            
                table {
                    padding: 3px;
                    
                }
                th {
                    text-align: left;
                    font-size: 20px;
                    text-decoration: underline;
                }
                td {
                    text-align: justify;   
                }
                  
                td:first-child {
                    width: 150px;
                }
                  
                td:first-child {
                    vertical-align: text-top;
                }
               .card {
                    
                    position: relative;
                    min-width: 0;
                    background-color: #fff;
                    background-clip: border-box;
                    border: 1px solid rgba(0, 0, 0, 0.125);
                    border-radius: 0.25rem;
                    line-height: 7px;
                    margin-bottom: 10px;
                }
                .card-body {
                    padding-left: 10px;
                    padding-right: 10px;
                    min-height: 1px;
                }
                .card-header {
                    padding-left: 0.75rem;
                    padding-bottom: 1.25rem;
                    padding-top: 0.5rem;
                    margin-bottom: 0;
                    background-color: rgba(0, 0, 0, 0.03);
                    border-bottom: 1px solid rgba(0, 0, 0, 0.125);
                    vertical-align: middle;
                }
                
                .card-footer {
                    padding-left: 0.75rem;
                    padding-bottom: 1.25rem;
                    padding-top: 0.5rem;
                    background-color: rgba(0, 0, 0, 0.03);
                    border-top: 1px solid rgba(0, 0, 0, 0.125);
                    vertical-align: middle;
                  }
               
            </style>
        </head>
        <body>
            <div class="lefter"></div>
            <div class="container">
                <table>
                  <tr>
                    <th colspan=2>Biodata Siswa</th>
                  </tr>
                  <tr>
                    <td>NIS</td>
                    <td> : <?php echo $biodata['nis'];?></td>
                  </tr>
                  <tr>
                    <td>Nama siswa</td>
                    <td> : <?php echo ucwords ( strtolower ($biodata ['nama_siswa'] ) )?></td>
                  </tr>
                  <tr>
                    <td>Nama ayah</td>
                    <td> : <?php echo ucwords ( strtolower ($ayah ['nama_ayah'] ) )?></td>
                  </tr>
                  <tr>
                    <td>Kelas</td>
                    <td> : <?php echo $kelas ['tingkat']."".$kelas ['kelas']?></td>
                  </tr>
                  <tr>
                    <td>Jenis kelamin</td>
                    <td> : <?php echo $biodata ['jenis_kelamin']?></td>
                  </tr>
                  <tr>
                    <td>Tempat/Tanggal lahir</td>
                    <td> : <?php echo $biodata ['tempat_lahir']." / ".$biodata['tanggal_lahir']?></td>
                  </tr>
                  <tr>
                    <td>Alamat</td>
                    <td> : <?php echo $biodata ['alamat']?></td>
                  </tr>
                </table>
                <hr>
                <table>
                  <tr>
                    <th colspan=2>Data Kondisi Badan Siswa</th>
                  </tr>
                  <tr>
                    <td>Golongan Darah</td>
                    <td> : <?php echo $goldar['goldar'];?></td>
                  </tr>
                  <tr>
                    <td>Berat</td>
                    <td> : <?php echo $berat ['berat_badan']?> Kg </td>
                  </tr>
                  <tr>
                    <td>Tinggi</td>
                    <td> : <?php echo $tinggi ['tinggi_badan']?> Cm</td>
                  </tr>
                  <tr>
                    <td><em>Body Mass Index</em></td>
                    <td> : <?php echo bmi ($tinggi ['tinggi_badan'],$berat ['berat_badan'])?></td>
                  </tr>
                  
                  
                </table>
                <footer><em class="update">Data tanggal, <?php echo date ("d - M - Y",strtotime( $berat ['waktu']))?></em></footer>
                <hr>
              </div>
        </body>
        <head>
            <title>Verifikasii PPDB SDIT Anak Shalih Bogor</title>
            <meta charset="UTF-8">
            <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="fontaw/css/font-awesome.min.css">
            <style>
                body {
                    font-family: 'Poppins', sans-serif;
                }
                h2 {
                    font-size: 40px;
                    text-align: center;
                    color: #35F709;
                }
                h3 {
                    margin-top: -40px;
                    text-align: center;
                }
             
                .lefter{
                    bottom: 0;
                    left: 0;
                    height: 100%;
                    width: 20px;
                    position: fixed;
                    background-color: rgb(0, 255, 85);
                }
                
                .container {
                    margin-left: 40px;
                }
            
                table {
                    padding: 3px;
                    
                }
                th {
                    text-align: left;
                    font-size: 20px;
                    text-decoration: underline;
                }
                td {
                    text-align: justify;   
                }
                  
                td:first-child {
                    width: 150px;
                }
                  
                td:first-child {
                    vertical-align: text-top;
                }
               .card {
                    
                    position: relative;
                    min-width: 0;
                    background-color: #fff;
                    background-clip: border-box;
                    border: 1px solid rgba(0, 0, 0, 0.125);
                    border-radius: 0.25rem;
                    line-height: 7px;
                    margin-bottom: 10px;
                }
                .card-body {
                    padding-left: 10px;
                    padding-right: 10px;
                    min-height: 1px;
                }
                .card-header {
                    padding-left: 0.75rem;
                    padding-bottom: 1.25rem;
                    padding-top: 0.5rem;
                    margin-bottom: 0;
                    background-color: rgba(0, 0, 0, 0.03);
                    border-bottom: 1px solid rgba(0, 0, 0, 0.125);
                    vertical-align: middle;
                }
                
                .card-footer {
                    padding-left: 0.75rem;
                    padding-bottom: 1.25rem;
                    padding-top: 0.5rem;
                    background-color: rgba(0, 0, 0, 0.03);
                    border-top: 1px solid rgba(0, 0, 0, 0.125);
                    vertical-align: middle;
                  }
               
            </style>
        </head>
        <body>
            <div class="lefter"></div>
            <div class="container">
                <table class="rekam">
                    <thead>
                        <tr>
                            <th colspan=2>Rekam Kesehatan Siswa</th>
                        </tr>
                    </thead>
                  <tbody>
                      <?php
                        while ($data = mysqli_fetch_assoc ($kesehatan)){
                          $petugas = mysqli_fetch_assoc (getEmployeByid($data['petugas']));
                          echo "<tr>";
                          echo "<td>";
                          echo '<div class="card mb-3" style="width: 40rem;">
                                  <div class="card-header">
                                    '.setGoodDate ($data['waktu']).'
                                  </div>
                                  <div class="card-body">
                                    <h5 class="card-title">Keluhan</h5>
                                      <p class="card-text text-left">'.$data['keluhan'].'</p>
                                  </div>
                                  <div class="card-body">
                                    <h5 class="card-title">Data Objek</h5>
                                      <p class="card-text text-left">'.$data['data_objek'].'</p>
                                  </div>
                                  <div class="card-body">
                                    <h5 class="card-title">Diagnosa</h5>
                                      <p class="card-text text-left">'.$data['diagnosa'].'</p>
                                  </div>
                                  <div class="card-body">
                                    <h5 class="card-title">Tindakan</h5>
                                      <p class="card-text text-left">'.$data['tindakan'].'</p>
                                  </div>
                                  <div class="card-body">
                                    <h5 class="card-title">Keterangan</h5>
                                      <p class="card-text text-left">'.$data['keterangan'].'</p>
                                  </div>
                                  <div class="card-footer text-muted">Created By '.$petugas['nama_depan'].' '.$petugas['nama_belakang'].'</div>
                                </div>';
                          echo "</td>";
                          echo "</tr>";
                        }
                      ?>
                  </tbody>
                </table>
              </div>
        </body>
    </html>
    <?php
    
        $html = ob_get_clean ();
        
        // include autoloader 
        require_once '../../../../vendor/autoload.php';
        
        
        // reference the Dompdf namespace 
        use Dompdf\Dompdf;
        
        
        // instantiate and use the dompdf class 
        $dompdf = new Dompdf();
        
        // (Opsional) Mengatur ukuran kertas dan orientasi kertas
        $dompdf->setPaper('A4', 'portrait');
        
        
        $dompdf->loadHtml($html);
        
        
        // Render the HTML as PDF 
        $dompdf->render();
        
        
        // Output the generated PDF to Browser 
        $dompdf->stream();
        
        //send to filemanager
        $output = $dompdf->output();
        file_put_contents ("../file/".time().".pdf",$output);
    
    ?>












