<?php
	include('path.php');
	$filename = ROOT_PATH.'\assets\files\resume.pdf';

	header("Content-type:application/pdf");
	
	// reading/downloading name of the file
	header('Content-Disposition:inline; filename="'.$filename.'"');

	header('Content-Transfer-Encoding:binary');
	header('Accept-ranges:bytes');

	// The PDF source is resume.pdf
	@readfile($filename);
?>