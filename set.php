<?php
	$file = file_get_contents('data.txt');
	$dataIn = explode(',', $file);
	if (isset($_POST['rvalue'])) {
		$dataIn[0] = $_POST["rvalue"];
		$dataOut = implode(',', $dataIn);
		file_put_contents('data.txt', $dataOut);
	}
?>