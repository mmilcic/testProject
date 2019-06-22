<?php
	require('html2pdf/src/Html2Pdf.php');
	$pdf=new Html2Pdf();
	$pdf->AddPage();
	$fp = fopen("cv_example.html","r");
	$strContent = fread($fp, filesize("cv_example.html"));
	fclose($fp);
	$pdf->WriteHTML($strContent);
	$pdf->Output("cv_example.pdf");
	echo "PDF file is generated successfully!";
?>
