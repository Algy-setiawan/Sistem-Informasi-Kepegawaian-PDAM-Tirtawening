<?php

$content = ob_get_clean();
$tangal = date('Y-m-d h:i:s');
$filename= "absensi-".$tangal.".pdf";
require_once("../../html2pdf/html2pdf.class.php");
$pdf=new HTML2PDF('P','A4','fr','UTF-8');
$pdf->writeHTML($content);
$pdf->pdf->IncludeJS('print(TRUE)');
$pdf->output($filename);
?>