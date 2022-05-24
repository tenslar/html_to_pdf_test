<?php

// アクセスしたらpdfをDLできるスクリプト

require('vendor/autoload.php');

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->getOptions()->setChroot('/');

// 英語しかないのでまあまあのPDFができる
//$dompdf->loadHtml(file_get_contents('index.html'));
// 日本語が入っているので化ける
$dompdf->loadHtml(file_get_contents('index.jp.html'));

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();

//$pdf_str = $dompdf->output();
