<?php

require_once 'vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;
$pdf= new html2pdf('H','A4','es', false, 'UTF-8');
$html="<table  style=\"background:#16184B;color:white;\">";
$html.="<tr ><th  style=\"text-align:center;color:white;\">NUMERO DE MESA</th><th style=\"text-align:center;margin-bottom:2em;margin-top:2em;margin-bottom:2em;color:white;\" >CODIGO</th></tr>";
		$html.="<tr><td></td><td><img src=\"https://undertake.ar/assets/qr/la%20fabrica.png\" />  </td><td></td></tr>";
		
	$html.="<tr><td></td><td style=\"color:white;\">Undertake  </td></tr>";

$html.="</table>";

$pdf->writeHTML($html);
ob_end_clean (); 

$pdf->output('miqr.pdf');

