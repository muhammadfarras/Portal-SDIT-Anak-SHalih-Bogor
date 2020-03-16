<?php
    ob_start();
    $fileStroge = md5(md5(time()));
    include ("qr.php");
    if (isset ($_SERVER['HTTP_REFERER']) && !empty ($_SERVER['HTTP_REFERER'])){
        $url = ($_SERVER['HTTP_REFERER']."qr-barcode?order=$fileStroge");
            if (!file_exists ("imageqr/$fileStroge.png")){
                    // Barcode Objet
                    $qr = new QR_BarCode(); 
                    $qr->url ($url);
                    $qr->qrCode(500,'imageqr/'.$fileStroge.'.png');
                }
        
    }
    else {
        header ("location: error.php");
    }
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Bimbingan Konseling</title>
    <style>
        body {
            font-family: inherit;
        }
        .container {
            padding:10px;
        }
        .mt-3{
            margin-top: 10px;
        }
        .mt-4{
            margin-top: 15px;
        }
        .mt-5{
            margin-top: 25px;
        }
        
        .mb-3{
            margin-bottom: 10px;
        }
        .mb-4{
            margin-bottom: 15px;
        }
        .mb-5{
            margin-bottom: 30px;
        }
        
        .ml-3{
            margin-left: 10px;
        }
        .ml-4{
            margin-left: 15px;
        }
        .ml-5{
            margin-left: 30px;
        }
        
        .pr-3 {
            padding-right: 10px;
        }
        .pr-4 {
            padding-right: 15px;
        }
        .pr-5 {
            padding-right: 30px;
        }
        
        .pl-3 {
            padding-left: 10px;
        }
        .pl-4 {
            padding-left: 15px;
        }
        .pl-5 {
            padding-left: 30px;
        }
        
        .p-3 {
            padding: 10px;
        }
        .p-4 {
            padding: 15px;
        }
        .p-5 {
            padding-left: 90px;
        }
        
        .text-center {
            text-align: center;
        }
        .text-justify{
            text-align: justify;
        }
        .und_line {
            text-decoration: underline;
        }
        .bold {
            font-weight: bold;
        }
        .table {
            border: groove 1px black;
            border-collapse: collapse;
        }
        
        .target-center {
            margin: 0 auto;
        }
        
        td:last-child {
            width: 500px;
        }
        
        td {
            padding: 10px;
        }
        tr, td {
            border: groove 1px black;
        }
        td, th{
            padding: 10px;
        }
        img {
            width: 80px;
            float: left;
        }
    </style>
</head>
<body id="body">
    <h3 class="text-center">Rekam Prilaku Siswa</h3>
    <div class="container target-center">
        
        <table class="table mb-3">
            <tr><th colspan="2">A. Identitas Diri</th></tr>
            <tr><td>Nama</td><td><?php echo ucwords ( strtolower($data['nama_siswa']))?></td></tr>
            <tr><td>Tempat Tanggal Lahir</td><td><?php echo $data['tanggal_lahir']?></td></tr>
            <tr><td>Alamat</td><td><?php echo $data['alamat']?></td></tr>
            <tr><td>Kelas</td><td><?php echo $kelas['tingkat']."".$kelas['kelas']?></td></tr>
        </table>
        <img class = "mt-3" src="<?php echo 'imageqr/'.$fileStroge.'.png'?>">
        <p class="p-5">
            
            Scan barcode untuk mengunduh file soft
            <br>
            <small class="mt-3">Catatan rekam perilaku siswa ditulis melalui pengamatan secara langsung, angket guru dan catatan guru berdasarkan aspek-aspek dibawah ini:</small>
            <br>
            <em><small>Note: Catatan rekam perilaku ini dicata pada saat siswa berada di tingkat <?php echo $tingkat ?> </small></em>
        </p>
        
        
            
        <?php
            include ("karakteristik-perkembangan.php");
            include ("prestasi-akademik.php");
            include ("bakat-minat.php");
            include ("motivasi-belajar.php");
            include ("latar-keluarga.php");
            include ("anekdot.php");
        ?>
        
    </div>
    
    <p><body
</body>
</html>
<?php
    
    $html = ob_get_clean ();
    
    // include autoloader 
    require_once '../../../../dompdf/autoload.inc.php';
    
    
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
    $dompdf->stream("file.pdf");
    
    //send to filemanager
    $output = $dompdf->output();
    file_put_contents ("file/".$fileStroge.".pdf",$output);
    
?>
