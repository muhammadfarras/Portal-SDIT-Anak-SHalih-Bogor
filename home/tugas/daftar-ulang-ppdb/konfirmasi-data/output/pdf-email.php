<?php
$html = ob_get_clean ();
// include autoloader
require_once '../../../../../vendor/autoload.php';


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
// $dompdf->stream("hasil.pdf");
$dompdf->set_option('isRemoteEnabled', true);

//send to filemanager
$output = $dompdf->output();
file_put_contents ("file/".$data['nama']."-".$fileStroge.".pdf",$output);


include ("email.php");

?>
