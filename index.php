<?php
require_once("dompdf_config.inc.php");


$dompdf = new DOMPDF();

$html =
  '<html><body>'.
  '<p>es daibechdeba </p>'.
  '</body></html>';
 
$dompdf = new DOMPDF(); 
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream("sample.pdf");

?>