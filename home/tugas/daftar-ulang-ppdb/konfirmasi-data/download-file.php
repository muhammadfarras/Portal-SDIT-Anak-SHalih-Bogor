<?php
header("Content-type:application/pdf");

$file = $_GET['file'];
$nama = explode ("-",$_GET['']);

header("Content-Transfer-Encoding: Binary"); 

// It will be called downloaded.pdf
header('Content-Disposition:attachment;filename="'.$nama[0].".pdf");


// The PDF source is in original.pdf
readfile("output/file/".$file);





?>
