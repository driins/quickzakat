<?php
include ('koneksi.php');
require 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;

$dompdf = new Dompdf();
ob_start();
require('cetaklaporan.php');
$html =ob_get_contents();
ob_get_clean();

$dompdf->loadHtml($html);

$dompdf->setPaper('A4','pdf');

$dompdf->render();

$dompdf->stream('print-Laporan Zakat Fitrah.pdf',['Attachment'=>false]);
