<?php
require_once("../tcpdf/tcpdf.php");

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->setCreator(PDF_CREATOR);
$pdf->setAuthor('BEM UNPERBA');
$pdf->setTitle('Data Pemilu');
$pdf->setSubject('Data Pemilu');
$pdf->setKeywords('Data Pemilu');

$pdf->setFont('times', '', 11, '', true);

$pdf->setPrintHeader(false);
$pdf->AddPage();

$html = file_get_contents("http://localhost/evotingbem/pdfstyle.php");

$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('Data Pemilu BEM UNPERBA.pdf', 'I');