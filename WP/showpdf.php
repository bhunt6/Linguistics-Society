<?php 

	$pdf = 'texts/1_Beldon.pdf';
	header('Content-type: application/pdf');
	header('Content-Disposition: attachment; filename="'.$pdf.'"');
	readfile($pdf);
?>